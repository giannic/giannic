<?php
    @date_default_timezone_set("America/New_York");
    $filename = "vip.log";
    $fh = @fopen("../protected/$filename",'a') or die();

    $ip = $_SERVER['REMOTE_ADDR'];
    $host = @gethostbyaddr($ip);
    $time = date("Y-m-d H:i:s");
    $info = "[$time] $ip ($host)\n";

    fwrite($fh, $info);
    fclose($fh);
?>
