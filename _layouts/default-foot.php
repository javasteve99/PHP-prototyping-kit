<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="javascripts/jquery-1.7.1.min.js">\x3C/script>')</script>
<!-- Plugins includes Twitter's Boostrap.js to extend functionality. All plugins should be copied into this file -->
<script src="javascripts/plugins.js"></script>
<!-- Put your own javascript here -->
<script src="javascripts/scripts.js"></script>
<!-- Google Analytics (requires Modernizr) - Change UA-XXXXXXXX-1 to be your site's ID -->
<script>
  window._gaq = [['_setAccount','UA-XXXXXXXX-1'],['_trackPageview'],['_trackPageLoadTime']];
  Modernizr.load({
    load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
  });
</script>

<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
     chromium.org/developers/how-tos/chrome-frame-getting-started -->
<!--[if lt IE 7 ]>
  <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->

</body>
</html>
