<?php
    $samp_dir = "SOURCES/CONTENT/SAMP/";
    $files_samp = array_diff(scandir($samp_dir), array('..', '.'));
    foreach($files_samp as $indexsamp => $sampfilename)
    {
        $samp = file($samp_dir . trim($sampfilename));
        echo '<details>' . PHP_EOL;
        foreach($samp as $index => $item)
            if($index == 0)
                echo "\t" . "\t" . "\t" . '<summary><div class="lb_content_news_title">' . trim($item) . '</div></summary>' . PHP_EOL;
        echo "\t" . "\t" . "\t" . '<div class="lb_content">' . PHP_EOL;
        foreach($samp as $index => $item)
            if($index != 0)
                echo "\t" . "\t" . "\t" . "\t" . '<p>' . trim($item) . '</p>' . PHP_EOL;
        echo "\t" . "\t" . "\t" . '</div>' . PHP_EOL;
        echo '</details>' . PHP_EOL;
    }
?>