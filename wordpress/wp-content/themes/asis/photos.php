<?php
	/*
	
		Template Name: Chapter Photos
	
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
		
		
		<?php 
		/* These are the ARGUMENTS for the get_posts PARAMETER */
			$photos_args = array(
							'numberposts' => 10,		/* How many posts to pull */
							'category' => 9			/* ID of Category */
							);
			
		/* Get posts that match my arguments and put each post in my $PHOTOS_ARRAY variable */
			$photos_array = get_posts( $photos_args );
		?>

<!-- FOREACH post in the Member News, make a post of the most recent posts up to a cap of 5 -->
		<?php 
		foreach($photos_array as $photos_value){
		
			$photos_post_id = $photos_value->ID;
			$photos_date = get_post_meta($photos_post_id, 'event_date', true);
			
		/* Get the data for the user that posted this message */
			$photos_user = get_user_meta( $photos_value->post_author );
			
			$originalDate_photos = $photos_value->post_date;
			$newDate_photos = date("d M", strtotime($originalDate_photos));
			
		/* This is the HTML template styled for the use of posts */
			$photos_template = '<div>
			<h4><a href="'.$photos_value->guid.'">'.$photos_value->post_title.'</a><span class="post-author">Posted on '.$newDate_photos.' by '.$photos_user['nickname'][0].'</span></h4>
			</div>';
			
		/* Places the $coverage_TEMPLATE onto the page for each coverage_VALUE in coverage_ARRAY // Max of 5 */
			echo $photos_template;					
		} ?>
<!-- end of FOREACH -->






	</div>
	
	<aside>
		<h3><span class="title-section">Join Our Community</span></h3>
		<p><?=get_post_meta( 17, 'join_community', true); ?></p>
		
		<p><a class="member" href="https://www.asisonline.org/store/membership.html">Become a Member</a></p>
	</aside>
	
	
<?php get_footer(); ?>


