<?php get_header(); ?>

<img class="header_image" src="/asis_images/sub_lake_eola.jpg" alt="Different angle of Lake Eola" width="960" height="160" />


	<div class="main_column">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'entry' ); ?>
		<?php comments_template('', true); ?>
		<?php endwhile; endif; ?>
	</div>
	
	<aside>
		<h3></h3>
	</aside>

<?php get_footer(); ?>