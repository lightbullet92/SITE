<?php
    echo "\t" . "\t" . "\t" . '<link href="https://vjs.zencdn.net/8.10.0/video-js.css" rel="stylesheet">' . PHP_EOL . 
    "\t" . "\t" . "\t" . '<script src="https://vjs.zencdn.net/8.10.0/video.min.js"></script>' . PHP_EOL . 
    "\t" . "\t" . "\t" . '<div class="lb_content_title center">Состояние стрима</div>' . PHP_EOL;
    echo "\t" . '<div class="lb_content">' . PHP_EOL;
    $streamURL = "hls/mystream.m3u8";
    if(file_exists($streamURL)):
?>
        <div class="lb_stream">
        <video id="player" class="video-js vjs-default-skin" 
                controls preload="auto" width="800" height="360" 
                autoplay muted 
                data-setup='{"fluid": true}'>
            <source src="<?php echo $_GET["stream"] ?? $streamURL; ?>" type="application/x-mpegURL">
        </video>
        <script>
            var player = videojs('player');
            player.ready(function() {
                var playPromise = player.play();
                if (playPromise !== undefined) {
                    playPromise.catch(function(error) {
                        console.log('Автозапуск заблокирован:', error);
                        // Опционально: показать кнопку play
                    });
                }
            });
        </script>
        </div>
<?php
    else:
        echo "\t" . "\t" . "\t" . '<h1 class="center">На данный момент стрим не проводится</h1>' . PHP_EOL;
    endif;
        echo "\t" . '</div>' . PHP_EOL;
?>
