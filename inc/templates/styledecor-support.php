<h1>Style Decor Theme Support</h1>
<?php settings_errors(); ?>
<form method="post" action="options.php">
	<?php settings_fields( 'styledecor-theme-support' ); ?>
	<?php do_settings_sections( 'style_decor_theme_options' ); ?>
	<?php submit_button(); ?>
</form>