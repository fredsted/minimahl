<div id="content" class="widecolumn post">
	<h2>
		Search
	</h2><?php include (TEMPLATEPATH . '/searchform.php'); ?>
	<h2>
		<?php _e('Archives by Month', "minimahl"); ?>
	</h2>
	<ul>
		<?php wp_get_archives('type=monthly'); ?>
	</ul>
	<h2>
		<?php _e('Archives by Subject', "minimahl"); ?>
	</h2>
	<ul>
		<?php wp_list_categories(); ?>
	</ul>
</div><?php get_footer(); ?>
