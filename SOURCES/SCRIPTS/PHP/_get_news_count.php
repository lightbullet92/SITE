<?php
    echo "\t" . "\t" . "\t" . '<div class="lb_page_content_title">Последние новости</div>' . PHP_EOL;
    $news_dir = "SOURCES/CONTENT/NEWS/";
    $files_news = array_diff(scandir($news_dir, SCANDIR_SORT_DESCENDING), array('..', '.'));
    $count = trim(file("SOURCES/SETTINGS/CONTENT/news_count.txt")[0]);
    foreach($files_news as $indexnews => $newsfilename)
        if($indexnews < $count)
        {
            $news = file($news_dir . trim($newsfilename));
            $formatteddate = trim($newsfilename)[6] . trim($newsfilename)[7] . '.' . trim($newsfilename)[4] . trim($newsfilename)[5] . '.' . trim($newsfilename)[0] . trim($newsfilename)[1] . trim($newsfilename)[2] . trim($newsfilename)[3];
            echo '<details>' . PHP_EOL;
            foreach($news as $index => $item)
                if($index == 0)
                    echo "\t" . "\t" . "\t" . '<summary><div class="lb_content_news_title">' . $formatteddate . ': ' . trim($item) . '</div></summary>' . PHP_EOL;
            echo "\t" . "\t" . "\t" . '<div class="lb_content">' . PHP_EOL;
            foreach($news as $index => $item)
                if($index != 0)
                    echo "\t" . "\t" . "\t" . "\t" . '<p>' . trim($item) . '</p>' . PHP_EOL;
            echo "\t" . "\t" . "\t" . '</div>' . PHP_EOL;
            echo '</details>' . PHP_EOL;
        }
?>