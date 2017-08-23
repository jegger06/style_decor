<?php

/*

@package styledecortheme

===================================
	THEME AVAILABLE SHORTCODES
===================================

*/

function styledecor_registration_form( $atts, $content = null ) {

	$atts = shortcode_atts(
		array(),
		$atts,
		'registration_form'
	);

	ob_start();
	wp_enqueue_style( 'registerStyle' );
	wp_enqueue_script( 'register' );

	include 'templates/registration-form.php';

	return ob_get_clean();

}

add_shortcode( 'registration_form', 'styledecor_registration_form' );

function styledecor_contact_form( $atts, $content = null ) {

	$atts = shortcode_atts(
		array(),
		$atts,
		'contact_form'
	);

	ob_start();
	wp_enqueue_style( 'contactStyle' );
	wp_enqueue_script( 'contact' );
	include 'templates/contact-form.php';

	return ob_get_clean();

}

// Activate contact form if checked
$contact_form = get_option( 'activate_contact_form' );
if ( !empty( $contact_form ) == 1 ) {
	add_shortcode( 'contact_form', 'styledecor_contact_form' );
}