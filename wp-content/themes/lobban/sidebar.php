<div class="journal__extras grid">
	<div class="journal__extras__wrapper">
		<h2>More Journal</h2>
		<ul>
			<?php wp_list_categories( 'title_li=' ); ?> 
		</ul>
		<ul>
			<?php wp_get_archives('type=yearly'); ?>
		</ul>
	</div>
</div>