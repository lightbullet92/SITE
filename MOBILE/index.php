<?php
    include("SOURCES/PAGES/PARTS/_lb_header.php");
    include("SOURCES/PAGES/_" . pathinfo($_SERVER['PHP_SELF'])['basename']);
    include("SOURCES/PAGES/PARTS/_lb_footer.php");
?>