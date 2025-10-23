<?php
    $host = 'localhost:12345';
    $dbname = 'lb_ws';
    $username = 'admin';
    $password = 'NaumovAA1992';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e)
    {
        die("Ошибка подключения к базе данных: " . $e->getMessage());
    }
    $stmt = $pdo->query("SHOW TABLES");
    $tables = $stmt->fetchAll(PDO::FETCH_COLUMN);

    echo "\t" . "\t" . "\t" . '<div class="lb_content_title center">Таблицы базы данных lb_ws</div>' . PHP_EOL;
    echo "\t" . "\t" . "\t" . '<div class="lb_content">' . PHP_EOL;
    if (!empty($tables))
        foreach ($tables as $table)
        {
            //echo "\t" . "\t" . "\t" . "\t" . '<p><a href="' . trim($table) . '.php">'. trim($table) . '</a></p>' . PHP_EOL;
            echo "\t" . "\t" . "\t" . "\t" . '<p>' . trim($table) . '</p>' . PHP_EOL;
            //include("SOURCES/SCRIPTS/PHP/get_db_pages.php");
        }

    echo "\t" . "\t" . "\t" . '</div>' . PHP_EOL;
?>