<?php
	/*
	
		Template Name: Certification
			
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
		<?php echo apply_filters('the_content', $page_data->post_content); ?>
	</div>
	
	<aside>
		<?=get_field('side_column', $page_id); ?>
	</aside>
	
	<section class="certifications">

		<div><?=get_field('cpp_certification', $page_id); ?></div>
		<div><?=get_field('psp_certification', $page_id); ?></div>
		<div><?=get_field('pci_certification', $page_id); ?></div>
	
	</section>
	
	
<?php get_footer(); ?>