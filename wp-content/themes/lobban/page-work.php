<?php
/*
Template Name: Work
*/
?>

<?php get_header(); ?>

<main class="page--work" id="content" role="main">
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="grid wrapper">
            <div class="article__body">
                <h1 class="headline page__header">
                    Work
                </h1>
                <div class="article__content body-copy">
                    Coming soon...
                </div>
            </div>
        </div>
    <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>