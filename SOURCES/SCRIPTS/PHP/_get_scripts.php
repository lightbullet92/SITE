<?php
    $scripts_dir = "SOURCES/SCRIPTS/JS/";
    $files_scripts = array_diff(scandir($scripts_dir), array('..', '.'));
    foreach($files_scripts as $item)
        echo "\t" . "\t" . '<script src="' . $scripts_dir . $item . '"></script>' . PHP_EOL;
?>