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
	wp_enqueue_script( 'register' );

	include 'templates/registration-form.php';

	return ob_get_clean();

}

add_shortcode( 'registration_form', 'styledecor_registration_form' );