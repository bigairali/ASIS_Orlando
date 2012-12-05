<?php
	/*
	
		Template Name: Training
	
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
		
		<?php /* Query only posts with the category ID of 10 [Training] */ ?>
		<?php query_posts('cat=10'); ?>
		
		<?php add_action( 'pre_get_posts', 'function_name' ); ?>
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><span class="post-author">Posted <?php the_time(); ?> by <?php the_author(); ?></span></h4>
		   <?php the_excerpt(); ?>
		<?php endwhile; endif; ?>


	</div>
	
	<aside>
		<?=get_field('side_column', $page_id); ?>
	</aside>
	
	
<?php get_footer(); ?>