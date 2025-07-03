<?php
    echo "\t" . "\t" . "\t" . '<div class="lb_content_title" style="text-align: center;">' . gethostname() . ': ' . $_SERVER['SERVER_ADDR'] . '</div>' . PHP_EOL;
    include("SOURCES/SCRIPTS/PHP/_get_sysinfo.php");
?>
