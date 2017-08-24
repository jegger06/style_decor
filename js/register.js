jQuery(document).ready(function($) {

	$('#styledecorRegistrationForm').on('submit', function(e) {
		e.preventDefault();

		$('.has-error').removeClass('has-error');
		$('.js-register-status').removeClass('js-register-status');

		var registratrion_form = $(this),
			first_name = registratrion_form.find('#first_name').val(),
			last_name = registratrion_form.find('#last_name').val(),
			email = registratrion_form.find('#email').val(),
			phone = registratrion_form.find('#phone').val(),
			ajaxurl = registratrion_form.data('url');

		if ( first_name === '' ) {
			$('#first_name').parent('.form-group').addClass('has-error');
			return;
		}

		if ( last_name === '' ) {
			$('#last_name').parent('.form-group').addClass('has-error');
			return;
		}

		if ( email === '' ) {
			$('#email').parent('.form-group').addClass('has-error');
			return;
		}

		if ( phone === '' ) {
			$('#phone').parent('.form-group').addClass('has-error');
			return;
		}

		registratrion_form.find('input, button').attr('disabled', 'disabled');
		$('.js-register-submission').addClass('js-register-status');

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

					setTimeout(function() {
						$('.js-register-submission').removeClass('js-register-status');
						$('.js-register-error').addClass('js-register-status');
						registratrion_form.find('input').removeAttr('disabled');
					}, 1000);

				} else {

					setTimeout(function() {
						$('.js-register-submission').removeClass('js-register-status');
						$('.js-register-success').addClass('js-register-status');
						registratrion_form.find('input').removeAttr('disabled');
						registratrion_form.find('input[type!="submit"]').val('');
					}, 1000);

				}
			},
			error: function( response ) {
				$('.js-register-submission').removeClass('js-register-status');
				$('.js-register-error').addClass('js-register-status');
				registratrion_form.find('input').removeAttr('disabled');
			}
		});

	});

});