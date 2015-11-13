<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<div id="skrollr-body">

    <main id="content" role="main">

        <div class="clearfix">
            <section class="home__intro push--bottom">
                <ul>
                    <li>Edinburgh, Scotland</li>
                    <li>Designer at <a href="http://stormid.com">Storm ID</a></li>
                    <li>Previously freelance as <a href="http://stormid.com">Nonimage</a></li>
                    <li>Co-owner of <a href="http://gerrylovesrecords.com/">Gerry Loves Records</a></li>
                    <li>Owner of <a href="http://secreteditions.com/">Secret Editions</a></li>
                </ul>
                <div class="intro__more">
                    <a class="icon-down scroll" data-speed="1000" href="#more">There's more</a>
                </div>
            </section>
        </div>

        <div class="wrapper" id="more">
            <section class="home__section clearfix">
                <div class="clearfix">
                    <div class="col small-12 medium-4 large-4 xlarge-4">
                        <h2 class="push--bottom">Projects</h2>
                        <div class="home__project project--film push--bottom b-lazy" data-src="<?php echo get_template_directory_uri(); ?>/dist/images/film.jpg">
                            <a href="http://film.lobban.org">
                                <div class="home__project__info">
                                    <h3>Photoblog</h3>
                                    <p>Attempts at film photography</p>
                                </div>
                            </a>
                        </div>
                        <div class="home__project project--secret-editions push--bottom b-lazy" data-src="<?php echo get_template_directory_uri(); ?>/dist/images/secret-editions.jpg">
                            <a href="http://secreteditions.com">
                                <div class="home__project__info">
                                    <h3>Secret Editions</h3>
                                    <p>Tiny music label releasing experimental (pop) music</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col small-12 medium-4 large-4 xlarge-4">
                        <div class="home__project project--glr push--bottom b-lazy" data-src="<?php echo get_template_directory_uri(); ?>/dist/images/glr.jpg">
                            <a href="http://gerrylovesrecords.com">
                                <div class="home__project__info">
                                    <h3>Gerry Loves Records</h3>
                                    <p>Small record label releasing quality vinyl from mostly Scottish artists</p>
                                </div>
                            </a>
                        </div>
                        <div class="home__project project--instant push--bottom b-lazy" data-src="<?php echo get_template_directory_uri(); ?>/dist/images/instant.jpg">
                            <a href="http://instant.lobban.org">
                                <div class="home__project__info">
                                    <h3>Instant</h3>
                                    <p>Every instant photo I've taken</p>
                                </div>
                            </a>
                        </div>            
                    </div>
                    <div class="col small-12 medium-4 large-4 xlarge-4">
                        <div class="home__project project--shy-retirers push--bottom b-lazy" data-src="<?php echo get_template_directory_uri(); ?>/dist/images/shy-retirers.jpg">
                            <a href="http://theshyretirers.lobban.org">
                                <div class="home__project__info">
                                    <h3>The Shy Retirers</h3>
                                    <p>Aggregator of Scottish music blogs</p>
                                </div>
                            </a>
                        </div>
                        <div class="home__project project--sleeves-received push--bottom b-lazy" data-src="<?php echo get_template_directory_uri(); ?>/dist/images/sleeves-received.jpg">
                            <a href="http://twitter.com/sleevesreceived">
                                <div class="home__project__info">
                                    <h3>Sleeves Received Twitter</h3>
                                    <p>Unofficial Twitter feed for The Wire's Sleeves Received blog</p>
                                </div>
                            </a>
                        </div> 
                        <div class="home__project project--other push--bottom">
                            <a href="/info">
                                <div class="home__project__info">
                                    <h3>Other projects</h3>
                                    <p>Old stuff, mostly</p>
                                </div>
                            </a>
                        </div> 
                    </div>
                </div>
            </section>

            <!--
            <div class="home__section col small-12 medium-8 large-8 xlarge-9 clearfix">
                <h2>Posts</h2>
                <p>Things I've written</p>
                <a class="button" href="/journal">More writing</a>
            </div>

            <div class="home__section col small-12 medium-4 large-4 xlarge-3 clearfix">
                <h2>Links</h2>
                <p>Things I've found</p>
                <a class="button" href="/journal/category/links">More links</a>
            </div>

            <div class="home__section col small-12 medium-12 large-12 xlarge-12 clearfix">
                <h2>Instagram</h2>
                <p>Things I've seen</p>
                <a class="button" href="http://instagram.com/nonimage">More Instagram</a>
            </div>

            <div class="home__section col small-12 medium-8 large-8 xlarge-9 clearfix">
                <h2>Listening</h2>
                <p>Things I've listened to</p>
                <a class="button" href="#">Last.fm</a> <a class="button" href="#">Spotify</a> <a class="button" href="#">Discogs</a>
            </div>

            <div class="home__section col small-12 medium-4 large-4 xlarge-3 clearfix">
                <h2>Reading</h2>
                <p>Things I'm reading</p>
                <a class="button" href="#">Goodreads</a>
            </div>
            -->

        </div>

    </main>

</div>

<?php get_footer(); ?>