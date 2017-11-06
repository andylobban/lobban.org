<?php get_header(); ?>

<main id="content" role="main">
    <div class="grid">
        <h1 class="page__header headline">Journal</h1>
    </div>
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <article <?php post_class( 'article grid' ); ?>>
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
    <div class="pagination grid grid--small">
        <div class="pagination__item--newer">
            <?php previous_posts_link( '<svg viewBox="0 0 24 24"><path d="M16.67 0l2.83 2.83-9.34 9.174 9.34 9.167L16.67 24 4.5 12.004z"/></svg> Newer' ); ?>
        </div>
        <div class="pagination__item--older">
            <?php next_posts_link( 'Older <svg viewBox="0 0 24 24"><path d="M7.33 24L4.5 21.17l9.34-9.174L4.5 2.83 7.33 0 19.5 11.996z"/></svg>' ); ?>
        </div>
    </div>
    <?php endif; ?>
    <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>