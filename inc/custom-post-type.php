<?php

/*

@package styledecortheme

===============================
	THEME CUSTOM POST TYPES
===============================

*/

// News & Events CPT
function styledecor_cpt_news_events() {

	$singular = 'News & Event';
	$plural = 'News & Events';

	$labels = array(
		'name'					=> $plural,
		'singular_name'			=> $singular,
		'add_new'				=> 'Add New',
		'add_new_item'			=> 'Add New ' . $singular,
		'all_items'				=> 'All ' . $plural,
		'edit'					=> 'Edit',
		'edit_item'				=> 'Edit ' . $singular,
		'new_item'				=> 'New ' . $singular,
		'view'					=> 'View ' . $singular,
		'view_item'				=> 'View ' . $singular,
		'search_item'			=> 'Search ' . $plural,
		'parent'				=> 'Parent ' . $singular,
		'not_found'				=> 'No ' . $plural . ' found',
		'not_found_in_trash' 	=> 'No ' . $plural . ' in Trash'
	);

	$args = array(
		'labels'				=> $labels,
		'public'				=> true,
		'publicly_queryable'	=> true,
		'exclude_from_search'	=> false,
		'show_in_nav_menus'		=> false,
		'show_ui'				=> true,
		'show_in_menu'			=> true,
		'show_in_admin_bar'		=> true,
		'menu_position'			=> 6,
		'menu_icon'				=> 'dashicons-format-aside',
		'can_export'			=> true,
		'delete_with_user'		=> false,
		'hierarchical'			=> false,
		'has_archive'			=> true,
		'query_var'				=> true,
		'capability_type'		=> 'post',
		'map_meta_cap'			=> true,
		// 'capabilities'		=> array(),
		'rewrite'				=> array(
			'slug'			=> 'news-events',
			'with_front'	=> true,
			'pages'			=> true,
			'feeds'			=> false,
		),
		'supports'				=> array(
			'title',
			'editor'
		)
	);

	register_post_type( 'sd-news-events', $args );

}

add_action( 'init', 'styledecor_cpt_news_events' );

// Design CPT
function styledecor_cpt_design_types() {

	$singular = 'Design';
	$plural = 'Designs';

	$labels = array(
		'name'					=> $plural,
		'singular_name'			=> $singular,
		'add_new'				=> 'Add New',
		'add_new_item'			=> 'Add New ' . $singular,
		'all_items'				=> 'All ' . $plural,
		'edit'					=> 'Edit',
		'edit_item'				=> 'Edit ' . $singular,
		'new_item'				=> 'New ' . $singular,
		'view'					=> 'View ' . $singular,
		'view_item'				=> 'View ' . $singular,
		'search_item'			=> 'Search ' . $plural,
		'parent'				=> 'Parent ' . $singular,
		'not_found'				=> 'No ' . $plural . ' found',
		'not_found_in_trash' 	=> 'No ' . $plural . ' in Trash'
	);

	$args = array(
		'labels'				=> $labels,
		'public'				=> true,
		'publicly_queryable'	=> true,
		'exclude_from_search'	=> false,
		'show_in_nav_menus'		=> false,
		'show_ui'				=> true,
		'show_in_menu'			=> true,
		'show_in_admin_bar'		=> true,
		'menu_position'			=> 7,
		'menu_icon'				=> 'dashicons-palmtree',
		'can_export'			=> true,
		'delete_with_user'		=> false,
		'hierarchical'			=> false,
		'has_archive'			=> true,
		'query_var'				=> true,
		'capability_type'		=> 'post',
		'map_meta_cap'			=> true,
		// 'capabilities'		=> array(),
		'rewrite'				=> array(
			'slug'			=> 'design',
			'with_front'	=> true,
			'pages'			=> true,
			'feeds'			=> false,
		),
		'taxonomies'		=> array( 'type' ),
		'supports'			=> array(
			'title',
			'thumbnail'
		)
	);

	register_post_type( 'sd-design', $args );

}

add_action( 'init', 'styledecor_cpt_design_types' );

// Team CPT
function styledecor_cpt_team() {

	$singular = 'Team';
	$plural = 'Teams';

	$labels = array(
		'name'					=> $plural,
		'singular_name'			=> $singular,
		'add_new'				=> 'Add New',
		'add_new_item'			=> 'Add New ' . $singular,
		'all_items'				=> 'All ' . $plural,
		'edit'					=> 'Edit',
		'edit_item'				=> 'Edit ' . $singular,
		'new_item'				=> 'New ' . $singular,
		'view'					=> 'View ' . $singular,
		'view_item'				=> 'View ' . $singular,
		'search_item'			=> 'Search ' . $plural,
		'parent'				=> 'Parent ' . $singular,
		'not_found'				=> 'No ' . $plural . ' found',
		'not_found_in_trash' 	=> 'No ' . $plural . ' in Trash'
	);

	$args = array(
		'labels'				=> $labels,
		'public'				=> true,
		'publicly_queryable'	=> true,
		'exclude_from_search'	=> false,
		'show_in_nav_menus'		=> false,
		'show_ui'				=> true,
		'show_in_menu'			=> true,
		'show_in_admin_bar'		=> true,
		'menu_position'			=> 8,
		'menu_icon'				=> 'dashicons-groups',
		'can_export'			=> true,
		'delete_with_user'		=> false,
		'hierarchical'			=> false,
		'has_archive'			=> true,
		'query_var'				=> true,
		'capability_type'		=> 'post',
		'map_meta_cap'			=> true,
		// 'capabilities'		=> array(),
		'rewrite'				=> array(
			'slug'			=> 'team',
			'with_front'	=> true,
			'pages'			=> true,
			'feeds'			=> false,
		),
		'supports'				=> array(
			'title',
			'thumbnail'
		)
	);

	register_post_type( 'sd-team', $args );

}

add_action( 'init', 'styledecor_cpt_team' );

// Mail CPT
function styledecor_cpt_mail() {

	$singular = 'Mail';
	$plural = 'Mails';

	$labels = array(
		'name'					=> $plural,
		'singular_name'			=> $singular,
		'add_new'				=> 'Add New',
		'add_new_item'			=> 'Add New ' . $singular,
		'all_items'				=> 'All ' . $plural,
		'edit'					=> 'Edit',
		'edit_item'				=> 'Edit ' . $singular,
		'new_item'				=> 'New ' . $singular,
		'view'					=> 'View ' . $singular,
		'view_item'				=> 'View ' . $singular,
		'search_item'			=> 'Search ' . $plural,
		'parent'				=> 'Parent ' . $singular,
		'not_found'				=> 'No ' . $plural . ' found',
		'not_found_in_trash' 	=> 'No ' . $plural . ' in Trash'
	);

	$args = array(
		'labels'				=> $labels,
		'public'				=> true,
		'publicly_queryable'	=> true,
		'exclude_from_search'	=> false,
		'show_in_nav_menus'		=> false,
		'show_ui'				=> true,
		'show_in_menu'			=> true,
		'show_in_admin_bar'		=> true,
		'menu_position' 		=> 26,
		'menu_icon' 			=> 'dashicons-email-alt',
		'can_export'			=> true,
		'delete_with_user'		=> false,
		'hierarchical'			=> false,
		'has_archive'			=> true,
		'query_var'				=> true,
		'capability_type'		=> 'post',
		'map_meta_cap'			=> true,
		'capabilities'			=> array(
			'create_posts' 	=> 'do_not_allow'
		),
		'rewrite'				=> array(),
		'supports'				=> array(
			'title',
			'author'
		)
	);

	register_post_type( 'sd-mail', $args );

}

// Add the Mail Us CPT if the contact form is activated.
$mail = get_option( 'activate_contact_form' );

if ( @$mail == 1 ) {

	add_action( 'init', 'styledecor_cpt_mail' );

	add_filter( 'manage_sd-mail_posts_columns', 'styledecor_set_mail_columns' );
	add_action( 'manage_sd-mail_posts_custom_column', 'styledecor_mail_custom_column', 10, 2 );
	add_action( 'add_meta_boxes', 'styledecor_mail_add_custom_box' );
	add_action( 'save_post_sd-mail', 'styledecor_mail_meta_save' );

}

// Register CPT
function styledecor_cpt_register() {

	$singular = 'Register';
	$plural = 'Registers';

	$labels = array(
		'name'					=> $plural,
		'singular_name'			=> $singular,
		'add_new'				=> 'Add New',
		'add_new_item'			=> 'Add New ' . $singular,
		'all_items'				=> 'All ' . $plural,
		'edit'					=> 'Edit',
		'edit_item'				=> 'Edit ' . $singular,
		'new_item'				=> 'New ' . $singular,
		'view'					=> 'View ' . $singular,
		'view_item'				=> 'View ' . $singular,
		'search_item'			=> 'Search ' . $plural,
		'search_items'			=> 'Search ' . $plural,
		'parent'				=> 'Parent ' . $singular,
		'not_found'				=> 'No ' . $plural . ' found',
		'not_found_in_trash' 	=> 'No ' . $plural . ' in Trash'
	);

	$args = array(
		'labels'				=> $labels,
		'public'				=> true,
		'publicly_queryable'	=> true,
		'exclude_from_search'	=> false,
		'show_in_nav_menus'		=> false,
		'show_ui'				=> true,
		'show_in_menu'			=> true,
		'show_in_admin_bar'		=> true,
		'menu_position' 		=> 26,
		'menu_icon' 			=> 'dashicons-businessman',
		'can_export'			=> true,
		'delete_with_user'		=> false,
		'hierarchical'			=> false,
		'has_archive'			=> true,
		'query_var'				=> true,
		'capability_type'		=> 'post', // Change this to a unique name such as 'register' for this post type and uncomment the capabilities for user role access manipulation
		'map_meta_cap'			=> true, // set to false if you don't want users to edit the post
		'capabilities'			=> array(
			'create_posts'	=> 'do_not_allow', // 'false' if you don't want to add the 'Add New' button or'do_not _allow' for multi site feature
			/* This is for the user role access capabilities. The 'capability_type' should be changed into unique name if this is uncommented.

			// 'publish_posts' => 'publish_registers',
			// 'edit_posts' => 'edit_registers',
			// 'edit_others_posts' => 'edit_others_registers',
			// 'delete_posts' => 'delete_registers',
			// 'delete_others_posts' => 'delete_others_registers',
			// 'read_private_posts' => 'read_private_registers',
			// 'edit_post'	=> 'edit_register',
			// 'delete_post' => 'delete_register',
			// 'read_post' => 'read_register',

			*/
		),
		'rewrite'				=> array(),
		'supports'				=> array(
			'title',
			'author'
		)
	);

	register_post_type( 'sd-register', $args );

}

// Add the Register CPT if the registration form is activated
$register = get_option( 'activate_registration_form' );

if ( @$register == 1 ) {

	add_action( 'init', 'styledecor_cpt_register' );

	add_filter( 'manage_sd-register_posts_columns', 'styledecor_set_register_columns' );
	add_action( 'manage_sd-register_posts_custom_column', 'styledecor_register_custom_column', 10, 2 );
	add_filter( 'manage_edit-sd-register_sortable_columns', 'styledecor_set_register_sortable_column' );
	add_action( 'add_meta_boxes', 'styledecor_register_add_custom_box' );
	add_action( 'save_post', 'styledecor_register_meta_save' );
	// add_action( 'admin_init', 'styledecor_cpt_register_remove_subpages' );

}