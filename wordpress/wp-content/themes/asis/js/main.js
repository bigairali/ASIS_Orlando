(function($){

	/* Find all the H3's on the page and put them in an ARRAY */
	var title_sections = $("h3");
	
	/* For EACH H3 in the ARRAY, find whether there is a SPAN tag in it */
	title_sections.each( function(index, value){
		var val = $(value);
		var is_span = val.find('span').length;

		/* IF there is no span tag then make one and put the orginal HTML text in it */
		if(!is_span){
			var val_html = val.html();
			var new_header = '<span class="title-section">'+ val_html +'</span>';
			
			val.html(new_header);
		}		
	});
	
})(jQuery);