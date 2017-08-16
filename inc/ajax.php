<?php

/*

@package styledecortheme

======================
	AJAX FUNCTIONS
======================

*/

function styledecor_save_registration() {

	$first_name = wp_strip_all_tags( $_POST['first_name'] );
	$last_name = wp_strip_all_tags( $_POST['last_name'] );
	$email = wp_strip_all_tags( $_POST['email'] );
	$phone = wp_strip_all_tags( $_POST['phone'] );

	$title = ucwords( $first_name ) . ' ' . ucwords( $last_name );

	$postarr = array(
		'post_type' => 'sd-register',
		'post_title' => $title,
		'post_status' => 'publish',
		'post_author' => 1,
		'meta_input' => array(
			'register_first_name' => ucwords( $first_name ),
			'register_last_name' => ucwords( $last_name ),
			'register_email' => $email,
			'register_phone' => $phone
		)
	);

	$postID = wp_insert_post( $postarr );

	if ( $postID !== 0 ) {

		$to = get_bloginfo( 'admin_email' );
		$subject = 'Style Decor Registration Form - ' . $title;

		$headers[] = 'From: ' . get_bloginfo( 'name' ) . ' <' . $to . '>';
		$headers[] = 'Reply-To: ' . $title . ' <' . $email . '>';
		$headers[] = 'Content-Type: text/html: charset=UTF-8';

		wp_mail( $to, $subject, $message, $headers );

		echo $postID;

	} else {
		echo 0;
	}

	die();

}

add_action( 'wp_ajax_nopriv_styledecor_save_user_registration_form', 'styledecor_save_registration' );
add_action( 'wp_ajax_styledecor_save_user_registration_form', 'styledecor_save_registration' );