<?php
	/*
	
		Template Name: Links
	
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
		<h2>Weblinks</h2>
		<p>Below are links for easy access to legislation information and other helpful information. If our members would like to contribute more helpful links, please contact Dave Murray at <a href="mailto:<?php echo get_post_meta( $page_id, 'LINKS_email', true); ?>"><?php echo get_post_meta( $page_id, 'LINKS_email', true); ?></a>.</p>
		
		<h3><span class="title-section">Security Industry Links</span></h3>
		
		<section class="security_links">

			<?php echo apply_filters('the_content', $page_data->post_content); ?>
				
		</section>
	</div>
	
	<aside>
		<h3><span class="title-section">ASIS International</span></h3>
		<p>ASIS Internation is the largest organization advancing security profession worldwide. Click below to learn more.</p>
		<a href="http://www.asisonline.org"><img class="links_logo" src="/asis_images/links_logo.png" alt="ASIS International Logo" /></a>
	
		<h3><span class="title-section">Community Links</span></h3>
		<div class="security_links">
			<ul>
				<li><a href="http://www.fdle.state.fl.us/Content/getdoc/b7a685fa-62f2-4c24-9549-fde6ffa80237/Legislative-Summaries.aspx">Florida Department of Law Enforcement Legislative Summaries</a></li>
				<li><a href="http://www.asisonline.org//auth/login.xml">ASIS Legislative Information</a></li>
				<li><a href="http://www.asisonline.org/foundation/noframe/about.html">ASIS Foundation</a></li>
			</ul>
		</div>
	</aside>
	
	<div class="clear"></div>
<?php get_footer(); ?>