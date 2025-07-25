<?php
    $r_tag_filename = "SOURCES/CONTENT/RULES/GAMES/tag.txt";
    if(file_exists($r_tag_filename))
    {
        $r_tag_file = file($r_tag_filename);
        echo "\t" . "\t" . "\t" . "\t" . '<div class="rules">' . PHP_EOL;
        foreach($r_tag_file as $index => $item)
            echo "\t" . "\t" . "\t" . "\t" . "\t" . '<p>' . trim($item) . '</p>' . PHP_EOL;
        echo "\t" . "\t" . "\t" . "\t" . '</div>' . PHP_EOL;
    }
?>