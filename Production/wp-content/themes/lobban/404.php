<?php get_header(); ?>

<div class="wrapper">
	
	<article class="main-content col small_4 medium_8 large_7">
	
		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
			
				<h1>404 - Not Found</h1>
						
				<p>Sorry, we couldn't find what you were looking for. Don't worry, you probably followed a broken link or something. Try using the menu or search to find what you were looking for.</p>
				
			<?php endwhile; ?>

			<?php else : ?>

		<?php endif; ?>
		
	</article>

	<?php get_sidebar(); ?>
	
</div>