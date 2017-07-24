<?php

/*

@package styledecortheme

======================================================
	NEWS & EVENTS CPT ADD CUSTOM META BOX FIELDS
======================================================

*/

?>

<div>
	<div class="meta-row">
		<div class="meta-th">
			<label for="news-events-date" class="post-attributes-label"><?php _e( 'Date' ); ?></label>
		</div>
		<div class="meta-td">
			<input type="text" id="news-events-date" name="news_events_date" class="datepicker" value="<?php if ( !empty( $news_events_stored_meta['news_events_date'] ) ) echo esc_attr( $news_events_stored_meta['news_events_date'][0] );  ?>">
		</div>
	</div>
</div>