<?php

/*

@package styledecortheme

=============================================
	MAIL CPT ADD CUSTOM META BOX FIELDS
=============================================


*/

?>

<div id="register-cpt">
	<div class="meta-row">
		<div class="meta-th">
			<label for="register-first-name" class="post-attributes-label"><?php _e( 'First Name' ); ?></label>
		</div>
		<div class="meta-td">
			<input type="text" id="register-first-name" name="register_first_name" value="<?php if( !empty( $register_stored_meta['register_first_name'] ) ) echo esc_attr( $register_stored_meta['register_first_name'][0] ); ?>">
		</div>
	</div>
	<div class="meta-row">
		<div class="meta-th">
			<label for="register-last-name" class="post-attributes-label"><?php _e( 'Last Name' ); ?></label>
		</div>
		<div class="meta-td">
			<input type="text" id="register-last-name" name="register_last_name" value="<?php if( !empty( $register_stored_meta['register_last_name'] ) ) echo esc_attr( $register_stored_meta['register_last_name'][0] ); ?>">
		</div>
	</div>
	<div class="meta-row">
		<div class="meta-th">
			<label for="register-email" class="post-attributes-label"><?php _e( 'Email Address' ); ?></label>
		</div>
		<div class="meta-td">
			<input type="email" id="register-email" name="register_email" value="<?php if( !empty( $register_stored_meta['register_email'] ) ) echo esc_attr( $register_stored_meta['register_email'][0] ); ?>">
		</div>
	</div>
	<div class="meta-row">
		<div class="meta-th">
			<label for="register-phone" class="post-attributes-label"><?php _e( 'Phone Number' ); ?></label>
		</div>
		<div class="meta-td">
			<input type="text" id="register-phone" name="register_phone" value="<?php if( !empty( $register_stored_meta['register_phone'] ) ) echo esc_attr( $register_stored_meta['register_phone'][0] ); ?>">
		</div>
	</div>	
</div>