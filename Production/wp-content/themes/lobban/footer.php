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

		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"><\/script>

		<script>!window.jQuery && document.write('<script src="<?php echo get_template_directory_uri(); ?>/dist/js/libs/jquery-1.10.2.min.js"><\/script>')</script>

		<script src="<?php echo get_template_directory_uri(); ?>/dist/js/libs/fontfaceobserver.js"></script>
		<script>
		    (function( w ){
		    if( w.document.documentElement.className.indexOf( "fonts-loaded" ) > -1 ){
		        return;
		    }
		    var font1 = new w.FontFaceObserver( "teimposheadlineblack", {
		        weight: 400
		    });
		    var font2 = new w.FontFaceObserver( "karlaregular", {
		        weight: 400
		    });
		    var font3 = new w.FontFaceObserver( "karlabold", {
		        weight: 400
		    });
		    var font4 = new w.FontFaceObserver( "karlaitalic", {
		        weight: 400
		    });
		    w.Promise
		        .all([font1.check(), font2.check(), font3.check(), font4.check()])
		        .then(function(){
		            w.document.documentElement.className += " fonts-loaded";
		        });
		    }( this ));
		</script>
        
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