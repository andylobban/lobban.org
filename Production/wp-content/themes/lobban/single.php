<?php get_header(); ?>

<main id="content" role="main">
	<div class="wrapper clearfix">
		<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article class="article single push--bottom clearfix">
				<div class="col small-12 medium-2 large-2 xlarge-2">
					<time><?php the_time('d/m/Y'); ?></time>
				</div>
				<div class="col small-12 medium-10 large-10 xlarge-10">
					<h1 class="page__header">
						<?php the_title(); ?>
					</h1>
				</div>
				<div class="article__content col small-12 medium-10 push--medium-2 large-7 push--large-2 xlarge-6 push--xlarge-2">
					<?php the_content(); ?>
				</div>
			</article>
		<?php endwhile; ?>
		<?php endif; ?>
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>