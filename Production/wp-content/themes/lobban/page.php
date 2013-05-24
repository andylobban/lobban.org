<?php include ('wp-content/themes/lobban/header.php'); ?>

<section id="content" role="main">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
		
			<section class="entry">

				<header>
			
					<h1><?php the_title(); ?></h1>
			
				</header>
		
				<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
	
				<?php the_excerpt(); ?>
				
				<?php else : ?>
	
				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?>
			
				<?php endif; ?>
				
			</section>
	
	<?php endwhile; else: ?>

	<p>Sorry, no posts matched your criteria.</p>

	<?php endif; ?>
			
</section>

<?php include ('wp-content/themes/lobban/footer.php'); ?>