<?php
echo ini_get("output_buffering");
ob_start();
echo "start connection";
$fp = fsockopen("127.0.0.1", 3000, $errno, $errstr, 30);
if (!$fp) {
    echo "$errstr ($errno)<br />\n";
} else {
    fwrite($fp, "Your message");
    while (!feof($fp)) {
        echo fgets($fp, 128);
        echo str_pad(" ", (int)ini_get("output_buffering"), " ");
        ob_flush();
    }
    fclose($fp);
}
ob_end_flush();
?>