<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<h4 class="entry-title"><?php the_title(); ?></h4>

<?php get_template_part( 'entry', 'meta' ); ?>


<?php
if(is_archive() || is_search()){
get_template_part('entry','summary');
} else {
get_template_part('entry','content');
}
?>

</div> 