<?php get_header(); ?>

<main class="wrapper" id="content" role="main">
	
	<article class="post col--small--12 col--medium--12 push--large--1 col--large--10 push--xlarge--2 col--xlarge--8 ">
	
		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
			
				<h1><?php the_title(); ?></h1>

				<time>21st May 2015</time>
						
				<?php the_content(); ?>
						
				<section class="sharing clearfix">
			
					<div class="share share-facebook">
						<div class="fb-like" data-send="false" data-layout="button_count" data-width="81" data-show-faces="false"></div>
					</div>
					
					<div class="share share-twitter">
						<a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
					</div>
					
					<div class="share share-google">
						<div class="g-plus" data-action="share" data-annotation="bubble"></div>
					</div>
					
					<div class="share share-linkedin">
						<script type="IN/Share" data-counter="right"></script>
					</div>
				
				</section>
				
			<?php endwhile; ?>

			<?php else : ?>

		<?php endif; ?>
		
	</article>
	
</main>

<?php get_footer(); ?>