<?php
// chat_fetch.php
header('Content-Type: application/json; charset=utf-8');

$logfile = __DIR__ . '/messages.log';
$max_lines = 50;
$lines = [];

if (file_exists($logfile)) {
    $all = file($logfile, FILE_IGNORE_NEW_LINES);
    if (count($all) > $max_lines) {
        $all = array_slice($all, -$max_lines);
    }

    foreach ($all as $line) {
        $parts = explode("\t", $line, 3);
        if (count($parts) === 3) {
            $lines[] = [
                'time' => $parts[0],
                'user' => $parts[1],
                'msg'  => $parts[2],
            ];
        }
    }
}

echo json_encode(['messages' => $lines], JSON_UNESCAPED_UNICODE);