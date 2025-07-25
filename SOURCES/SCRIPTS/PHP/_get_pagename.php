<?php
    $file_array_filename = "SOURCES/CONTENT/MAIN/_menu_files.txt";
    $exists = false;
    if(file_exists($file_array_filename))
    {
        $file_array = file($file_array_filename);
        foreach($file_array as $array_item)
        {
            $file_pagenames = file(trim($array_item));
            $current = pathinfo($_SERVER['PHP_SELF'])['basename'];
            foreach($file_pagenames as $index => $item)
                if(trim($item) == $current)
                {
                    $exists = true;
                    echo file_get_contents("SOURCES/CONTENT/MAIN/_company.txt") . ': ' . trim($file_pagenames[$index - 1]) . PHP_EOL;
                }
        }
        if(!$exists)
            echo file_get_contents("SOURCES/CONTENT/MAIN/_company.txt") . ': Not in menu!' . PHP_EOL;
    }
    else
        echo file_get_contents("SOURCES/CONTENT/MAIN/_company.txt") . ': Menu file is not found!' . PHP_EOL;
?>
