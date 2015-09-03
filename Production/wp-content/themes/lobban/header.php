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

        <script>
		  (function(d) {
		    var config = {
		      kitId: 'nfa1wtw',
		      scriptTimeout: 3000
		    },
		    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='//use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
		  })(document);
		</script>

		<link href='http://fonts.googleapis.com/css?family=Work+Sans:400,700,800' rel='stylesheet' type='text/css'>

        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/dist/images/icons/favicon.ico" />
        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/dist/images/icons/apple-touch-icon.png" />
        <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/dist/images/icons/apple-touch-icon.png" />

    </head>

    <body <?php body_class( $class ); ?>>

    	<a href="http://www.edinburgh.gov.uk/#content" class="away skip-link">Skip to main content</a>
    
    	<header role="banner" data-20p="padding-top: 0.3em;" data-30p="padding-top: 1.5em;">

    		<div class="wrapper clearfix">
		
				<div class="logo col small-12 medium-4 large-6"
				data-0="top: 20vh;" data-40p="top: 0vh;">

					<a href="/" data-0="color: rgb(68,68,68); font-size: 2em; 
					margin-top: -1.2em;" data-40p="color: rgb(0,0,0); font-size: 1em; margin-top: 0em;">
						Andy Lobban
					</a>

				</div>
				
				<nav class="col small-12 medium-8 large-6 switch--medium" role="navigation">
				
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