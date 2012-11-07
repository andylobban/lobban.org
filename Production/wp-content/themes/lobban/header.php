<!DOCTYPE html>

<!--[if IE 7 ]><html lang="en" class="old"><![endif]-->
<!--[if IE 8 ]><html lang="en" class="ie8"><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html lang="en"><!--<![endif]-->

	<head>

		<meta charset="utf-8" />

		<title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta http-equiv="cleartype" content="on">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="apple-mobile-web-app-title" content="Andy Lobban">

		<meta name="description" content="<?php  bloginfo('description'); ?>" />
        <meta property="og:title" content="<?php wp_title(); ?>" />
        <meta property="og:description" content="<?php  bloginfo('description'); ?>" />
				
		<meta name="verify-v1" content="/tszQRokQGMmYyaa9onuK8KaVEdDtFiTHsiCOGd3UO0=" />
				
		<link rel="stylesheet" media="not print" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
		<?php if (gallery_shortcode($post->ID)){ 
			echo '<link rel="stylesheet" media="not print" href="http://lobban.org/wp-content/themes/lobban/css/fresco.css" />';
		} ?>
		
		<!--[if lte IE8]>
			<link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri(); ?>/css/legacy.css" />
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<script type="text/javascript" src="http://use.typekit.com/upu8ark.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/icons/favicon.ico" />
			
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('url'); ?>/feed" />
		
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
 
  		<?php if ( is_single() ) { 
  			echo '<link rel="canonical" href="';
			echo get_permalink();
			echo '" />';
			wp_ozh_yourls_head_linkrel(); 
  			} 
  		?>
						
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-57516-17']);
			_gaq.push(['_trackPageview']);
			(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
		
	</head>
	
	<body id="hcard-Andy-Lobban" class="vcard">		
		
		<header class="clearfix" role="banner">
				
			<h1><a class="url fn n" href="<?php bloginfo('url'); ?>" rel="me"><span class="given-name">Andy</span> <span class="family-name">Lobban</span></a></h1>
	
			<nav>
				
				<ul>
					<li><a href="<?php bloginfo('url'); ?>">About/Contact</a></li>
					<li><a href="<?php bloginfo('url'); ?>/journal">Journal</a></li>
				</ul>
				
			</nav>
							
		</header>
		