<html>
<head>
 <script type="text/javascript" src="//cdn.jsdelivr.net/gh/clappr/clappr@latest/dist/clappr.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/clappr.level-selector/latest/level-selector.min.js"></script>
<script type="text/javascript" src="/files/js/doogie.js"></script>
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
  source: 'http://weather-lh.akamaihd.net/i/twc_1@92006/master.m3u8',
  mimeType: 'application/x-mpegURL',
  plugins: [LevelSelector],
  height: '100%',
  width: '100%',
  autoPlay: 'true',
});
player.attachTo(playerElement);

</script>
</body></html>
