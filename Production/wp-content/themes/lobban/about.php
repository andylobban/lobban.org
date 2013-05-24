<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<div class="clearfix wrapper entry" role="main">
			
			<h1><?php the_title(); ?></h1>		
	
			<?php the_content(); ?>
				
		</div>

	<?php endwhile; ?>
			
<?php get_footer(); ?>