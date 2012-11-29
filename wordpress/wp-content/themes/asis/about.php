<?php
	/*
	
		Template Name: About
	
	*/
?>

<?php get_header(); ?>

<?php 
	/* Gets the current ID of the current page */
	$page_id = get_the_id();
	/* Get the data for the current page */
	$page_data = get_page( $page_id );

?>

	<img class="header_image" src="/asis_images/sub_lake_eola.jpg" alt="Different angle of Lake Eola" width="960" height="160" />

	<blockquote><?php echo get_post_meta( $page_id, 'quote', true); ?><cite><?php echo get_post_meta( $page_id, 'cite', true); ?></cite></blockquote>
			
	<div class="main_column">
		<?php echo apply_filters('the_content', $page_data->post_content); ?>
	</div>
	
	<aside>
		<h2>ASIS Region 13</h2>
		<p><img src="/asis_images/asis_regional.jpg" alt="ASIS Regional Devision" width="292"></p>
	</aside>
	
	
<?php get_footer(); ?>