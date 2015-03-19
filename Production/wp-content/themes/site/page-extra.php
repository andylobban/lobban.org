<?php get_header(); ?>

<?php
/*
Template Name: Extras
*/
?>

<div class="wrapper">
	
	<article class="main-content col small_4 medium_8 large_7">
	
		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
			
				<h1><?php the_title(); ?></h1>
						
				<?php the_content(); ?>
				
			<?php endwhile; ?>

			<?php else : ?>

		<?php endif; ?>
		
	</article>
	
</div>

<?php get_footer(); ?>