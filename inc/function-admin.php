<?php

/*
	@package styledecortheme

================
 	ADMIN PAGE
================

*/

function styledecor_add_admin_page() {

	// Adding the 'Style Decor' Menu
	add_menu_page( 'Style Decor General Settings', 'Style Decor', 'manage_options', 'style_decor', 'styledecor_theme_create_page', get_template_directory_uri() . '/images/styledecor-icon.png', 110 );

	// Adding the sub pages on the 'Style Decor' Menu
	add_submenu_page( 'style_decor', 'Style Decor General Settings', 'General', 'manage_options', 'style_decor', 'styledecor_theme_create_page' );
	add_submenu_page( 'style_decor', 'Style Decor Theme Options', 'Theme Options', 'manage_options', 'style_decor_theme_options', 'styledecor_theme_options' );

	// Activate custom settings
	add_action( 'admin_init', 'styledecor_custom_settings' );

}

add_action( 'admin_menu', 'styledecor_add_admin_page' );

function styledecor_custom_settings() {

	register_setting( 'styledecor-settings-group', 'email', 'styledecor_sanitize_email' );
	register_setting( 'styledecor-settings-group', 'number', 'styledecor_sanitize_number' );
	register_setting( 'styledecor-settings-group', 'location' );
	register_setting( 'styledecor-settings-group', 'facebook' );
	register_setting( 'styledecor-settings-group', 'twitter', 'styledecor_sanitize_twitter' );
	register_setting( 'styledecor-settings-group', 'rss' );
	register_setting( 'styledecor-settings-group', 'googleplus' );
	register_setting( 'styledecor-settings-group', 'penterest' );

	add_settings_section( 'styledecor-contact-info', 'Contact Information', 'styledecor_contact_info', 'style_decor' );
	add_settings_section( 'styledecor-social-links', 'Social Links', 'styledecor_social_links', 'style_decor' );

	add_settings_field( 'contact-email', 'Email Address', 'styledecor_contact_email', 'style_decor', 'styledecor-contact-info', array( 'label_for' => 'email' ) );
	add_settings_field( 'contact-number', 'Phone Number', 'styledecor_contact_number', 'style_decor', 'styledecor-contact-info', array( 'label_for' => 'number') );
	add_settings_field( 'contact-location', 'Location', 'styledecor_contact_location', 'style_decor', 'styledecor-contact-info', array( 'label_for' => 'location' ) );
	add_settings_field( 'social-facebook', 'Facebook Handler', 'styledecor_social_facebook', 'style_decor', 'styledecor-social-links', array( 'label_for' => 'facebook' ) );
	add_settings_field( 'social-twitter', 'Twitter Handler', 'styledecor_social_twitter', 'style_decor', 'styledecor-social-links', array( 'label_for' => 'twitter' ) );
	add_settings_field( 'social-rss', 'RSS Handler', 'styledecor_social_rss', 'style_decor', 'styledecor-social-links', array( 'label_for' => 'rss' ) );
	add_settings_field( 'social-googleplus', 'Google+ Handler', 'styledecor_social_googleplus', 'style_decor', 'styledecor-social-links', array( 'label_for' => 'googleplus' ) );
	add_settings_field( 'social-penterest', 'Penterest Handler', 'styledecor_social_penterest', 'style_decor', 'styledecor-social-links', array( 'label_for' => 'penterest' ) );

}

function styledecor_contact_info() {

	// echo 'Customize your Contact Information';

}

function styledecor_social_links() {

	echo '';

}

function styledecor_contact_location() {

	$location = esc_attr ( get_option( 'location' ) );

	echo '<textarea name="location" id="location" rows="10" cols="53" placeholder="Location of this company.">' . $location . '</textarea> <p class="description">You can insert html elements in here.</p>';

}

function styledecor_contact_email() {

	$email = esc_attr( get_option( 'email' ) );

	echo '<input type="text" name="email" id="email" value="' . $email . '" class="regular-text" placeholder="Email address of this company." />';

}

function styledecor_contact_number() {

	$number = esc_attr( get_option( 'number' ) );

	echo '<input type="text" name="number" id="number" value="' . $number . '" class="regular-text" placeholder="Contact Number of this company." />';

}

function styledecor_social_facebook() {

	$facebook = esc_attr( get_option( 'facebook' ) );

	echo '<input type="text" name="facebook" id="facebook" value="' . $facebook  . '" class="regular-text" placeholder="Facebook handler" />';

}

function styledecor_social_twitter() {

	$twitter = esc_attr( get_option( 'twitter' ) );

	echo '<input type="text" name="twitter" id="twitter" value="' . $twitter . '" class="regular-text" placeholder="Twitter handler" /> <p class="description">Input your Twitter username without the @ character.';

}

function styledecor_social_rss() {

	$rss = esc_attr( get_option( 'rss' ) );

	echo '<input type="text" name="rss" id="rss" value="' . $rss . '" class="regular-text" placeholder="RSS handler" />';

}

function styledecor_social_googleplus() {

	$googleplus = esc_attr( get_option( 'googleplus' ) );

	echo '<input type="text" name="googleplus" id="googleplus" value="' . $googleplus . '" class="regular-text" placeholder="Google+ handler" />';

}

function styledecor_social_penterest() {

	$penterest = esc_attr( get_option( 'penterest' ) );

	echo '<input type="text" name="penterest" id="penterest" value="' . $penterest . '" class="regular-text" placeholder="Penterest handler" />';

}


// Sanitization/Validation
function styledecor_sanitize_email( $input ) {

	$output = esc_attr( get_option( 'email' ) );

	if ( is_email( $input ) ) {
		$output = $input;
	} else {
		add_settings_error( 'email', 'invalid_email', 'The email address entered did not appear to be a valid email address. Please enter a valid email address.', 'error' );
	}

	return $output;

}

function styledecor_sanitize_number( $input ) {

	$output = esc_attr( get_option( 'number' ) );

	if ( preg_match( '/^[0-9 +]{0,15}$/', $input ) ) {
		$output = $input;
	} else {
		add_settings_error( 'number', 'invalid_phone_number', 'The phone number entered did not appear to be a valid phone number. Please enter a valid phone number', 'error' );
	}

	return $output;

}

function styledecor_sanitize_twitter( $input ) {

	$output = sanitize_text_field( $input );
	$output = str_replace( '@', '', $output );
	return $output;

}






function styledecor_theme_create_page() {

	require_once get_template_directory() . '/inc/templates/styledecor-admin.php';

}

function styledecor_theme_options() {

	require_once get_template_directory() . '/inc/templates/styledecor-admin-options.php';

}
