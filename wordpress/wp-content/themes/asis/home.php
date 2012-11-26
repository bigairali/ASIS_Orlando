

<?php get_header(); ?>		<!-- Get the header of the page and insert it here -->

<img src="/asis_images/main_photo.jpg" width="960" height="300" alt="Picture of Lake Eola that represents Orlando" />
			
<div class="main_column">
	<?php $page_id = 17; $page_data = get_page( $page_id ); ?>
	
	<h2>ASIS Orlando Chapter</h2>
	<?php echo apply_filters('the_content', $page_data->post_content); ?>
	
	<h3><span class="title-section">Coverage of ASIS News</span></h3>
	
	
	<?php $posts_args = array(
							'numberposts' => 5,		/* How many posts to pull */
							'category' => 5			/* ID of Category */
						); ?>
	<?php $posts_array = get_posts( $posts_args ); ?>

<!--	=== This is and example of what is received from get_posts() ===

array(1) { 
	[0]=> object(stdClass)#250 (24) { 
		["ID"]=> int(35) 
		["post_author"]=> string(1) "1" 
		["post_date"]=> string(19) "2012-11-25 23:52:15" 
		["post_date_gmt"]=> string(19) "2012-11-25 23:52:15" 
		["post_content"]=> string(348) "ASIS Orlando Chapter Board presented Orange County Sheriff Jerry Demings with the prestigious Matthew Simone Award. The Public, Private Partnership Award was announced at the 58th Annual ASIS International Convention held in Philadelphia, Penn. this past September. The award recognizes the partnership between law enforcement and private security." 
		["post_title"]=> string(47) "ASIS Orlando Presented the Matthew Simone Award" 
		["post_excerpt"]=> string(0) "" 
		["post_status"]=> string(7) "publish" 
		["comment_status"]=> string(4) "open" 
		["ping_status"]=> string(4) "open" 
		["post_password"]=> string(0) "" 
		["post_name"]=> string(47) "asis-orlando-presented-the-matthew-simone-award" 
		["to_ping"]=> string(0) "" 
		["pinged"]=> string(0) "" 
		["post_modified"]=> string(19) "2012-11-25 23:52:15" 
		["post_modified_gmt"]=> string(19) "2012-11-25 23:52:15" 
		["post_content_filtered"]=> string(0) "" 
		["post_parent"]=> int(0) 
		["guid"]=> string(32) "http://127.0.0.1/wordpress/?p=35" 
		["menu_order"]=> int(0) 
		["post_type"]=> string(4) "post" 
		["post_mime_type"]=> string(0) "" 
		["comment_count"]=> string(1) "0" 
		["filter"]=> string(3) "raw" 
	} 
}				
-->

	<?php 

		
/* For each post in the Coverage of ASIS News category, make a post up to a cap of 5 */
	foreach($posts_array as $post_value){
	
	/* Get the data for the user that posted this message */
		$all_meta_for_user = get_user_meta( $post_value->post_author );
		
		$originalDate = $post_value->post_date;
		$newDate = date("F j, Y", strtotime($originalDate));
		
	/* This is the HTML template styled for the use of posts */
		$post_template = '<div>
		<h4><a href="'.$post_value->guid.'">'.$post_value->post_title.'</a><span class="post-author">Posted on '.$newDate.' by '.$all_meta_for_user['nickname'][0].'</span></h4>
		<p>'.$post_value->post_content.'</p>
		</div>';
		
	/* Put the post on the website */
		echo $post_template;					
	} ?>

</div>

			
	<aside>
		<h3><span class="title-section">Join Our Community</span></h3>
		<p><?=get_post_meta($page_data->ID, 'join_community', true); ?></p>

<!-- 				<p>Want to be a part of an organization of security professionals? Join ASIS Orlando and have an opportunity to meet other professionals, join meetups, and meet monthly!</p> -->
		
		<p><a class="member" href="#">Become a Member</a></p>
		
		<h3><span class="title-section">Upcoming Events</span></h3>
		<img class="upcoming_thumb" src="images/getting_award.jpg" alt="Aliquote" width="292" height="141">
		<h4><span class="upcoming-date">20 Sept</span>Outing - Tickets are free to members of ASIS</h4>
		<p>Ten seats are available and transportation has been arranged through Greg Moore. At 6:00PM, van pickup at the Mall of Millenia. Game starts at 7:00pm and group will be taken back to their vehicles at the end of the game.</p>
		<p>Tickets are free for members.</p>
		<p>If you wish to attend email: doug.sarubbi@ocfl.net</p>
		
		<h3><span class="title-section">Awards</span></h3>
		<ul class="awards">
			<li><span>2012 -</span><p>Matthew Simeone Award for Public, Private Partnership</p></li>
			<li><span>2009 -</span><p>I.B. Hale "Chapter of the Year Award"</p></li>
			<li><span>2009 -</span><p>Honorable Mention "Website Award"</p></li>
			<li><span>2008 -</span><p>Community Service Award</p></li>
			<li><span>2008 -</span><p>Website of the Year Award</p></li>
		</ul>
	</aside>
	
	<div class="clear"></div>
	
	<div id="directors">
		<h3><span class="title-section">Board of Directors</span></h3>
		
		<div class="director_container">
			<ul>
				<li class="position">Chairman</li>
				<li class="name">Doug Sarubbi</li>
				<li class="post-author">Deputy Sergeant</li>
				<li class="phone_number">407-351-9368</li>
				<li class="email_address">doug.sarubbi@ocfl.net</li>
				<li class="work">
					<address>Orange County Sheriff's<br />
					6825 Westwood Blvd.<br />
					Orlando, Fl. 32821</address>
				</li>
			</ul>
		
			<ul>
				<li class="position">Vice Chairman</li>
				<li class="name">Greg Moore</li>
				<li class="post-author">Security Director</li>
				<li class="phone_number">407-363-3555</li>
				<li class="email_address">gmoore@mallatmillenia.com</li>
				<li class="work">
					<address>Mall of Millenia<br />
					Orlando, Fl. 32819</address>
				</li>
			</ul>
		
			<ul>
				<li class="position">Secretary</li>
				<li class="name">Jon Vereen</li>
				<li class="post-author">Security Professional</li>
				<li class="phone_number">407-251-6076</li>
				<li class="email_address">digilent1@bellsouth.net</li>
			</ul>
		
			<ul>
				<li class="position">Treasurer</li>
				<li class="name">Matthew Brett</li>
				<li class="post-author">Security Manager</li>
				<li class="phone_number">407-351-0144</li>
				<li class="email_address">doug.sarubbi@ocfl.net</li>
				<li class="work">
					<address>Securitas Security Services USA<br />
					7680 Universal Blvd. Suite 230<br />
					Orlando, Fl. 32821</address>
				</li>
			</ul>
		</div><!-- end of directors_container -->
	</div><!-- end of #directors -->
	
	<div class="clear"></div>
	
</section><!-- /main -->



<!-- <?php get_sidebar(); ?> -->
<?php get_footer(); ?>


<!--
<?php get_header(); ?>
<div id="content">
<?php get_template_part( 'nav', 'above' ); ?>
<?php while ( have_posts() ) : the_post() ?>
<?php get_template_part( 'entry' ); ?>
<?php comments_template(); ?>
<?php endwhile; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</div>
<?php get_footer(); ?>
-->
