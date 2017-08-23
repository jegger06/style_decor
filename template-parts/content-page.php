<?php

/*

@package styledecortheme

===========================
	Page Template
===========================

*/

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header text-center">

		<?php echo styldecor_custom_title( false ); ?>

	</header>

	<div class="entry-content">

		<?php the_content(); ?>

	</div><!-- .entry-content -->

</article>