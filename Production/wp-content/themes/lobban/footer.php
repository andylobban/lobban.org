	</main>
	
	<?php if( !is_home() && !is_page( 'Info' ) ) : ?>
	
		<footer role="contentinfo">
		
			<div class="wrapper">
		
				<p>I'm a designer at <a href="http://stormid.com">Storm ID</a>. I run <a href="http://gerrylovesrecords.com" rel="me" class="url">Gerry Loves Records</a>, I help organise</span> <a href="http://refreshedinburgh.org">Refresh Edinburgh</a> and I started <a href="http://theshyretirers.com" rel="me" class="url">The Shy Retirers</a>. <a href="/about">There's more &rarr;</a></p>
								
				<ul class="profiles">
				
					<li><a href="/contact" class="ss-mail"><span>Email</span></a></li>
					
					<li><a href="http://twitter.com/nonimage" rel="me" class="url ss-twitter"><span>Twitter</span></a></li>
					<li><a href="http://instagram.com/nonimage" rel="me" class="url ss-instagram"><span>Instagram</span></a></li>
					<li><a href="http://pinboard.in/u:nonimage" rel="me" class="url ss-pinboard"><span>Pinboard</span></a></li>
					<li><a href="http://open.spotify.com/user/nonimage" rel="me" class="url ss-spotify"><span>Spotify</span></a></li>
					<li><a href="http://www.goodreads.com/user/show/5679909-nonimage" rel="me" class="url ss-readmill"><span>Goodreads</span></a></li>
					<li><a href="http://facebook.com/andylobban" rel="me" class="url ss-facebook"><span>Facebook</span></a></li> 	
					
				</ul>
										
			</div>
		
		</footer>
		
	<?php endif; ?>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
	<script>!window.jQuery && document.write('<script src="<?php bloginfo('template_directory'); ?>/js/libs/jquery-1.8.1.min.js"><\/script>')</script>
	
	<script src="<?php bloginfo('template_directory'); ?>/js/libs/jquery.fancybox.min.js"></script>
	
	<script>	
	
		$('.fancybox').fancybox();
			
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