<?php

/*

@package styledecortheme

===============================
	THEME CUSTOM META BOX
===============================

*/

function styledecor_add_custom_metaboxes() {

	add_meta_box(
		'styledecor_news_event_meta',
		'News & Events Custom Fields',
		'styledecor_news_event_meta_callback',
		'sd-news-events',
		'side'
	);

	add_meta_box(
		'styledecor_design_type_meta',
		'Design Type Custom Fields',
		'styledecor_design_type_meta_callback',
		'sd-design',
		'normal'
	);

	add_meta_box(
		'styledecor_team_meta',
		'Team Custom Fields',
		'styledecor_team_meta_callback',
		'sd-team',
		'normal'
	);

}

add_action( 'add_meta_boxes', 'styledecor_add_custom_metaboxes' );

// Callback function for the News & Events field
function styledecor_news_event_meta_callback( $post ) {

	wp_nonce_field( basename( __FILE__ ), 'styledecor_news_events_nonce' );
	$news_events_stored_meta = get_post_meta( $post->ID );

	require_once( get_template_directory() . '/inc/templates/news-events-metabox-fields.php' );

}

// Callback function for the Design Types fields
function styledecor_design_type_meta_callback( $post ) {

	wp_nonce_field( basename( __FILE__ ), 'styledecor_design_nonce' );
	$design_stored_meta = get_post_meta( $post->ID );

	require_once( get_template_directory() . '/inc/templates/desing-types-metabox-fields.php' );

}

// Callback function for the Team fields
function styledecor_team_meta_callback( $post ) {

	wp_nonce_field( basename( __FILE__ ), 'styledecor_team_nonce' );
	$team_stored_meta = get_post_meta( $post->ID );

	require_once( get_template_directory() . '/inc/templates/team-metabox-fields.php' );

}

// Save post for the News & Event CPT fields
function styledecor_news_event_meta_save( $post_id ) {

	$is_autosave = wp_is_post_autosave( $post_id );
	$is_revision = wp_is_post_revision( $post_id );
	$is_valid_nonce = ( isset( $_POST['styledecor_news_events_nonce'] ) && wp_verify_nonce( $_POST['styledecor_news_events_nonce'], basename( __FILE__ ) ) ) ? 'true' : 'false';

	// Exists script depending on save status
	if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
		return;
	}

	if ( isset( $_POST['news_events_date'] ) ) {

		update_post_meta( $post_id, 'news_events_date', sanitize_text_field( $_POST['news_events_date'] ) );

	}

}

add_action( 'save_post_sd-news-events', 'styledecor_news_event_meta_save' );

// Save post for the Designs CPT fields
function styledecor_design_meta_save( $post_id ) {

	$is_autosave = wp_is_post_autosave( $post_id );
	$is_revision = wp_is_post_revision( $post_id );
	$is_valid_nonce = ( isset( $_POST['styledecor_design_nonce'] ) && wp_verify_nonce( $_POST['styledecor_design_nonce'], basename( __FILE__ ) ) ) ? 'true' : 'false';

	// Exists script depending on save status
	if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
		return;
	}

	if ( isset( $_POST['design_short_description'] ) ) {

		update_post_meta( $post_id, 'design_short_description', sanitize_text_field( $_POST['design_short_description'] ) );

	}

	if ( isset( $_POST['design_types_content'] ) ) {

		update_post_meta( $post_id, 'design_types_content', $_POST['design_types_content'] );

	}

}

add_action( 'save_post_sd-design', 'styledecor_design_meta_save' );

// Save post for the Team CPT fields
function styledecor_team_meta_save( $post_id ) {

	$is_autosave = wp_is_post_autosave( $post_id );
	$is_revision = wp_is_post_revision( $post_id );
	$is_valid_nonce = ( isset( $_POST['styledecor_team_nonce'] ) && wp_verify_nonce( $_POST['styledecor_team_nonce'], basename( __FILE__ ) ) ) ? 'true' : 'false';

	// Exists script depending on save status
	if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
		return;
	}

	if ( isset( $_POST['team_role'] ) ) {

		update_post_meta( $post_id, 'team_role', sanitize_text_field( $_POST['team_role'] ) );

	}

	if ( isset( $_POST['team_facebook_handler'] ) ) {

		update_post_meta( $post_id, 'team_facebook_handler', sanitize_text_field( $_POST['team_facebook_handler'] ) );

	}

	if ( isset( $_POST['team_twitter_handler'] ) ) {

		update_post_meta( $post_id, 'team_twitter_handler', sanitize_text_field( $_POST['team_twitter_handler'] ) );

	}

	if ( isset( $_POST['team_rss_handler'] ) ) {

		update_post_meta( $post_id, 'team_rss_handler', sanitize_text_field( $_POST['team_rss_handler'] ) );

	}

}

add_action( 'save_post_sd-team', 'styledecor_team_meta_save' );

// Adding a meta box into the Mail CPT
function styledecor_mail_add_custom_box() {

	add_meta_box(
		'styledecor_mail_meta', 
		'Mail Custom Fields', 
		'styledecor_mail_meta_callback', 
		'sd-mail',
		'normal',
		'high'
	);

}

// Callback function for the add_meta_box of the styledecor_mail_add_custom_box function
function styledecor_mail_meta_callback( $post ) {

	wp_nonce_field( basename( __FILE__ ), 'styledecor_mail_nonce' );
	$mail_stored_meta = get_post_meta( $post->ID );

	require_once( get_template_directory() . '/inc/templates/mail-metabox-fields.php' );

}

// Save post for the Mail CPT fields
function styledecor_mail_meta_save( $post_id ) {

	$is_autosave = wp_is_post_autosave( $post_id );
	$is_revision = wp_is_post_revision( $post_id );
	$is_valid_nonce = ( isset( $_POST['styledecor_mail_nonce'] ) && wp_verify_nonce( $_POST['styledecor_mail_nonce'], basename( __FILE__ ) ) ) ? 'true' : 'false';

	// Exists script depending on save status
	if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
		return;
	}

	if ( isset( $_POST['mail_phone'] ) ) {

		update_post_meta( $post_id, 'mail_phone', sanitize_text_field( $_POST['mail_phone'] ) );

	}

	if ( isset( $_POST['mail_email'] ) ) {

		update_post_meta( $post_id, 'mail_email', sanitize_text_field( $_POST['mail_email'] ) );

	}

	if ( isset( $_POST['mail_subject'] ) ) {

		update_post_meta( $post_id, 'mail_subject', sanitize_text_field( $_POST['mail_subject'] ) );

	}

	if ( isset( $_POST['mail_content'] ) ) {

		update_post_meta( $post_id, 'mail_content', $_POST['mail_content'] );

	}

}

// Adding a meta box into the Register CPT
function styledecor_register_add_custom_box() {

	add_meta_box( 
		'styledecor_register_meta',
		'Register Custom Fields',
		'styledecor_register_meta_callback',
		'sd-register',
		'normal',
		'high'
	);

}

// Callback function for the add_meta_box of the styledecor_register_meta_callback function
function styledecor_register_meta_callback( $post ) {

	wp_nonce_field( basename( __FILE ), 'styledecor_register_nonce' );
	$register_stored_meta = get_post_meta( $post->ID );

	require_once( get_template_directory() . '/inc/templates/register-metabox-fields.php' );

}

// Save post for the Register CPT fields
function styledecor_register_meta_save( $post_id ) {

	$is_autosave = wp_is_post_autosave( $post_id );
	$is_revision = wp_is_post_revision( $post_id );
	$is_valid_nonce = ( isset( $_POST['styledecor_register_nonce'] ) && wp_verify_nonce( $_POST['styledecor_register_nonce'], basename( __FILE__ ) ) ) ? 'true' : 'false';

	// Exists script depending on save status
	if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
		return;
	}

	if ( isset( $_POST['register_first_name'] ) ) {

		update_post_meta( $post_id, 'register_first_name', sanitize_text_field( $_POST['register_first_name'] ) );

	}

	if ( isset( $_POST['register_last_name'] ) ) {

		update_post_meta( $post_id, 'register_last_name', sanitize_text_field( $_POST['register_last_name'] ) );

	}

	if ( isset( $_POST['register_email'] ) ) {

		update_post_meta( $post_id, 'register_email', sanitize_text_field( $_POST['register_email'] ) );

	}

	if ( isset( $_POST['register_phone'] ) ) {

		update_post_meta( $post_id, 'register_phone', sanitize_text_field( $_POST['register_phone'] ) );

	}

}
