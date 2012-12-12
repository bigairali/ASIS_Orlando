<?php get_header(); ?>
<div id="content">
	<div id="post-0" class="post error404 not-found">
		<h2 class="entry-title"><?php _e('Not Found', 'blankslate'); ?></h2>
	
		<div class="entry-content">
			<p><?php _e('Nothing found for the requested page. Try a search instead?', 'blankslate'); ?></p>
			<?php get_search_form(); ?>
		</div>
	</div>
</div>
<?php /* get_sidebar(); */ ?>
<?php get_footer(); ?>