function validate_threepack( f ){
		
	if (jQuery('input[name="starter"]:checked').length == 0) {
		jQuery('#three_salad_id').html('<span class="wrong">Please select Starter</span>');
		jQuery('input[name="starter"]').focus();
		setTimeout(function(){ jQuery(".wrong").hide();},3000);
		return false;
	} 
	else if (jQuery('input[name="bread"]:checked').length == 0) {
		jQuery('#three_bread_id').html('<span class="wrong">Please select Bread</span>');
		jQuery('input[name="bread"]').focus();
		setTimeout(function(){ jQuery(".wrong").hide();},3000);
		return false;
	} 
	else if (jQuery('input[name="rice"]:checked').length == 0) {
		jQuery('#three_rice_id').html('<span class="wrong">Please select Rice/Noodles</span>');
		jQuery('input[name="rice"]').focus();
		setTimeout(function(){ jQuery(".wrong").hide();},3000);
		return false;
	} 
	else if (jQuery('input[name="nonveg"]:checked').length == 0) {
		jQuery('#three_nonveg_id').html('<span class="wrong">Please select Non-veg Gravy</span>');
		jQuery('input[name="nonveg"]').focus();
		setTimeout(function(){ jQuery(".wrong").hide();},3000);
		return false;
	} 
	else if (jQuery('input[name="salad"]:checked').length == 0) {
		jQuery('#three_salad_id').html('<span class="wrong">Please select Salad</span>');
		jQuery('input[name="salad"]').focus();
		setTimeout(function(){ jQuery(".wrong").hide();},3000);
		return false;
	}
	else if( f.name.value == '' ){
		jQuery('#three_name_error').html('<span class="wrong">Your name is required</span>');
		jQuery('input[name="name"]').focus();
	}
	else if( f.mobile.value == '' ){
		jQuery('#three_mobile_error').html('<span class="wrong">Your mobile is required</span>');
		jQuery('input[name="mobile"]').focus();
	}
	else if( f.email.value == '' ){
		jQuery('#three_email_error').html('<span class="wrong">Your Email is required and correct format</span>');
		jQuery('input[name="email"]').focus();
	}
	else if( f.address.value == '' ){
		jQuery('#three_address_error').html('<span class="wrong">Your address is required</span>');
		jQuery('textarea[name="address"]').focus();	
	}
	else if( f.develveryaddress.value == '' )  {
		jQuery('#three_develveryaddress_error').html('<span class="wrong">Your Delivery address is required</span>');
		jQuery('textarea[name="develveryaddress"]').focus();
	}
	else if( f.date.value == '' ){
		jQuery('#three_date_error').html('<span class="wrong">Choose Delivery date</span>');
		jQuery('input[name="date"]').focus();
	}
	else if (jQuery("#three_delevery_time").val() == '') {
		jQuery('#three_deletime_error').html('<span class="wrong">Choose Delivery time!</span>');
		jQuery('input[name="time"]').focus();
	}
	else{
		 jQuery.ajax({
			url: 'cookie_note.php',
			type: 'post',
			data: jQuery('form#threepack').serialize(),
			complete: function(data) {
				jQuery('#form_status').html(data.responseText);
				jQuery('#threepack').css({opacity:1});
			}
		});
		jQuery("#three_submit").css("display","none");
		jQuery("#threepack_pay").css("display","block");
	}
	setTimeout(function(){ jQuery(".wrong").hide();},3000);
	return false;
}

function notice( f ){
	jQuery('#threepack').find('input,textarea').css('border','none');
	f.style.border = '1px solid red';
	f.focus();
}