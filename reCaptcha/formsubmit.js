function grecaptcha_form( f ){

	if( f.name.value == '' ){
		jQuery('#form_status').html('<div class="alert alert-danger" role="alert">Your name must not be empty!</div>');
		notice( f.name );
	}else if( f.email.value == '' ){
		jQuery('#form_status').html('<div class="alert alert-danger" role="alert">Your email must not be empty and correct format!</div>');
		notice( f.email );	
	}else if( f.phone.value == '' ){
		jQuery('#form_status').html('<div class="alert alert-danger" role="alert">Your phone must not be empty and correct format!</div>');
        notice( f.phone );
    }else if( f.message.value == '' ){
		jQuery('#form_status').html('<div class="alert alert-danger" role="alert">Your message must not be empty!</div>');
		notice( f.message );
	}else{
		 jQuery.ajax({
			url: 'captcha-mail.php',
			type: 'post',
			data: jQuery('form#contact_form').serialize(),
			complete: function(data) {
				jQuery('#form_status').html(data.responseText);
				jQuery('#contact_form').find('input,textarea').attr({value:''});
				jQuery('#contact_form').css({opacity:1});
                jQuery('input[type="text"],textarea').val('');                
			}
		});
		jQuery('#form_status').html('<div class="alert alert-primary" role="alert">Sending your message...</div>');
		jQuery('#contact_form').animate({opacity:0.3});
	}
	
	return false;
}

function notice( f ){
	jQuery('#contact_form').find('input,textarea').css('border','none');
	f.style.border = '1px solid red';
	f.focus();
}