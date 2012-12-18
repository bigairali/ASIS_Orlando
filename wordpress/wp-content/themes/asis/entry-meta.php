<?php global $authordata; ?>
<div class="entry-meta">
<span class="meta-prep meta-prep-author"><?php _e('By', 'blankslate'); ?> </span>
<span class="author vcard"><?php the_author(); ?></span>
<span class="meta-sep"> | </span>
<span class="meta-prep meta-prep-entry-date"><?php _e('Published', 'blankslate'); ?> </span>
<span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
<?php /* edit_post_link( __( 'Edit', 'blankslate' ), "<span class=\"meta-sep\"> | </span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) */ ?>
</div>