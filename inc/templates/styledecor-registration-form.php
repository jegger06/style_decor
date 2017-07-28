<h1>Style Decor Registration Form</h1>
<?php settings_errors(); ?>

<form method="post" action="options.php">
	<?php settings_fields( 'styledecor-register-options' ); ?>
	<?php do_settings_sections( 'style_decor_theme_register' ); ?>
	<?php submit_button(); ?>
</form>