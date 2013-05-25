<?php
/*
Template Name: Journal
*/
?>

<?php get_header(); ?>

	<div class="clearfix wrapper entry" role="main">
	
		<h1>Journal</h1>
		
		<?php 
	    $args = array( 'numberposts' => 10 );
	    $postslist = get_posts( $args );
	
	    foreach ($postslist as $post) : setup_postdata($post); ?>
	       
	    <article id="post-<?php the_ID(); ?>" class="clearfix entry <?php $category = get_the_category(); echo $category[0]->category_nicename; ?>">
		
			<time>
				<?php the_time('j'); ?><sup><?php the_time('S'); ?></sup> <?php the_time('F, Y'); ?>
			</time>
			
			<h1><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h1>
			
			<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
	
				<?php the_excerpt(); ?>
			
			<?php else : ?>
	
				<?php the_content(); ?>
		
			<?php endif; ?>
				
		</article>
	       
		<?php endforeach; ?>

	</div>
			
<?php get_footer(); ?>