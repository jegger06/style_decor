<?php

/*

@package styledecortheme

======================================================
	DESIGN TYPES CPT ADD CUSTOM META BOX FIELDS
======================================================

*/

?>

<div id="design-cpt">
	<div class="meta-row">
		<div class="meta-th">
			<label for="design-short-description"><?php _e( 'Short Description' ); ?></label>
		</div>
		<div class="meta-td">
			<textarea rows="2" name="design_short_description" id="design-short-description"><?php if ( !empty( $design_stored_meta['design_short_description'] ) ) echo esc_attr( $design_stored_meta['design_short_description'][0] );  ?></textarea>
		</div>
	</div>
	<div class="meta-row">
		<div class="meta-th">
			<span>Content Description</span>
		</div>
		<div class="meta-td">
		<?php
			$content = get_post_meta( $post->ID, 'design_types_content', true );
			$editor = 'design_types_content';
			$settings = array(
				'textarea_rows' => 8,
				'media_buttons' => false
			);
			wp_editor( $content, $editor, $settings );
		?>
		</div>
	</div>
</div>
