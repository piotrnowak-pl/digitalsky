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
$ipHash  = hash('sha256', $clientIp);
$rlFile  = $rateLimitDir . $ipHash . '.json';
$now     = time();
$hits    = [];
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
if (!in_array($preferred, ['email', 'phone', 'whatsapp'], true)) $preferred = 'email';

// ── Checksum verification ─────────────────────────────────────────────────
// Same djb2-style algorithm as in JS formChecksum()
function dskyChecksum(string $salt, string $name, string $email, int $msgLen): string {
    $str = $salt . '|' . strtolower($name) . '|' . strtolower($email) . '|' . $msgLen;
    $h   = 5381;
    for ($i = 0; $i < strlen($str); $i++) {
        $h = (($h << 5) + $h) ^ ord($str[$i]);
        $h = $h & 0xFFFFFFFF; // keep 32-bit
        if ($h >= 0x80000000) $h -= 0x100000000; // handle signed
    }
    return dechex($h < 0 ? ($h + 0x100000000) : $h);
}
$expected = dskyChecksum($cfg['checksum_salt'], $name, $email, strlen($message));
if ($token !== $expected) {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'Invalid token']);
    exit;
}

// ── HTML email template ───────────────────────────────────────────────────
function buildHtml(string $title, string $preheader, string $bodyHtml, array $cfg): string {
    $company = htmlspecialchars($cfg['company_name_upper']);
    $domain  = htmlspecialchars(parse_url($cfg['site_url'], PHP_URL_HOST));
    $siteUrl = htmlspecialchars($cfg['site_url']);

    return <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>{$title}</title>
<style>
  body,table,td{border:0;padding:0;margin:0;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;}
  body{background:#f4f4f5;}
  .wrap{max-width:600px;margin:0 auto;}
  .header{background:linear-gradient(135deg,#1d4ed8 0%,#0369a1 100%);padding:36px 40px;border-radius:12px 12px 0 0;}
  .header-logo{color:#fff;font-size:22px;font-weight:700;letter-spacing:0.04em;text-decoration:none;}
  .body{background:#ffffff;padding:40px;}
  .label{font-size:11px;font-weight:600;text-transform:uppercase;letter-spacing:0.08em;color:#6b7280;margin-bottom:4px;}
  .value{font-size:15px;color:#1e293b;margin-bottom:20px;line-height:1.5;}
  .message-box{background:#f8fafc;border-left:3px solid #2563eb;border-radius:0 8px 8px 0;padding:16px 20px;margin:24px 0;}
  .message-box p{font-size:15px;color:#334155;line-height:1.65;margin:0;}
  .divider{border:none;border-top:1px solid #e2e8f0;margin:28px 0;}
  .footer{background:#f8fafc;padding:28px 40px;border-radius:0 0 12px 12px;border-top:1px solid #e2e8f0;}
  .footer-brand{font-size:14px;font-weight:700;color:#374151;letter-spacing:0.05em;}
  .footer-link{font-size:13px;color:#6b7280;text-decoration:none;}
  .footer-link:hover{color:#2563eb;}
  .badge{display:inline-block;font-size:11px;font-weight:600;padding:3px 10px;border-radius:999px;background:#dbeafe;color:#1d4ed8;letter-spacing:0.05em;}
</style>
</head>
<body>
<div style="padding:32px 16px;">
<table class="wrap" width="100%" cellpadding="0" cellspacing="0">
  <tr><td>
    <!-- Header -->
    <table class="header" width="100%" cellpadding="0" cellspacing="0">
      <tr>
        <td><span class="header-logo">{$company}</span></td>
        <td align="right"><span style="color:rgba(255,255,255,0.65);font-size:12px;">{$domain}</span></td>
      </tr>
    </table>
    <!-- Body -->
    <table class="body" width="100%" cellpadding="0" cellspacing="0">
      <tr><td>
        {$bodyHtml}
      </td></tr>
    </table>
    <!-- Footer -->
    <table class="footer" width="100%" cellpadding="0" cellspacing="0">
      <tr>
        <td>
          <p class="footer-brand">{$company}</p>
          <p style="margin:4px 0 0;"><a href="{$siteUrl}" class="footer-link">{$siteUrl}</a></p>
        </td>
      </tr>
    </table>
  </td></tr>
</table>
</div>
</body>
</html>
HTML;
}

// ── Build admin mail ──────────────────────────────────────────────────────
$prefLabels = ['email' => 'Email', 'phone' => 'Phone call', 'whatsapp' => 'WhatsApp'];
$prefLabel  = $prefLabels[$preferred] ?? 'Email';
$safePhone  = $phone ? htmlspecialchars($phone) : '<em style="color:#9ca3af;">not provided</em>';

$adminBody = '
<h2 style="font-size:20px;font-weight:700;color:#1e293b;margin:0 0 6px;">New contact form submission</h2>
<p style="font-size:14px;color:#64748b;margin:0 0 28px;">Received: ' . gmdate('d M Y, H:i') . ' UTC &nbsp;·&nbsp; IP: ' . htmlspecialchars($clientIp) . '</p>

<p class="label">Name</p><p class="value">' . htmlspecialchars($name) . '</p>
<p class="label">Company</p><p class="value">' . ($company ? htmlspecialchars($company) : '<em style="color:#9ca3af;">—</em>') . '</p>
<p class="label">Email</p><p class="value"><a href="mailto:' . htmlspecialchars($email) . '" style="color:#2563eb;">' . htmlspecialchars($email) . '</a></p>
<p class="label">Phone</p><p class="value">' . $safePhone . '</p>
<p class="label">Preferred contact</p><p class="value"><span class="badge">' . htmlspecialchars($prefLabel) . '</span></p>

<hr class="divider">
<p class="label">Message</p>
<div class="message-box"><p>' . nl2br(htmlspecialchars($message)) . '</p></div>
';

// ── Build confirmation mail to sender ────────────────────────────────────
$confirmBody = '
<h2 style="font-size:20px;font-weight:700;color:#1e293b;margin:0 0 6px;">Thank you, ' . htmlspecialchars($name) . '!</h2>
<p style="font-size:15px;color:#475569;margin:0 0 24px;line-height:1.65;">We\'ve received your message and will get back to you within <strong>1 business day</strong> via your preferred contact method (<strong>' . htmlspecialchars($prefLabel) . '</strong>).</p>

<hr class="divider">
<p class="label">Your message</p>
<div class="message-box"><p>' . nl2br(htmlspecialchars($message)) . '</p></div>
<hr class="divider">

<p style="font-size:14px;color:#64748b;line-height:1.65;">In the meantime, if you have any questions feel free to reply to this email or reach us directly at
<a href="mailto:' . htmlspecialchars($cfg['contact_email']) . '" style="color:#2563eb;">' . htmlspecialchars($cfg['contact_email']) . '</a>.</p>
';

// ── Send helper ───────────────────────────────────────────────────────────
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

// ── Send both mails ───────────────────────────────────────────────────────
$adminSubject   = 'New enquiry from ' . $name . ($company ? ' (' . $company . ')' : '');
$confirmSubject = 'We received your message — ' . $cfg['company_name'];

$adminHtml   = buildHtml($adminSubject, 'New form submission from ' . $name, $adminBody, $cfg);
$confirmHtml = buildHtml($confirmSubject, 'Thank you for reaching out!', $confirmBody, $cfg);

$fromAdmin   = $cfg['company_name_upper'] . ' <' . $cfg['noreply_email'] . '>';

$sentAdmin   = sendHtmlMail($cfg['admin_email'], $adminSubject, $adminHtml, $fromAdmin, $email);
$sentConfirm = sendHtmlMail($email, $confirmSubject, $confirmHtml, $fromAdmin);

if ($sentAdmin) {
    echo json_encode(['ok' => true]);
} else {
    http_response_code(500);
    echo json_encode(['ok' => false, 'error' => 'Mail delivery failed']);
}
