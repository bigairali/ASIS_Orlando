<?php get_header(); ?>

	<img class="header_image" src="/asis_images/sub_lake_eola.jpg" alt="Different angle of Lake Eola" width="960" height="160" />

<div id="content">
<div class="main_column">
<?php if ( have_posts() ) : ?>
<h2 class="page-title"><?php printf( __( 'Search Results for: %s', 'blankslate' ), '<span>' . get_search_query()  . '</span>' ); ?></h2>
<?php get_template_part( 'nav', 'above' ); ?>
<?php while ( have_posts() ) : the_post() ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; ?>
<?php get_template_part( 'nav', 'below' ); ?>
<?php else : ?>
<div id="post-0" class="post no-results not-found">
<h4 class="entry-title"><?php _e( 'Nothing Found', 'blankslate' ) ?></h4>
<div class="entry-content">
<p><?php _e( 'Sorry, nothing matched your search. Please try again.', 'blankslate' ); ?></p>
<?php get_search_form(); ?>
</div>
</div>
<?php endif; ?>
</div>
</div>
<?php get_footer(); ?>