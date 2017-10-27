<?php
/*
Template Name: Work
*/
?>

<?php get_header(); ?>

<main class="page--portfolio article wrapper push--bottom clearfix" id="content" role="main">
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <h1 class="page__header col small-12 medium-12 large-12 xlarge-12">
            <?php the_title(); ?>
        </h1>
        <div class="article__content">
            <div class="clearfix">
                <section class="col small-12 medium-7 large-6 xlarge-6">
                    <p>I currently work at <a href="http://stormid.com">Storm ID</a> doing digital design and front end development with a bit of UX design thrown in. Before that I freelanced as <a href="http://nonimage.com">Nonimage</a>.</p>
                </section>
                <section class="col small-12 medium-7 large-6 xlarge-6">
                    <p>Maybe one day I'll add some examples of other things I've done, but for now, here's my <a href="http://gerrylovesrecords.com">record label website</a> and some sleeve art I've done for it: <a href="http://music.gerrylovesrecords.com/album/split-ep-2">LOVES019</a>, <a href="http://music.gerrylovesrecords.com/album/victory-lap-the-lowdown-of-a-loud-sound-single">LOVES013</a>, <a href="http://music.gerrylovesrecords.com/album/rick-redbeard-adam-stafford-split-single">LOVES009</a>, <a href="http://music.gerrylovesrecords.com/album/split-ep">LOVES003</a>. 
                    <p>Here's the <a href="https://secreteditions.bandcamp.com/album/argyle-beauty">branding and packaging design</a> for another record label.</p>
                    <p>I made a website for a <a href="http://voxboxmusic.co.uk/">record shop</a>.</p>
                    <p>You can see some branding I did on the <a href="https://instagram.com/p/7hUUlSCpfKYChTe5f9JQlNN3VpaWk1TGajzuA0/?taken-by=tomeagle">side of a truck</a> on a building site.</p>
                    <p>I created a Sass <a href="https://github.com/nonimage/calc-Sass-Grid">grid system based on <code>calc()</code></a> for using fixed or fluid width gutters with fluid width columns.</p>
                </section>
            </div>
        </div>
    <?php endwhile; ?>              
    <?php endif; ?>
</main>

<?php get_footer(); ?>