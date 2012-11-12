<?php
/*
Template Name: Journal
*/
?>

<?php get_header(); ?>
		
	<?php 
    $args = array( 'numberposts' => 10 );
    $postslist = get_posts( $args );

    foreach ($postslist as $post) : setup_postdata($post); ?>
       
    <article id="post-<?php the_ID(); ?>" class="clearfix entry <?php $category = get_the_category(); echo $category[0]->category_nicename; ?>">
	
		<time>
			<?php the_time('jS F, Y'); ?>
		</time>
		
		<h1><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h1>
		
		<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>

			<?php the_excerpt(); ?>
		
		<?php else : ?>

			<?php the_content(); ?>
	
		<?php endif; ?>
			
	</article>
       
	<?php endforeach; ?>
			
<?php get_footer(); ?>