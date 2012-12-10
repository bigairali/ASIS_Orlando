(function($){

	/* Global Variables */
	var win = $(window);

	/* Find all the H3's on the page and put them in an ARRAY */
	var title_sections = $("h3");
	
	/* For EACH H3 in the ARRAY, find whether there is a SPAN tag in it */
	title_sections.each( function(index, value){
		var val = $(value);
		var has_title = val.find('span').hasClass('title-section');
		
		console.log(title_sections);

		/* IF there is no span tag then make one and put the orginal HTML text in it */
		if(!has_title){
			var val_html = val.html();
			var new_header = '<span class="title-section">'+ val_html +'</span>';
			
			val.html(new_header);
		}
	});
	
	
	
	
/* COMMENT ERROR HANDLING */

/* Text Inputs */
	var author_field = $('#author');
	var email_field = $('#email');
	var comment_field = $('#comment');
	
/* Form containers */
	var author_container = $('.comment-form-author');
	var email_container = $('.comment-form-email');
	var comment_container = $('.comment-form-comment');
	
/* Event Handling */
	win.on('submit', '#commentform', function(e){
		var author_text = author_field.val();
		var email_text = email_field.val();
		var comment_text = comment_field.val();
		
		var is_error_msg = $('.comment_error');
		
		
		if(!comment_text){
				console.log(is_error_msg[0], 'Error');
			if(!is_error_msg[0]){
				
				comment_field.css('border', '1px solid rgb(222, 0, 16)');
				
				html = '<p class="comment_error"><strong>ERROR</strong>: please type a comment.</p>';
			
				comment_container.append(html)
			};
			
			
			return false;			
		}
		

	});
	
	
	
	
	
})(jQuery);