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

// Blog Loop Custom functions
function styledecor_posted_meta() {

	$posted_on = human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) );
	$categories = get_the_category();
	$seperator = ', ';
	$output = '';
	$i = 1;
	if ( !empty( $categories ) ) :

		foreach ( $categories as $category ) {

			if ( $i > 1 ) : $output .= $seperator; endif;

			$output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" title="' . sprintf( 'View all posts in %s', $category->name ) . '">' . esc_html( $category->name ) . '</a>';
			$i++;
		}

	endif;
	return '<span class="posted-on">Posted <a href="' . esc_url( get_permalink() ) . '">' . $posted_on . '</a> ago</span> / <span class="posted-in">' . $output . '</span>';

}

function styledecor_posted_footer() {

	$comments_num = get_comments_number();
	if ( comments_open() ) {
		// get comments link
		if ( $comments_num == 0 ) {
			$comments = __( 'No Comments' );
		} elseif ( $comments_num > 1 ) {
			$comments = $comments_num . __( ' Comments' );
		} else {
			$comments = __( '1 Comment' );
		}
		$comments = '<a class="comments-link" href="' . get_comments_link() . '">' . $comments . ' </a> <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>';
	} else {
		$comments = __( 'Comments are closed' );
	}

	return '<div class="post-footer-container"><div class="row"><div class="col-xs-12 col-sm-6">' . get_the_tag_list( '<div class="tags-list"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span> ', ' ', '</div>' ) . '</div><div class="col-xs-12 col-sm-6 text-right">' . $comments . '</div></div></div>';
}

function styledecor_custom_css() {

	$custom_css = get_option( 'custom_css' );

	if ( !empty( $custom_css ) ) {
		echo "<style type=\"text/css\">\r\n" . trim( str_replace( ' ', '', preg_replace( '/\s\s+/', ' ', $custom_css ) ) ) . "\r\n</style>";
	}

}

add_action( 'wp_head', 'styledecor_custom_css' );