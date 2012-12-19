<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

<?php 
/*
if ( is_single() ) {
get_template_part( 'entry-footer', 'single' ); 
} else {
get_template_part( 'entry-footer' ); 
}
*/
?>


<?php get_template_part( 'entry', 'meta' ); ?>


<?php
if(is_archive() || is_search()){
get_template_part('entry','summary');
} else {
get_template_part('entry','content');
}
?>

<p class="read_more"><a href="<?php the_permalink(); ?>">Read more...</a></p>

</div> 