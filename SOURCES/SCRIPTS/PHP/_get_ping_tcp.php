<?php
function ping($host, $port, $timeout = 10)
{
    $ta = microtime(true);
    if($fp = fsockopen($host, $port, $errno, $errstr, $timeout))
    {
        $tb = microtime(true);
        fclose($fp);
        //return round((($tb - $ta) * 1000), 0)." ms";
        return "OK";
    }
    else
    {
        return "DOWN";
    }
}
?>