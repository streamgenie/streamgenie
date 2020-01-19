<html>
<head>
<script src="https://cdn.jsdelivr.net/clappr/latest/clappr.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/clappr.level-selector/latest/level-selector.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/clappr.chromecast-plugin/latest/clappr-chromecast-plugin.js"></script>
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
</style>
</head>
<body>
<body style="margin:0px;padding:0px;">
<span id="player"></div>
<script type="text/javascript">
var playerElement = document.getElementById("player");
var player = new Clappr.Player({
  source: "/files/m3u8/nbcs-bos/nbc-bos.m3u8", 
  mimeType: 'application/x-mpegURL',
  plugins: [LevelSelector],
  height: '100%',
  width: '100%',
  autoPlay: 'true',
});
player.attachTo(playerElement);

</script>
</body></html>
