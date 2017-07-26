<?php

/*

@package styledecortheme

=============================================
	MAIL CPT ADD CUSTOM META BOX FIELDS
=============================================


*/

?>

<div id="mail-cpt">
	<div class="mail-columns-2">
		<div class="meta-row">
			<div class="meta-th">
				<label for="mail-phone" class="post-attributes-label"><?php _e( 'Phone' ); ?></label>
			</div>
			<div class="meta-td">
				<input type="text" id="mail-phone" class="form-control" name="mail_phone" value="<?php if ( !empty( $mail_stored_meta['mail_phone'] ) ) echo esc_attr( $mail_stored_meta['mail_phone'][0] );  ?>">
			</div>
		</div>
		<div class="meta-row">
			<div class="meta-th">
				<label for="mail-email" class="post-attributes-label"><?php _e( 'Email' ); ?></label>
			</div>
			<div class="meta-td">
				<input type="text" id="mail-email" class="form-control" name="mail_email" value="<?php if ( !empty( $mail_stored_meta['mail_email'] ) ) echo esc_attr( $mail_stored_meta['mail_email'][0] );  ?>">
			</div>
		</div>
		<div class="meta-row">
			<div class="meta-th">
				<label for="mail-subject" class="post-attributes-label"><?php _e( 'Subject' ); ?></label>
			</div>
			<div class="meta-td">
				<input type="text" id="mail-subject" class="form-control" name="mail_subject" value="<?php if ( !empty( $mail_stored_meta['mail_subject'] ) ) echo esc_attr( $mail_stored_meta['mail_subject'][0] );  ?>">
			</div>
		</div>
	</div>
	<div class="meta-row">
		<div class="meta-th">
			<span>Message Body</span>
		</div>
		<div class="meta-td">
		<?php
		$content = get_post_meta( $post->ID, 'mail_content', true );
		$editor = 'mail_content';
		$settings = array(
			'textarea_rows' => 8,
			'media_buttons' => false
		);
		wp_editor( $content, $editor, $settings );
		?>
		</div>
	</div>
	
</div>