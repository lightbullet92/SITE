<?php
    $disk_space = disk_free_space('/');
    if ($disk_space !== false)
        $disk_space_mb = $disk_space / (1024 * 1024 * 1024);
    $total_space = disk_total_space('/');
    if ($total_space !== false)
        $total_space_mb = $total_space / (1024 * 1024 * 1024);
?>