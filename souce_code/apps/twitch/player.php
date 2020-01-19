<html>
<head>
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
<iframe width="100%" height="100%" src=<?php
echo '"http://player.twitch.tv/?channel=' . htmlspecialchars($_GET["id"]) . '&autoplay=true"';
?> frameborder="0" allowfullscreen></iframe>
</body>
</html>