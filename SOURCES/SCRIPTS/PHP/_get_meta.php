<?php
    $meta_filename = "SOURCES/CONTENT/MAIN/_meta.txt";
    $meta_file = file($meta_filename);
    foreach($meta_file as $index => $item)
        echo "\t" . "\t" . '<meta ' . trim($item) . ' >' . PHP_EOL;
?>