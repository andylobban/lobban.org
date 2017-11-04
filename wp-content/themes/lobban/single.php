<?php get_header(); ?>

<main class="page" id="content" role="main">
    <h1 class="page__header headline">Journal</h1>
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <article <?php post_class( 'article single grid' ); ?>>
            <time class="article__date">
                <a href="<?php the_permalink(); ?>">
                    <?php if ( get_the_time('Y') == date('Y')) { ?> 
                        <?php the_time('j F') ?> 
                    <?php } else { ?> 
                        <?php the_time('j F Y') ?> 
                    <?php } ?>
                </a>
            </time>
            <div class="article__body">
                <h2 class="headline article__body__title">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
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