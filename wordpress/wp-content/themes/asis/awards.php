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

	<div class="the_quote">
		<blockquote><?php echo get_post_meta( $page_id, 'quote', true); ?><cite><?php echo get_post_meta( $page_id, 'cite', true); ?></cite></blockquote>
	</div>
			
	<div class="main_column">
		<?php echo apply_filters('the_content', $page_data->post_content); ?>
	</div>
	
	<aside>
		<h3><span class="title-section">Previous Ceremonies</span></h3>
		
		<?php 
		/* These are the ARGUMENTS for the get_posts PARAMETER */
			$awards_args = array(
							'numberposts' => 5,		/* How many posts to pull */
							'category' => 8			/* ID of Category */
							);
			
		/* Get posts that match my arguments and put each post in my $AWARDS_ARRAY variable */
			$awards_array = get_posts( $awards_args );
		?>

<!-- FOREACH post in the Member News, make a post of the most recent posts up to a cap of 5 -->
		<?php 
		foreach($awards_array as $awards_value){
		
			$awards_post_id = $awards_value->ID;
			$awards_date = get_post_meta($awards_post_id, 'event_date', true);
			
		/* Get the data for the user that posted this message */
			$awards_user = get_user_meta( $awards_value->post_author );
			
			$originalDate_awards = $awards_value->post_date;
			$newDate_awards = date("d M", strtotime($originalDate_awards));
			
			$new_member_name = get_field('new_member_name', $awards_post_id);
			$new_member_title = get_field('new_member_title', $awards_post_id);
			$new_member_phone = get_field('new_member_phone', $awards_post_id);
			$new_member_email = get_field('new_member_email', $awards_post_id);
			$new_member_workplace = get_field('new_member_workplace', $awards_post_id);
			
		/* This is the HTML template styled for the use of posts */
			$awards_template = '<ul class="asis_member">
									<li class="name">'.$new_member_name.'</li>
									<li class="post-author">'.$new_member_title.'</li>
									<li class="phone_number">'.$new_member_phone.'</li>
									<li class="email_address">'.$new_member_email.'</li>
									<li class="work">'.$new_member_workplace.'</li>
								</ul>';
								
			
			
		
			
		/* Places the $AWARDS_TEMPLATE onto the page for each $AWARDS_VALUE in $AWARDS_ARRAY // Max of 5 */
			echo $awards_template;					
		} ?>
<!-- end of FOREACH -->

	</aside>
	
	
<?php get_footer(); ?>