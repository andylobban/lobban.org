		<footer role="contentinfo">
			
		</footer>

		<div class="edge edge--top"></div>
		<div class="edge edge--bottom"></div>
		<div class="edge edge--left"></div>
		<div class="edge edge--right"></div>
        
        <script>
			(function () {
				var js;
				if (typeof JSON !== 'undefined' && 'querySelector' in document && 'addEventListener' in window) {
					js = '//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js';
				} else {
					js = '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js';
				}
				document.write('<script src="' + js + '"><\/script>');
			}());
		</script>

		<script>!window.jQuery && document.write('<script src="<?php echo get_template_directory_uri(); ?>/dist/js/libs/jquery-1.10.2.min.js"><\/script>')</script>
        
        <script src="<?php echo get_template_directory_uri(); ?>/dist/js/app.js"></script>

        <?php if(is_front_page()) {?>
        	<script src="<?php echo get_template_directory_uri(); ?>/dist/js/home.js"></script>
	        <script src="<?php echo get_template_directory_uri(); ?>/dist/js/libs/skrollr.min.js"></script>
		    <script>
		    	var s = skrollr.init();

		    	$(function() {
				  $('a[href*=#]:not([href=#])').click(function() {
				    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				      var target = $(this.hash);
				      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				      if (target.length) {
				        $('html,body').animate({
				          scrollTop: target.offset().top
				        }, 1500);
				        return false;
				      }
				    }
				  });
				});
		    </script>
		<?php }?>
        
    </body>

</html>