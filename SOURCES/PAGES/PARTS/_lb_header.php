<?php
    echo '<!DOCTYPE html>' . PHP_EOL;
    echo '<html lang="ru">' . PHP_EOL;
    include("SOURCES/SCRIPTS/PHP/_get_head.php");
    echo "\t" . '<body>' . PHP_EOL;
    echo "\t" . "\t" . '<a href="#top" id="lb_back_to_top" class="lb_back_to_top" title="В начало">▲</a>' . PHP_EOL;
    echo "\t" . "\t" . '<div class="lb_main_body">' . PHP_EOL;
    include("SOURCES/SCRIPTS/PHP/_get_main_body_header.php");
    include("SOURCES/SCRIPTS/PHP/_get_menu.php");
    include("SOURCES/SCRIPTS/PHP/_get_page_content.php");
?>