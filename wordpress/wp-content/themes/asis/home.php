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
	
<?php /* Beginning of a Wordpress Loop */ ?>
<?php /* This query is for the ASIS Coverage Section of the page */ ?>
		<?php $coverage_query = new WP_Query('category_name=asis_news&posts_per_page=5'); ?>
		
		<?php if ( $coverage_query->have_posts() ) : while ( $coverage_query->have_posts() ) : $coverage_query->the_post(); ?>
			<div>
				<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
			   <?php the_excerpt(); ?>
			   <p><a href="<?php the_permalink(); ?>">Read More...</a></p>
			</div>
		<?php endwhile; endif; ?>

	</div>
			
	<aside>
		<div id="the_award">
			<img id='award' src="<?php bloginfo('template_url'); ?>/images/award.png" />
			<p class="award_description"><?=get_field('award_description', $page_data->ID ); ?></p>
		</div>

		<h3><span class="title-section">Join Our Community</span></h3>
		<p><?=get_post_meta($page_data->ID, 'join_community', true); ?><a class="member" href="https://www.asisonline.org/store/membership.html">Become a Member</a></p>
	
		<h3><span class="title-section">Upcoming Events</span></h3>
		
<?php /* Beginning of a Wordpress Loop */ ?>
<?php /* This query is for the Upcoming Events Section of the page */ ?>
		<?php $upcoming_query = new WP_Query('category_name=upcoming&posts_per_page=10'); ?>
		
		<?php if ( $upcoming_query->have_posts() ) : while ( $upcoming_query->have_posts() ) : $upcoming_query->the_post(); ?>
			<div class="upcoming_post">
				<h4><span class="upcoming-date"><?=get_field('event_date'); ?></span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
			   <?php the_excerpt(); ?>
			   <p><a href="<?php the_permalink(); ?>">Read More...</a></p>
			</div>
		<?php endwhile; endif; ?>
				
		</aside>
	
	
	<div id="directors">
		<h3><span class="title-section">Board of Directors</span></h3>
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