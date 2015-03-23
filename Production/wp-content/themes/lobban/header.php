<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8" />

        <title><?php wp_title( '|', true, 'right' ); ?></title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta http-equiv="cleartype" content="on">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <meta name="apple-mobile-web-app-title" content="{{title}}">
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

		<link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700' rel='stylesheet' type='text/css'>

        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/dist/images/icons/favicon.ico" />
        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/dist/images/icons/apple-touch-icon.png" />
        <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/dist/images/icons/apple-touch-icon.png" />

    </head>

    <body class="home">
    
    	<header class="bottom-space" role="banner" data-0="padding-top: 0.2em;" data-50p="padding-top: 2.4em;">
		
			<div class="logo col--small--12 col--medium--4 col--large--3" 
				data-0="
				font-size: 3em;
				left: 0px;
				line-height: 0.8;
				margin-left: 0;
				position: absolute;
				top: 1.5em;
				-webkit-transform: rotate(355deg);
				-moz-transform: rotate(355deg);
				-o-transform: rotate(355deg);
				" 

				data-50p="
				font-size: 1.8em;
				left: 0px;
				position: fixed;
				top: 0.3em;
				-webkit-transform: rotate(360deg);
				-moz-transform: rotate(360deg);
				-o-transform: rotate(360deg);
				">

				<a href="/" data-0="color: rgb(255,255,255);" data-50p="color: rgb(0,0,0);">Andy Lobban</a>
			
			</div>
			
			<nav class="col--small--12 col--medium--8 col--large--9 switch--medium switch--large switch--xlarge flush--bottom" role="navigation">
			
				<ul>
					<li><a href="/portfolio">Portfolio</a></li>
					<li><a href="/journal">Journal</a></li>
					<li><a href="/projects">Projects</a></li>
					<li><a href="/info">Info</a></li>
					<li><a href="/contact">Contact</a></li>
				</ul>
			
			</nav>
		
		</header>