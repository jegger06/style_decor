<?php

/*

@package styledecortheme

===========================
	Audio Post Format
===========================

*/

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'styledecor-format-audio' ); ?>>

	<header class="entry-header">
		<?php echo styldecor_custom_title(); ?>

		<div class="entry-meta text-center">
			<?php echo styledecor_posted_meta(); ?>
		</div>

	</header>

	<div class="entry-content">

		<?php echo styledecor_get_embedded_media( array( 'audio', 'iframe' ) ); ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php echo styledecor_posted_footer(); ?>
	</footer>

</article>