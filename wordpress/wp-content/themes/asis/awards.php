<?php
	/*
	
		Template Name: Awards
	
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
			
	<div class="main_column">
		<h2>Award Programs</h2>
		<?php echo apply_filters('the_content', $page_data->post_content); ?>
		
		<h3><span class="title-section">S.O.A.R. Awards</span></h3>
		<?=get_field('soar_awards_desc', $page_id); ?>
		
		<h3><span class="title-section">Awards and Recognition</span></h3>
		<?=get_field('recognition', $page_id); ?>
	</div>
	
	<aside>
 		<img class="leo_award_pic" src="/asis_images/leo_award.png" alt="leo_award" width="292" height="200" />
 		
 		
 		<?=get_field('leo_awards_desc', $page_id); ?>
 		
 		<?=get_field('leo_awards_list', $page_id); ?>
		
 		

	</aside>
	
	
<?php get_footer(); ?>