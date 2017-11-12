<?php
/*
Template Name: Projects
*/
?>

<?php get_header(); ?>

<main class="page--work" id="content" role="main">
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="grid wrapper">
            <div class="article__body">
                <h1 class="headline page__header">
                    <?php the_title(); ?>
                </h1>
                <div class="article__content body-copy">
                    <ul class="grid">
                        <li>
                            <h3>2015: <a href="http://twitter.com/sleevesreceived" rel="me">Sleeves Received Twitter</a></h3>
                            <p>An unofficial Twitter feed for The Wire's Sleeves Received blog.</p>
                        </li>
                        <li>
                            <h3>2012-2016: <a href="http://theshyretirers.com" rel="me">The Shy Retirers</a></h3>
                            <p>An aggregator of posts from Scottish music blogs.</p>
                        </li>
                        <li>
                            <h3>2009-2012:&nbsp;<a href="http://lobban.org/offthebeatentracks" rel="me">Off The Beaten Tracks</a></h3>
                            <p>A musical project in unusual surroundings. Acoustic sessions in odd places around Edinburgh and beyond. With <a title="Alex Kirk aka Ted's Records" href="http://tedsrecords.com/">Alex Kirk</a>.</p>
                        </li>
                        <li>
                            <h3>2010-2012: <a href="http://refreshedinburgh.org">Refresh Edinburgh</a></h3>
                            <p>I helped organise the talks portion of Refresh Edinburgh, a meetup for web nerds.</p>
                        </li>
                        <li>
                            <h3>2008-2010:&nbsp;<a href="http://lobban.org/coda-clips" rel="me">Coda Clips</a></h3>
                            <p>A collection of clips for Panic’s <a title="Coda by Panic" href="http://panic.com/coda/">Coda</a>. With <a title="Sam Brown" href="http://sam.brown.tc/">Sam Brown</a>.</p>
                        </li>
                        <li>
                            <h3>2007-2010: Black Tape Club</h3>
                            <p>A club night in Edinburgh where anyone could do a short DJ set. We also had live music including <a title="Monotonix" href="http://en.wikipedia.org/wiki/Monotonix">Monotonix</a>, <a title="Everything Everything" href="http://www.everything-everything.co.uk/home">Everything Everything</a> and <a title="My Latest Novel" href="http://www.mylatestnovel.com/">My Latest Novel</a>. With <a title="Andy Chadwick" href="https://twitter.com/andytchadwick">Andy Chadwick</a>.</p>
                        </li>
                        <li>
                            <h3>2008-2009: SXSWisEasy</h3>
                            <p>A repository of information about SXSW, before there were hundreds. Tips, tricks, info for first-timers, highlights, etc.&nbsp;The website is gone but the&nbsp;<a title="SXSW is Easy" href="https://twitter.com/SXSWisEASY">Twitter feed</a>&nbsp;is still there. We ran an experiment, giving out 6 disposable cameras with our contact details on them, asking people to take a couple fo photos and pass them on. <a title="The great SXSWisEasy camera experiment" href="http://www.flickr.com/photos/stalelife/sets/72157617339250745/">Only one</a> ever made it back. With <a title="Kurt Pennypacker" href="https://www.linkedin.com/pub/kurt-pennypacker/1/709/371">Kurt</a>, <a title="Joe Doyle" href="http://joedoyle.com/">Joe</a> and <a title="Connor Turner" href="http://www.ctoverdrive.ca/">Connor</a>.</p>
                        </li>
                        <li>
                            <h3>2003-2013:&nbsp;<a title="Nopesport" href="http://www.nopesport.com/">Nopesport</a></h3>
                            <p>The first proper online community for orienteering in the UK. Forums, news, photos and more. Cofounded with&nbsp;<a title="Alastair Brunton" href="http://www.simplyexcited.co.uk/">Alastair Brunton</a>. The site is still active but I'm no longer involved.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>