<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta name="robots" content="noindex,nofollow">
		
		<title><?php wp_title(' | ', true, 'right'); ?></title>
		
		<?php wp_enqueue_script("jquery"); ?>
		<?php wp_head(); ?>
		
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
		
		
		<?php if(is_home( 'home.php' )){		/* HOMEPAGE CSS */ ?>
			<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/homepage.css" />
		<?php } ?>
		
		<?php if(is_single()){					/* SINGLE POST CSS */ ?>
			<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/post.css" />
		<?php } ?>
		
	
	</head>
	
	<body <?php body_class(); ?>>
	
	
	
	<div id="container">
		
		<section id="main">
			<header class="clearfix">
				<h1><a href="<?php echo home_url() ?>/" title="<?php bloginfo( 'name' ) ?>" rel="home"><?php bloginfo( 'name' ) ?></a></h1>
			
				<nav>
					<?php wp_nav_menu(array( 'menu' => 'asis_menu'));?>
				</nav><!-- /#nav  -->
			</header><!-- /header -->
			

			
			
			
			