<?php
    echo "\t" . "\t" . "\t" . '<div class="lb_page_content_title">Последние новости</div>' . PHP_EOL;
    include("SOURCES/SCRIPTS/PHP/_get_news_count.php");
    echo "\t" . "\t" . "\t" . '<div class="lb_page_content_title">Пятнашки</div>' . PHP_EOL;
    include("SOURCES/SCRIPTS/PHP/_play_tag.php");
?>