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
				var logo_responsive = function(){
				    $('.logo').each(function(){
				        var newFontSize0 = $(this).attr('data-0').replace('font-size: 2.2em','font-size: 5em');
				        $(this).attr('data-0', newFontSize0);
				        var newLeft0 = $(this).attr('data-0').replace('left: 0px;','left: 50px;');
				        $(this).attr('data-0', newLeft0);
				        var newLeft50 = $(this).attr('data-50p').replace('left: 0px;','left: 10px;');
				        $(this).attr('data-50p', newLeft50);
				        var newTop0 = $(this).attr('data-0').replace('top: 2em;','top: 2.5em;');
				        $(this).attr('data-0', newTop0);
				        var newTop50 = $(this).attr('data-50p').replace('top: 0.2em;','top: 0.65em;');
				        $(this).attr('data-50p', newTop50);
				    });
				}
			}
			if($(window).width() >= 960) {
				var logo_responsive = function(){
				    $('.logo').each(function(){
				        var newFontSize0 = $(this).attr('data-0').replace('font-size: 2.2em','font-size: 10em');
				        $(this).attr('data-0', newFontSize0);
				        var newLeft0 = $(this).attr('data-0').replace('left: 0px;','left: 40px;');
				        $(this).attr('data-0', newLeft0);
				        var newLeft50 = $(this).attr('data-50p').replace('left: 0px;','left: 10px;');
				        $(this).attr('data-50p', newLeft50);
				        var newTop0 = $(this).attr('data-0').replace('top: 2em;','top: 3em;');
				        $(this).attr('data-0', newTop0);
				        var newTop50 = $(this).attr('data-50p').replace('top: 0.2em;','top: 0.75em;');
				        $(this).attr('data-50p', newTop50);
				    });
				}
			}
			if(($(window).width() >= 960) && ($(window).height() >= 800)) {
				var logo_responsive = function(){
				    $('.logo').each(function(){
				        var newFontSize0 = $(this).attr('data-0').replace('font-size: 2.2em','font-size: 5em');
				        $(this).attr('data-0', newFontSize0);
				        var newLeft0 = $(this).attr('data-0').replace('left: 0px;','left: 70px;');
				        $(this).attr('data-0', newLeft0);
				        var newLeft50 = $(this).attr('data-50p').replace('left: 0px;','left: 20px;');
				        $(this).attr('data-50p', newLeft50);
				        var newTop0 = $(this).attr('data-0').replace('top: 2em;','top: 1.25em;');
				        $(this).attr('data-0', newTop0);
				        var newTop50 = $(this).attr('data-50p').replace('top: 0.2em;','top: 0.65em;');
				        $(this).attr('data-50p', newTop50);
				    });
				}
			}
			if($(window).width() >= 1280) {
				var logo_responsive = function(){
				    $('.logo').each(function(){
				        var newFontSize0 = $(this).attr('data-0').replace('font-size: 2.2em','font-size: 5em');
				        $(this).attr('data-0', newFontSize0);
				        var newLeft0 = $(this).attr('data-0').replace('left: 0px;','left: 50px;');
				        $(this).attr('data-0', newLeft0);
				        var newLeft50 = $(this).attr('data-50p').replace('left: 0px;','left: 10px;');
				        $(this).attr('data-50p', newLeft50);
				        var newTop0 = $(this).attr('data-0').replace('top: 1.5em;','top: 1em;');
				        $(this).attr('data-0', newTop0);
				        var newTop50 = $(this).attr('data-50p').replace('top: 0.3em;','top: 0.65em;');
				        $(this).attr('data-50p', newTop50);
				    });
				}
			}
			if(($(window).width() >= 1280) && ($(window).height() >= 800)) {
				var logo_responsive = function(){
				    $('.logo').each(function(){
				    	var newFontSize0 = $(this).attr('data-0').replace('font-size: 2.2em','font-size: 7em');
				        $(this).attr('data-0', newFontSize0);
				        var newLeft0 = $(this).attr('data-0').replace('left: 0px;','left: 90px;');
				        $(this).attr('data-0', newLeft0);
				        var newLeft50 = $(this).attr('data-50p').replace('left: 0px;','left: 20px;');
				        $(this).attr('data-50p', newLeft50);
				        var newTop0 = $(this).attr('data-0').replace('top: 1.5em;','top: 1em;');
				        $(this).attr('data-0', newTop0);
				        var newTop50 = $(this).attr('data-50p').replace('top: 0.3em;','top: 0.65em;');
				        $(this).attr('data-50p', newTop50);
				    });
				}
			}
			logo_responsive();
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