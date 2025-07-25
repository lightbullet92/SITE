<?php
    $part_dir = "SOURCES/CONTENT/LINKS/PARTICIPANTS/";
    $part_user_files = array_diff(scandir($part_dir), array('..', '.', 'description.txt'));
    $part_description_filename = $part_dir . 'description.txt';
    echo "\t" . "\t" . "\t" . '<div class="lb_page_content_title center">Участники группы</div>' . PHP_EOL;
    if(file_exists($part_description_filename))
    {
        $part_description_file = file($part_description_filename);
        echo "\t" . "\t" . "\t" . '<div class="lb_content">' . PHP_EOL;
        foreach($part_description_file as $part_description_item)
            echo "\t" . "\t" . "\t" . "\t" . '<p>' . trim($part_description_item) . '</p>' . PHP_EOL;
        echo "\t" . "\t" . "\t" . '</div>' . PHP_EOL;
    }
    foreach($part_user_files as $part_user_item)
    {
        $part_user_filename = $part_dir . trim($part_user_item);
        $part_user_file = file($part_user_filename);
        
        $part_user = str_replace(".txt","",trim($part_user_item));
        echo "\t" . "\t" . "\t" . '<div class="lb_content_title">' . $part_user . '</div>' . PHP_EOL;

        echo "\t" . "\t" . "\t" . '<div class="lb_participant_icons">' . PHP_EOL;
        foreach($part_user_file as $file_index => $file_item)
            if($file_index % 2 != 0)
                echo "\t" . "\t" . "\t" . "\t" . '<a href="' . trim($file_item) . '"><img alt="' . trim($part_user_file[$file_index - 1]) . '" src="SOURCES/IMG/SOCIALS/' . trim($part_user_file[$file_index - 1]) . '.png"></img></a>' . PHP_EOL;
        echo "\t" . "\t" . "\t" . '</div>' . PHP_EOL;
    }
?>