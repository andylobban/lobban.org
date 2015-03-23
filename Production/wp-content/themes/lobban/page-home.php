<?php get_header(); ?>

<?php
/*
Template Name: Home
*/
?>

<div class="home-section home-intro clearfix">
			
	<div class="wrapper clearfix" data-stellar-background-ratio="0.5">

		<section class="col small_4 medium_7 large_7">
		
			<h1><?php the_field('introduction_title'); ?></h1>
		
			<?php the_field('introduction_body_text'); ?>
			
		</section>
		
	</div>
	
</div>

<div class="home-divider clearfix home-video" data-stellar-background-ratio="0.7">

	<div class="wrapper">
	
		<section class="col small_4 medium_7 large_8 top-space">			
		
			<video id="example_video_1" class="video-js vjs-default-skin" controls preload="none" width="640" height="264"
				poster="<?php echo get_template_directory_uri(); ?>/Content/images/video-screenshot.jpg"
				data-setup="{}">
				<source src="https://s3-eu-west-1.amazonaws.com/edinburgh-council/edinburgh-ict-4min.mp4" type='video/mp4' />
				<source src="https://s3-eu-west-1.amazonaws.com/edinburgh-council/edinburgh-ict-4min.webm" type='video/webm' />
				<source src="https://s3-eu-west-1.amazonaws.com/edinburgh-council/edinburgh-ict-4min.ogv" type='video/ogg' />
				<track kind="captions" src="<?php echo get_template_directory_uri(); ?>/Content/subtitles.vtt" srclang="en" label="English"></track>
				<track kind="subtitles" src="<?php echo get_template_directory_uri(); ?>/Content/subtitles.vtt" srclang="en" label="English"></track>
			</video>
			
			<script src="<?php echo get_template_directory_uri(); ?>/Content/js/libs/video.js"></script>
			
			<script>
				videojs.options.flash.swf = "<?php echo get_template_directory_uri(); ?>/Content/js/libs/video-js.swf";
			</script>
	
		</section>
	
		<section class="col small_4 medium_5 large_4 top-space">
		
			<h2><?php the_field('video_title'); ?></h2>
	
			<?php the_field('video_body_text'); ?>
								
		</section>
		
	</div>
	
</div>

<div class="home-section clearfix">

	<div class="wrapper">
	
		<div class="home-blurb clearfix">

			<section class="col small_4 medium_8 large_8 top-space">
		
				<?php the_field('section_3_body_copy'); ?>
			
			</section>		
			
		</div>
	
	</div>
	
</div>

<div class="home-divider clearfix home-quote" data-stellar-background-ratio="0.9">

	<div class="wrapper">
	
		<blockquote class="header-type col full top-space">
		
			<p><?php the_field('quote'); ?></p>
		
		</blockquote>
		
	</div>
	
</div>

<div class="home-section home-list clearfix">

	<div class="wrapper">

		<section class="col full top-space">
	
			<?php the_field('list_intro'); ?>
			
			<div class="clearfix">
			
				<?php the_field('list_items'); ?>
				
			</div>
		
		</section>		
	
	</div>
	
</div>

<div class="home-divider clearfix" data-stellar-background-ratio="0.9">

	<div class="wrapper">
	
		<blockquote class="header-type col full top-space">
		
			<?php the_field('featured_copy'); ?>
		
		</blockquote>
		
	</div>
	
</div>

<div class="home-section clearfix">

	<div class="wrapper">

		<section class="col small_4 medium_6 large_6 top-space">
	
			<a class="twitter-timeline" href="https://twitter.com/Edinburgh_CC" data-widget-id="403091982160904192">Tweets by @Edinburgh_CC</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		
		</section>	
		
		<section class="col small_4 medium_6 large_6 top-space">
	
			<img src="<?php echo get_template_directory_uri(); ?>/Content/images/skyline.jpg" alt="" />
			
		</section>		
	
	</div>
	
</div>

<?php get_footer(); ?>