<?php
    echo "\t" . "\t" ."\t" . '<details>' . PHP_EOL;
    echo "\t" . "\t" . "\t" . "\t" .'<summary><div class="lb_content_news_title center">Пятнашки</div></summary>' . PHP_EOL;
    echo "\t" . "\t" . "\t" . "\t" .'<div class="lb_content">' . PHP_EOL;
    include("SOURCES/SCRIPTS/PHP/_play_tag_rules.php");
    echo "\t" . "\t" . "\t" . "\t" . "\t" .'<div class="puzzle-15" id="divPuzzle-3"></div>' . PHP_EOL;
    echo "\t" . "\t" . "\t" . "\t" .'</div>' . PHP_EOL;
    echo "\t" . "\t" . "\t" . "\t" .'<script src="SOURCES/SCRIPTS/GAMES/puzzle15-game.min.js?2"></script>' . PHP_EOL;
    echo "\t" . "\t" ."\t" . '</details>' . PHP_EOL;
?>
