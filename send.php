<?php
header('Content-Type: application/json');

// ── CORS — only allow requests from the production domain ─────────────────
$allowedOrigins = ['https://digitalsky.pl', 'https://www.digitalsky.pl'];
$origin = $_SERVER['HTTP_ORIGIN'] ?? '';
if (in_array($origin, $allowedOrigins, true)) {
    header('Access-Control-Allow-Origin: ' . $origin);
    header('Vary: Origin');
} else {
    // Dev: allow same-origin (no Origin header) but block external origins
    if ($origin !== '') {
        http_response_code(403);
        echo json_encode(['ok' => false, 'error' => 'Forbidden']);
        exit;
    }
}
header('Access-Control-Allow-Methods: POST');

// ── Method guard ───────────────────────────────────────────────────────────
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'error' => 'Method not allowed']);
    exit;
}

// ── Origin / CSRF guard ────────────────────────────────────────────────────
// JSON Content-Type requests are not default-browser-submittable (no CSRF via form),
// but an explicit Origin check gives a second layer for cross-origin script attacks.
$referer = $_SERVER['HTTP_REFERER'] ?? '';
if ($origin !== '' && !in_array($origin, $allowedOrigins, true)) {
    // Already handled above, but belt-and-suspenders
    http_response_code(403);
    echo json_encode(['ok' => false, 'error' => 'Forbidden']);
    exit;
}

// ── IP-based rate limiting (file-based, no dependencies) ──────────────────
// Allows max 3 submissions per IP per 10 minutes.
$rateLimitDir = sys_get_temp_dir() . '/dsky_rl/';
if (!is_dir($rateLimitDir)) {
    @mkdir($rateLimitDir, 0700, true);
}

// Determine real client IP (sanitised — take only first address from X-Forwarded-For)
$rawIp = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';
$clientIp = trim(explode(',', $rawIp)[0]);
if (!filter_var($clientIp, FILTER_VALIDATE_IP)) {
    $clientIp = '0.0.0.0';
}

$ipHash   = hash('sha256', $clientIp);         // never store raw IPs in filenames
$rlFile   = $rateLimitDir . $ipHash . '.json';
$now      = time();
$window   = 600;   // 10 minutes
$maxHits  = 3;

$hits = [];
if (file_exists($rlFile)) {
    $stored = json_decode(file_get_contents($rlFile), true);
    if (is_array($stored)) {
        // Keep only hits within the current window
        $hits = array_values(array_filter($stored, fn($ts) => ($now - $ts) < $window));
    }
}

if (count($hits) >= $maxHits) {
    http_response_code(429);
    echo json_encode(['ok' => false, 'error' => 'Too many requests. Please try again later.']);
    exit;
}

// Record this hit
$hits[] = $now;
@file_put_contents($rlFile, json_encode($hits), LOCK_EX);

// ── Parse input ───────────────────────────────────────────────────────────
$raw  = file_get_contents('php://input');
$data = json_decode($raw, true);

$name     = isset($data['name'])     ? trim(strip_tags($data['name']))     : '';
$company  = isset($data['company'])  ? trim(strip_tags($data['company']))  : '';
$email    = isset($data['email'])    ? trim(strip_tags($data['email']))    : '';
$message  = isset($data['message'])  ? trim(strip_tags($data['message'])) : '';
$honeypot = isset($data['website'])  ? trim($data['website'])              : '';  // honeypot field

// ── Honeypot — bots fill it, humans never see it ──────────────────────────
if ($honeypot !== '') {
    // Silently accept (don't alert the bot)
    echo json_encode(['ok' => true]);
    exit;
}

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

if (strlen($name) > 120 || strlen($company) > 200 || strlen($message) > 5000) {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'Input too long']);
    exit;
}

// ── Build email ───────────────────────────────────────────────────────────
$to = 'contact@digitalsky.pl';

// Encode subject as UTF-8 MIME so non-ASCII names (e.g. Polish) render correctly
$rawSubject = 'New process audit request from ' . $name . ($company ? ' (' . $company . ')' : '');
$subject    = '=?UTF-8?B?' . base64_encode($rawSubject) . '?=';

$body  = "New contact form submission from DIGITALSKY website\n";
$body .= str_repeat('=', 50) . "\n\n";
$body .= "Name:    {$name}\n";
$body .= "Company: {$company}\n";
$body .= "Email:   {$email}\n\n";
$body .= "Message:\n{$message}\n\n";
$body .= str_repeat('-', 50) . "\n";
$body .= "Sent:    " . gmdate('Y-m-d H:i:s') . " UTC\n";
$body .= "IP:      " . $clientIp . "\n";

$headers  = "From: noreply@digitalsky.pl\r\n";
$headers .= "Reply-To: {$email}\r\n";
$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// ── Send ──────────────────────────────────────────────────────────────────
$sent = mail($to, $subject, $body, $headers);

if ($sent) {
    echo json_encode(['ok' => true]);
} else {
    http_response_code(500);
    echo json_encode(['ok' => false, 'error' => 'Mail delivery failed']);
}
