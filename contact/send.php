<?php
header('Content-Type: application/json');

// ── Config ────────────────────────────────────────────────────────────────
$cfg = require __DIR__ . '/config.php';

// ── CORS ──────────────────────────────────────────────────────────────────
$allowedOrigins = [$cfg['site_url'], 'https://www.' . parse_url($cfg['site_url'], PHP_URL_HOST)];
$origin = $_SERVER['HTTP_ORIGIN'] ?? '';
if (in_array($origin, $allowedOrigins, true)) {
    header('Access-Control-Allow-Origin: ' . $origin);
    header('Vary: Origin');
} elseif ($origin !== '') {
    http_response_code(403);
    echo json_encode(['ok' => false, 'error' => 'Forbidden']);
    exit;
}
header('Access-Control-Allow-Methods: POST');

// ── Method guard ──────────────────────────────────────────────────────────
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'error' => 'Method not allowed']);
    exit;
}

// ── Rate limiting (3 req / 10 min per IP) ────────────────────────────────
$rateLimitDir = sys_get_temp_dir() . '/dsky_rl/';
if (!is_dir($rateLimitDir)) @mkdir($rateLimitDir, 0700, true);
$rawIp    = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';
$clientIp = trim(explode(',', $rawIp)[0]);
if (!filter_var($clientIp, FILTER_VALIDATE_IP)) $clientIp = '0.0.0.0';
$ipHash   = hash('sha256', $clientIp);
$rlFile   = $rateLimitDir . $ipHash . '.json';
$now      = time();
$hits     = [];
if (file_exists($rlFile)) {
    $stored = json_decode(file_get_contents($rlFile), true);
    if (is_array($stored)) $hits = array_values(array_filter($stored, fn($ts) => ($now - $ts) < 600));
}
if (count($hits) >= 3) {
    http_response_code(429);
    echo json_encode(['ok' => false, 'error' => 'Too many requests. Please try again later.']);
    exit;
}
$hits[] = $now;
@file_put_contents($rlFile, json_encode($hits), LOCK_EX);

// ── Parse input ───────────────────────────────────────────────────────────
$data      = json_decode(file_get_contents('php://input'), true) ?: [];
$name      = trim(strip_tags($data['name']      ?? ''));
$company   = trim(strip_tags($data['company']   ?? ''));
$email     = trim(strip_tags($data['email']     ?? ''));
$phone     = trim(strip_tags($data['phone']     ?? ''));
$message   = trim(strip_tags($data['message']   ?? ''));
$preferred = trim(strip_tags($data['preferred'] ?? 'email'));
$honeypot  = trim($data['website'] ?? '');
$token     = trim($data['token']   ?? '');

// ── Honeypot ──────────────────────────────────────────────────────────────
if ($honeypot !== '') { echo json_encode(['ok' => true]); exit; }

// ── Validation ────────────────────────────────────────────────────────────
if (!$name || !$email || !$message) {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'Missing required fields']);
    exit;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'Invalid email address']);
    exit;
}
if (strlen($name) > 120 || strlen($company) > 200 || strlen($message) > 5000 || strlen($phone) > 30) {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'Input too long']);
    exit;
}
$allowedPreferred = ['email', 'phone', 'whatsapp', 'telegram', 'signal'];
if (!in_array($preferred, $allowedPreferred, true)) $preferred = 'email';

// ── Checksum verification ─────────────────────────────────────────────────
function dskyChecksum(string $salt, string $name, string $email, int $msgLen): string {
    $str = $salt . '|' . strtolower($name) . '|' . strtolower($email) . '|' . $msgLen;
    $h   = 5381;
    for ($i = 0; $i < strlen($str); $i++) {
        $h = (($h << 5) + $h) ^ ord($str[$i]);
        $h = $h & 0xFFFFFFFF;
        if ($h >= 0x80000000) $h -= 0x100000000;
    }
    return dechex($h < 0 ? ($h + 0x100000000) : $h);
}
$expected = dskyChecksum($cfg['checksum_salt'], $name, $email, strlen($message));
if ($token !== $expected) {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'Invalid token']);
    exit;
}

// ── Template engine ───────────────────────────────────────────────────────
/**
 * Load an HTML template file and replace all {{KEY}} placeholders.
 *
 * @param string $templatePath  Absolute path to the .html template file.
 * @param array  $vars          Associative array of KEY => value pairs.
 * @return string               Rendered HTML string.
 */
function renderTemplate(string $templatePath, array $vars): string {
    $html = file_get_contents($templatePath);
    foreach ($vars as $key => $value) {
        $html = str_replace('{{' . $key . '}}', $value, $html);
    }
    return $html;
}

// ── Shared template variables ─────────────────────────────────────────────
$prefLabels = [
    'email'     => 'Email',
    'phone'     => 'Phone call',
    'whatsapp'  => 'WhatsApp',
    'telegram'  => 'Telegram',
    'signal'    => 'Signal',
];
$prefLabel   = $prefLabels[$preferred] ?? 'Email';
$safePhone   = $phone
    ? htmlspecialchars($phone)
    : '<em style="color:#9ca3af;">not provided</em>';
$safeCompany = $company
    ? htmlspecialchars($company)
    : '<em style="color:#9ca3af;">—</em>';

$domain     = htmlspecialchars(parse_url($cfg['site_url'], PHP_URL_HOST));
$tplDir     = __DIR__ . '/templates/';

// ── Render admin email ────────────────────────────────────────────────────
$adminSubject = 'New enquiry from ' . $name . ($company ? ' (' . $company . ')' : '');

$adminHtml = renderTemplate($tplDir . 'admin.html', [
    'SUBJECT'         => htmlspecialchars($adminSubject),
    'COMPANY_UPPER'   => htmlspecialchars($cfg['company_name_upper']),
    'DOMAIN'          => $domain,
    'SITE_URL'        => htmlspecialchars($cfg['site_url']),
    'DATE_UTC'        => gmdate('d M Y, H:i') . ' UTC',
    'CLIENT_IP'       => htmlspecialchars($clientIp),
    'NAME'            => htmlspecialchars($name),
    'COMPANY'         => $safeCompany,
    'EMAIL'           => htmlspecialchars($email),
    'EMAIL_RAW'       => htmlspecialchars($email),
    'PHONE'           => $safePhone,
    'PREFERRED_LABEL' => htmlspecialchars($prefLabel),
    'MESSAGE'         => nl2br(htmlspecialchars($message)),
]);

// ── Render confirmation email ─────────────────────────────────────────────
$confirmSubject = 'We received your message — ' . $cfg['company_name'];

$confirmHtml = renderTemplate($tplDir . 'confirm.html', [
    'SUBJECT'         => htmlspecialchars($confirmSubject),
    'COMPANY_UPPER'   => htmlspecialchars($cfg['company_name_upper']),
    'DOMAIN'          => $domain,
    'SITE_URL'        => htmlspecialchars($cfg['site_url']),
    'NAME'            => htmlspecialchars($name),
    'PREFERRED_LABEL' => htmlspecialchars($prefLabel),
    'MESSAGE'         => nl2br(htmlspecialchars($message)),
    'CONTACT_EMAIL'   => htmlspecialchars($cfg['contact_email']),
]);

// ── Mail send helper ──────────────────────────────────────────────────────
function sendHtmlMail(string $to, string $subject, string $html, string $fromEmail, string $replyTo = ''): bool {
    $encodedSubject = '=?UTF-8?B?' . base64_encode($subject) . '?=';
    $boundary = '----=_Part_' . md5(uniqid());
    $plain    = strip_tags(preg_replace('/<br\s*\/?>/i', "\n", $html));

    $headers  = "From: {$fromEmail}\r\n";
    if ($replyTo) $headers .= "Reply-To: {$replyTo}\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/alternative; boundary=\"{$boundary}\"\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

    $body  = "--{$boundary}\r\n";
    $body .= "Content-Type: text/plain; charset=UTF-8\r\nContent-Transfer-Encoding: base64\r\n\r\n";
    $body .= chunk_split(base64_encode($plain)) . "\r\n";
    $body .= "--{$boundary}\r\n";
    $body .= "Content-Type: text/html; charset=UTF-8\r\nContent-Transfer-Encoding: base64\r\n\r\n";
    $body .= chunk_split(base64_encode($html)) . "\r\n";
    $body .= "--{$boundary}--";

    return mail($to, $encodedSubject, $body, $headers);
}

// ── Send both emails ──────────────────────────────────────────────────────
$fromAdmin = $cfg['company_name_upper'] . ' <' . $cfg['noreply_email'] . '>';

$sentAdmin   = sendHtmlMail($cfg['admin_email'], $adminSubject,   $adminHtml,   $fromAdmin, $email);
$sentConfirm = sendHtmlMail($email,              $confirmSubject, $confirmHtml, $fromAdmin);

if ($sentAdmin) {
    echo json_encode(['ok' => true]);
} else {
    http_response_code(500);
    echo json_encode(['ok' => false, 'error' => 'Mail delivery failed']);
}
