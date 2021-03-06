<?php

/*

@package styledecortheme

===========================
	Standard Post Format
===========================

*/

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header text-center">
		<?php echo styldecor_custom_title(); ?>

		<div class="entry-meta text-center">
			<?php echo styledecor_posted_meta(); ?>
		</div>

	</header>

	<div class="entry-content">

		<?php if ( styledecor_get_attachment() ) : ?>
			<a class="standard-featured-link" href="<?php the_permalink(); ?>">
				<div class="standard-featured background-image" style="background-image: url(<?php echo styledecor_get_attachment(); ?>);"></div>
			</a>

		<?php endif; ?>

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