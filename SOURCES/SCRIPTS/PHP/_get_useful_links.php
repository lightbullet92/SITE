<?php
    $ul_dirs = "SOURCES/CONTENT/LINKS/";
    $ul_categories_dirs = array_diff(scandir($ul_dirs), array('..', '.'));
    foreach($ul_categories_dirs as $ul_item)
    {
        $ul_directory_filename = $ul_dirs . trim($ul_item) . '/_directory.txt';
        if(file_exists($ul_directory_filename))
        {
            $ul_directory_file = file($ul_directory_filename);
            echo "\t" . "\t" . "\t" . '<div class="lb_page_content_title center">' . trim($ul_directory_file[0]) . '</div>' . PHP_EOL;
            $ul_categories = array_diff(scandir($ul_dirs . trim($ul_item)), array('..', '.', '_directory.txt'),);
            foreach($ul_categories as $ul_categories_item)
            {
                $ul_categories_filename = $ul_dirs . trim($ul_item) . '/' . trim($ul_categories_item);
                $ul_categories_file = file($ul_categories_filename);
                foreach($ul_categories_file as $ul_file_index => $ul_file_item)
                    if($ul_file_index == 0)
                    {
                        echo "\t" . "\t" . "\t" . "\t" . '<div class="lb_content_title">' . trim($ul_file_item) . '</div>' . PHP_EOL;
                        echo "\t" . "\t" . "\t" . "\t" . '<div class="lb_content">' . PHP_EOL;
                    }
                    else
                        if(trim($ul_file_item)[0] != ">")
                            echo "\t" . "\t" . "\t" . "\t" . "\t" . '<p><a target="_blank" href="' . trim($ul_file_item) . '">' . str_replace(">", "", trim($ul_categories_file[$ul_file_index - 1])) . '</a></p>' . PHP_EOL;
                echo "\t" . "\t" . "\t" . "\t" . '</div>' . PHP_EOL;
            }
        }
    }
?>