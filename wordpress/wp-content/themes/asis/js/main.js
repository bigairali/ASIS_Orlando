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
		
	var comment_wrapper = $('.comment-notes');
	var error_box = $('.error_box');
			
	if(!error_box[0]){
		comment_wrapper.append('<ul class="error_box"></ul>');
	}
	
/* Text Inputs */
	var author_field = $('#author');
	var email_field = $('#email');
	var comment_field = $('#comment');
	
/* Form containers */
	
	var author_container = $('.comment-form-author');
	var email_container = $('.comment-form-email');
	var comment_container = $('.comment-form-comment');
	
	
	console.log(is_logged_in, 'Is the user logged in?');
	
/* Event Handling */
	win.on('submit', '#commentform', function(e){
		
		var author_text = author_field.val();
		var email_text = email_field.val();
		var comment_text = comment_field.val();

		if(!is_logged_in && !author_text || !email_text || !comment_text){
			var remove_msgs = [];
		
			var is_name_error = $('.name_error');
			var is_email_error = $('.email_error');
			var is_comment_error = $('.comment_error');
			
			var error_box = $('.error_box');
						
		/* Name field error handling */
			if(!author_text){
			
				if(!is_name_error[0]){
					comment_field.css('border', '1px solid rgb(222, 0, 16)');
					
					html = '<li class="author_error"><strong>ERROR</strong>: please enter your name.</li>';
				
					error_box.append(html);					
				}
			}else{
				var error = $('.author_error');
				remove_msgs.push(error);
			}
					
		/* Email field error handling */
			if(!email_text){
			
				if(!is_email_error[0]){
					comment_field.css('border', '1px solid rgb(222, 0, 16)');
					
					html = '<li class="email_error"><strong>ERROR</strong>: please enter your email.</li>';
				
					error_box.append(html);
				}
			}else{
				var error = $('.email_error');
				remove_msgs.push(error);
			}
			
		/* Comment field error handling */
			if(!comment_text){
			
				if(!is_comment_error[0]){
					comment_field.css('border', '1px solid rgb(222, 0, 16)');
					
					html = '<li class="comment_error"><strong>ERROR</strong>: please enter a comment.</li>';
				
					error_box.append(html);
				}			
			}else{
				var error = $('.comment_error');
				remove_msgs.push(error);
			}
			
			
			var error_msgs = error_box.find('li');
			
			error_msgs.each(function(index, val){
				var value_item = $(val);
				value_item.fadeIn();
			});
			
			$.each(remove_msgs, function(index, val){
				var value_item = $(val);
				value_item.fadeOut();
			});
			
			return false;
			
		}else{
			
		}
		
	
	
		
		

	});
	
	
	
	
	
})(jQuery);