<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Read %s', 'blankslate'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

<?php 
if ( is_single() ) {
get_template_part( 'entry-footer', 'single' ); 
} else {
get_template_part( 'entry-footer' ); 
}
?>


<?php get_template_part( 'entry', 'meta' ); ?>


<?php
if(is_archive() || is_search()){
get_template_part('entry','summary');
} else {
get_template_part('entry','content');
}
?>
</div> 