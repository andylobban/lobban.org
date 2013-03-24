<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" class="clearfix wrapper entry <?php $category = get_the_category(); echo $category[0]->category_nicename; ?>">
			<time>
				<?php the_time('j'); ?><sup><?php the_time('S'); ?></sup> <?php the_time('F, Y'); ?>
			</time>
			
			<h1><?php the_title(); ?></h1>
			
			<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
	
				<?php the_excerpt(); ?>
			
			<?php else : ?>
	
				<?php the_content(); ?>
		
			<?php endif; ?>
				
		</article>

	<?php endwhile; ?>
			
<?php get_footer(); ?>