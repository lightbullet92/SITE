<?php
    echo "\t" . "\t" . "\t" . '<div class="lb_content_title center">Лучшие из лучших</div>' . PHP_EOL;
    echo "\t" . "\t" . "\t" . '<div class="lb_funnycats">' . PHP_EOL;
    $fc_dir = "SOURCES/IMG/FUNNYCATS/";
    $files_fc = array_diff(scandir($fc_dir, SCANDIR_SORT_DESCENDING), array('..', '.'),);
    foreach($files_fc as $item)
        echo "\t" . "\t" . "\t" . "\t" . '<img src="' . $fc_dir . trim($item) . '"></img>' . PHP_EOL;
    echo "\t" . "\t" . "\t" . '</div>' . PHP_EOL;
?>
