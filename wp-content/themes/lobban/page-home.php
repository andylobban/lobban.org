<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
    <div class="home__wrapper">
        <nav class="home__nav" role="navigation">
            <ul>
                <li><a href="/projects">Projects</a></li>
                <li><a href="/work">Work</a></li>
                <li><a href="/journal">Journal</a></li>
                <li><a href="/info">Info</a></li>
            </ul>
        </nav>
        <main class="home__info" role="main">
            <div class="home__info__wrapper">
                <h1 class="home__info__name">Andy Lobban</h1>
                <p class="home__info__location">Edinburgh, Scotland</p>
                <ul class="home__info__intro">
                    <li>Principal product designer at <a href="https://fanduel.com">FanDuel</a></li>
                    <li>Co-owner of <a href="http://gerrylovesrecords.com">Gerry Loves Records</a></li>
                    <li>Owner of <a href="http://secreteditions.com">Secret Editions</a></li>
                    <li>Some <a href="/info">other stuff</a></li>
                </ul>
                <?php include TEMPLATEPATH . '/social-links.php'; ?>
            </div>
        </main>
    </div>
    <div class="edge edge--top"></div>
    <div class="edge edge--bottom"></div>
    <div class="edge edge--left"></div>
    <div class="edge edge--right"></div>
<?php get_footer(); ?>