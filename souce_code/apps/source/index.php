<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>StreamGenie</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="icon" href="/files/img/genie.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="/files/img/genie.ico" type="image/x-icon" />
        <link rel="stylesheet" href="/files/css/boootstrap.min.css" media="screen">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha256-U5ZEeKfGNOja007MMD3YBI0A3OSZOQbeG6z2f2Y0hu8=" crossorigin="anonymous"></script>              
        <script>
            this.top.location !== this.location && (this.top.location = this.location);
        </script>     
        <meta name="referrer" content="no-referrer">
    </head>
    <body>
<?php include_once("../../files/header.php"); ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <style>#M292033ScriptRootC176052 {min-height: 300px;}</style> 
                    <!-- Composite Start --> 
                    <div id="M292033ScriptRootC176052"> 
                        <div id="M292033PreloadC176052"> Loading... 
                        </div> 
                    </div> 
                    <!-- Composite End -->
                </div> <br>
                <div class="col-xs-12 col-sm-9">
                    <div class="embed-responsive embed-responsive-16by9">
                                                                                    <div id="streamgenie"></div>
<?php
echo '<iframe width="100%" height="100%" src="player.php?file=' . htmlspecialchars($_GET["file"]) . '" frameborder="0" scrolling="no" allowfullscreen></iframe>';
?>
                                                    </div>                    
                    <p class="text-center">
<!-- A mesage could be here.... or not. -->
</p> 
                </div>
                <div class="col-sm-3 col-xs-12">
                    <div class="text-center">
                        <div class="sharethis-inline-share-buttons"></div>
                    </div>
                    <div class="hidden-xs">
                        <script id="sid0020000052552240475">(function() {function async_load(){s.id="cid0020000052552240475";s.src='http://st.chatango.com/js/gz/emb.js';s.style.cssText="width:100%;height:623px;";s.async=true;s.text='{"handle":"memersonly","arch":"js","styles":{"a":"ffffff","b":50,"c":"000000","d":"000000","e":"ffffff","f":70,"h":"c0c0c0","i":0,"k":"808080","l":"000000","m":"CC0000","n":"FFFFFF","q":"3333ff","t":0,"usricon":0.6,"surl":0,"v":0,"ab":0,"p":11,"u":1}}';var ss = document.getElementsByTagName('script');for (var i=0, l=ss.length; i < l; i++){if (ss[i].id=='sid0020000052552240475'){ss[i].id +='_';ss[i].parentNode.insertBefore(s, ss[i]);break;}}}var s=document.createElement('script');if (s.async==undefined){if (window.addEventListener) {addEventListener('load',async_load,false);}else if (window.attachEvent) {attachEvent('onload',async_load);}}else {async_load();}})();</script>                    </div>
                </div>
            </div>
        </div>       
    </body>
</html>