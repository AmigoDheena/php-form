
jQuery(document).ready(function() {
	
    /*
        Fullscreen background
    */
    $.backstretch("assets/img/backgrounds/1.jpg");
    
    /*
        Registration form validation
    */
    // $('.registration-form input[type="text"], .registration-form input[type="email"], .registration-form input[type="number"], .registration-form textarea').on('focus', function() {
    // 	$(this).removeClass('input-error');
    // });
    
    // $('.registration-form').on('submit', function(e) {
    	
    // 	$(this).find('input[type="text"], input[type="email"],input[type="number"], textarea').each(function(){
    // 		if( $(this).val() == "" ) {
    // 			e.preventDefault();
    // 			$(this).addClass('input-error');
    // 		}
    // 		else {
    // 			$(this).removeClass('input-error');
				
	// 			jQuery.ajax({
	// 				url: 'registration-form.php',
	// 				type: 'post',
	// 				data: jQuery('form#registration').serialize(),
	// 				complete: function(data) {
	// 					jQuery('#form_status').html(data.responseText);
	// 					jQuery('#registration').css({opacity:1});
	// 				}
	// 			});
    // 		}
    // 	});
    	
    // });
    
    /*
        Enquiry form validation
    */
    $('.enquiry-form input[type="text"], .enquiry-form input[type="number"], .enquiry-form textarea, .enquiry-form select#exampleFormControlSelect1').on('focus', function() {
    	$(this).removeClass('input-error');
    });
    
    $('.enquiry-form').on('submit', function(e) {
    	
    	$(this).find('input[type="text"],input[type="number"], textarea, select#exampleFormControlSelect1').each(function(){
    		if( $(this).val() == "" ) {
    			e.preventDefault();
    			$(this).addClass('input-error');
    		}
    		else {
    			$(this).removeClass('input-error');
    		}
    	});
    	
    });
    
    
});



function registration_form( f ){

	if( f.name.value == '' ){
		jQuery('#form_status').html('<div class="alert alert-danger" role="alert">Your Name must not be empty!</div>');
		notice( f.name );
	}
	
	else if( f.email.value == '' ){
		jQuery('#form_status').html('<div class="alert alert-danger" role="alert">Your Email must not be empty and correct format!</div>');
		notice( f.email );	
	}
	
	else if( f.phone.value == '' ){
		jQuery('#form_status').html('<div class="alert alert-danger" role="alert">Your Phone must not be empty and correct format!</div>');
        notice( f.phone );
    }
	
	else if( f.city.value == '' ){
		jQuery('#form_status').html('<div class="alert alert-danger" role="alert">Your City must not be empty!</div>');
		notice( f.city );
	}
	
	else{
		 jQuery.ajax({
			url: 'registration-form.php',
			type: 'post',
			data: jQuery('form#registration-form').serialize(),
			complete: function(data) {
				jQuery('#form_status').html(data.responseText);
				jQuery('#registration-form').find('input,textarea').attr({value:''});
				jQuery('#registration-form').css({opacity:1});
                jQuery('input[type="text"],textarea').val('');                
			}
		});
		jQuery('#form_status').html('<div class="alert alert-primary" role="alert">Sending your message...</div>');
		jQuery('#registration-form').animate({opacity:0.3});
	}
	
	return false;
}

function notice( f ){
	jQuery('#registration-form').find('input,textarea').css('border','none');
	f.style.border = '1px solid red';
	f.focus();
}


function enquiry_form( f ){

	if( f.name.value == '' ){
		jQuery('#form_status').html('<div class="alert alert-danger" role="alert">Your Name must not be empty!</div>');
		notice( f.name );
	}
	
	else if( f.email.value == '' ){
		jQuery('#form_status').html('<div class="alert alert-danger" role="alert">Your Email must not be empty and correct format!</div>');
		notice( f.email );	
	}
	
	else if( f.phone.value == '' ){
		jQuery('#form_status').html('<div class="alert alert-danger" role="alert">Your Phone must not be empty and correct format!</div>');
        notice( f.phone );
    }

	else if( f.message.value == '' ){
		jQuery('#form_status').html('<div class="alert alert-danger" role="alert">Your Message must not be empty!</div>');
		notice( f.message );
	}
	
	else if( f.city.value == '' ){
		jQuery('#form_status').html('<div class="alert alert-danger" role="alert">Your City must not be empty!</div>');
		notice( f.city );
	}
	
	else{
		 jQuery.ajax({
			url: 'enquiry-form.php',
			type: 'post',
			data: jQuery('form#enquiry-form').serialize(),
			complete: function(data) {
				jQuery('#form_status').html(data.responseText);
				jQuery('#enquiry-form').find('input,textarea').attr({value:''});
				jQuery('#enquiry-form').css({opacity:1});
                jQuery('input[type="text"],textarea').val('');                
			}
		});
		jQuery('#form_status').html('<div class="alert alert-primary" role="alert">Sending your message...</div>');
		jQuery('#enquiry-form').animate({opacity:0.3});
	}
	
	return false;
}