<?php get_header(); ?>

<img class="header_image" src="/asis_images/sub_lake_eola.jpg" alt="Different angle of Lake Eola" width="960" height="160" />

	<?php 
		
	/* Post ID number */
		$page_id = get_the_ID(); 
		
		$category_info = get_the_category($page_id);
		$cat_ID = $category_info[0]->cat_ID;
		var_dump($cat_ID);
		$slug = $category_info[0]->slug;
		
	?>

	<div class="main_column">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'entry' ); ?>
		<?php comments_template('', true); ?>
		<?php endwhile; endif; ?>
	</div>
	
	<aside>
		<h3>More Articles</h3>
<?php /* Beginning of a Wordpress Loop */ ?>
<?php /* This query is for the ASIS Coverage Section of the page */ ?>
		<?php $single_query = new WP_Query('category_name='.$slug.'&posts_per_page=5'); ?>
		<?php get_search_form(); ?>
	
		<ul id="post_list">
		<?php if ( $single_query->have_posts() ) : while ( $single_query->have_posts() ) : $single_query->the_post(); ?>
		<?php $current_id = get_the_ID(); ?>
			<li <? if($page_id == $current_id) echo 'class="current_post"'; ?>><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php endwhile; endif; ?>
		</ul>
			
	</aside>

<?php get_footer(); ?>