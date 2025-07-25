<?php
    $socials_menu_filename = "SOURCES/CONTENT/MAIN/_socials.txt";
    if(file_exists($socials_menu_filename))
    {
        echo "\t". "\t". "\t". '<div class="lb_socials">' . PHP_EOL;
        echo "\t" . "\t" . "\t" . "\t" . '<div class="lb_page_content_title">Связаться с нами</div>' . PHP_EOL;
        echo "\t" . "\t" . "\t" . "\t" . '<div class="lb_socials_icons">' . PHP_EOL;
        $socials_menu = file($socials_menu_filename);
        foreach($socials_menu as $index => $item)
            if($index % 2 != 0)
                echo "\t" . "\t" . "\t" . "\t" . "\t" . '<a href="' . trim($item) . '"><img alt="' . trim($socials_menu[$index - 1]) . '" src="SOURCES/IMG/SOCIALS/' . trim($socials_menu[$index - 1]) . '.png"></img></a>' . PHP_EOL;
        echo "\t" . "\t" . "\t" . "\t" . '</div>' . PHP_EOL;
        echo "\t". "\t". "\t". '</div>' . PHP_EOL;
    }
?>