<?php

/*

@package styledecortheme

===========================
	THEME SUPPORT PAGE
===========================

*/
// Activate Nav Menu Options
function styledecor_register_nav() {

	register_nav_menu( 'primary', 'Header Navigation Menu' );
	register_nav_menu( 'secondary', 'Footer Navigation' );

}
add_action( 'after_setup_theme', 'styledecor_register_nav' );

// Activate the feautured image meta box
add_theme_support( 'post-thumbnails' );

// Activate post format if checked
$options = get_option( 'post_formats' );
$formats = array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' );
$output = array();

foreach ( $formats as $format ) {
	$output[] = ( !empty($options[$format]) == 1 ? $format : '' );
}

if ( !empty( $options ) ) {
	add_theme_support( 'post-formats', $output );
}

// Activate custom header if checked
$header = get_option( 'custom_header' );
if ( !empty( $header ) == 1 ) {
	add_theme_support( 'custom-header' );
}

// Activate custom background if checked
$background = get_option( 'custom_background' );
if ( !empty( $background ) == 1 ) {
	add_theme_support( 'custom-background' );
}
