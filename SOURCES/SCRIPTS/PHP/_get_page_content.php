<?php
    $filename = "SOURCES/CONTENT/PAGES/_" . str_replace("php", "txt", pathinfo($_SERVER['PHP_SELF'])['basename']);
    if(file_exists($filename))
    {
        $file = file($filename);
        foreach($file as $index => $item)
            if($index == 0)
                echo "\t" . "\t" . "\t" . '<div class="lb_page_content_title">' . trim($item) . '</div>' . PHP_EOL;
        echo "\t" . "\t" . "\t" . '<div class="lb_content">' . PHP_EOL;
        foreach($file as $index => $item)
            if($index != 0)
                echo "\t" . "\t" . "\t" . "\t" . '<p>' . trim($item) . '</p>' . PHP_EOL;
        echo "\t" . "\t" . "\t" . '</div>' . PHP_EOL;
    }
?>