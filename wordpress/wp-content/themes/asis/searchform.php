<?php
	/* ID of the current page */
	$page_id = get_the_ID(); 
	
	/* Category Information for the current ID */
	$category_info = get_the_category($page_id);
	
	/* ID of the current category for this page */
	$cat_ID = $category_info[0]->cat_ID;
	
?>

<form method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
<div id="search-inputs">
<input type="text" value="" name="s" id="s" />
<input type="hidden" value="<?=$cat_ID; ?>" name="cat" id="scat" />
<input type="submit" id="searchsubmit" value="Search" />
</div>
</form>