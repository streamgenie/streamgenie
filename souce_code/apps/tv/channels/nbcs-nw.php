<html>
<head>
<script type="text/javascript" src="https://cdn.jsdelivr.net/clappr/latest/clappr.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/clappr.level-selector/latest/level-selector.min.js"></script>
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
  source: "/files/m3u8/nbcs-nw/nbc-nw.m3u8", 
  mimeType: 'application/x-mpegURL',
  plugins: [LevelSelector],
  height: '100%',
  width: '100%',
});
player.attachTo(playerElement);

</script>
</body></html>
