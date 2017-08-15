<form id="styledecorRegistrationForm" action="#" method="post" data-url="<?php echo admin_url( 'admin-ajax.php' ); ?>">
	<div class="form-group">
		<input name="first_name" id="first_name" placeholder="First Name" type="text" required>
	</div>
	<div class="form-group">
		<input name="last_name" id="last_name" placeholder="Last Name" type="text" required>
	</div>
	<div class="form-group">
		<input name="email" id="email" placeholder="Email" type="email" required>
	</div>
	<div class="form-group">
		<input name="phone" id="phone" placeholder="Mobile Number" type="text" required>
	</div>
	<div class="form-group">
		<input type="submit" value="Send">
	</div>
</form>