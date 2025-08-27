<?php
    $mc_dir = "SOURCES/CONTENT/MINECRAFT/";
    $files_mc = array_diff(scandir($mc_dir), array('..', '.', 'servers.txt',),);
    foreach($files_mc as $indexmc => $mcfilename)
    {
        $mc = file($mc_dir . trim($mcfilename));
        echo '<details>' . PHP_EOL;
        foreach($mc as $index => $item)
            if($index == 0)
                echo "\t" . "\t" . "\t" . '<summary><div class="lb_content_news_title">' . trim($item) . '</div></summary>' . PHP_EOL;
        echo "\t" . "\t" . "\t" . '<div class="lb_content">' . PHP_EOL;
        foreach($mc as $index => $item)
            if($index != 0)
                echo "\t" . "\t" . "\t" . "\t" . '<p>' . trim($item) . '</p>' . PHP_EOL;
        echo "\t" . "\t" . "\t" . '</div>' . PHP_EOL;
        echo '</details>' . PHP_EOL;
    }
?>