<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		
		<title><?php wp_title(' | ', true, 'right'); ?></title>
	
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />

		<?php wp_head(); ?>
	
	</head>
	
	<body <?php body_class(); ?>>
	
		
		
		<!--
<header>
		
			<div id="branding">
			<div id="site-title"><?php if ( is_singular() ) {} else {echo '<h1>';} ?><a href="<?php echo home_url() ?>/" title="<?php bloginfo( 'name' ) ?>" rel="home"><?php bloginfo( 'name' ) ?></a><?php if ( is_singular() ) {} else {echo '</h1>';} ?></div>
			
				<p id="site-description"><?php bloginfo( 'description' ) ?></p>
				
			</div>
			
			<nav>

				<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
			</nav>
		</header>
-->
	<div id="container">
		
		<section id="main">
			
			<header>
				<h1><a href="<?php echo home_url() ?>/" title="<?php bloginfo( 'name' ) ?>" rel="home"><?php bloginfo( 'name' ) ?></a></h1>
			
				<nav>
					<?php wp_nav_menu(array( 'menu' => 'asis_menu'));?>
				</nav><!-- /#nav  -->
			</header><!-- /header -->
<!-- 		<?php bloginfo('template_directory'); ?>/ -->
			<!-- <img src="<?php bloginfo('template_directory'); ?>/images/main_photo.jpg" width="960" height="300" alt="Picture of Lake Eola" /> -->
			
			
			
			
			
			