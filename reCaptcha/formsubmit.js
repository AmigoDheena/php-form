function grecaptcha_form( f ){

	if( f.name.value == '' ){
		jQuery('#form_status').html('<span class="wrong">Your name must not be empty!</span>');
		notice( f.name );
	}else if( f.email.value == '' ){
		jQuery('#form_status').html('<span class="wrong">Your email must not be empty and correct format!</span>');
		notice( f.email );	
	}else if( f.phone.value == '' ){
		jQuery('#form_status').html('<span class="wrong">Your phone must not be empty and correct format!</span>');
        notice( f.phone );
    }else if( f.message.value == '' ){
		jQuery('#form_status').html('<span class="wrong">Your message must not be empty!</span>');
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
		jQuery('#form_status').html('<span class="loading">Sending your message...</span>');
		jQuery('#contact_form').animate({opacity:0.3});
	}
	
	return false;
}

function notice( f ){
	jQuery('#contact_form').find('input,textarea').css('border','none');
	f.style.border = '1px solid red';
	f.focus();
}