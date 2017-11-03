<?php get_header(); ?>

<main class="page" id="content" role="main">
    <h1 class="page__header headline">Journal</h1>
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <article <?php post_class( 'article journal__list__item grid' ); ?>>
            <time class="article__date">
                <?php if ( get_the_time('Y') == date('Y')) { ?> 
                    <?php the_time('j F') ?> 
                <?php } else { ?> 
                    <?php the_time('j F Y') ?> 
                <?php } ?>
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
    <div class="pagination push--top push--bottom clearfix">
        <div class="pagination__newer col small-6 medium-5 large-4 xlarge-3 push--medium-2 push--large-2 push--xlarge-2"><?php previous_posts_link( 'Newer' ); ?></div>
        <div class="pagination__older col small-6 medium-5 large-3 xlarge-3"><?php next_posts_link( 'Older' ); ?></div>
    </div>
    <?php endif; ?>
    <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>