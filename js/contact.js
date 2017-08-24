jQuery(document).ready(function($) {

	$('#styledecorContactForm').on('submit', function(e) {
		e.preventDefault();

		var contact_form = $(this),
			fullname = contact_form.find('#fullname').val(),
			phone = contact_form.find('#phone').val(),
			email = contact_form.find('#email').val(),
			subject = contact_form.find('#subject').val(),
			message = contact_form.find('#message').val(),
			ajaxurl = contact_form.data('url');

			$('.has-error').removeClass('has-error');
			$('.js-register-status').removeClass('js-register-status');

			if ( fullname === '' ) {
				$('#fullname').parent('.styled-input').addClass('has-error');
				return;
			}

			if ( phone === '' ) {
				$('#phone').parent('.styled-input').addClass('has-error');
				return;
			}

			if ( email === '' ) {
				$('#email').parent('.styled-input').addClass('has-error');
				return;
			}

			if ( subject === '' ) {
				$('#subject').parent('.styled-input').addClass('has-error');
				return;
			}

			if ( message === '' ) {
				$('#message').parent('.styled-input').addClass('has-error');
				return;
			}

			contact_form.find('input, textarea').attr('disabled', 'disabled');
			$('.js-register-submission').addClass('js-register-status');

			$.ajax({
				type: 'POST',
				url: ajaxurl,
				data: {
					fullname : fullname,
					phone : phone,
					email : email,
					subject : subject,
					message : message,
					action : 'styledecor_save_user_contact_form'
				},
				success: function( response ) {
					if ( response == 0 ) {
							$('.js-register-submission').removeClass('js-register-status');
							$('.js-register-error').addClass('js-register-status');
							contact_form.find('input, textarea').removeAttr('disabled');
					} else {
							$('.js-register-submission').removeClass('js-register-status');
							$('.js-register-success').addClass('js-register-status');
							contact_form.find('input, textarea').removeAttr('disabled');
							contact_form.find('input[type!="submit"], textarea').val('');
					}
				},
				error: function( response ) {
					console.log(response);
				}
			});

	});

});