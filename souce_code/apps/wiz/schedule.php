<?php
$string_to_replace="wiz1.net/channel";
$replace_with="//streamgenie.tk/apps/wiz?channel=";
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "http://www.wiz1.net/lag10_home.php");
curl_setopt($ch,CURLOPT_ENCODING , "");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");


$headers = array();
$headers[] = "Host: wiz1.net";
$headers[] = "Connection: keep-alive";
$headers[] = "Upgrade-Insecure-Requests: 1";
$headers[] = "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36";
$headers[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8";
$headers[] = "Referer: wiz1.net";
$headers[] = "Accept-Encoding: gzip, deflate";
$headers[] = "Accept-Language: en-US,en;q=0.9";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$body = curl_exec($ch);
$output = str_replace($string_to_replace,$replace_with,$body);
$filename = "temp.txt";
$file = fopen($filename,'w+');
fwrite($file,$body);
fclose($file);
echo $output
?>