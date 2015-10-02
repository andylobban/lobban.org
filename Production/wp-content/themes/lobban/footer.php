		<footer role="contentinfo">
			<div class="wrapper clearfix">
				<ul class="footer__social">
					<li><a class="icon-mail" href="mailto:andy@lobban.org"><span class="away">Email</span></a></li>
	                <li><a class="icon-twitter" href="https://twitter.com/nonimage"><span class="away">Twitter</span></a></li>
	                <li><a class="icon-instagram" href="https://instagram.com/nonimage/"><span class="away">Instagram</span></a></li>
	                <li><a class="icon-facebook" href="https://www.facebook.com/andylobban"><span class="away">Facebook</span></a></li>
	            </ul>
			</div>
		</footer>

		<div class="edge edge--top"></div>
		<div class="edge edge--bottom"></div>
		<div class="edge edge--left"></div>
		<div class="edge edge--right"></div>

		<script src="<?php echo get_template_directory_uri(); ?>/dist/js/core.js"></script>
        
        <?php if(is_front_page()) {?>
        	<script src="<?php echo get_template_directory_uri(); ?>/dist/js/home.js"></script>
		<?php }?>
		
		<?php if(!isset($_COOKIE['fontsloaded'])){?>
			<script>function cookie(e,o,i){if(void 0===o){var t="; "+window.document.cookie,n=t.split("; "+e+"=");return 2===n.length?n.pop().split(";").shift():null}var c,d=new Date;d.setTime(d.getTime()+24*i*60*60*1e3),c="; expires="+d.toGMTString(),window.document.cookie=e+"="+o+c+"; path=/"}cookie("fontsloaded","true",14);</script>
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