<?php
    echo '<html lang="ru">' . PHP_EOL;
    echo "\t" . '<head>' . PHP_EOL;
    echo "\t" . "\t" . '<link rel="icon" href="SOURCES/IMG/Logo.png">' . PHP_EOL;
    include("SOURCES/SCRIPTS/PHP/_get_styles.php");
    include("SOURCES/SCRIPTS/PHP/_get_scripts.php");
    echo "\t" . "\t" . '<title>' . PHP_EOL;
    echo "\t" . "\t" . "\t";
    include("SOURCES/SCRIPTS/PHP/_get_pagename.php");
    echo "\t" . "\t" . '</title>' . PHP_EOL;
    echo "\t" . '</head>' . PHP_EOL;
    echo "\t" . '<body>' . PHP_EOL;
    echo "\t" . "\t" . '<div class="lb_main_body">' . PHP_EOL;
    echo "\t" . "\t" . "\t" . '<div class="lb_main_body_header">' . PHP_EOL;
    echo "\t" . "\t" . "\t" . "\t" . '<img class="lb_logo" src="SOURCES/IMG/Logo.png">' . PHP_EOL;
    echo "\t" . "\t" . "\t" . "\t" . '<div class="lb_main_body_title">' . PHP_EOL;
    echo "\t" . "\t" . "\t" . "\t" . "\t";
    include("SOURCES/SCRIPTS/PHP/_get_pagename.php");
    echo "\t" . "\t" . "\t" . "\t" . '</div>' . PHP_EOL;
    echo "\t" . "\t" . "\t" . '</div>' . PHP_EOL;
    echo "\t" . "\t" . "\t" . '<div class="lb_menu">' . PHP_EOL;
    include("SOURCES/SCRIPTS/PHP/_get_menu.php");
    echo "\t" . "\t" . "\t" . '</div>' . PHP_EOL;
    include("SOURCES/SCRIPTS/PHP/_get_page_content.php");
?>