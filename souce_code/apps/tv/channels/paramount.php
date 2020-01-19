<head>
<script src="https://cdn.jsdelivr.net/clappr/latest/clappr.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/clappr.level-selector/latest/level-selector.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/clappr.chromecast-plugin/latest/clappr-chromecast-plugin.js"></script>
<meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="expires" content="Sun, 20 Apr 1969 4:20:00 GMT" />
<meta http-equiv="pragma" content="no-cache" />
<meta name="robots" content="noindex">
<meta name="googlebot" content="noindex">
<style type="text/css">
/*
body { border-width: 0px; margin: 0px; padding: 0px; overflow: hidden; }
*/
html {
    height: 100%;
}
body {
    position: absolute;
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;

    margin: 0;
}
#vid {
    width: 100vw;
    height: 56.25vw;
    max-height: 100vh;
    max-width: 177.78vh;
    margin: auto;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
}
</style>
</head>
<body>
<span id="player"></div>
<script type="text/javascript">
var playerElement = document.getElementById("player");
var player = new Clappr.Player({
  source: <?php
// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://mediautilslive-a.akamaihd.net/services/MediaGenerator/mgid:aem:live:paramountnetwork.com:oeojy2?format=json&acceptMethods=hls&tveprovider=FPS");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");


$headers = array();
$headers[] = "Host: mediautilslive-a.akamaihd.net";
$headers[] = "Connection: keep-alive";
$headers[] = "Accept: */*";
$headers[] = "X-VIA-TVE-MEDIATOKEN: eyJhbGciOiJSUzI1NiJ9.eyJicmFuZCI6InBhcmFtb3VudG5ldHdvcmsiLCJhcHBsaWNhdGlvbiI6InBhcmFtb3VudG5ldHdvcmsiLCJwbGF0Zm9ybSI6Imh0bWw1IiwiY291bnRyeSI6InVzIiwicmVzb3VyY2UiOiJwYXJhbW91bnRuZXR3b3JrIiwiZXhwIjoxNTc3NTc5NzgyfQ.ppB_lwtGBPxJNqkBCfeKFPpJqe8VbDiSVKsDh3WggSrf1mAczxV3PJlv3pCbu_zq02MNJO4w82UhEljts--dpDA7qTj3M3vDgwm1rjTIb2gPkTeDZ9Zn14ACeFxHMNmbemsLEwcTBQwrQxNQvE9Y_m1-rDZXg9K4hibHuZqcSFB33jhDsvAQLbDB_dOhHcMCvHMSrtp6KqiAu8OHdzhIp5l7E66pKsHlPiqre3Pdfo7KMRKZuxj8F3uU0Xgk_wY67gY99Rcioc_IxhwJdpRL4BIEupjox18K_wyJTosHaUhFDXVAqsG_VHWuGpeC4J3a-2OOqWvBWdZcszr5NRCIzQ";
$headers[] = "Origin: https://www.paramountnetwork.com";
$headers[] = "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36";
$headers[] = "Content-Type: application/json";
$headers[] = "Referer: https://www.paramountnetwork.com/live-tv/oeojy2";
$headers[] = "Accept-Encoding: gzip, deflate, br";
$headers[] = "Accept-Language: en-US,en;q=0.9";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);
$code = explode(" ",$result);
echo $code[135];
//curl to url with m3u8 then explode page in to array to extract line with stream link
//json known to be valid for at least 10 hours.
?> 
  mimeType: 'application/x-mpegURL',
  plugins: [LevelSelector],
  height: '100%',
  width: '100%',
});
player.attachTo(playerElement);

</script>
</body></html>