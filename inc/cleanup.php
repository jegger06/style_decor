<?php

/*

@package styledecortheme

========================================
	REMOVE GENERATOR VERSION NUMBER
========================================

*/

function styledecor_remove_wp_version_str( $src ) {

	if ( strpos( $src, 'ver=' . get_bloginfo( 'version' ) ) ) {
		$src = remove_query_arg( 'ver', $src );
	}

	return $src;

}

add_filter( 'script_loader_src', 'styledecor_remove_wp_version_str' );
add_filter( 'style_loader_src', 'styledecor_remove_wp_version_str' );

function styledecor_remove_meta_version() {
	return '';
}

add_filter( 'the_generator', 'styledecor_remove_meta_version' );