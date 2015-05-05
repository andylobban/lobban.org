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

       	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:900,900italic' rel='stylesheet' type='text/css'>

        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/dist/images/icons/favicon.ico" />
        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/dist/images/icons/apple-touch-icon.png" />
        <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/dist/images/icons/apple-touch-icon.png" />

    </head>

    <body class="home">
    
    	<header role="banner">
		
			<div class="logo col--small--12 col--medium--3 col--large--3 flush--bottom">
				<a href="/">Andy Lobban</a>
			</div>
			
			<nav class="col--small--12 col--medium--9 col--large--9 switch--medium switch--large switch--xlarge flush--bottom" role="navigation">
			
				<ul>
					<li><a href="/portfolio">Portfolio</a></li>
					<li><a href="/journal">Journal</a></li>
					<li><a href="/projects">Projects</a></li>
					<li><a href="/info">Info</a></li>
					<li><a href="/contact">Contact</a></li>
				</ul>
			
			</nav>
		
		</header>