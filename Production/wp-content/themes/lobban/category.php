<?php get_header(); ?>

<div class="wrapper">
	
	<article class="main-content col small_4 medium_8 large_7">
        
        <?php if ( have_posts() ): ?>
            <h1>Category Archive: <?php echo single_cat_title( '', false ); ?></h1>
                
            <?php while ( have_posts() ) : the_post(); ?>
                
                <article class="post">
    			
    				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    				<i class="post-meta">Posted on <time datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( 'jS F Y' ); ?></time>, <?php the_category(', ') ?></i>
    				
    				<?php the_excerpt(); ?>
    			
    			</article>
                
            <?php endwhile; ?>
            <?php else: ?>
                
                <h2>No posts to display in <?php echo single_cat_title( '', false ); ?></h2>
                
        <?php endif; ?>
    
    </article>

	<?php get_sidebar(); ?>
	
</div>

<?php get_footer(); ?>