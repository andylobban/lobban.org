<?php get_header(); ?>

<main id="content" role="main">
	<div class="wrapper clearfix">
		<div class="article single clearfix col small-12 medium-12 large-8 push--large-2 xlarge-6 push--xlarge-3 push--bottom">
			<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<h1 class="page__header">
					<?php the_title(); ?>
				</h1>
				<div class="article__content">
					<?php the_content(); ?>
				</div>
			<?php endwhile; ?>				
			<?php endif; ?>
		</div>
	</div>
</main>

<?php get_footer(); ?>
