<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta name="robots" content="noindex,nofollow">
		
		<title><?php wp_title(' | ', true, 'right'); ?></title>
		
		<?php wp_enqueue_script("jquery"); /* LOADS CSS */ ?>
		<?php wp_head(); ?>
		
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
		
		<?php /* if the current page is HOME or MEMBERSHIP then load this CSS */ ?>
		<?php if(is_home() || is_page_template('membership.php')) { ?>
			<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/homepage.css" />
		<?php } ?>
		
		<?php /* if the current page is a view of a SINGLE post then load this CSS */ ?>
		<?php if(is_single()) { ?>
			<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/post.css" />
		<?php } ?>
		
		<?php /* if the current page is CERTIFICATION then load this CSS */ ?>
		<?php if(is_page_template('certification.php')) { ?>
			<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/certification.css" />
		<?php } ?>
		
		<?php /* if the current page is a view of a ARCHIVE page then load this CSS */ ?>
		<?php if(is_search()) { ?>
			<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/search.css" />
		<?php } ?>
		
		
		<!--[if lt IE 9]>
			<script src="<?php bloginfo('template_url'); ?>/js/html5shiv.js"></script>
		<![endif]-->
	
	</head>
	
	<body <?php body_class(); ?>>
	
	<div id="feedback">
		<a href=" https://docs.google.com/spreadsheet/viewform?formkey=dHhnY1BwVzZKSE5MRXh3ZnlpQk03Q2c6MQ"><img src="<?php bloginfo('template_url'); ?>/images/give_feedback.png"></a>
	</div>
	
	<?php /* Blue background */ ?>
	<div id="container">
		
		<?php /* White background */ ?>
		<section id="main">
			<header class="clearfix">
				<h1><a href="<?php echo home_url() ?>/" title="<?php bloginfo( 'name' ) ?>" rel="home"><?php bloginfo( 'name' ) ?></a></h1>
			
				<nav class="default-nav">
					<?php wp_nav_menu(array( 'menu' => 'asis_menu'));?>
				</nav><!-- /#nav  -->
			</header><!-- /header -->
			

			
			
			
			