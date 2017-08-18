<?php

/*

@package styledecortheme

===========================
	Video Post Format
===========================

*/

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'styledecor-format-video' ); ?>>

	<header class="entry-header text-center">

		<div class="embed-responsive embed-responsive-16by9">
			<?php echo styledecor_get_embedded_media( array( 'video', 'iframe' ) ); ?>
		</div>

		<?php echo styldecor_custom_title(); ?>

		<div class="entry-meta text-center">
			<?php echo styledecor_posted_meta(); ?>
		</div>

	</header>

	<div class="entry-content">

		<div class="entry-excerpt">
			<?php the_excerpt(); ?>
		</div>

		<div class="button-container text-center">
			<a href="<?php the_permalink(); ?>" class="btn btn-default btn-styledecor"><?php _e( 'Read More' ); ?></a>
		</div>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php echo styledecor_posted_footer(); ?>
	</footer>

</article>