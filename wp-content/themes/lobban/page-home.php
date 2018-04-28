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
            <div class="home__info__intro body-copy">
                <p>Design Director at <a href="https://fanduel.com">FanDuel</a>, co-owner of <a href="http://gerrylovesrecords.com">Gerry Loves Records</a>, owner of <a href="http://secreteditions.com">Secret Editions</a>. </p>
                <p>See some <a href="/work">work</a>, read some <a href="/journal">posts</a>, or get more <a href="/info">info</a>.</p>
            </div>
            <?php include TEMPLATEPATH . '/social-links.php'; ?>
        </div>
    </main>
    <div class="edge edge--top"></div>
    <div class="edge edge--bottom"></div>
    <div class="edge edge--left"></div>
    <div class="edge edge--right"></div>
<?php get_footer(); ?>