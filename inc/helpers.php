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

function styldecor_custom_title( $link = true ) {

	$rawTitle = get_the_title();
	$rawTitle = explode(' ', $rawTitle);

	if ( $link == true ) {

		$before = '<h1 class="agileinfo_header"><a href="' . esc_url( get_permalink() ) . '">';
		$after = '</a></h1>';

	} else {

		$before = '<h1 class="agileinfo_header">';
		$after = '</h1>';

	}

	if ( count( $rawTitle ) > 1  ) {

		$totalVal = count( $rawTitle );
		$counter = 0;
		$titleSpan = '<span>' . end( $rawTitle ) . '</span>';
		$title = '';

		foreach ( $rawTitle as $val ) {
			$counter++;
			if ( $totalVal != $counter ) {
				$title .= $val . ' ';
			}
		}

		$title = $before . $title . $titleSpan . $after;

	} else {

		$rawTitle = implode( '', $rawTitle );
		$splittedTitle = str_split( $rawTitle );
		$countTitle = ceil( count( $splittedTitle ) / 2 );
		$splittedIntoTwo = str_split( $rawTitle, $countTitle );
		$title = $before . $splittedIntoTwo[0] . '<span>' . $splittedIntoTwo[1] . '</span>' . $after;

	}

	return $title;

}

function styledecor_get_attachment() {

	$output = '';
	if ( has_post_thumbnail() ) :
		$output = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
	else:
		
		$attachments = get_posts( array(
			'post_type' => 'attachment',
			'posts_per_page' => 1,
			'post_parent' => get_the_ID()
		) );

		if ( $attachments ) :

			foreach ( $attachments as $attachment ) :

				$output = wp_get_attachment_url( $attachment->ID );

			endforeach;

		endif;

		wp_reset_postdata();

	endif;

	return $output;

}

function styledecor_get_embedded_media( $type = array() ) {

	$content = do_shortcode( apply_filters( 'the_content', get_the_content() ) );
	$embed = get_media_embedded_in_content( $content, $type );

	if ( in_array( 'audio', $type ) ) :
		$output =  str_replace( '?visual=true', '?visual=false', $embed[0] );
	else:
		$output = $embed[0];
	endif;

	return $output;

}

function styledecor_get_url() {

	if ( !preg_match( '/<a\s[^>]*?href=[\'"](.+?)[\'"]/i', get_the_content(), $links ) ) {
		return false;
	}

	return esc_url_raw( $links[1] );

}

// Single Post Custom Functions
function styledecor_post_navigation() {

	$nav = '<div class="row">';

	$prev = get_previous_post_link( '<div class="post-link-nav"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> %link</div>', '%title', false, array( 10 ) );
	$nav .= '<div class="col-xs-12 col-sm-6">' . $prev . '</div>';

	$next = get_next_post_link( '<div class="post-link-nav">%link <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></div>', '%title', false, array( 10 ) );
	$nav .= '<div class="col-xs-12 col-sm-6 text-right">' . $next . '</div>';

	$nav .= '</div>';

	return $nav;

}

function styledecor_get_post_navigation() {

	if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ):

		require( get_template_directory() . '/inc/templates/styledecor-comment-nav.php' );

	endif;

}

function mailtrap($phpmailer) {
  $phpmailer->isSMTP();
  $phpmailer->Host = 'smtp.mailtrap.io';
  $phpmailer->SMTPAuth = true;
  $phpmailer->Port = 2525;
  $phpmailer->Username = 'af6fb58d830240';
  $phpmailer->Password = '4792e5fb28b10b';
}

add_action('phpmailer_init', 'mailtrap');