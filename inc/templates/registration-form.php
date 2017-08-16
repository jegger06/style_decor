<form id="styledecorRegistrationForm" action="#" method="post" data-url="<?php echo admin_url( 'admin-ajax.php' ); ?>">
	<div class="form-group">
		<input name="first_name" id="first_name" placeholder="First Name" type="text" required="required">
		<small class="text-danger form-control-msg">Your First Name is Required</small>
	</div>
	<div class="form-group">
		<input name="last_name" id="last_name" placeholder="Last Name" type="text" required="required">
		<small class="text-danger form-control-msg">Your Last Name is Required</small>
	</div>
	<div class="form-group">
		<input name="email" id="email" placeholder="Email" type="email" required="required">
		<small class="text-danger form-control-msg">Your Email is Required</small>
	</div>
	<div class="form-group">
		<input name="phone" id="phone" placeholder="Mobile Number" type="text" required="required">
		<small class="text-danger form-control-msg">Your Mobile Number is Required</small>
	</div>
	<div class="form-group">
		<input type="submit" value="Send">
		<small class="text-info form-control-msg js-register-submission">Submission in process, please wait...</small>
		<small class="text-info form-control-msg js-register-success">You are now registered, thank you!</small>
		<small class="text-info form-control-msg js-register-error">There was a problem with the Registration Form, please try again!</small>
	</div>
</form>