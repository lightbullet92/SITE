<?php
    echo "\t" . '<head>' . PHP_EOL;
    include("SOURCES/SCRIPTS/PHP/_get_meta.php");
    echo "\t" . "\t" . '<link rel="icon" href="SOURCES/IMG/Logo.png">' . PHP_EOL;
    include("SOURCES/SCRIPTS/PHP/_get_styles.php");
    include("SOURCES/SCRIPTS/PHP/_get_scripts.php");
    echo "\t" . "\t" . '<title>' . PHP_EOL;
    echo "\t" . "\t" . "\t";
    include("SOURCES/SCRIPTS/PHP/_get_pagename.php");
    echo "\t" . "\t" . '</title>' . PHP_EOL;
    echo "\t" . '</head>' . PHP_EOL;
?>