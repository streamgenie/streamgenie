
<head>
<script src="https://cdn.jsdelivr.net/clappr/latest/clappr.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/clappr.level-selector/latest/level-selector.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/clappr.chromecast-plugin/latest/clappr-chromecast-plugin.js"></script>
<script src="/files/fs1.js"></script>
</head>
<body>
<div id="ppp">
</div>
<script>

    var playerElement = document.getElementById("ppp"); 
var clap = {
source: 'http://hlsevent-l3c.clt2.media.foxsportsgo.com/token=exp=1539990175~id=1fe97092-8604-4271-aad1-c818c0e57346-143290-b80f4e629f493abbf4a10431f66fe0aeb81d4c2b~hash=cb7baa07e13ee3b80c9e7e0787ac099a081000e0/ls01/foxsports/2018/10/18/NFL_Thursday_Night_Football__Denver_Broncos_at_Arizona_Cardinals_20181018_Pico702_1539902939727/master_wired_web_live_adbv1.m3u8',
 height: "100%",
 width: "100%",
parentId: "#ppp",
plugins: [LevelSelector,ChromecastPlugin],   
mimeType: "application/x-mpegURL",
autoPlay: false,
playInline: true,
    
chromecast: {
          appId: '9DFB77C0',
          contentType: 'video/m3u8',
          media: {
            type: ChromecastPlugin.None,
            title: 'Live',
            subtitle: 'Live'
          }
        }
}
var player = new Clappr.Player(clap);


   
  
 

</script>