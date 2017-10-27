<div class="journal__extras col small-12 medium-10 large-7 xlarge-6 push--medium-2 push--large-2 push--xlarge-2 push--bottom push--top">
	<h2 class="push--bottom push--top">More Journal</h2>
	<ul class="push--bottom clearfix">
		<?php wp_list_categories( 'title_li=' ); ?> 
	</ul>
	<ul class="push--bottom clearfix">
		<?php wp_get_archives('type=yearly'); ?>
	</ul>
</div>