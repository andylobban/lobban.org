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
                <div class="work__section__content">
                    <h2 class="work__section__logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/fanduel-horizontal-logo.svg" alt="FanDuel" />
                </h2>
                    <h3 class="work__section__title">Principal product designer &nbsp;&nbsp;<em>2015&ndash;now</em></h3>
                    <p>Digital product design for native and web apps. FanDuel's mission is to make sports more exciting, through our fantasy sports apps in the US market. It's one of Scotland's two <a href="https://en.wikipedia.org/wiki/Unicorn_(finance)">unicorn</a> companies. I lead design work for one of our products, as well as working with the other principals to lead the wider design team.</p>
                    <p><a href="#" class="button">Case study</a></p>
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
                    <h3 class="work__section__title">Digital designer &nbsp;&nbsp;<em>2010&ndash;2015</em></h3>
                    <p>Design for web and native apps for one of Scotland's leading agencies and consultancies. Wireframing, concepts, HTML/CSS development. I worked on project for a range of clients including The Scottish Government, ESPC, The R&amp;A, The City of Edinburgh Council, Standard Life, Young Scot, DC Thomson, Tramway, and ScotCen.</p>
                </div>
                <div class="work__section__support">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/stormid.jpg" alt="Andy working at Storm ID" />
                    <div class="work__section__support__shade"></div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>