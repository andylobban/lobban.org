<?php get_header(); ?>

<div class="wrapper">
	
	<article class="main-content col small_4 medium_8 large_7">
	
		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
			
				<h1><?php the_title(); ?></h1>
						
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

	<?php get_sidebar(); ?>
	
</div>

<?php get_footer(); ?>