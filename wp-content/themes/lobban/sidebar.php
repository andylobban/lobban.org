<div class="journal__extras grid wrapper">
	<div class="journal__extras__wrapper">
		<h2 class="sub-headline">More</h2>
		<ul class="category-list">
			<?php wp_list_categories( 'title_li=' ); ?> 
		</ul>
		<ul class="year-list grid grid--small">
			<?php wp_get_archives('type=yearly'); ?>
		</ul>
	</div>
</div>