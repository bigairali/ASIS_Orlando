<?php get_header(); ?>		<!-- Get the header of the page and insert it here -->

<img src="/asis_images/main_photo.jpg" width="960" height="300" alt="Picture of Lake Eola that represents Orlando" />
			
<div class="main_column">

	<?php 
		
	/* HOMEPAGE page ID number */
		$page_id = 17; 
		
	/* Get the HOMEPAGE data for use */
		$page_data = get_page( $page_id ); 
		
	?>
	
	<h2>ASIS Orlando Chapter</h2>
	
	<!-- Places the CONTENT of the homepage here -->
	<?php echo apply_filters('the_content', $page_data->post_content); ?>
	
	<h3><span class="title-section">Coverage of ASIS News</span></h3>
	
	<?php 
	/* These are the ARGUMENTS for the get_posts PARAM */
		$coverage_args = array(
						'numberposts' => 5,		/* How many posts to pull */
						'category' => 5			/* ID of Category */
						);
		
	/* Get posts that match my arguments and put each post in my $COVERAGE_ARRAY variable */
		$coverage_array = get_posts( $coverage_args ); 
	?>

<!--	=== This is an example of what is in the $COVERAGE_ARRAY variable. ===

array { 
	[0] { 
		["ID"]						=> 35 
		["post_author"]				=> "1" 
		["post_date"]				=> "2012-11-25 23:52:15" 
		["post_date_gmt"]			=> "2012-11-25 23:52:15" 
		["post_content"]			=> "
										ASIS Orlando Chapter Board presented Orange County Sheriff Jerry Demings with the prestigious Matthew Simone Award. The Public, Private Partnership Award was announced at the 58th Annual ASIS International Convention held in Philadelphia, Penn. this past September. The award recognizes the partnership between law enforcement and private security." 
		["post_title"]				=> "ASIS Orlando Presented the Matthew Simone Award" 
		["post_excerpt"]			=> "" 
		["post_status"]				=> "publish" 
		["comment_status"]			=> "open" 
		["ping_status"]				=> "open" 
		["post_password"]			=> "" 
		["post_name"]				=> "asis-orlando-presented-the-matthew-simone-award" 
		["to_ping"]					=> "" 
		["pinged"]					=> "" 
		["post_modified"]			=> "2012-11-25 23:52:15" 
		["post_modified_gmt"]		=> "2012-11-25 23:52:15" 
		["post_content_filtered"]	=> "" 
		["post_parent"]				=> 0 
		["guid"]					=> "http://127.0.0.1/wordpress/?p=35" 
		["menu_order"]				=> 0 
		["post_type"]				=> "post" 
		["post_mime_type"]			=> "" 
		["comment_count"]			=> "0" 
		["filter"]					=> "raw" 
	} 
}				
-->

<!-- FOREACH post in the Coverage of ASIS News category, make a post of the most recent posts up to a cap of 5 -->
	<?php 
	foreach($coverage_array as $coverage_value){
	
	/* Get the data for the user that posted this message */
		$all_meta_for_user = get_user_meta( $coverage_value->post_author );
		
		$originalDate_coverage = $coverage_value->post_date;
		$newDate_coverage = date("F j, Y", strtotime($originalDate_coverage));
		
	/* This is the HTML template styled for the use of posts */
		$coverage_template = '<div>
		<h4><a href="'.$coverage_value->guid.'">'.$coverage_value->post_title.'</a><span class="post-author">Posted on '.$newDate_coverage.' by '.$all_meta_for_user['nickname'][0].'</span></h4>
		'.apply_filters('the_content', $coverage_value->post_content).'
		</div>';
		
	/* Places the $coverage_TEMPLATE onto the page for each coverage_VALUE in coverage_ARRAY // Max of 5 */
		echo $coverage_template;					
	} ?>
<!-- end of FOREACH -->	
	

</div>
			
	<aside>
		<h3><span class="title-section">Join Our Community</span></h3>
		<p><?=get_post_meta($page_data->ID, 'join_community', true); ?></p>
		
		<p><a class="member" href="#">Become a Member</a></p>
		
		<h3><span class="title-section">Upcoming Events</span></h3>

	<?php 
	/* These are the ARGUMENTS for the get_posts PARAMETER */
		$upcoming_args = array(
						'numberposts' => 5,		/* How many posts to pull */
						'category' => 7			/* ID of Category */
						);
		
	/* Get posts that match my arguments and put each post in my $UPCOMING_ARRAY variable */
		$upcoming_array = get_posts( $upcoming_args );
	?>

		
<!-- FOREACH post in the Upcoming Events, make a post of the most recent posts up to a cap of 5 -->
	<?php 
	foreach($upcoming_array as $upcoming_value){
	
		$upcoming_post_id = $upcoming_value->ID;
		$upcoming_date = get_post_meta($upcoming_post_id, 'event_date', true);
		
	/* Get the data for the user that posted this message */
		$upcoming_user = get_user_meta( $upcoming_value->post_author );
		
		$originalDate_upcoming = $upcoming_value->post_date;
		$newDate_upcoming = date("d M", strtotime($originalDate_upcoming));
		
	/* This is the HTML template styled for the use of posts */
		$upcoming_template = 	'<div class="upcoming_post"><h4><span class="upcoming-date">'.$upcoming_date.'</span><a href="'.$upcoming_value->guid.'">'.$upcoming_value->post_title.
								'</a><span class="post-author">Posted on '.$newDate_upcoming.' by '.$upcoming_user['nickname'][0].'</span></h4>'
								.apply_filters('the_content', $upcoming_value->post_content).'</div>';
		
	/* Places the $coverage_TEMPLATE onto the page for each coverage_VALUE in coverage_ARRAY // Max of 5 */
		echo $upcoming_template;					
	} ?>
<!-- end of FOREACH -->	
		
<!--
		<h4><span class="upcoming-date">20 Sept</span>Outing - Tickets are free to members of ASIS</h4>
		<p>Ten seats are available and transportation has been arranged through Greg Moore. At 6:00PM, van pickup at the Mall of Millenia. Game starts at 7:00pm and group will be taken back to their vehicles at the end of the game.</p>
		<p>Tickets are free for members.</p>
		<p>If you wish to attend email: doug.sarubbi@ocfl.net</p>
-->
		
		<h3><span class="title-section">Awards</span></h3>
		
		<?php 
		
		/* HOMEPAGE/AWARDS page ID number */
			$awards_id = 176; 
			
		/* Get the HOMEPAGE/AWARDS data for use */
			$awards_data = get_page( $awards_id ); 
			
		?>

		<div class="awards">
			<?php echo apply_filters('the_content', $awards_data->post_content); ?>
		</div>
	</aside>
	
	<div class="clear"></div>
	
	<div id="directors">
		<h3><span class="title-section">Board of Directors</span></h3>
<!-- 		<?php var_dump($page_data); ?> -->
		<div class="director_container">
			<ul>
				<?php 
					$chairman_id = 83;							/* Chairman page ID */
					$chairman_data = get_page($chairman_id);	/* Chairman page data */
				?>
			
				<li class="position">Chairman</li>
				<li class="name"><?=get_post_meta($chairman_data->ID, 'full_name', true);?></li>
				<li class="post-author"><?=get_post_meta($chairman_data->ID, 'title', true);?></li>
				<li class="phone_number"><?=get_post_meta($chairman_data->ID, 'phone', true);?></li>
				<li class="email_address"><?=get_post_meta($chairman_data->ID, 'email', true);?></li>
				<li class="work">
					<address><?=get_post_meta($chairman_data->ID, 'workplace', true);?><br/>
					<?=get_post_meta($chairman_data->ID, 'address', true);?></address>
				</li>
			</ul>
		
			<ul>
				<?php 
					$vice_chairman_id = 101;							/* Vice Chairman page ID */
					$vice_chairman_data = get_page($vice_chairman_id);	/* Vice Chairman page data */
				?>
			
				<li class="position">Vice Chairman</li>
				<li class="name"><?=get_post_meta($vice_chairman_data->ID, 'full_name', true);?></li>
				<li class="post-author"><?=get_post_meta($vice_chairman_data->ID, 'title', true);?></li>
				<li class="phone_number"><?=get_post_meta($vice_chairman_data->ID, 'phone', true);?></li>
				<li class="email_address"><?=get_post_meta($vice_chairman_data->ID, 'email', true);?></li>
				<li class="work">
					<address><?=get_post_meta($vice_chairman_data->ID, 'workplace', true);?><br/>
					<?=get_post_meta($vice_chairman_data->ID, 'address', true);?></address>
				</li>
			</ul>
		
			<ul>
				<?php 
					$secretary_id = 107;							/* Vice Chairman page ID */
					$secretary_data = get_page($secretary_id);	/* Vice Chairman page data */
				?>
			
				<li class="position">Secretary</li>
				<li class="name"><?=get_post_meta($secretary_data->ID, 'full_name', true);?></li>
				<li class="post-author"><?=get_post_meta($secretary_data->ID, 'title', true);?></li>
				<li class="phone_number"><?=get_post_meta($secretary_data->ID, 'phone', true);?></li>
				<li class="email_address"><?=get_post_meta($secretary_data->ID, 'email', true);?></li>
				<li class="work">
					<address><?=get_post_meta($secretary_data->ID, 'workplace', true);?><br/>
					<?=get_post_meta($secretary_data->ID, 'address', true);?></address>
				</li>
			</ul>
		
			<ul>
				<?php 
					$treasurer_id = 117;							/* Vice Chairman page ID */
					$treasurer_data = get_page($treasurer_id);	/* Vice Chairman page data */
				?>
			
				<li class="position">Treasurer</li>
				<li class="name"><?=get_post_meta($treasurer_data->ID, 'full_name', true);?></li>
				<li class="post-author"><?=get_post_meta($treasurer_data->ID, 'title', true);?></li>
				<li class="phone_number"><?=get_post_meta($treasurer_data->ID, 'phone', true);?></li>
				<li class="email_address"><?=get_post_meta($treasurer_data->ID, 'email', true);?></li>
				<li class="work">
					<address><?=get_post_meta($treasurer_data->ID, 'workplace', true);?><br/>
					<?=get_post_meta($treasurer_data->ID, 'address', true);?></address>
				</li>
			</ul>
		</div><!-- end of directors_container -->
	</div><!-- end of #directors -->
	
	<div class="clear"></div>
	
</section><!-- /main -->

<!-- Gets the footer piece and places it at the bottom of the page -->
<?php get_footer(); ?>