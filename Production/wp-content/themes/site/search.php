<?php get_header(); ?>

<div class="wrapper">
	
	<div class="main-content col small_4 medium_8 large_7">
	
		<h1 class="page-title"><?php printf( __( 'Search results for "%s"', 'twentytwelve' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
	
		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
				
				<article class="excerpt">
			
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						
					<?php the_excerpt(); ?>
					
				</article>
				
			<?php endwhile; ?>

			<?php else : ?>

		<?php endif; ?>
		
	</div>

	<?php get_sidebar(); ?>
	
</div>

<?php get_footer(); ?>