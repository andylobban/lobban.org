<?php
/*
Template Name: Info
*/
?>

<?php get_header(); ?>

<main class="page--info" id="content" role="main">
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="grid">
            <div class="info__pic">
                <h1 class="headline page__header">
                    <?php the_title(); ?>
                </h1>
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/andy-lobban.jpg" alt="Photo of Andy Lobban" width="700" height="525" />
                <div class="info__pic__shade"></div>
            </div>
            <section class="info__intro body-copy">
                <div>
                    <p><em>Edinburgh, Scotland</em></p>
                    <p>Principal product designer at <a href="/work">FanDuel</a></p>
                    <p>Previously <a href="http://stormid.com">Storm ID</a> and <a href="http://nonimage.com">Nonimage</a>.</p>
                    <?php include TEMPLATEPATH . '/social-links.php'; ?>
                </div>
            </section>
        </div>
        <section class="info__section body-copy grid">
            <h2 class="headline--sub">Personal projects</h2>
            <ul>
                <li>
                    <h3><a href="http://gerrylovesrecords.com" rel="me">Gerry Loves Records</a></h3>
                    <p>A small record label specialising in quality vinyl.</p>
                </li>
                <li>
                    <h3><a href="http://secreteditions.com" rel="me">Secret Editions</a></h3>
                    <p>A tiny record label releasing experimental (pop) music.</p>
                </li>
                <li>
                    <h3><a href="http://refreshedinburgh.org">Refresh Edinburgh</a></h3>
                    <p>A designer/developer/tech meetup. With gin.</p>
                </li>
                <li>
                    <h3><a href="http://lobban.org/journal">Journal</a></h3>
                    <p>Occasional writing, links and some photos.</p>
                </li>
                <li>
                    <h3><a href="http://film.lobban.org" rel="me">Photoblog</a></h3>
                    <p>A blog of attempts at film photography.</p>
                </li>
                <li>
                    <h3><a href="http://instant.lobban.org" rel="me">Instant</a></h3>
                    <p>A blog of scans from my <a href="http://www.fujifilm.com/products/instant_photo/cameras/instax_mini_8/">Instax</a> photos.</p>
                </li>
            </ul>
        </section>
        <section class="info__section body-copy grid">
            <h2 class="headline--sub">Work</h2>
            <ul>
                <li>
                    <h3>2016-present: Principal product designer at <a href="http://fanduel.com" rel="me">FanDuel</a></h3>
                    <p>Design lead, plus line management and design team direction.</p>
                </li>
                <li>
                    <h3>2015-2016: Product designer at <a href="http://fanduel.com" rel="me">FanDuel</a></h3>
                    <p>Digital product design for Android, iOS and web apps.</p>
                </li>
                <li>
                    <h3>2010-2015: Designer at <a href="http://stormid.com" rel="me">Storm ID</a></h3>
                    <p>Digital design and frontend development with a bit of UX.</p>
                </li>
                <li>
                    <h3>2007-2010: Freelance designer as <a href="http://nonimage.com" rel="me">Nonimage</a></h3>
                    <p>Freelance digital and print design.</p>
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
        <section class="info__section body-copy grid">
            <h2 class="headline--sub">Chat</h2>
            <ul class="modules clearfix">
                <li>
                    <h3><a title="Andy Lobban interview on Clear-Minded Creative" href="http://www.clearmindedcreative.com/andy-lobban/">Interview on Clear-Minded Creative</a></h3>
                    <p>Milo McLaughlin asked me about design, Gerry Loves Records and Off The Beaten Tracks, among other things.</p>
                </li>
                <li>
                    <h3>Gerry Loves Records interviews</h3>
                    <p>I’ve done interviews for the record label with the likes of <a title="Andy Lobban interview with The List" href="http://www.list.co.uk/article/31515-labels-of-love-gerry-loves-records/">The List</a>, <a title="Andy Lobban interview with The Scotsman" href="http://radar.scotsman.com/viewpost.aspx?id=81">The Scotsman</a>, <a title="Andy Lobban interview with Peenko" href="http://www.peenko.co.uk/2010/09/scottish-diy-labels-8-gerry-loves.html">Peenko</a>, <a title="Andy Lobban interview with The Bomber Jacket" href="http://thebomberjacket.com/2012/06/26/gerry-loves-records-and-we-like-gerry-a-lot/">The Bomber Jacket</a>, and&nbsp;<a title="Andy Lobban interview at Argos Barks" href="http://www.argosbarks.com/post/655684670/interview-gerry-loves-records">Argos Barks</a>.</p>
                </li>
            </ul>
        </section>
        <section class="info__section body-copy grid">
            <h2 class="headline--sub">Past projects</h2>
            <ul>
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
                    <p>The first proper online community for orienteering in the UK. Forums, news, photos and more. Cofounded with&nbsp;<a title="Alastair Brunton" href="http://www.simplyexcited.co.uk/">Alastair Brunton</a>. The site is still active but I'm no longer involved much.</p>
                </li>
            </ul>
        </section>
        <section class="info__section body-copy grid">
            <div>
                <h2 class="headline--sub">I’m social</h2>
                <p>You can find me on these networks, at least in spirit.</p>
            </div>
            <ul class="body-copy">
                <li><a class="url" href="http://twitter.com/nonimage" rel="me">Twitter</a></li>
                <li><a class="url" href="http://instagram.com/nonimage" rel="me">Instagram</a></li>
                <li><a class="url" href="http://pinboard.in/u:nonimage" rel="me">Pinboard</a></li>
                <li><a class="url" href="http://open.spotify.com/user/nonimage" rel="me">Spotify</a></li>
                <li><a class="url" href="http://www.goodreads.com/user/show/5679909-nonimage" rel="me">Goodreads</a></li>
                <li><a class="url" href="http://facebook.com/andylobban" rel="me">Facebook</a></li>
                <li><a class="url" href="http://bandcamp.com/nonimage" rel="me">Bandcamp</a></li>
                <li><a class="url" href="http://github.com/nonimage" rel="me">Github</a></li>
                <li><a class="url" href="http://delicious.com/nonimage" rel="me">Delicious</a></li>
                <li><a class="url" href="http://dribbble.com/nonimage" rel="me">Dribbble</a></li>
                <li><a class="url" href="http://flickr.com/photos/nonimage" rel="me">Flickr</a></li>
                <li><a class="url" href="http://foursquare.com/nonimage" rel="me">Foursquare</a></li>
                <li><a class="url" href="https://plus.google.com/108664505197038367823/posts" rel="me">Google +</a></li>
                <li><a class="url" href="http://kickstarter.com/profile/nonimage" rel="me">Kickstarter</a></li>
                <li><a class="url" href="http://lanyrd.com/profile/nonimage" rel="me">Lanyrd</a></li>
                <li><a class="url" href="http://last.fm/user/nonimage" rel="me">Last.fm</a></li>
                <li><a class="url" href="http://linkedin.com/in/nonimage" rel="me">LinkedIn</a></li>
                <li><a class="url" href="http://mixcloud.com/nonimage" rel="me">Mixcloud</a></li>
                <li><a class="url" href="http://nonimage.tumblr.com" rel="me">Tumblr</a></li>
                <li><a class="url" href="http://vimeo.com/nonimage" rel="me">Vimeo</a></li>
                <li><a class="url" href="https://vine.co/u/906274204301803520" rel="me">Vine</a></li>
                <li><a class="url" href="http://youtube.com/user/nonimage" rel="me">YouTube</a></li>
                <li><a class="url" href="http://zerply.com/nonimage" rel="me">Zerply</a></li>
            </ul>
        </section>
        <section class="info__section body-copy grid">
            <h2 class="headline--sub">B-sides &amp; rareties</h2>
            <p>You’ll find some more old, abandoned nonsense in the <a href="/info/archive">Archive</a>.</p>
        </section>
    <?php endwhile; ?>              
    <?php endif; ?>
</main>
<?php get_footer(); ?>
