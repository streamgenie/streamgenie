(function (open) {
    XMLHttpRequest.prototype.open = function (method, url, async, user, pass) {
        if (url.indexOf('.ts') != -1) {
            rewrittenUrl = url.replace(url, "https://images10-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&refresh=300&url="+encodeURIComponent(url));
		} else if (url.indexOf('aes_slate/files/keys/') != -1) {
            rewrittenUrl = url.replace(url, "http://104.248.114.189/files/keys/tnt/?url="+encodeURI(url));
        } else if (url.indexOf('svc.nhl') != -1) {
            rewrittenUrl = url.replace(url, "http://streamgenie.tk/apps/nhl/keys/key.php?url="+btoa(url));
        } else {
            rewrittenUrl = url;
        }
        open.call(this, method, rewrittenUrl, async, user, pass);
    };
})(XMLHttpRequest.prototype.open);