<h1>Style Decor General Settings</h1>
<?php settings_errors(); ?>
<form method="post" action="options.php">
	<?php settings_fields( 'styledecor-settings-group' ); ?>
	<?php do_settings_sections( 'style_decor' ); ?>
	<?php submit_button(); ?>
</form>