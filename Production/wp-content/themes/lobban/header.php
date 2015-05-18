<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8" />

        <title><?php wp_title( '|', true, 'right' ); ?></title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta http-equiv="cleartype" content="on">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <meta name="apple-mobile-web-app-title" content="Andy Lobban">
		<meta name="description" content="{{description}}" />
		<meta property="og:title" content="<?php wp_title( '|', true, 'right' ); ?>" />
		<meta property="og:description" content="{{description}}" />
		<meta property="og:image" content="[insert image path here]" />

        <link rel="stylesheet" media="not print" href="<?php echo get_template_directory_uri(); ?>/dist/css/style.css" />

        <!--[if lte IE 8]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <script src="//use.typekit.net/nfa1wtw.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>

        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/dist/images/icons/favicon.ico" />
        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/dist/images/icons/apple-touch-icon.png" />
        <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/dist/images/icons/apple-touch-icon.png" />

    </head>

    <body class="home">
    
    	<header role="banner" data-20p="padding-top: 0.3em;" data-30p="padding-top: 1.5em;">

    		<div class="wrapper clearfix">
		
				<div class="logo col--small--12 col--medium--4 col--large--6 flush--bottom"
				data-0="top: 20vh;" data-30p="top: 0vh;">

					<a href="/" data-0="color: rgb(255,255,255); font-size: 2em; margin-top: -1.2em;" data-30p="color: rgb(0,0,0); font-size: 1em; margin-top: 0em;">
						Andy Lobban
					</a>

				</div>
				
				<nav class="col--small--12 col--medium--8 col--large--6 switch--medium switch--large switch--xlarge flush--bottom" role="navigation">
				
					<ul>
						<li><a href="/portfolio">Portfolio</a></li>
						<li><a href="/journal">Journal</a></li>
						<li><a href="/projects">Projects</a></li>
						<li><a href="/info">Info</a></li>
						<li><a href="/contact">Contact</a></li>
					</ul>
				
				</nav>

			</div>
		
		</header>