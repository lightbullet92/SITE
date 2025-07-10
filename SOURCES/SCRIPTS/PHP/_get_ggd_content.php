<?php
    $ggd_dir = "SOURCES/CONTENT/GGD/";
    $files_ggd = array_diff(scandir($ggd_dir), array('..', '.'),);
    foreach($files_ggd as $indexggd => $ggdfilename)
    {
        $ggd = file($ggd_dir . trim($ggdfilename));
        echo '<details>' . PHP_EOL;
        foreach($ggd as $index => $item)
            if($index == 0)
                echo "\t" . "\t" . "\t" . '<summary><div class="lb_content_news_title">' . trim($item) . '</div></summary>' . PHP_EOL;
        echo "\t" . "\t" . "\t" . '<div class="lb_content">' . PHP_EOL;
        foreach($ggd as $index => $item)
            if($index != 0)
                echo "\t" . "\t" . "\t" . "\t" . '<p>' . trim($item) . '</p>' . PHP_EOL;
        echo "\t" . "\t" . "\t" . '</div>' . PHP_EOL;
        echo '</details>' . PHP_EOL;
    }
?>