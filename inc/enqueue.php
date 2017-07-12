<?php

/*

@package styledecortheme

====================================
	FRONT END ENQUEUE FUNCTIONS
====================================

*/

function styledecor_load_scripts() {

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.4', 'all' );
	wp_enqueue_style( 'styledecor', get_template_directory_uri() . '/css/style.css', array(), '0.0.1', 'all' );
	wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/css/flexslider.css', array(), '2.0', 'all' );
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.6.3', 'all' );
	wp_enqueue_style( 'josefin', 'https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i' );
	wp_enqueue_style( 'roboto', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' );

	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-2.1.4.min.js', 'false', '2.1.4', false );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.4', false );
	wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', array('jquery'), '2.1', true );
	wp_enqueue_script( 'jarallax', get_template_directory_uri() . '/js/jarallax.js', array('jquery'), '1.1.0', true );
	wp_enqueue_script( 'smoothscroll', get_template_directory_uri() . '/js/SmoothScroll.min.js', array('jquery'), '0.0.1', true );

}

add_action( 'wp_enqueue_scripts', 'styledecor_load_scripts' );