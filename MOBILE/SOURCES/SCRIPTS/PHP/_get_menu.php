<?php
    echo "\t" . "\t" . "\t" . '<div class="lb_menu">' . PHP_EOL;
    $file_menu = file("SOURCES/CONTENT/MAIN/_menu.txt");
    $current = pathinfo($_SERVER['PHP_SELF'])['basename'];
    echo "\t" . "\t" . "\t" . "\t" . '<ul>' . PHP_EOL;
    foreach($file_menu as $index => $item)
    {
        if($index % 2 != 0)
        {
            echo "\t" . "\t" . "\t" . "\t" . "\t" . '<a href="' . trim($item) . '"';
            if(trim($item) == $current)
                echo ' class="lb_menu_current"';
            echo '><li>' . trim($file_menu[$index - 1]) . '</li></a>' . PHP_EOL;
        }
    }
    echo "\t" . "\t" . "\t" . "\t" . '</ul>' . PHP_EOL;
    echo "\t" . "\t" . "\t" . '</div>' . PHP_EOL;
?>