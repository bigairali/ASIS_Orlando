(function($){

	/* Global Variables */
	var win = $(window);

	/* Find all the H3's on the page and put them in an ARRAY */
	var title_sections = $("h3");
	
	/* For EACH H3 in the ARRAY, find whether there is a SPAN tag in it */
	title_sections.each( function(index, value){
		var val = $(value);
		var has_title = val.find('span').hasClass('title-section');

		/* IF there is no span tag then make one and put the orginal HTML text in it */
		if(!has_title){
			var val_html = val.html();
			var new_header = '<span class="title-section">'+ val_html +'</span>';
			
			val.html(new_header);
		}
	});
	
	
	
/* COMMENT ERROR HANDLING */
	var is_logged_in = $('.logged-in-as')[0];
	

	
/* Text Inputs */
	var author_field = $('#author');
	var email_field = $('#email');
	var comment_field = $('#comment');
	
/* Form containers */
	var comment_wrapper = $('#respond');
	var author_container = $('.comment-form-author');
	var email_container = $('.comment-form-email');
	var comment_container = $('.comment-form-comment');
	
	
	console.log(is_logged_in, 'Is the user logged in?');
	
/* Event Handling */
	win.on('submit', '#commentform', function(e){
		
		if(!is_logged_in){
			comment_wrapper.append('<div class="error_box"></div>')
		
			var author_text = author_field.val();
			var email_text = email_field.val();
			var comment_text = comment_field.val();
			
			var is_comment_error = $('.comment_error');
			var is_email_error = $('.email_error');
			var is_name_error = $('.name_error');
			
			
			if(!comment_text){
				if(!is_comment_error[0]){
					
					comment_field.css('border', '1px solid rgb(222, 0, 16)');
					
					html = '<p class="comment_error"><strong>ERROR</strong>: please type a comment.</p>';
				
					comment_container.append(html)
				};
				
				return false;			
			}
		}else{
			
		}
		
	
	
		
		

	});
	
	
	
	
	
})(jQuery);