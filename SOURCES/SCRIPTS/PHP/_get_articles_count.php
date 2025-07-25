<?php
    echo "\t" . "\t" . "\t" . '<div class="lb_page_content_title">Последние статьи</div>' . PHP_EOL;
    $articles_dir = "SOURCES/CONTENT/ARTICLES/";
    $files_articles = array_diff(scandir($articles_dir, SCANDIR_SORT_DESCENDING), array('..', '.'));
    $count = trim(file("SOURCES/SETTINGS/CONTENT/articles_count.txt")[0]);
    $article_comment_index = 0;
    foreach($files_articles as $indexarticle => $articlefilename)
    {
        $article_comment_index = $indexarticle;
        if($indexarticle < $count)
        {
            $article = file($articles_dir . trim($articlefilename));
            $formatteddate = trim($articlefilename)[6] . trim($articlefilename)[7] . '.' . trim($articlefilename)[4] . trim($articlefilename)[5] . '.' . trim($articlefilename)[0] . trim($articlefilename)[1] . trim($articlefilename)[2] . trim($articlefilename)[3];
            echo '<details>' . PHP_EOL;
            foreach($article as $index => $item)
                if($index == 0)
                    echo "\t" . "\t" . "\t" . '<summary><div class="lb_content_news_title">' . $formatteddate . ': ' . trim($item) . '</div></summary>' . PHP_EOL;
            echo "\t" . "\t" . "\t" . '<div class="lb_content">' . PHP_EOL;
            foreach($article as $index => $item)
                if($index != 0)
                    echo "\t" . "\t" . "\t" . "\t" . '<p>' . trim($item) . '</p>' . PHP_EOL;
            echo "\t" . "\t" . "\t" . '</div>' . PHP_EOL;
            //include("SOURCES/SCRIPTS/PHP/_comments_article.php");
            echo '</details>' . PHP_EOL;
        }
    }
?>