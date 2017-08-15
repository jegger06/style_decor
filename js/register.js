jQuery(document).ready(function($) {

	$('#styledecorRegistrationForm').on('submit', function(e) {
		e.preventDefault();
		var registratrion_form = $(this),
			first_name = registratrion_form.find('#first_name').val(),
			last_name = registratrion_form.find('#last_name').val(),
			email = registratrion_form.find('#email').val(),
			phone = registratrion_form.find('#phone').val(),
			ajaxurl = registratrion_form.data('url');

		if ( first_name === '' || last_name === '' || email === '' || phone === '' ) {
			console.log('Required inputs are empty');
			return;
		}

		$.ajax({
			type: 'POST',
			url: ajaxurl,
			data: {
				first_name : first_name,
				last_name : last_name,
				email : email,
				phone : phone,
				action : 'styledecor_save_user_registration_form'
			},
			success: function( response ) {
				if ( response == 0 ) {
					console.log('Unable to save your registration. Please try again later.');
				} else {
					console.log('Registration saved, thank you!');
				}
			},
			error: function( response ) {
				console.log(response)
			}
		});

	});

});