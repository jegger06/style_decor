<?php

/*

@package styledecortheme

===========================
	Image Post Format
===========================

*/

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'styledecor-format-image' ); ?>>

	<header class="entry-header text-center background-image" style="background-image: url(<?php echo styledecor_get_attachment(); ?>);">
		<?php echo styldecor_custom_title(); ?>

		<div class="entry-meta">
			<?php echo styledecor_posted_meta(); ?>
		</div>

		<div class="entry-excerpt image-caption">
			<?php the_excerpt(); ?>
		</div>

	</header>

	<footer class="entry-footer">
		<?php echo styledecor_posted_footer(); ?>
	</footer>

</article>