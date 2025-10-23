<?php
    echo "\t" . "\t" . "\t" . '<div class="lb_content_title center">Статус выполнения скрипта</div>' . PHP_EOL;
    echo "\t" . "\t" . "\t" . '<div class="lb_content">' . PHP_EOL;
    $https = "";
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        $https = "https";
    else
        $https = "http";
    $port = "";
    if ($_SERVER['SERVER_PORT'] != 80 && $_SERVER['SERVER_PORT'] != 443)
        $port = ':' . $_SERVER['SERVER_PORT'];

    $pn = $_GET['pagename'];
    if (strlen($pn) > 0)
    {
        if(!file_exists($pn . '.php'))
            file_put_contents($pn . '.php',file_get_contents("SOURCES/PAGES/TEMPLATES/_main_page.php"));
        if(!file_exists('SOURCES/PAGES/_' . $pn . '.php'))
            file_put_contents('SOURCES/PAGES/_' . $pn . '.php',file_get_contents("SOURCES/PAGES/TEMPLATES/_content_page.php"));
        if(!file_exists('SOURCES/CONTENT/PAGES/_' . $pn . '.txt'))
            file_put_contents('SOURCES/CONTENT/PAGES/_' . $pn . '.txt', $pn . '.php' . file_get_contents("SOURCES/CONTENT/PAGES/TEMPLATES/_page_content.txt"));
        echo "\t" . "\t" . "\t" . "\t" . '<p>Страница <a href="' . $pn . '.php">' . $pn . '.php</a> создана.</p>' . PHP_EOL;
    }
    else
    {
        echo "\t" . "\t" . "\t" . "\t" . '<p>Некорректное использование скрипта.</p>' . PHP_EOL;
        echo "\t" . "\t" . "\t" . "\t" . '<p>Введите <b>' . $https . '://' . $_SERVER['SERVER_NAME'] . $port . '/' . pathinfo($_SERVER['PHP_SELF'])['basename'] . '?pagename=&lt;имя страницы></b> в адресной строке браузера, чтобы создать необходимые файлы.</p>' . PHP_EOL;
    }
    echo "\t" . "\t" . "\t" . '</div>' . PHP_EOL;
?>