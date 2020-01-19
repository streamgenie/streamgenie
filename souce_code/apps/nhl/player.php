<script type="text/javascript" src="nhl45.js"></script>

<?php
$data1 = $_GET['team'];
$urltocurl = 'http://bilasport.net/nhl/' . $data1 . '.php';
$string_to_replace="https://i.imgur.com/4MRjE2n.png?1";
$replace_with="";
$string_to_replace1="nhl.js";
$replace_with1="nhlsvc.js";
$string_to_replace2="//bilasport.net";
$replace_with2="";
$string_to_replace3="https://i.imgur.com/MtNnBE4.jpg";
$replace_with3="https://i.imgur.com/fT2jqwf.png";
$string_to_replace4="";
$replace_with4="";
$string_to_replace5="";
$replace_with5="";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $urltocurl);
curl_setopt($ch,CURLOPT_ENCODING , "");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");


$headers = array();
$headers[] = "Host: bilasport.net";
$headers[] = "Connection: keep-alive";
$headers[] = "Upgrade-Insecure-Requests: 1";
$headers[] = "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36";
$headers[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8";
$headers[] = "Referer: bilasport.net";
$headers[] = "Accept-Encoding: gzip, deflate";
$headers[] = "Accept-Language: en-US,en;q=0.9";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$body = curl_exec($ch);
$replace1 = str_replace($string_to_replace,$replace_with,$body);
$replace2 = str_replace($string_to_replace1,$replace_with1,$replace1);
$replace3 = str_replace($string_to_replace2,$replace_with2,$replace2);
$replace4 = str_replace($string_to_replace3,$replace_with3,$replace3);
$replace5 = str_replace($string_to_replace4,$replace_with4,$replace4);
$replace6 = str_replace($string_to_replace5,$replace_with5,$replace5);
$filename = "temp.txt";
$file = fopen($filename,'w+');
fwrite($file,$body);
fclose($file);
echo $replace6
?>