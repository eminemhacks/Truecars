<?php
// Receive JSON POST data from JS
$data = json_decode(file_get_contents('php://input'), true);
$html = $data['html'] ?? '';

if ($html) {
    // Create log folder if it doesn't exist
    $logDir = __DIR__ . '/logs';
    if (!is_dir($logDir)) mkdir($logDir, 0777, true);

    // Append deleted cards to log file with timestamp
    $logFile = $logDir . '/deleted_cards.log';
    file_put_contents($logFile, date('Y-m-d H:i:s') . ":\n$html\n\n", FILE_APPEND);
}
?>
