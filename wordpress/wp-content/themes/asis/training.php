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
		
<?php /* Beginning of a Wordpress Loop */ ?>
<?php /* This query is for the Membership News Section of the page */ ?>
		<?php $training_query = new WP_Query('category_name=training&posts_per_page=10'); ?>
		
		<?php if ( $training_query->have_posts() ) : while ( $training_query->have_posts() ) : $training_query->the_post(); ?>
			<div>
				<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
			   <?php the_excerpt(); ?>
			   <p><a href="<?php the_permalink(); ?>">Read more...</a></p>
			</div>
		<?php endwhile; endif; ?>
		
		


	</div>
	
	<aside>
		<?=get_field('side_column', $page_id); ?>
	</aside>
	
	
<?php get_footer(); ?>