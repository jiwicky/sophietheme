var googletag = googletag || {};
googletag.cmd = googletag.cmd || [];
(function() {
var gads = document.createElement('script');
gads.async = true;
gads.type = 'text/javascript';
var useSSL = 'https:' == document.location.protocol;
gads.src = (useSSL ? 'https:' : 'http:') + 
'//www.googletagservices.com/tag/js/gpt.js';
var node = document.getElementsByTagName('script')[0];
node.parentNode.insertBefore(gads, node);
})();

googletag.cmd.push(function() {
googletag.defineSlot('/1037121/SOPHIE-300x250-BOTTOM', [300, 250], 'div-gpt-ad-1379698607570-0').addService(googletag.pubads());
googletag.defineSlot('/1037121/SOPHIE-300x250-TOP', [300, 250], 'div-gpt-ad-1379698607570-1').addService(googletag.pubads());
googletag.defineSlot('/1037121/SOPHIE-728x90-BOTTOM', [728, 90], 'div-gpt-ad-1379698607570-2').addService(googletag.pubads());
googletag.defineSlot('/1037121/SOPHIE-728x90-TOP', [728, 90], 'div-gpt-ad-1379698607570-3').addService(googletag.pubads());
googletag.pubads().enableSingleRequest();
googletag.enableServices();
});