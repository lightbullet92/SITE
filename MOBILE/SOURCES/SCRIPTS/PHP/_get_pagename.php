<?php
    $file_pagenames = file("../SOURCES/CONTENT/MAIN/_menu.txt");
    $current = pathinfo($_SERVER['PHP_SELF'])['basename'];
    echo file_get_contents("../SOURCES/CONTENT/MAIN/_company.txt") . ': ';
    foreach($file_pagenames as $index => $item)
        if(trim($item) == $current)
            echo trim($file_pagenames[$index - 1]) . PHP_EOL;
?>
