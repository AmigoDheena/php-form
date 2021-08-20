function validate_form( f ){

	if( f.name.value == '' ){
		jQuery('#form_status').html('<span class="wrong">Your name must not be empty!</span>');
		notice( f.name );
	}else if( f.email.value == '' ){
		jQuery('#form_status').html('<span class="wrong">Your email must not be empty and correct format!</span>');
		notice( f.email );	
	}else if( f.phone.value == '' ){
		jQuery('#form_status').html('<span class="wrong">Your phone must not be empty and correct format!</span>');
        notice( f.phone );
    }else if( f.website.value == '' ){
		jQuery('#form_status').html('<span class="wrong">Your website must not be empty!</span>');
		notice( f.website );	
	}else if( f.message.value == '' ){
		jQuery('#form_status').html('<span class="wrong">Your message must not be empty!</span>');
		notice( f.message );
	}else{
		 jQuery.ajax({
			url: 'contact-mail.php',
			type: 'post',
			data: jQuery('form#contact-form').serialize(),
			complete: function(data) {
				jQuery('#form_status').html(data.responseText);
				jQuery('#contact-form').find('input,textarea').attr({value:''});
				jQuery('#contact-form').css({opacity:1});
                jQuery('input[type="text"],textarea').val('');                
			}
		});
		jQuery('#form_status').html('<span class="loading">Sending your message...</span>');
		jQuery('#contact-form').animate({opacity:0.3});
	}
	
	return false;
}

function notice( f ){
	jQuery('#contact-form').find('input,textarea').css('border','none');
	f.style.border = '1px solid red';
	f.focus();
}