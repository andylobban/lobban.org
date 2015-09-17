<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8" />

        <title><?php wp_title( '|', true, 'right' ); ?></title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta http-equiv="cleartype" content="on">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <meta name="apple-mobile-web-app-title" content="Andy Lobban">
		<meta property="og:title" content="<?php wp_title( '|', true, 'right' ); ?>" />
		<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/dist/images/apple-touch-icon.png" />

        <link rel="stylesheet" media="not print" href="<?php echo get_template_directory_uri(); ?>/dist/css/style.css" />

        <!--[if lte IE 8]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/dist/images/apple-touch-icon.png" />
        <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/dist/images/apple-touch-icon.png" />

    </head>

    <body <?php body_class( $class ); ?>>

    	<a href="#content" class="away skip-link">Skip to main content</a>
    
    	<header role="banner" data-20p="padding-top: 0.4em;" data-30p="padding-top: 1.45em;">
    		<div class="wrapper clearfix">
		
				<div class="logo col small-12 medium-5 large-5 xlarge-5">
					<a href="/">
						Andy Lobban
						<span class="shape"
						data-0="
						opacity: 1;" 
						data-36p="
						opacity: 0;"></span>
					</a>
					<ul class="social home__social" 
					data-0="
						display: inline-block;
						opacity: 1;" 
					data-20p="
						opacity: 1;" 
					data-36p="
						opacity: 0;"
					data-37p="
						display: none;"
					>
		                <li><a class="icon-mail" href="mailto:andy@lobban.org"><span class="away">Email</span></a></li>
		                <li><a class="icon-twitter" href="https://twitter.com/nonimage"><span class="away">Twitter</span></a></li>
		                <li><a class="icon-instagram" href="https://instagram.com/nonimage/"><span class="away">Instagram</span></a></li>
		                <li><a class="icon-facebook" href="https://www.facebook.com/andylobban"><span class="away">Facebook</span></a></li>
		            </ul>
				</div>
				
				<nav class="col small-12 medium-9 large-6 switch--medium" role="navigation">
					<ul>
						<li><a href="/work">Work</a></li>
						<li><a href="/journal">Journal</a></li>
						<li><a href="/info">Info</a></li>
					</ul>
				</nav>

			</div>
		
		</header>
		