<?php
/*
Template Name: Work
*/
?>

<?php get_header(); ?>

<main class="page--work" id="content" role="main">
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="grid grid--small wrapper page__header__wrapper">
            <div class="page__header__shade"></div>
            <h1 class="page__header headline">Work</h1>
        </div>
        <div class="grid wrapper">
            <div class="work__section work__section--fanduel grid grid--small">
                <h2 class="work__section__logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/fanduel-horizontal-logo.svg" alt="FanDuel" />
                </h2>
                <div class="work__section__content">
                    <h3 class="work__section__title">Principal product designer</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="work__section__support">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/fanduel.jpg" alt="FanDuel" />
                    <div class="work__section__support__shade"></div>
                </div>
            </div>
            <div class="work__section work__section--stormid grid grid--small">
                <div class="work__section__content">
                    <h2 class="work__section__logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/storm-id-logo.svg" alt="Storm ID" />
                    </h2>
                    <h3 class="work__section__title">Digital designer</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>