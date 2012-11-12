<?php get_header(); ?>

<section id="content" role="main">

	<?php while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" class="clearfix entry <?php
$category = get_the_category(); 
echo $category[0]->category_nicename;
?>">
		<footer>
		
			<time>
				<?php the_time('jS F, Y'); ?>
			</time>
		
		</footer>
		
		<section class="article-content">
		
			<h1><?php the_title(); ?></h1>
			
			<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>

			<?php the_excerpt(); ?>
			
			<?php else : ?>

			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?>
		
			<?php endif; ?>
			
		</section>
			
	</article>

	<?php endwhile; // End the loop. Whew. ?>
			
</section>

<?php get_footer(); ?>