<?php
/*
Template Name: Work
*/
?>

<?php get_header(); ?>

<main class="page--work" id="content" role="main">
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="grid">
            <div class="article__body">
                <h1 class="headline page__header">
                    <?php the_title(); ?>
                </h1>
                <div class="article__content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>