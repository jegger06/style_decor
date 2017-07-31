<?php

/*

@package styledecortheme

============================================
	THEME CUSTOM COLUMNS FOR POST TYPES
============================================

*/

// Mail CPT Custom columns
function styledecor_set_mail_columns( $columns ) {

	// Adding/Customizing the columns for the viewing of mails
	$new_columns = array();
	$new_columns['cb'] = '<input type="checkbox"/>';
	$new_columns['title'] = 'Full Name';
	$new_columns['phone'] = 'Phone';
	$new_columns['email'] = 'Email';
	$new_columns['subject'] = 'Subject';
	$new_columns['message'] = 'Message';
	$new_columns['date'] = 'Date';

	return $new_columns;

}

function styledecor_mail_custom_column( $column, $post_id ) {

	switch ( $column ) {

		case 'phone':
			$phone = get_post_meta( $post_id, 'mail_phone', true );
			echo $phone;
			break;

		case 'email':
			$email = get_post_meta( $post_id, 'mail_email', true );
			echo '<a href="mailto:' . $email . '">' . $email . '</a>';
			break;

		case 'subject':
			$subject = get_post_meta( $post_id, 'mail_subject', true );
			echo $subject;
			break;

		case 'message':
			echo styledecor_custom_excerpt( 'mail_content', 15 );
			break;

	}

}

// Register CPT Custom CPT
function styledecor_set_register_columns( $columns ) {

	$new_columns = array();
	$new_columns['cb'] = '<input type="checkbox" />';
	$new_columns['title'] = 'Fullname';
	$new_columns['email'] = 'Email';
	$new_columns['phone'] = 'Phone';
	$new_columns['date'] = 'Date';

	return $new_columns;

}

function styledecor_set_register_sortable_column( $columns ) {

	$columns['email'] = 'email';
	$columns['phone'] = 'Phone';

	return $columns;

}

function styledecor_register_custom_column( $column, $post_id ) {

	switch ( $column ) {

		case 'email':
			$email = get_post_meta( $post_id, 'register_email', true );
			echo $email;
			break;

		case 'phone':
			$phone = get_post_meta( $post_id, 'register_phone', true );
			echo $phone;
			break;		
		
	}

}