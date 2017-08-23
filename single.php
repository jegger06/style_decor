<?php 

/*

	This is the template for the single post

	@package styledecortheme

*/


?>

<?php get_header(); ?>

	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">

			<div class="container single">

				<div class="row">

					<div class="col-xs-12 col-md-10 col-lg-8 col-lg-offset-2 col-md-offset-1">

						<?php

							if ( have_posts() ) :

								while ( have_posts() ) : the_post();

									get_template_part( 'template-parts/single', get_post_format() );

									echo styledecor_post_navigation();

									if ( comments_open() ) :

										comments_template();

									endif;

								endwhile;

							endif;

						?>

					</div><!-- .col-xs-12 .col-md-10 .col-lg-8 -->

				</div><!-- .row -->

			</div><!-- .container -->

		</main>

	</div><!-- #primary .content-area -->

<?php get_footer(); ?>