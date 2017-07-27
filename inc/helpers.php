<?php

/*

@package styledecortheme

======================================
	THEME CUSTOM HELPER FUNCTIONS
======================================

*/

function styledecor_custom_excerpt( $field, $max_lenght = 20 ) {

	global $post;

	$excerpt = wp_strip_all_tags( get_post_meta( $post->ID, $field, true ) );

	if ( str_word_count( $excerpt ) > $max_lenght ) {

		$excerpt = explode( ' ', $excerpt );

		$excerpt = array_splice( $excerpt, 0, $max_lenght );


		$excerpt = implode( ' ', $excerpt ) . '<a href="' . get_edit_post_link( $post->ID ) . '"><strong> [...]</strong></a>';

	}

	return  $excerpt;

}