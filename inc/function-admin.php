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
	add_submenu_page( 'style_decor', 'Style Decor Theme Options', 'Theme Options', 'manage_options', 'style_decor_theme_options', 'styledecor_theme_support_page' );
	add_submenu_page( 'style_decor', 'Style Decor Custom CSS', 'Custom CSS', 'manage_options', 'style_decor_theme_custom_css', 'styledecor_custom_css_page' );
	add_submenu_page( 'style_decor', 'Style Decor Contact Form', 'Contact Form', 'manage_options', 'style_decor_theme_contact', 'styledecor_contact_form_page' );
	add_submenu_page( 'style_decor', 'Style Decor Registration Form', 'Registration Form', 'manage_options', 'style_decor_theme_register', 'styledecor_registration_form_page' );

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

	// Contact Form Options for contact page
	register_setting( 'styledecor-contact-options', 'activate_contact_form' );
	add_settings_section( 'styledecor-contact-section', 'Contact Form', 'styledecor_contact_section', 'style_decor_theme_contact' );
	add_settings_field( 'activate-contact-form', 'Activate Contact Form', 'styledecor_activate_contact_form', 'style_decor_theme_contact', 'styledecor-contact-section' );

	// Custom CSS admin page options
	register_setting( 'styledecor-custom-css-options', 'custom_css', 'styledecor_sanitize_custom_css' );
	add_settings_section( 'styledecor-custom-css-section', 'Custom CSS', 'styledecor_custom_css_section', 'style_decor_theme_custom_css' );
	add_settings_field( 'add-custom-css', 'Insert your Custom CSS', 'styledecor_custom_css_form', 'style_decor_theme_custom_css', 'styledecor-custom-css-section'  );

	// Registration Form Options for home page (register form)
	register_setting( 'styledecor-register-options', 'activate_registration_form' );
	add_settings_section( 'styledecor-register-section', 'Registration Form', 'styledecor_register_section', 'style_decor_theme_register' );
	add_settings_field( 'activate-registration-form', 'Activate Registration Form', 'styledecor_activate_registration_form', 'style_decor_theme_register', 'styledecor-register-section' );

	// Theme Support Options
	register_setting( 'styledecor-theme-support', 'post_formats' );
	add_settings_section( 'styledecor-theme-options', 'Theme Options', 'styledecor_theme_options', 'style_decor_theme_options' );
	add_settings_field( 'post-formats', 'Post Formats', 'styledecor_post_formats', 'style_decor_theme_options', 'styledecor-theme-options' );
	// Custom Header
	register_setting( 'styledecor-theme-support', 'custom_header' );
	add_settings_field( 'custom-header', 'Custom Header', 'styledecor_custom_header', 'style_decor_theme_options', 'styledecor-theme-options' );
	// Custom Background
	register_setting( 'styledecor-theme-support', 'custom_background' );
	add_settings_field( 'custom-background', 'Custom Background', 'styledecor_custom_background', 'style_decor_theme_options', 'styledecor-theme-options' );


}

function styledecor_theme_options() {

	echo 'Activate and Deactivate specific Theme Support Options';

}

function styledecor_post_formats() {

	$options = get_option( 'post_formats' );
	$formats = array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' );
	$output = '';

	foreach ( $formats as $format ) {
		$checked = ( !empty( $options[$format] ) == 1 ? 'checked' : '' );
		$output .= '<label for="' . $format . '"><input type="checkbox" id="' . $format . '" name="post_formats[' . $format . ']" value="1" ' . $checked . '> ' . $format . '</label><br>';
	}
	echo $output;

}

function styledecor_custom_header() {

	$options = get_option( 'custom_header' );
	$checked = ( !empty( $options ) == 1 ? 'checked' : '' );
	echo '<label for="custom_header"><input type="checkbox" id="custom_header" name="custom_header" value="1" ' . $checked . ' /> Activate Custom Header</label>';

}

function styledecor_custom_background() {

	$options = get_option( 'custom_background' );
	$checked = ( !empty( $options ) == 1 ? 'checked' : '' );
	echo '<label for="custom_background"><input type="checkbox" id="custom_background" name="custom_background" value="1" ' . $checked . ' /> Activate Custom Background</label>';

}

function styledecor_contact_info() {

	// echo 'Customize your Contact Information';

}

function styledecor_social_links() {

	echo '';

}

// Contact add_settings_section callback function
function styledecor_contact_section() {

	echo 'Activate and Deactivate the Built-in Contact Form';

}

// Contact add_settings_field callback function
function styledecor_activate_contact_form() {

	$options = get_option( 'activate_contact_form' );
	$checked = ( @$options == 1 ? 'checked' : '' );

	echo '<input type="checkbox" id="activate_contact_form" name="activate_contact_form" value="1" ' . $checked .  '/>';

}

// Registration add_settings_section callback function
function styledecor_register_section() {

	echo 'Activate and Deactivate the Registration Form';

}

// Registration add_settings_field callback function
function styledecor_activate_registration_form() {

	$options = get_option( 'activate_registration_form' );
	$checked = ( @$options == 1 ? 'checked' : '' );

	echo '<input type="checkbox" id="activate_registration_form" name="activate_registration_form" value="1" ' . $checked .  '/>';

}

// Custom CSS add_settings_section callback function
function styledecor_custom_css_section() {

	echo 'Customize Style Decor Theme with your own CSS';

}

// Custom CSS add_settings_field callback function
function styledecor_custom_css_form() {

	$css = get_option( 'custom_css' );
	$css = ( !empty( $css ) ? $css : '/* Style Decor Theme Custom CSS */' );

	echo '<div id="customCSS">' . $css . '</div><textarea id="custom_css" name="custom_css" style="display:none">' . $css . '</textarea>';

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

function styledecor_sanitize_custom_css( $input ) {

	$output = esc_textarea( $input );
	return $output;

}

// Template submenu callback functions
function styledecor_theme_create_page() {

	require_once get_template_directory() . '/inc/templates/styledecor-admin.php';

}

function styledecor_theme_support_page() {

	require_once get_template_directory() . '/inc/templates/styledecor-support.php';

}

function styledecor_contact_form_page() {

	require_once get_template_directory() . '/inc/templates/styledecor-contact-form.php';

}

function styledecor_custom_css_page() {

	require_once get_template_directory() . '/inc/templates/styledecor-custom-css.php';

}

function styledecor_registration_form_page() {

	require_once get_template_directory() . '/inc/templates/styledecor-registration-form.php';	

}