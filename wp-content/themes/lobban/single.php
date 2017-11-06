<?php get_header(); ?>

<main id="content" role="main">
	<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <article <?php post_class( 'article grid' ); ?>>
            <time class="article__date">
                <?php if ( get_the_time('Y') == date('Y')) { ?> 
                    <?php the_time('j F') ?> 
                <?php } else { ?> 
                    <?php the_time('j F Y') ?> 
                <?php } ?>
            </time>
            <div class="article__body">
            	<h1 class="headline article__body__title">
                    <?php the_title(); ?>
                </h1>
                <div class="article__content">
                    <?php the_content(); ?>
                </div>
            </div>
        </article>
    <?php endwhile; ?>
    <?php endif; ?>
    <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>