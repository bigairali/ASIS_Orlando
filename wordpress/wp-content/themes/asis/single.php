<?php get_header(); ?>

<img class="header_image" src="/asis_images/sub_lake_eola.jpg" alt="Different angle of Lake Eola" width="960" height="160" />


<article id="content">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'entry' ); ?>
	<?php comments_template('', true); ?>
	<?php endwhile; endif; ?>
</article>

<?php get_footer(); ?>