<?php
header('Content-Type: text/html; charset=utf-8');

$dbFile = __DIR__ . '/statistic.sqlite';

try {
    $pdo = new PDO('sqlite:' . $dbFile);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('CREATE TABLE IF NOT EXISTS visits (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        visited_at TEXT NOT NULL,
        lang TEXT NOT NULL,
        ip TEXT NOT NULL,
        country TEXT NOT NULL,
        user_agent TEXT,
        points INTEGER DEFAULT 0
    )');
} catch (PDOException $e) {
    http_response_code(500);
    die('DB error: ' . htmlspecialchars($e->getMessage()));
}

$show = isset($_GET['s']) && $_GET['s'] == '1';

if (!$show) {
    $lang = $_GET['lang'] ?? $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? 'unknown';
    $ip = $_SERVER['HTTP_CF_CONNECTING_IP'] ?? $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';
    $country = $_GET['country'] ?? 'unknown';
    $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';
    $points = isset($_GET['p']) ? (int)$_GET['p'] : 0;
    $points = max(1, min(7, $points));

    $stmt = $pdo->prepare('INSERT INTO visits (visited_at, lang, ip, country, user_agent, points) VALUES (datetime("now"), ?, ?, ?, ?, ?)');
    $stmt->execute([$lang, $ip, $country, $userAgent, $points]);

    echo json_encode(['ok' => true]);
    exit;
}

$limitDays = 100;
$daysAgo = date('Y-m-d', strtotime("-{$limitDays} days"));

$total = $pdo->query("SELECT COUNT(*) FROM visits WHERE visited_at >= '{$daysAgo}'")->fetchColumn();
$avgPoints = $pdo->query("SELECT AVG(points) FROM visits WHERE visited_at >= '{$daysAgo}' AND points > 0")->fetchColumn();

$byCountry = $pdo->query("
    SELECT country, COUNT(*) as cnt 
    FROM visits 
    WHERE visited_at >= '{$daysAgo}' AND country != 'unknown'
    GROUP BY country 
    ORDER BY cnt DESC
")->fetchAll(PDO::FETCH_KEY_PAIR);

$byLang = $pdo->query("
    SELECT lang, COUNT(*) as cnt 
    FROM visits 
    WHERE visited_at >= '{$daysAgo}'
    GROUP BY lang 
    ORDER BY cnt DESC
")->fetchAll(PDO::FETCH_KEY_PAIR);

$byPoints = $pdo->query("
    SELECT points, COUNT(*) as cnt 
    FROM visits 
    WHERE visited_at >= '{$daysAgo}' AND points > 0
    GROUP BY points 
    ORDER BY points
")->fetchAll(PDO::FETCH_KEY_PAIR);

$recent = $pdo->query("
    SELECT visited_at, lang, ip, country, points 
    FROM visits 
    ORDER BY visited_at DESC 
    LIMIT 20
")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Statistic</title>
    <style>
        body { font: 14px/1.5 sans-serif; max-width: 600px; margin: 1rem auto; padding: 0 0.5rem; color: #333; }
        h1 { font: 600 16px/1 sans-serif; margin: 0 0 0.5rem; }
        h2 { font: 600 14px/1 sans-serif; margin: 1rem 0 0.25rem; }
        table { border-collapse: collapse; width: 100%; font-size: 13px; }
        th, td { border: 1px solid #eee; padding: 0.25rem 0.5rem; text-align: left; }
        th { background: #f9f9f9; font-weight: 600; }
        .total { font-size: 14px; margin-bottom: 0.5rem; }
        p { margin: 0; }
    </style>
</head>
<body>
    <h1>Statistic (last <?= $limitDays ?> days)</h1>
    <p class="total">Total visits: <strong><?= $total ?></strong> | Avg points: <strong><?= round($avgPoints ?? 0, 2) ?></strong></p>

    <h2>By country</h2>
    <table>
        <tr><th>Country</th><th>Visits</th></tr>
        <?php foreach ($byCountry as $c => $cnt): ?>
        <tr><td><?= htmlspecialchars($c) ?></td><td><?= $cnt ?></td></tr>
        <?php endforeach; ?>
    </table>

    <h2>By language (browser)</h2>
    <table>
        <tr><th>Language</th><th>Visits</th></tr>
        <?php foreach ($byLang as $l => $cnt): ?>
        <tr><td><?= htmlspecialchars($l) ?></td><td><?= $cnt ?></td></tr>
        <?php endforeach; ?>
    </table>

    <h2>By points (1-7)</h2>
    <table>
        <tr><th>Points</th><th>Count</th></tr>
        <?php foreach ($byPoints as $p => $cnt): ?>
        <tr><td><?= $p ?></td><td><?= $cnt ?></td></tr>
        <?php endforeach; ?>
    </table>

    <h2>Recent visits</h2>
    <table>
        <tr><th>Time</th><th>Lang</th><th>IP</th><th>Country</th><th>Pts</th></tr>
        <?php foreach ($recent as $r): ?>
        <tr>
            <td><?= htmlspecialchars($r['visited_at']) ?></td>
            <td><?= htmlspecialchars($r['lang']) ?></td>
            <td><?= htmlspecialchars($r['ip']) ?></td>
            <td><?= htmlspecialchars($r['country']) ?></td>
            <td><?= (int)$r['points'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>