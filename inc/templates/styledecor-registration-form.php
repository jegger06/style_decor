<h1>Style Decor Registration Form</h1>
<?php settings_errors(); ?>

<p>Use this <strong>shortcode</strong> to activate the Registration Form inside a Page or a Post</p>
<p><code>[registration_form]</code></p>

<form method="post" action="options.php">
	<?php settings_fields( 'styledecor-register-options' ); ?>
	<?php do_settings_sections( 'style_decor_theme_register' ); ?>
	<?php submit_button(); ?>
</form>