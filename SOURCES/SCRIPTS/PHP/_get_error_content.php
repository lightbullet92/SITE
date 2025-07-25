<?php
    $is_error = true;
    echo "\t" . "\t" . "\t" . '<div class="lb_page_content_title">Ошибка ' . str_replace(".php", "", pathinfo($_SERVER['PHP_SELF'])['basename']) . '</div>' . PHP_EOL;
    echo "\t" . "\t" . "\t" . '<div class="lb_content">' . PHP_EOL;
    $error_filename = "SOURCES/CONTENT/PAGES/ERRORS/_" . str_replace(".php", ".txt", pathinfo($_SERVER['PHP_SELF'])['basename']);
    $error_file = file($error_filename);
    foreach($error_file as $item)
        echo "\t" . "\t" . "\t" . "\t" . '<p>' . trim($item) . '</p>' . PHP_EOL;
    echo "\t" . "\t" . "\t" . '</div>' . PHP_EOL;
?>