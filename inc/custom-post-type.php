<?php

/*

@package styledecortheme

===============================
	THEME CUSTOM POST TYPES
===============================

*/
function styledecor_cpt_news_events() {

	$singular = 'News & Event';
	$plural = 'News & Events';

	$labels = array(
		'name' 					=> $singular,
		'singular_name' 		=> $singular,
		'add_new' 				=> 'Add ' . $singular,
		'all_items' 			=> 'All ' . $plural,
		'add_new_item' 			=> 'Add ' . $singular,
		'edit_item' 			=> 'Edit ' . $singular,
		'new_item' 				=> 'New ' . $singular,
		'view_item' 			=> 'View ' . $singular,
		'search_item' 			=> 'Search ' . $plural,
		'not_found' 			=> 'No ' . $plural . ' found',
		'not_found_in_trash' 	=> 'No ' . $plural . ' found in trash'
	);

	$args = array(
		'labels' 				=> $labels,
		'public' 				=> true,
		'has_archive' 			=> true,
		'publicly_queryable' 	=> true,
		'query_var' 			=> true,
		'rewrite' 				=> true,
		'capability_type' 		=> 'post',
		'hierarchical' 			=> false,
		'supports' 				=> array(
									'title',
									'editor',
									'excerpt',
									'thumbnail',
									'revisions'
								),
		'menu_position' 		=> 5,
		'menu_icon' 			=> 'dashicons-format-aside',
		'exclude_from_search' 	=> false
	);

	register_post_type( 'news-events', $args );

}

add_action( 'init', 'styledecor_cpt_news_events' );