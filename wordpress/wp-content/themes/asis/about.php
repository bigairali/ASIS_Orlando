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

	<div class="the_quote">
		<blockquote><?php echo get_post_meta( $page_id, 'quote', true); ?><cite><?php echo get_post_meta( $page_id, 'cite', true); ?></cite></blockquote>
	</div>
			
	<div class="main_column">
		<?php echo apply_filters('the_content', $page_data->post_content); ?>
	</div>
	
	<aside>
		<?=get_field('side_column', $page_id); ?>
		
		<h3><span class="title-section">Join Our Community</span></h3>
		<?php 
		
		/* HOMEPAGE/JOIN page ID number */
			$join_id = 17; 
		/* Get the HOMEPAGE/JOIN data for use */
			$join_data = get_page( $join_id ); 
			
		?>
		
		<p><?=get_post_meta($join_data->ID, 'join_community', true); ?><a class="member" href="https://www.asisonline.org/store/membership.html">Become a Member</a></p>
	</aside>
	
	
<?php get_footer(); ?>