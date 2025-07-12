<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: text/html');
$url = 'https://miracle74.com/?subtopic=whoisonline';
$html = file_get_contents($url);
echo $html;
?>