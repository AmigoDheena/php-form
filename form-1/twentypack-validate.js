function validate_twentypack( f ){
		
	if (jQuery('input[name="starter"]:checked').length == 0) {
		jQuery('#twenty_starter_id').html('<span class="wrong">Please select Starter</span>');
		jQuery('input[name="starter"]').focus();
		setTimeout(function(){ jQuery(".wrong").hide();},3000);
		return false;
	} 
	else if (jQuery('input[name="bread"]:checked').length == 0) {
		jQuery('#twenty_bread_id').html('<span class="wrong">Please select Bread</span>');
		jQuery('input[name="bread"]').focus();
		setTimeout(function(){ jQuery(".wrong").hide();},3000);
		return false;
	} 
	else if (jQuery('input[name="rice"]:checked').length == 0) {
		jQuery('#twenty_rice_id').html('<span class="wrong">Please select Rice/Noodles</span>');
		jQuery('input[name="rice"]').focus();
		setTimeout(function(){ jQuery(".wrong").hide();},3000);
		return false;
	} 
	else if (jQuery('input[name="nonveg"]:checked').length == 0) {
		jQuery('#twenty_nonveg_id').html('<span class="wrong">Please select Non-veg Gravy</span>');
		jQuery('input[name="nonveg"]').focus();
		setTimeout(function(){ jQuery(".wrong").hide();},3000);
		return false;
	} 
	else if (jQuery('input[name="salad"]:checked').length == 0) {
		jQuery('#twenty_salad_id').html('<span class="wrong">Please select Salad</span>');
		jQuery('input[name="salad"]').focus();
		setTimeout(function(){ jQuery(".wrong").hide();},3000);
		return false;
	}
	else if (jQuery('input[name="dessert"]:checked').length == 0) {
		jQuery('#twenty_dessert_id').html('<span class="wrong">Please select Dessert</span>');
		jQuery('input[name="dessert"]').focus();
		setTimeout(function(){ jQuery(".wrong").hide();},3000);
		return false;
	}
	else if( f.name.value == '' ){
		jQuery('#twenty_name_error').html('<span class="wrong">Your name is required</span>');
		jQuery('input[name="name"]').focus();
	}
	else if( f.mobile.value == '' ){
		jQuery('#twenty_mobile_error').html('<span class="wrong">Your mobile is required</span>');
		jQuery('input[name="mobile"]').focus();
	}
	else if( f.email.value == '' ){
		jQuery('#twenty_email_error').html('<span class="wrong">Your Email is required and correct format</span>');
		jQuery('input[name="email"]').focus();
	}
	else if( f.address.value == '' ){
		jQuery('#twenty_address_error').html('<span class="wrong">Your address is required</span>');
		jQuery('textarea[name="address"]').focus();
	}
	else if( f.develveryaddress.value == '' )  {
		jQuery('#twenty_develveryaddress_error').html('<span class="wrong">Your Delivery address is required</span>');
		jQuery('textarea[name="develveryaddress"]').focus();
	}
	else if( f.date.value == '' ){
		jQuery('#twenty_date_error').html('<span class="wrong">Choose Delivery date</span>');
		jQuery('input[name="date"]').focus();
	}
	else if (jQuery("#twenty_delevery_time").val() == '') {
        jQuery('#twenty_deletime_error').html('<span class="wrong">Choose Delivery time!</span>');
		jQuery('input[name="time"]').focus();
	}
	else{
		 jQuery.ajax({
			// url: 'twentypack_validate.php',
			url: 'session_note.php',
			type: 'post',
			data: jQuery('form#twentypack').serialize(),
			complete: function(data) {
				jQuery('#form_status').html(data.responseText);
				// jQuery('#twentypack').find('input,textarea').attr({value:''});
				jQuery('#twentypack').css({opacity:1});
			}
		});

		// window.location.href = "https://www.tantrestaurant.com/twentypack-pay.php";

		jQuery("#twenty_submit").css("display","none");
		jQuery("#twentypack_pay").css("display","block");

		// jQuery('#form_status').html('<span class="loading">Sending your message...</span>');
		// jQuery('#twentypack').animate({opacity:0.3});
	}
	setTimeout(function(){ jQuery(".wrong").hide();},3000);
	return false;
}

function notice( f ){
	jQuery('#twentypack').find('input,textarea').css('border','none');
	f.style.border = '1px solid red';
	f.focus();
}