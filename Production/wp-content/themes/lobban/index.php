<?php get_header(); ?>

<main id="content" role="main">
    <div class="wrapper clearfix">
        <div class="col small-12 medium-12 large-12 xlarge-12">
            <h1 class="page__header">Journal</h1>
        </div>
        <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article <?php post_class( 'journal__article journal__list__item clearfix' ); ?>>
                <div class="col small-12 medium-2 large-2 xlarge-2">
                    <time><?php the_time('d/m/Y'); ?></time>
                </div>
                <div class="col small-12 medium-10 large-7 xlarge-6">
                    <h2>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                    <div class="journal__content">
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
    </div>
</div>

<?php get_footer(); ?>