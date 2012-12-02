<?php
	/*
	
		Template Name: Membership
	
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
		<h2>Join the Community</h2>
		<p>By joining our ASIS Chapter, ASIS International members in Central Florida can participate on the local level. Established July 22, 1969, we have a long history of security professionals who have mad a great impact locally and nationally on our industry. Participating grants members the benefit of joining security and law enforcement professionals in our chapter, the opportunity to network, and keep pace with the latest intel effecting out industries and learning from leading professionals speaking at our monthly meeting. Joining also allows members to get involved from the ground up in ASIS International and working with some of the best people in your community.</p>
		
		<p>Our monthly membership meetings are the last Thursday of the month at Maggianos Restaurant at Pointe Orlando, 9101 International Dr. Other than special events, we are closed for November and December.</p>
		
		<h3><span class="title-section">Membership Updates</span></h3>
		
		<?php 
		/* These are the ARGUMENTS for the get_posts PARAMETER */
			$member_news_args = array(
							'numberposts' => 5,		/* How many posts to pull */
							'category' => 6			/* ID of Category */
							);
			
		/* Get posts that match my arguments and put each post in my $MEMBER_NEWS_ARRAY variable */
			$member_news_array = get_posts( $member_news_args );
		?>

<!-- FOREACH post in the Member News, make a post of the most recent posts up to a cap of 5 -->
		<?php 
		foreach($member_news_array as $member_news_value){
		
			$member_news_post_id = $member_news_value->ID;
			$member_news_date = get_post_meta($member_news_post_id, 'event_date', true);
			
		/* Get the data for the user that posted this message */
			$member_news_user = get_user_meta( $member_news_value->post_author );
			
			$originalDate_member_news = $member_news_value->post_date;
			$newDate_member_news = date("d M", strtotime($originalDate_member_news));
			
		/* This is the HTML template styled for the use of posts */
			$member_news_template = '<div>
			<h4><a href="'.$member_news_value->guid.'">'.$member_news_value->post_title.'</a><span class="post-author">Posted on '.$newDate_member_news.' by '.$member_news_user['nickname'][0].'</span></h4>
			'.apply_filters('the_content', $member_news_value->post_content).'
			</div>';
			
		/* Places the $coverage_TEMPLATE onto the page for each coverage_VALUE in coverage_ARRAY // Max of 5 */
			echo $member_news_template;					
		} ?>
<!-- end of FOREACH -->
	</div>
	
	<aside>
		<h3><span class="title-section">New Members</span></h3>
		
		<?php 
		/* These are the ARGUMENTS for the get_posts PARAMETER */
			$members_args = array(
							'numberposts' => 5,		/* How many posts to pull */
							'category' => 8			/* ID of Category */
							);
			
		/* Get posts that match my arguments and put each post in my $MEMBERS_ARRAY variable */
			$members_array = get_posts( $members_args );
		?>

<!-- FOREACH post in the Member News, make a post of the most recent posts up to a cap of 5 -->
		<?php 
		foreach($members_array as $members_value){
		
			$members_post_id = $members_value->ID;
			$members_date = get_post_meta($members_post_id, 'event_date', true);
			
		/* Get the data for the user that posted this message */
			$members_user = get_user_meta( $members_value->post_author );
			
			$originalDate_members = $members_value->post_date;
			$newDate_members = date("d M", strtotime($originalDate_members));
			
			$new_member_name = get_field('new_member_name', $members_post_id);
			$new_member_title = get_field('new_member_title', $members_post_id);
			$new_member_phone = get_field('new_member_phone', $members_post_id);
			$new_member_email = get_field('new_member_email', $members_post_id);
			$new_member_workplace = get_field('new_member_workplace', $members_post_id);
			
		/* This is the HTML template styled for the use of posts */
			$members_template = '<ul class="asis_member">
									<li class="name">'.$new_member_name.'</li>
									<li class="post-author">'.$new_member_title.'</li>
									<li class="phone_number">'.$new_member_phone.'</li>
									<li class="email_address">'.$new_member_email.'</li>
									<li class="work">'.$new_member_workplace.'</li>
								</ul>';
								
			
			
		
			
		/* Places the $MEMBERS_TEMPLATE onto the page for each $MEMBERS_VALUE in $MEMBERS_ARRAY // Max of 5 */
			echo $members_template;					
		} ?>
<!-- end of FOREACH -->
		
		
		<h3><span class="title-section">Join Our Community</span></h3>
		<?php 
		
		/* HOMEPAGE/JOIN page ID number */
			$join_id = 17; 
			
		/* Get the HOMEPAGE/JOIN data for use */
			$join_data = get_page( $join_id ); 
			
		?>
		
		<p><?=get_post_meta($join_data->ID, 'join_community', true); ?><a class="member" href="#">Become a Member</a></p>
	</aside>
	
	
<?php get_footer(); ?>