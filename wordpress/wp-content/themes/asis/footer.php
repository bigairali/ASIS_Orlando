			<div class="clear"></div>
		</section><!-- /main -->
	
		<footer>
			<div>
				<ul>
					<li><?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'blankslate' ), '&copy;', date('Y'), esc_html(get_bloginfo('name')) );  ?> Visit us on <a class="social_link" href="http://www.linkedin.com/groups?gid=2843199&trk=hb_side_g">Linkedin</a></li>
					<li><?php echo '<br>'.sprintf( __( ' Developed by: %1$s', 'blankslate' ), '<a href="http://www.localitydev.com">Chris J. Whitman</a>' ); ?></li>
				</ul>
			</div>
			
			<div>
				<h6>Member Services</h6>
				<ul class="services">
					<li><a href="http://127.0.0.1/ASIS_Orlando/wordpress/?page_id=348">Pay Dues</a></li>
					<li><a href="http://127.0.0.1/ASIS_Orlando/wordpress/?page_id=348">Attend a Meeting</a></li>
				</ul>
			</div>
			
			<div>
				<h6>Legal</h6>
				<ul class="services">
					<li><a href="http://127.0.0.1/ASIS_Orlando/wordpress/?page_id=348">Creative Commons</a></li>
				</ul>
			</div>
			
			<a href="http://www.asisonline.org"><img class="international" src="/asis_images/small_international.png" alt="small_international" width="108" height="64"></a>
		</footer><!-- /footer -->
	</div><!--!/#container -->

	<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/main.js"></script>
	
	<!-- google analytics -->
	<?php
		if ( function_exists( 'yoast_analytics' ) ) {
			yoast_analytics();
		}
	?>
	
<!--
	<script type="text/javascript">
		var uwc = {
		id: '0df0b0997b4e862fea7c74627c48182b2eddc0b8',
		title: 'What do you think of our website?',
		description: 'Participate in a short visual survey and help us to improve our website.',
		button: 'Give feedback',
		label: 'in just 3 minutes'
		}
	</script><script type="text/javascript" src="http://cache.usabilla.com/widget/w.js" /></script>	
-->			

</body>
</html>