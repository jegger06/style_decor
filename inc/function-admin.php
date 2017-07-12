<?php

/*
	@package styledecortheme

================
 	ADMIN PAGE
================

*/

function styledecor_add_admin_page() {

	add_menu_page( 'Style Decor Theme Options', 'Style Decor', 'manage_options', 'style_decor', 'styledecor_theme_create_page', get_template_directory_uri() . '/images/styledecor-icon.png', 110 );


}

add_action( 'admin_menu', 'styledecor_add_admin_page' );

function styledecor_theme_create_page() {

	echo '<pre>';
	print_r(new DateTime());


}
