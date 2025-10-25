<?php
    include("SOURCES/SCRIPTS/PHP/_get_ping_tcp.php");
    $mc_dir = "SOURCES/CONTENT/MINECRAFT/";
    $mc = file($mc_dir . "servers.txt");
    echo '<details>' . PHP_EOL;
    echo "\t" . "\t" . "\t" . '<summary><div class="lb_content_news_title">' . 'Проект Light Bullet' . '</div></summary>' . PHP_EOL;
    echo "\t" . "\t" . "\t" . '<div class="lb_content">' . PHP_EOL;
    echo "\t" . "\t" . "\t" . "\t" . '<p><span class="red"><b>Внимание:</b></span> Для того, чтобы скопировать IP сервера, достаточно просто на него нажать.</p>' . PHP_EOL;
    echo "\t" . "\t" . "\t" . "\t" . '<p>Большинство серверов доступны через <button id="LBVelocity">lightbullet.ru:25565</button>. Поддерживаются релизные версии клиентов, вплоть до версии 1.21.8. Более новые версии клиентов проверяйте самостоятельно.</p>' . PHP_EOL;
    echo "\t" . "\t" . "\t" . "\t" . '<p>Представляю вашему вниманию сервера Minecraft:</p>' . PHP_EOL;
    echo "\t" . "\t" . "\t" . "\t" . '<p><table></p>' . PHP_EOL;
    echo "\t" . "\t" . "\t" . "\t" . '<p><tr class="center bold"><td>Сервер</td><td>Способ доступа</td><td>IP адрес</td><td>Карта</td><td>Версия</td><td>Доступность</td></tr></p>' . PHP_EOL;
    $mc_server = "";
    $mc_ip = "";
    $mc_access = "";
    $mc_port = 0;
    $mc_exists_dynmap = false;
    $mc_exists_map = false;
    $mc_dynmap_port = 0;
    $mc_color = "black";
    foreach($mc as $index => $item)
    {
        switch($index % 6)
        {
            case 0:
                $mc_server = trim($item);
                break;
            case 1:
                $mc_access = trim($item);
                break;
            case 2:
                $mc_ip = trim($item);
                break;
            case 3:
                $mc_port = trim($item);
                break;
            case 4:
                if(trim($item) != "none")
                {
                    $mc_dynmap_port = trim($item);
                    $mc_exists_map = true;
                    if(trim($item) != "Xaero")
                        $mc_exists_dynmap = true;
                    else
                    $mc_exists_dynmap = false;
                }
                else
                {
                    $mc_dynmap_port = 0;
                    $mc_exists_dynmap = false;
                    $mc_exists_map = false;
                }
                break;
            case 5:
                echo "\t" . "\t" . "\t" . "\t" . '<p><tr class="center"><td class="left"><b>' . str_replace("#", "", $mc_server) . '</b></td>' . '<td>' . $mc_access . '</td><td><button id="' . str_replace("#", "", $mc_server) . '">' . $mc_ip . ':' . $mc_port . '</button></td><td>';
                if($mc_exists_dynmap)
                    echo '(<a target="_blank" href="http://' . $mc_ip . ':' . $mc_dynmap_port . '">map</a>)';
                else
                    if($mc_exists_map)
                        echo $mc_dynmap_port;
                echo '</td>';
                if(ping($mc_ip, $mc_port) == "DOWN")
                    $mc_color = "red";
                else
                    if(ping($mc_ip, $mc_port) == "OK")
                        $mc_color = "green";
                    else
                        $mc_color = "black";
                echo '<td>' . trim($item) . '</td><td>(<span class="' . $mc_color . '">' . ping($mc_ip, $mc_port) . '</span>)</td></tr></p>' . PHP_EOL;
                break;
        }
    }
    echo "\t" . "\t" . "\t" . "\t" . '<p></table></p>' . PHP_EOL;
    echo "\t" . "\t" . "\t" . "\t" . '<p>Дополнительную информацию можно найти в <a target="_blank" href="https://t.me/lightbulletminecraft">тематической группе telegram</a>.</p>' . PHP_EOL;
    echo "\t" . "\t" . "\t" . '</div>' . PHP_EOL;
    echo '</details>' . PHP_EOL;
?>