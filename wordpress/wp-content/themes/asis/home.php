

<?php get_header(); the_post(); ?>

<img src="<?php bloginfo('template_directory'); ?>/images/main_photo.jpg" width="960" height="300" alt="Picture of Lake Eola" />
			
			<div class="main_column">
				<?php $page_id = 17; $page_data = get_page( $page_id ); ?>
				
				<?php echo '<h2>'.$page_data->post_title.'</h2>'; ?>
				<?php echo apply_filters('the_content', $page_data->post_content); ?>
				
				<h3><span class="title-section">Coverage of ASIS News</span></h3>
				
				<div>
					<h4>Website and event news<span class="post-author">Posted on November 13, 2012 by Chris</span></h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...</p>
				</div>
				
				<div>
					<h4>Chapter, Regional and Worldwide News<span class="post-author">Posted on November 13, 2012 by Chris</span></h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
	
				<div>
					<h4>ASIS Orlando Presented the Matthew Simone Award<span class="post-author">Posted on November 4, 2012 by Chris</span></h4>
					<p><img class="news_thumb" src="images/getting_award.jpg" alt="Aliquote" width="140" height="120"> ASIS Orlando Chapter Board presented Orange County Sheriff Jerry Demings with the prestigious Matthew Simone Award. The Public, Private Partnership Award was announced at the 58th Annual ASIS International Convention held in Philadelphia, Penn. this past September. The award recognizes the partnership between law enforcement and private security.</p>
				</div>
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
