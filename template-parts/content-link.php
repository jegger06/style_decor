<?php

/*

@package styledecortheme

===========================
	Link Post Format
===========================

*/

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'styledecor-format-link' ); ?>>

	<header class="entry-header text-center">
		<?php
			$link = styledecor_get_url();
			the_title( '<h1 class="entry-title"><a href="' . $link . '" target="_blank">', '<div class="link-icon"><i class="fa fa-link" aria-hidden="true"></i></div></a></h1>' );

		?>
	</header>

</article>