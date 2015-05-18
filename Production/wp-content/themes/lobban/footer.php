		<footer role="contentinfo">
			

		
		</footer>

		<div class="edge edge__top"></div>
		<div class="edge edge__bottom"></div>
		<div class="edge edge__left"></div>
		<div class="edge edge__right"></div>
        
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

        <script>

        	if($(window).width() >= 640){
				var logoAnimate = function(){
				    $('.logo').each(function(){
				        var newTop0 = $(this).attr('data-0').replace('top: 20vh','top: 40vh');
				        $(this).attr('data-0', newTop0);
				    });
				    $('.logo a').each(function(){
				        var newFontSize0 = $(this).attr('data-0').replace('font-size: 2em','font-size: 3em');
				        $(this).attr('data-0', newFontSize0);
				    });
				}
			}
			logoAnimate();
		</script>

        <script src="<?php echo get_template_directory_uri(); ?>/dist/js/libs/skrollr.min.js"></script>
	    <script>
	    	var s = skrollr.init();
	    </script>
		
		<script>			

			$(function() {
			  $('a[href*=#]:not([href=#])').click(function() {
			    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			      var target = $(this.hash);
			      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			      if (target.length) {
			        $('html,body').animate({
			          scrollTop: target.offset().top
			        }, 1000);
			        return false;
			      }
			    }
			  });
			});

		</script>
        
    </body>

</html>