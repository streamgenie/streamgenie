<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>StreamGenie</title>
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<link href="/files/img/genie.ico" rel="icon" type="image/x-icon">
	<link href="/files/img/genie.ico" rel="shortcut icon" type="image/x-icon">
	<link href="/files/css/boootstrap.min.css" media="screen" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js">
	</script>
	<script>
	           this.top.location !== this.location && (this.top.location = this.location);
	</script>
	<meta content="no-referrer" name="referrer">
</head>
<body>
	<?php include_once("../../files/header.php"); ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 text-center"></div>
			<div class="col-xs-12 col-sm-9">
				<div class="embed-responsive embed-responsive-16by9">
										<?php
echo '<iframe class="embed-responsive-item" frameborder="0" width="100%" height="100%" src="//167.86.66.40/nhl/' . htmlspecialchars($_GET["team"]) . '.php" frameborder="0" scrolling="no" allowfullscreen></iframe>';
?>
				</div>
				                    <p class="text-center"><!-- A mesage could be here.... or not. --></p> 
			</div>
			<div class="col-sm-3 col-xs-12">
				<div class="hidden-md">
					<script id="sid0020000052552240475">
					               (function() {function async_load(){s.id="cid0020000052552240475";s.src='http://st.chatango.com/js/gz/emb.js';s.style.cssText="width:100%;height:620px;";s.async=true;s.text='{"handle":"memersonly","arch":"js","styles":{"a":"ffffff","b":50,"c":"000000","d":"000000","e":"ffffff","f":70,"h":"c0c0c0","i":0,"k":"808080","l":"000000","m":"CC0000","n":"FFFFFF","q":"3333ff","t":0,"usricon":0.6,"surl":0,"v":0,"ab":0,"p":11,"u":1}}';var ss = document.getElementsByTagName('script');for (var i=0, l=ss.length; i < l; i++){if (ss[i].id=='sid0020000052552240475'){ss[i].id +='_';ss[i].parentNode.insertBefore(s, ss[i]);break;}}}var s=document.createElement('script');if (s.async==undefined){if (window.addEventListener) {addEventListener('load',async_load,false);}else if (window.attachEvent) {attachEvent('onload',async_load);}}else {async_load();}})();
					</script>
				</div>
			</div>
		</div>
	</div>
</body>
</html>