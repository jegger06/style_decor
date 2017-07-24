<?php

/*

@package styledecortheme

=============================================
	TEAM CPT ADD CUSTOM META BOX FIELDS
=============================================

*/

?>

<div>
	<div class="meta-row">
		<div class="meta-th">
			<label for="team-role"><?php _e( 'Role' ); ?></label>
		</div>
		<div class="meta-td">
			<input type="text" name="team_role" id="team-role" value="<?php if ( !empty( $team_stored_meta['team_role'] ) ) echo esc_attr( $team_stored_meta['team_role'][0] );  ?>">
		</div>
	</div>
	<div class="meta-row">
		<div class="meta-th">
			<label for="team-facebook-handler"><?php _e( 'Facebook handler' ); ?></label>
		</div>
		<div class="meta-td">
			<input type="text" name="team_facebook_handler" id="team-facebook-handler" value="<?php if ( !empty( $team_stored_meta['team_facebook_handler'] ) ) echo esc_attr( $team_stored_meta['team_facebook_handler'][0] );  ?>">
		</div>
	</div>
	<div class="meta-row">
		<div class="meta-th">
			<label for="team-twitter-handler"><?php _e( 'Twitter handler' ); ?></label>
		</div>
		<div class="meta-td">
			<input type="text" name="team_twitter_handler" id="team-twitter-handler" value="<?php if ( !empty( $team_stored_meta['team_twitter_handler'] ) ) echo esc_attr( $team_stored_meta['team_twitter_handler'][0] );  ?>">
		</div>
	</div>
	<div class="meta-row">
		<div class="meta-th">
			<label for="team-rss-handler"><?php _e( 'RSS handler' ); ?></label>
		</div>
		<div class="meta-td">
			<input type="text" name="team_rss_handler" id="team-rss-handler" value="<?php if ( !empty( $team_stored_meta['team_rss_handler'] ) ) echo esc_attr( $team_stored_meta['team_rss_handler'][0] );  ?>">
		</div>
	</div>
</div>