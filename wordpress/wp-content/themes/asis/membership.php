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
		<?php echo apply_filters('the_content', $page_data->post_content); ?>
		
		<h3><span class="title-section">Membership Updates</span></h3>

<?php /* Beginning of a Wordpress Loop */ ?>
<?php /* This query is for the Membership News Section of the page */ ?>
		<?php $member_news_query = new WP_Query('category_name=member_updates&posts_per_page=5'); ?>
		
		<?php if ( $member_news_query->have_posts() ) : while ( $member_news_query->have_posts() ) : $member_news_query->the_post(); ?>
			<div>
				<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
			   <?php the_content(); ?>
			   <p><a href="<?php the_permalink(); ?>">Add Comment...</a></p>
			</div>
		<?php endwhile; endif; ?>	
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
			$html = "";
		
			$members_post_id = $members_value->ID;
			
		/* Each piece of information from a new member */
			$new_member_name = get_field('new_member_name', $members_post_id);
			$new_member_title = get_field('new_member_title', $members_post_id);
			$new_member_phone = get_field('new_member_phone', $members_post_id);
			$new_member_email = get_field('new_member_email', $members_post_id);
			$new_member_workplace = get_field('new_member_workplace', $members_post_id);
			
		/* Prevents empty tags from being generated */
			if($new_member_name) $html = $html.'<li class="name">'.$new_member_name.'</li>' ;
			if($new_member_title) $html = $html.'<li class="post-author">'.$new_member_title.'</li>' ;
			if($new_member_phone) $html = $html.'<li class="phone_number">'.$new_member_phone.'</li>' ;
			if($new_member_email) $html = $html.'<li class="email_address">'.$new_member_email.'</li>' ;
			if($new_member_workplace) $html = $html.'<li class="work">'.$new_member_workplace.'</li>' ;
			
		/* This is the HTML template styled for the use of posts */
			$members_template = '<ul class="asis_member">'.$html.'</ul>';		
			
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
		
		<p><?=get_post_meta($join_data->ID, 'join_community', true); ?><a class="member" href="https://www.asisonline.org/store/membership.html">Become a Member</a></p>
	</aside>
	
	
<?php get_footer(); ?>