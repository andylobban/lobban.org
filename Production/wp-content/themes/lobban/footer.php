		<!--
		<footer role="contentinfo">
			<div class="wrapper clearfix">
				<div class="col small-12 medium-5 large-5 xlarge-5">
					<h2>Hi!</h2>
					<ul class="social footer__social">
		                <li><a class="icon-mail" href="/contact"><span class="away">Email</span></a></li>
		                <li><a class="icon-twitter" href="https://twitter.com/nonimage"><span class="away">Twitter</span></a></li>
		                <li><a class="icon-instagram" href="https://instagram.com/nonimage/"><span class="away">Instagram</span></a></li>
		                <li><a class="icon-facebook" href="https://www.facebook.com/andylobban"><span class="away">Facebook</span></a></li>
		            </ul>
				</div>
			</div>
		</footer>
		-->

		<div class="edge edge--top"></div>
		<div class="edge edge--bottom"></div>
		<div class="edge edge--left"></div>
		<div class="edge edge--right"></div>

		<script src="<?php echo get_template_directory_uri(); ?>/dist/js/libs/fontfaceobserver.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/dist/js/core.js"></script>
        
        <?php if(is_front_page()) {?>
        	<script src="<?php echo get_template_directory_uri(); ?>/dist/js/home.js"></script>
	        <script src="<?php echo get_template_directory_uri(); ?>/dist/js/libs/skrollr.min.js"></script>
		    <script>
		    	var s = skrollr.init();
		    </script>
		<?php }?>

		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-57516-17', 'auto');
			ga('send', 'pageview');
		</script>
        
    </body>

</html>