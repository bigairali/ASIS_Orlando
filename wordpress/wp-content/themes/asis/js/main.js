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
		
	var navigation = $('#menu-asis_menu > li');
	var nav_length = navigation.length;
	
	console.log(nav_length);
	
	if(nav_length > 4){
		var the_nav = $('nav');
		the_nav.toggleClass('default-nav').addClass('extended-nav');
	}

	
/* COMMENT ERROR HANDLING --- [BEGIN] */
	var is_logged_in = $('.logged-in-as');
		
	var comment_wrapper = $('.main_column .comment-notes');
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

	
/* Event Handling */
	var search_form = $('#searchform');
	var post_form = $('#commentform');
	
	console.log(search_form[0]);
	
	search_form.on('submit', function(){
	
		var search_field = $('#s');
		var search_input = search_field.val();
		
		console.log('This is the value', search_input);
		
		if(search_input === ""){
			search_field.css('border', '2px inset rgb(222, 0, 16)');
			
			return false;
		}
		
		console.log('Search Touched');
	});
	
	post_form.on('submit', function(){
		
		var author_text = author_field.val();
		var email_text = email_field.val();
		var comment_text = comment_field.val();
		
		if(!author_text || !email_text || !comment_text ){
			var remove_msgs = [];
		
			var is_author_error = $('.author_error');
			var is_email_error = $('.email_error');
			var is_comment_error = $('.comment_error');
			var is_comment_error_log = $('.comment_error_log');
			
			var error_box = $('.error_box');
			var error_msgs = [];
						
		/* Name field error handling */
			if(!author_text){
			
				if(!is_author_error[0]){
					author_field.css('border', '2px inset rgb(222, 0, 16)');
					
					html = '<li class="author_error">Please enter your <strong>name</strong>.</li>';
				
					error_box.append(html);					
				}
			}else{
				author_field.css('border', '2px inset #EEE');

				var error = $('.author_error');
				remove_msgs.push(error);
			}
					
		/* Email field error handling */
			if(!email_text){
			
				if(!is_email_error[0]){
					email_field.css('border', '2px inset rgb(222, 0, 16)');
					
					html = '<li class="email_error">Please enter your <strong>email</strong>.</li>';
				
					error_box.append(html);
				}
			}else{
				email_field.css('border', '2px inset #EEE');
			
				var error = $('.email_error');
				remove_msgs.push(error);
			}
			
		/* Comment field error handling */
			if(!comment_text){
			
				if(!is_comment_error[0]){
					comment_field.css('border', '2px inset rgb(222, 0, 16)');
					
					html = '<li class="comment_error">Please enter a <strong>comment</strong>.</li>';
					
					if(!is_logged_in[0]){
						error_box.append(html);
					}else if(!is_comment_error_log[0]){
						var container = $('.comment-form-comment');
						container.append('<p class="comment_error_log">Please enter a <strong>comment</strong>.</p>');
						
						var error = $('.comment_error_log');
						error.fadeIn();
					}
				}			
			}else{
				var error = $('.comment_error');
				remove_msgs.push(error);
				
				comment_field.css('border', 'none');
			}
			
			error_msgs = error_box.find('li');
			
			/* Make all errors fade in after errors have been found */
			error_msgs.each(function(index, val){
				var value_item = $(val);
				value_item.fadeIn();
			});
			
			/* Remove any errors that no longer exist upon submition */
			$.each(remove_msgs, function(index, val){
				var value_item = $(val);
				value_item.fadeOut(1000, function(){
					value_item.remove();
				});
			});
			
			return false;
			
		}

		
	});
/* COMMENT ERROR HANDLING --- [END] */


		
	
	
	
})(jQuery);