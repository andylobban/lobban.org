<?php
/*
Template Name: Info
*/
?>

<?php get_header(); ?>

<main class="page--info article wrapper push--bottom clearfix" id="content" role="main">
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <h1 class="page__header col small-12 medium-12 large-12 xlarge-12 modules__header">
            <?php the_title(); ?>
        </h1>
        <div class="article__content">
            <div class="info__intro modules push--bottom clearfix">
                <figure class="col small-12 medium-5 push--medium-1 large-4 push--large-2 xlarge-4 push--xlarge-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/andy-lobban.jpg" alt="Photo of Andy Lobban" width="700" height="525" />
                    <p class="wp-caption-text">Photo by <a href="http://www.wojtekkutyla.com/">Wojtek Kutyla</a></p>
                </figure>
                <section class="col small-12 medium-6 large-6 xlarge-6">
                    <p>I live in Edinburgh, Scotland. I’m currently a designer at <a href="http://stormid.com">Storm ID</a>. <span class="break">I’m married to the ever-patient <a href="http://twitter.com/loislobban">Lois</a>.</span></p>
                    <h2>Contact</h2>
                    <ul>
                        <li>Email: <a href="mailto:andy@lobban.org">andy@lobban.org</a></li>
                        <li>Twitter: <a href="http://twitter.com/nonimage">@nonimage</a></li>
                    </ul>
                </section>
            </div>
            <section>
                <h2 class="col small-12 medium-12 large-12 xlarge-12 modules__header">Current projects</h2>
                <ul class="modules clearfix">
                    <li class="module col small-12 medium-6 large-4 xlarge-3 push--bottom">
                        <h3><a href="http://lobban.org/journal">Journal</a></h3>
                        <p>Occasional writing, links and some photos.</p>
                    </li>
                    <li class="module col small-12 medium-6 large-4 xlarge-3 push--bottom">
                        <h3><a href="http://gerrylovesrecords.com" rel="me">Gerry Loves Records</a></h3>
                        <p>A small record label specialising in quality vinyl.</p>
                    </li>
                    <li class="module col small-12 medium-6 large-4 xlarge-3 push--bottom">
                        <h3><a href="http://secreteditions.com">Secret Editions</a></h3>
                        <p>A tiny record label releasing experimental (pop) music.</p>
                    </li>
                    <li class="module col small-12 medium-6 large-4 xlarge-3 push--bottom">
                        <h3><a href="http://film.lobban.org" rel="me">Photoblog</a></h3>
                        <p>A blog of attempts at film photography.</p>
                    </li>
                    <li class="module col small-12 medium-6 large-4 xlarge-3 push--bottom">
                        <h3><a title="Andy Lobban's Instant Film photo blog" href="http://instant.lobban.org" rel="me">Instant</a></h3>
                        <p>A blog of scans from my <a href="http://www.fujifilm.com/products/instant_photo/cameras/instax_mini_8/">Instax</a> photos.</p>
                    </li>
                    <li class="module col small-12 medium-6 large-4 xlarge-3 push--bottom">
                        <h3><a href="http://theshyretirers.com" rel="me">The Shy Retirers</a></h3>
                        <p>An aggregator of posts from Scottish music blogs.</p>
                    </li>
                    <li class="module col small-12 medium-6 large-4 xlarge-3 push--bottom">
                        <h3><a href="http://twitter.com/sleevesreceived" rel="me">Sleeves Received Twitter</a></h3>
                        <p>An unofficial Twitter feed for The Wire's Sleeves Received blog.</p>
                    </li>
                </ul>
            </section>
            <div class="clearfix">
                <section class="col small-12 medium-12 large-5 xlarge-5">
                    <h2>Work</h2>
                    <ul>
                        <li>
                            <h3>2010-present: Designer at <a href="http://stormid.com" rel="me">Storm ID</a></h3>
                            <p>Digital design and front end development (HTML and CSS with a little JS) with a bit of UX design thrown in.</p>
                        </li>
                        <li>
                            <h3>2007-2010: Freelance designer at <a href="http://nonimage.com" rel="me">Nonimage</a></h3>
                            <p>Freelance web and print design.</p>
                        </li>
                        <li>
                            <h3>2004-2007: Designer at What's On Publications</h3>
                            <p>Magazine and advertising design.</p>
                        </li>
                        <li>
                            <h3>2000-2004: BA Hons in Graphic Communcation at Napier University, Edinburgh</h3>
                            <p>Design for print and web, pre-production, printing, finishing, publishing, marketing.</p>
                        </li>
                    </ul>
                </section>
                <section class="col small-12 medium-12 large-5 push--large-2 xlarge-5 push--xlarge-2">
                    <h2>Past projects</h2>
                    <ul>
                        <li>
                            <h3>2009-2012:&nbsp;<a href="http://lobban.org/offthebeatentracks" rel="me">Off The Beaten Tracks</a></h3>
                            <p>A musical project in unusual surroundings. Acoustic sessions in odd places around Edinburgh and beyond. Co-run with <a title="Alex Kirk aka Ted's Records" href="http://tedsrecords.com/">Alex Kirk</a>.</p>
                        </li>
                        <li>
                            <h3>2010-2012: <a href="http://refreshedinburgh.org">Refresh Edinburgh</a></h3>
                            <p>I helped organise the talks portion of Refresh Edinburgh, a meetup for web nerds.</p>
                        </li>
                        <li>
                            <h3>2008-2010:&nbsp;<a href="http://lobban.org/coda-clips" rel="me">Coda Clips</a></h3>
                            <p>A collection of clips for Panic’s <a title="Coda by Panic" href="http://panic.com/coda/">Coda</a>. Co-run with <a title="Sam Brown" href="http://sam.brown.tc/">Sam Brown</a>.</p>
                        </li>
                        <li>
                            <h3>2007-2010: Black Tape Club</h3>
                            <p>A club night in Edinburgh where anyone could do a short DJ set. We also had live music including <a title="Monotonix" href="http://en.wikipedia.org/wiki/Monotonix">Monotonix</a>, <a title="Everything Everything" href="http://www.everything-everything.co.uk/home">Everything Everything</a> and <a title="My Latest Novel" href="http://www.mylatestnovel.com/">My Latest Novel</a>. Co-run with <a title="Andy Chadwick" href="https://twitter.com/andytchadwick">Andy Chadwick</a>.</p>
                        </li>
                        <li>
                            <h3>2008-2009: SXSWisEasy</h3>
                            <p>A repository of information about SXSW, before there were hundreds. Tips, tricks, info for first-timers, highlights, etc.&nbsp;The website is gone but the&nbsp;<a title="SXSW is Easy" href="https://twitter.com/SXSWisEASY">Twitter feed</a>&nbsp;is still there. We ran an experiment, giving out 6 disposable cameras with our contact details on them, asking people to take a couple fo photos and pass them on. <a title="The great SXSWisEasy camera experiment" href="http://www.flickr.com/photos/stalelife/sets/72157617339250745/">Only one</a> ever made it back. Co-run with <a title="Kurt Pennypacker" href="http://kurtpennypacker.com/">Kurt</a>, <a title="Joe Doyle" href="http://joedoyle.com/">Joe</a> and <a title="Connor Turner" href="http://www.ctoverdrive.ca/">Connor</a>.</p>
                        </li>
                        <li>
                            <h3>2003-present:&nbsp;<a title="Nopesport" href="http://www.nopesport.com/">Nopesport</a></h3>
                            <p>The first proper online community for orienteering in the UK. Forums, news, photos and more. Cofounded with&nbsp;<a title="Alastair Brunton" href="http://www.simplyexcited.co.uk/">Alastair Brunton</a>. The site is still active but I'm no longer involved much.</p>
                        </li>
                    </ul>
                </section>
            </div>
            <section>
                <div class="col small-12 medium-12 large-12 xlarge-12 modules__header">
                    <h2>Chat</h2>
                </div>
                <ul class="modules clearfix">
                    <li class="module col small-12 medium-6 large-4 xlarge-4 push--bottom">
                        <h3><a title="Andy Lobban interview on Clear-Minded Creative" href="http://www.clearmindedcreative.com/andy-lobban/">Interview on Clear-Minded Creative</a></h3>
                        <p>Milo McLaughlin asked me about design, Gerry Loves Records and Off The Beaten Tracks, among other things.</p>
                    </li>
                    <li class="module col small-12 medium-6 large-4 xlarge-4 push--bottom">
                        <h3>Gerry Loves Records interviews</h3>
                        <p>I’ve done interviews for the record label with the likes of <a title="Andy Lobban interview with The List" href="http://www.list.co.uk/article/31515-labels-of-love-gerry-loves-records/">The List</a>, <a title="Andy Lobban interview with The Scotsman" href="http://radar.scotsman.com/viewpost.aspx?id=81">The Scotsman</a>, <a title="Andy Lobban interview with Peenko" href="http://www.peenko.co.uk/2010/09/scottish-diy-labels-8-gerry-loves.html">Peenko</a>, <a title="Andy Lobban interview with The Bomber Jacket" href="http://thebomberjacket.com/2012/06/26/gerry-loves-records-and-we-like-gerry-a-lot/">The Bomber Jacket</a>, and&nbsp;<a title="Andy Lobban interview at Argos Barks" href="http://www.argosbarks.com/post/655684670/interview-gerry-loves-records">Argos Barks</a>.</p>
                    </li>
                </ul>
            </section>
            <section>
                <div class="col small-12 medium-12 large-12 xlarge-12 modules__header">
                    <h2>I’m social</h2>
                    <p>You can find me on these networks, at least in spirit.</p>
                </div>
                <ul class="modules clearfix">
                    <li class="module col small-12 medium-4 large-3 xlarge-3"><a class="url ss-twitter" href="http://twitter.com/nonimage" rel="me">Twitter</a></li>
                    <li class="module col small-12 medium-4 large-3 xlarge-3"><a class="url ss-instagram" href="http://instagram.com/nonimage" rel="me">Instagram</a></li>
                    <li class="module col small-12 medium-4 large-3 xlarge-3"><a class="url ss-pinboard" href="http://pinboard.in/u:nonimage" rel="me">Pinboard</a></li>
                    <li class="module col small-12 medium-4 large-3 xlarge-3"><a class="url ss-spotify" href="http://open.spotify.com/user/nonimage" rel="me">Spotify</a></li>
                    <li class="module col small-12 medium-4 large-3 xlarge-3"><a class="url ss-readmill" href="http://www.goodreads.com/user/show/5679909-nonimage" rel="me">Goodreads</a></li>
                    <li class="module col small-12 medium-4 large-3 xlarge-3"><a class="url ss-facebook" href="http://facebook.com/andylobban" rel="me">Facebook</a></li>
                    <li class="module col small-12 medium-4 large-3 xlarge-3"><a class="url bandcamp ss-link" href="http://bandcamp.com/nonimage" rel="me">Bandcamp</a></li>
                    <li class="module col small-12 medium-4 large-3 xlarge-3"><a class="url ss-github" href="http://github.com/nonimage" rel="me">Github</a></li>
                    <li class="module col small-12 medium-4 large-3 xlarge-3"><a class="url ss-delicious" href="http://delicious.com/nonimage" rel="me">Delicious</a></li>
                    <li class="module col small-12 medium-4 large-3 xlarge-3"><a class="url ss-dribbble" href="http://dribbble.com/nonimage" rel="me">Dribbble</a></li>
                    <li class="module col small-12 medium-4 large-3 xlarge-3"><a class="url ss-flickr" href="http://flickr.com/photos/nonimage" rel="me">Flickr</a></li>
                    <li class="module col small-12 medium-4 large-3 xlarge-3"><a class="url ss-foursquare" href="http://foursquare.com/nonimage" rel="me">Foursquare</a></li>
                    <li class="module col small-12 medium-4 large-3 xlarge-3"><a class="url ss-googleplus" href="https://plus.google.com/108664505197038367823/posts" rel="me">Google +</a></li>
                    <li class="module col small-12 medium-4 large-3 xlarge-3"><a class="url ss-kickstarter" href="http://kickstarter.com/profile/nonimage" rel="me">Kickstarter</a></li>
                    <li class="module col small-12 medium-4 large-3 xlarge-3"><a class="url lanyrd ss-link" href="http://lanyrd.com/profile/nonimage" rel="me">Lanyrd</a></li>
                    <li class="module col small-12 medium-4 large-3 xlarge-3"><a class="url ss-lastfm" href="http://last.fm/user/nonimage" rel="me">Last.fm</a></li>
                    <li class="module col small-12 medium-4 large-3 xlarge-3"><a class="url ss-linkedin" href="http://linkedin.com/in/nonimage" rel="me">LinkedIn</a></li>
                    <li class="module col small-12 medium-4 large-3 xlarge-3"><a class="url mixcloud ss-link" href="http://mixcloud.com/nonimage" rel="me">Mixcloud</a></li>
                    <li class="module col small-12 medium-4 large-3 xlarge-3"><a class="url ss-tumblr" href="http://nonimage.tumblr.com" rel="me">Tumblr</a></li>
                    <li class="module col small-12 medium-4 large-3 xlarge-3"><a class="url ss-vimeo" href="http://vimeo.com/nonimage" rel="me">Vimeo</a></li>
                    <li class="module col small-12 medium-4 large-3 xlarge-3"><a class="url ss-vine" href="https://vine.co/u/906274204301803520" rel="me">Vine</a></li>
                    <li class="module col small-12 medium-4 large-3 xlarge-3"><a class="url ss-youtube" href="http://youtube.com/user/nonimage" rel="me">YouTube</a></li>
                    <li class="module col small-12 medium-4 large-3 xlarge-3"><a class="url ss-zerply" href="http://zerply.com/nonimage" rel="me">Zerply</a></li>
                </ul>
            </section>
            <section class="col small-12 medium-12 large-12 xlarge-12">
                <h2>B-sides &amp; rareties</h2>
                <p>You’ll find some more old, abandoned nonsense in the <a href="/info/archive">Archive</a>.</p>
            </section>
        <?php endwhile; ?>              
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>