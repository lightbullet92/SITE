<?php
    $styles_dir = "SOURCES/STYLES/";
    $files_styles = array_diff(scandir($styles_dir), array('..', '.'));
    foreach($files_styles as $item)
        echo "\t" . "\t" . '<link rel="stylesheet" href="' . $styles_dir . $item . '">' . PHP_EOL;
?>