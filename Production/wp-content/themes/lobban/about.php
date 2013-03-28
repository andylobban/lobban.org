<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" class="clearfix wrapper entry">
			
			<h1><?php the_title(); ?></h1>		
	
			<?php the_content(); ?>
				
		</article>

	<?php endwhile; ?>
			
<?php get_footer(); ?>