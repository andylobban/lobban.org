<?php get_header(); ?>

<main id="content" role="main">
	<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <article <?php post_class( 'article article--single grid wrapper' ); ?>>
            <time class="article__date">
                <?php the_time('j F Y') ?>
            </time>
            <div class="article__body">
            	<h1 class="headline article__body__title">
                    <?php the_title(); ?>
                </h1>
                <div class="article__content body-copy">
                    <?php the_content(); ?>
                </div>
            </div>
        </article>
    <?php endwhile; ?>
    <?php endif; ?>
    <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>