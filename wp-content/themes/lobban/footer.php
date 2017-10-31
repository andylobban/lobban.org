		<?php if(! is_front_page()) {?>
			<footer role="contentinfo">
				<div class="wrapper clearfix">
					<?php include TEMPLATEPATH . '/social-links.php'; ?>
				</div>
			</footer>
		<?php }?>

		<script src="<?php echo get_template_directory_uri(); ?>/dist/js/core.js"></script>
        
        <?php if(is_front_page()) {?>
        	<script src="<?php echo get_template_directory_uri(); ?>/dist/js/home.js"></script>
		<?php }?>

		<?php if(! is_front_page()) {?>
	        <script src="<?php echo get_template_directory_uri(); ?>/dist/js/libs/fluidvids.min.js"></script>

			<script>
				fluidvids.init({
				  	selector: ['iframe', 'object'], // runs querySelectorAll()
				  	players: ['www.youtube.com', 'player.vimeo.com'] // players to support
				});

				(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
				ga('create', 'UA-57516-17', 'auto');
				ga('send', 'pageview');
			</script>
		<?php }?>
        
    </body>

</html>