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