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
<center>
<br><br><br><br>
<?php
echo '<iframe width="642" height="460" src="//wiz1.net/ch' . htmlspecialchars($_GET["channel"]) . '" frameborder="0" scrolling="no" allowfullscreen></iframe>';
?>
</center>

</body>
</html>