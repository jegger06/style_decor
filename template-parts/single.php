<?php

/*

@package styledecortheme

===========================
	Single Post Template
===========================

*/

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header text-center">
		<?php echo styldecor_custom_title(false); ?>

		<div class="entry-meta text-center">
			<?php echo styledecor_posted_meta(); ?>
		</div>

	</header>

	<div class="entry-content clearfix">

		<?php the_content(); ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php echo styledecor_posted_footer(); ?>
	</footer>

</article>