<?php wp_footer(); ?>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
	<script>!window.jQuery && document.write('<script src="<?php bloginfo('template_directory'); ?>/js/libs/jquery-1.8.1.min.js"><\/script>')</script>
	
	<script src="<?php bloginfo('template_directory'); ?>/js/libs/fresco.js"></script>
	
	<script>
		function loadAsync(url, loadFn) {
		    loadFn = loadFn || function() {}
		    $(function() {
		        var script = document.createElement('script');
		        script.src = url;
		        script.async = true;
		        $(script).on('load', loadFn);
		        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(script, s);
		    });
		}
		
		if ((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/iPad/i))) {
		    loadAsync('<?php bloginfo('template_directory'); ?>/js/libs/ios-orientationchange-fix.min.js');
		}
	</script>

	</body>
	
</html>