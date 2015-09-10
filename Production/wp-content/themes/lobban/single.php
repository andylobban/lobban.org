<?php get_header(); ?>

<main id="content" role="main">
	<div class="wrapper clearfix">
		<div class="col small-12 medium-12 large-9 xlarge-8 push--bottom">
			<div class="row">
				<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<article class="journal__article single clearfix">
						<div class="col small-12 medium-2 large-2 xlarge-2">
							<time><?php the_time('d/m/Y'); ?></time>
						</div>
						<div class="col small-12 medium-10 large-10 xlarge-10">
							<h1 class="page__header">
								<?php the_title(); ?>
							</h1>
							<div class="journal__content">
								<?php the_content(); ?>
							</div>
						</div>
					</article>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="journal__extras col small-12 medium-12 large-2 switch--large xlarge-2 push--bottom">
			<h2>Explore</h2>
			<?php wp_list_categories( 'title_li=' ); ?> 
		</div>
	</div>
</div>

<?php get_footer(); ?>