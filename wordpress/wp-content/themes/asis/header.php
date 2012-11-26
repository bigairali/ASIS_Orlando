<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		
		<title><?php wp_title(' | ', true, 'right'); ?></title>
	
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />

		<!-- <?php wp_head(); ?> -->
	
	</head>
	
	<body <?php body_class(); ?>>
	
	<div id="container">
		
		<section id="main">
			
			<header>
				<h1><a href="<?php echo home_url() ?>/" title="<?php bloginfo( 'name' ) ?>" rel="home"><?php bloginfo( 'name' ) ?></a></h1>
			
				<nav>
					<?php wp_nav_menu(array( 'menu' => 'asis_menu'));?>
				</nav><!-- /#nav  -->
			</header><!-- /header -->
			
			
			
			
			
			