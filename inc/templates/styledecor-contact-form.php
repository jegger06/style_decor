<h1>Style Decor Contact Form</h1>
<?php settings_errors(); ?>

<p>Use this <strong>shortcode</strong> to activate the Contact Form inside a Page or a Post</p>
<p><code>[contact_form]</code></p>

<form method="post" action="options.php">
	<?php settings_fields( 'styledecor-contact-options' ); ?>
	<?php do_settings_sections( 'style_decor_theme_contact' ); ?>
	<?php submit_button(); ?>
</form>