<?php
	/*
	
		Template Name: Creative Commons
	
	*/
?>

<?php 
	/* Gets the current ID of the current page */
	$page_id = get_the_id();
	/* Get the data for the current page */
	$page_data = get_page( $page_id );
?>

<?php get_header(); ?>
<div id="content">
	<section class="main_column">
		<?php /* Insert the content from the Creative Commons page */ ?>
		<h2>Creative Commons</h2>
		<p class="creative"><a href="http://www.iconfinder.com/icondetails/65857/128/award_icon"><img src="<?php bloginfo('template_url'); ?>/images/award.png" /></a> This icon was used in in conjunction with the <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons License</a>. The original designer is <a href="http://www.iconfinder.com">Iconfinder</a>.</p>
		
	</section>
</div>
<?php get_footer(); ?>