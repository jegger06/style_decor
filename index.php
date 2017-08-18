<?php 

/*

	This is the template for the index

	@package styledecortheme

*/


?>

<?php get_header(); ?>

	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">

			<div class="container">

				<?php

					$args = array(
						'post_type' => 'post',
						'tag__not_in' => array( 10 ),
					);

					$postsQuery = new WP_Query( $args );

					if ( $postsQuery->have_posts() ) :

						while ( $postsQuery->have_posts() ) : $postsQuery->the_post();

							get_template_part( 'template-parts/content', get_post_format() );

						endwhile;

					endif;

				?>

			</div><!-- .container -->

		</main>

	</div><!-- #primary .content-area -->

<?php get_footer(); ?>