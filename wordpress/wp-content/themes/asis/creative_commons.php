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

<img class="header_image" src="/asis_images/sub_lake_eola.jpg" alt="Different angle of Lake Eola" width="960" height="160" />

<div id="content">
	<section class="main_column">
		<?php /* Insert the content from the Creative Commons page */ ?>
		<h2>Creative Commons</h2>
		<p class="creative"><a href="http://www.iconfinder.com/icondetails/65857/128/award_icon"><img src="<?php bloginfo('template_url'); ?>/images/award.png" /></a> This icon was used in in conjunction with the <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons License</a>. The original designer is <a href="http://www.iconfinder.com">Iconfinder</a>.</p>
		
		<h2>Florida map</h2>
		<p>
			The map used on the About page for ASIS Region 13 was derived from a graphic from <a href="http://en.wikipedia.org/wiki/File:Orange_County_Florida_Incorporated_and_Unincorporated_areas_Orlando_Highlighted.svg">Wikipedia</a>. This graphic was use in accordance to the <a href="http://creativecommons.org/licenses/by/3.0/">Common Creative License</a> and is in no way endorsing ASIS International.
		</p>
		
	</section>
</div>
<?php get_footer(); ?>