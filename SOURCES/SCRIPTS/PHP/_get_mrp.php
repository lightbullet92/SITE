<?php
    $url = "http://radio.lightbullet.ru:8087/ai";
    $title = "Light Bullet AI";
    $codec = "mp3";
    $volume = 100;
    $autoplay = "false";
    $skin = "mcclean";
    $buffering = 0;
    $width = 180;
    $height = 60;
    echo '<div class="lb_mrp">' . PHP_EOL;
    echo "\t" . '<script type="text/javascript" src="SOURCES/SCRIPTS/PLAYERS/lb_mrp.js"></script>' . PHP_EOL;
    echo "\t" . '<script type="text/javascript">' . PHP_EOL;
    echo "\t" . "\t" . 'MRP.insert({' . PHP_EOL;
    echo "\t" . "\t" . "\t" . "'url':'" . $url . "'," . PHP_EOL;
    echo "\t" . "\t" . "\t" . "'codec':'" . $codec . "'," . PHP_EOL;
    echo "\t" . "\t" . "\t" . "'volume':" . $volume . "," . PHP_EOL;
    echo "\t" . "\t" . "\t" . "'autoplay':" . $autoplay . "," . PHP_EOL;
    echo "\t" . "\t" . "\t" . "'jsevents':true," . PHP_EOL;
    echo "\t" . "\t" . "\t" . "'buffering':" . $buffering . "," . PHP_EOL;
    echo "\t" . "\t" . "\t" . "'title':'" . $title . "'," . PHP_EOL;
    echo "\t" . "\t" . "\t" . "'wmode':'transparent'," . PHP_EOL;
    echo "\t" . "\t" . "\t" . "'skin':'" . $skin . "'," . PHP_EOL;
    echo "\t" . "\t" . "\t" . "'width':" . $width . "," . PHP_EOL;
    echo "\t" . "\t" . "\t" . "'height':" . $height . PHP_EOL;
    echo "\t" . "\t" . '});' . PHP_EOL;
    echo "\t" . '</script>' . PHP_EOL;
    echo '</div>' . PHP_EOL;
?>