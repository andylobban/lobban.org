<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
    <main class="home__info" role="main">
        <div class="home__info__wrapper">
            <h1 class="home__info__name">Andy Lobban</h1>
            <p class="home__info__location">Edinburgh, Scotland</p>
            <ul class="home__info__intro">
                <li>Design Director at <a href="https://fanduel.com">FanDuel</a></li>
                <li>Co-owner of <a href="http://gerrylovesrecords.com">Gerry Loves Records</a></li>
                <li>Owner of <a href="http://secreteditions.com">Secret Editions</a></li>
                <li>Some <a href="/info">other stuff</a></li>
            </ul>
            <?php include TEMPLATEPATH . '/social-links.php'; ?>
        </div>
    </main>
    <div class="edge edge--top"></div>
    <div class="edge edge--bottom"></div>
    <div class="edge edge--left"></div>
    <div class="edge edge--right"></div>
<?php get_footer(); ?>