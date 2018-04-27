<?php
/*
Template Name: Info
*/
?>

<?php get_header(); ?>

<main class="page--info" id="content" role="main">
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="grid wrapper">
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
                    <p>Design Director at <a href="/work">FanDuel</a></p>
                    <p>Co-owner of <a href="http://gerrylovesrecords.com">Gerry Loves Records</a></p>
                    <p>Husband and father</p>
                    <?php include TEMPLATEPATH . '/social-links.php'; ?>
                </div>
            </section>
        </div>
        <div class="grid wrapper">
            <section class="info__section info__section--projects body-copy grid">
                <h2 class="headline--sub">Projects</h2>
                <ul class="grid">
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
                        <p>Sometime co-organiser of a design/dev/tech meetup. With gin.</p>
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
                        <p>A blog of scans from my Instax photos.</p>
                    </li>
                    <li>
                        <p><a href="/info/projects" class="button">Older projects</a></p>
                    </li>
                </ul>
            </section>
            <section class="info__section body-copy grid">
                <h2 class="headline--sub">Work</h2>
                <ul>
                    <li>
                        <h3>2018-present: Design Director at <a href="http://fanduel.com" rel="me">FanDuel</a></h3>
                        <p>I should really write something here</p>
                    </li>
                    <li>
                        <h3>2015-2017: Principal product designer at <a href="http://fanduel.com" rel="me">FanDuel</a></h3>
                        <p>Lead product design for Android, iOS and web apps, as well as management and team direction</p>
                    </li>
                    <li>
                        <h3>2010-2015: Designer at <a href="http://stormid.com" rel="me">Storm ID</a></h3>
                        <p>Digital design, frontend development, a bit of user research</p>
                    </li>
                    <li>
                        <h3>2007-2010: Freelance designer as <a href="http://nonimage.com" rel="me">Nonimage</a></h3>
                        <p>Freelance digital and print design</p>
                    </li>
                    <li>
                        <h3>2004-2007: Designer at What's On Publications</h3>
                        <p>Magazine and advertising design</p>
                    </li>
                    <li>
                        <h3>2000-2004: BA Hons in Graphic Communcation at Napier University, Edinburgh</h3>
                        <p>Design for print and web, pre-production, printing, finishing, publishing, marketing</p>
                    </li>
                    <li>
                        <p><a href="/work" class="button">My work</a> <a href="https://www.linkedin.com/in/andylobban/" class="button">LinkedIn</a></p>
                    </li>
                </ul>
            </section>
            <section class="info__section body-copy grid">
                <h2 class="headline--sub">Interviews</h2>
                <ul>
                    <li>
                        <h3><a title="Andy Lobban interview on Clear-Minded Creative" href="http://www.clearmindedcreative.com/andy-lobban/">Interview on Clear-Minded Creative</a></h3>
                        <p>Milo McLaughlin asked me about design, Gerry Loves Records and Off The Beaten Tracks, among other things.</p>
                    </li>
                    <li>
                        <h3>Gerry Loves Records interviews</h3>
                        <p><a href="/journal/2015/11/08/physical-music-documentary/">Watch me</a> try to make sense of physical music formats in a documentary by Kevin Robertson.</p>
                        <p>I’ve also done written interviews for with the likes of <a title="Andy Lobban interview with The List" href="http://www.list.co.uk/article/31515-labels-of-love-gerry-loves-records/">The List</a>, <a title="Andy Lobban interview with The Scotsman" href="http://radar.scotsman.com/viewpost.aspx?id=81">The Scotsman</a>, <a title="Andy Lobban interview with Peenko" href="http://www.peenko.co.uk/2010/09/scottish-diy-labels-8-gerry-loves.html">Peenko</a>, <a title="Andy Lobban interview with The Bomber Jacket" href="http://thebomberjacket.com/2012/06/26/gerry-loves-records-and-we-like-gerry-a-lot/">The Bomber Jacket</a>, and&nbsp;<a title="Andy Lobban interview at Argos Barks" href="http://www.argosbarks.com/post/655684670/interview-gerry-loves-records">Argos Barks</a>.</p>
                    </li>
                </ul>
            </section>
            <section class="info__section info__section--social body-copy grid">
                <h2 class="headline--sub">Social</h2>
                <ul class="grid grid--small">
                    <li><a class="url" href="http://bandcamp.com/andylobban" rel="me">Bandcamp</a></li>
                    <li><a class="url" href="http://dribbble.com/andylobban" rel="me">Dribbble</a></li>
                    <li><a class="url" href="http://facebook.com/andylobban" rel="me">Facebook</a></li>
                    <li><a class="url" href="http://flickr.com/photos/nonimage" rel="me">Flickr</a></li>
                    <li><a class="url" href="https://foursquare.com/andylobban" rel="me">Foursquare</a></li>
                    <li><a class="url" href="http://github.com/andylobban" rel="me">Github</a></li>
                    <li><a class="url" href="https://www.goodreads.com/andylobban" rel="me">Goodreads</a></li>
                    <li><a class="url" href="https://plus.google.com/+AndyLobban" rel="me">Google Plus</a></li>
                    <li><a class="url" href="http://instagram.com/andylobban" rel="me">Instagram</a></li>
                    <li><a class="url" href="http://kickstarter.com/profile/nonimage" rel="me">Kickstarter</a></li>
                    <li><a class="url" href="http://last.fm/user/nonimage" rel="me">Last.fm</a></li>
                    <li><a class="url" href="http://linkedin.com/in/andylobban" rel="me">LinkedIn</a></li>
                    <li><a class="url" href="http://mixcloud.com/andylobban" rel="me">Mixcloud</a></li>
                    <li><a class="url" href="https://pinboard.in/u:andylobban/" rel="me">Pinboard</a></li>
                    <li><a class="url" href="http://open.spotify.com/user/nonimage" rel="me">Spotify</a></li>
                    <li><a class="url" href="http://andylobban.tumblr.com" rel="me">Tumblr</a></li>
                    <li><a class="url" href="http://twitter.com/andylobban" rel="me">Twitter</a></li>
                    <li><a class="url" href="http://vimeo.com/andylobban" rel="me">Vimeo</a></li>
                    <li><a class="url" href="https://www.youtube.com/c/AndyLobban" rel="me">YouTube</a></li>
                    <li>(<a href="/info/archive">Abandoned profiles</a>)</li>
                </ul>
            </section>
        </div>
    <?php endwhile; ?>              
    <?php endif; ?>
</main>
<?php get_footer(); ?>
