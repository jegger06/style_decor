<div class="contact-form">
	<div class="contact-form-right">
		<div class="contact-form-grid">
			<form id="styledecorContactForm" action="#" method="post" data-url="<?php echo admin_url( 'admin-ajax.php' ); ?>">
				<div class="fields-grid">
					<div class="styled-input agile-styled-input-top">
						<input type="text" id="fullname" name="Full Name" required="">
						<label>Full Name</label>
						<span></span>
						<small class="text-danger form-control-msg">Your Full Name is required!</small>
					</div>
					<div class="styled-input agile-styled-input-top">
						<input type="text" id="phone" name="Phone" required=""> 
						<label>Phone</label>
						<span></span>
						<small class="text-danger form-control-msg">Your Phone is required!</small>
					</div>
					<div class="styled-input styled-email">
						<input type="email" id="email" name="Email" required=""> 
						<label>Email</label>
						<span></span>
						<small class="text-danger form-control-msg">Your Email is required!</small>
					</div> 
					<div class="styled-input">
						<input type="text" id="subject" name="Subject" required="">
						<label>Subject</label>
						<span></span>
						<small class="text-danger form-control-msg">Your Subject is required!</small>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="styled-input textarea-grid">
					<textarea name="Message" id="message" required=""></textarea>
					<label>Message</label>
					<span></span>
					<small class="text-danger form-control-msg">Your Message is required!</small>
				</div>	 
				<div class="submit">
					<input type="submit" value="SEND">
					<small class="text-info form-control-msg js-register-submission">Submission in process, please wait...</small>
					<!-- <small class="text-info form-control-msg js-register-success">You are now registered, thank you!</small> -->
					<div class="form-control-msg js-register-success alert alert-success alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<strong>Well done!</strong> Your message has been sent.
					</div>
					<div class="form-control-msg js-register-error alert alert-danger alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<strong>Oh snap!</strong> Change a few things up and try submitting again.
					</div>
					<!-- <small class="text-info form-control-msg js-register-error">There was a problem with the Registration Form, please try again!</small> -->
				</div>
			</form>
		</div>
	</div>
</div>