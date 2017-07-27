<h1>Style Decor Custom CSS</h1>
<?php settings_errors(); ?>

<form id="custom-css-form" method="post" action="options.php">
	<?php settings_fields( 'styledecor-custom-css-options' ); ?>
	<?php do_settings_sections( 'style_decor_theme_custom_css' ); ?>
	<?php submit_button(); ?>
</form>