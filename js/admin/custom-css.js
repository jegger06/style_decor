jQuery(document).ready(function($) {

	var updateCSS = function() {
		$('#custom_css').val( editor.getSession().getValue() );
	}

	$('#custom-css-form').submit( updateCSS );

});

var editor = ace.edit('customCSS');

editor.setTheme('ace/theme/monokai');
editor.getSession().setMode('ace/mode/css');