<?php
    echo '<div class="lb_sticky">' . PHP_EOL;
    echo "\t" . "\t" . "\t" . '<div class="lb_menu">' . PHP_EOL;
    $file_menu = file("SOURCES/CONTENT/MAIN/_menu.txt");
    $current = pathinfo($_SERVER['PHP_SELF'])['basename'];
    echo "\t" . "\t" . "\t" . "\t" . '<ul>' . PHP_EOL;
    foreach($file_menu as $index => $item)
        if(file_exists(trim($item)))
        {
            echo "\t" . "\t" . "\t" . "\t" . "\t" . '<a href="' . trim($item) . '"';
            if(trim($item) == $current)
                echo ' class="lb_menu_current"';
            echo '><li>' . trim($file_menu[$index - 1]) . '</li></a>' . PHP_EOL;
        }
        else
            if(str_contains(trim($item),"group"))
            {
                $menu_groups_dir = "SOURCES/CONTENT/MAIN/MENU/";
                $menu_group_file = file($menu_groups_dir . trim($item) . ".txt");
                if(file_exists($menu_groups_dir . trim($item) . ".txt"))
                {
                    $menu_group_items_count = 0;
                    $menu_group_item = 0;
                    foreach($menu_group_file as $group_file_index => $group_file_item)
                        if(file_exists(trim($group_file_item)))
                            $menu_group_items_count++;
                    foreach($menu_group_file as $group_file_index => $group_file_item)
                        if(file_exists(trim($group_file_item)))
                        {
                            if(($menu_group_item % $menu_group_items_count == date("w", mktime(0,0,0,date("m"),date("d"),date("Y"))) % $menu_group_items_count) || (trim(file("SOURCES/SETTINGS/GROUPS/queue.txt")[0]) == 0) || ($menu_group_items_count <= 1))
                            {
                                echo "\t" . "\t" . "\t" . "\t" . "\t" . '<a href="' . trim($group_file_item) . '"';
                                if(trim($group_file_item) == $current)
                                    echo ' class="lb_menu_current"';
                                echo '><li>' . trim($menu_group_file[$group_file_index - 1]) . '</li></a>' . PHP_EOL;
                            }
                            $menu_group_item++;
                        }
                }
            }
    echo "\t" . "\t" . "\t" . "\t" . '</ul>' . PHP_EOL;
    echo "\t" . "\t" . "\t" . '</div>' . PHP_EOL;
    echo '</div>' . PHP_EOL;
?>