<?php get_header(); ?>

<main id="content" role="main">
	<div class="wrapper clearfix">
		<div class="col small-12 medium-12 large-9 xlarge-8 push--bottom">
			<div class="row">
				<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<article class="journal__article clearfix">
						<div class="col small-12 medium-2 large-2 xlarge-2">
							&nbsp;
						</div>
						<div class="col small-12 medium-10 large-10 xlarge-10">
							<h1 class="page__header">
								<?php the_title(); ?>
							</h1>
							<?php the_content(); ?>
						</div>
					</article>

				<?php endwhile; ?>				
				<?php endif; ?>
				<?php wp_reset_query(); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>