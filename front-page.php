<?php 

/*

	This is the front/home page

	@package styledecortheme

*/


?>
<?php get_header(); ?>
	
	<div class="banner-bottom">
		<div class="container">
		<?php

			$args = array(
				'post_type' => 'page',
				'page_id' => 412,
				'posts_per_page' => 1
			);

			$interiorQuery = new WP_Query( $args );

			if ( $interiorQuery->have_posts() ) {
			
				while ( $interiorQuery->have_posts() ) {
					$interiorQuery->the_post();
					the_content();
				}
				wp_reset_postdata();

			}

		?>
			<div class="agileits_banner_bottom_grid_three">

			
			<?php

				$args = array(
					'post_type' => 'sd-design',
					'posts_per_page' => 3,
					'orderby' => 'date',
				);

				$designQuery = new WP_Query( $args );

				if ( $designQuery->have_posts() ) {

					while ( $designQuery->have_posts() ) {
						$designQuery->the_post();
						$id = get_the_ID();
						$shortDesc = get_post_meta( $id, 'design_short_description', true );
						$content = get_post_meta( $id, 'design_types_content', true );
						$taxonomy = get_taxonomies( '', 'names' );
						$terms = wp_get_post_terms( $id, $taxonomy );
						$designImage = get_the_post_thumbnail_url( );

						if ( $terms ) {
							$i = 1;
							$termOutput = '';
							$termSeparator = ', ';
							foreach ( $terms as $term ) {

								if ( $i > 1 ) : $termOutput .= $termSeparator; endif;

								$termOutput .= $term->name;

								$i++;

							}

						}

						echo '<div class="col-md-4 agileinfo_banner_bottom_grid_three_left"><div class="wthree_banner_bottom_grid_three_left1 grid"><figure class="effect-roxy"><img src="' . $designImage . '" class="img-responsive"><figcaption><h3>' . $termOutput . ' <span>Design</span></h3><p>' . $shortDesc . '</p></figcaption></figure></div><p class="w3_agileits_para">' . $content . '</p></div>';
					
					}
					wp_reset_postdata();
				}


			?>
			</div><!-- .agileits_banner_bottom_grid_three -->

		</div><!-- .container -->
	</div><!-- .banner-bottom -->

	<div class="jarallax register">
		<div class="container">
			<?php

				$args = array(
					'post_type' => 'page',
					'page_id' => 434,
					'posts_per_page' => 1
				);

				$interiorQuery = new WP_Query( $args );

				if ( $interiorQuery->have_posts() ) {
				
					while ( $interiorQuery->have_posts() ) {
						$interiorQuery->the_post();
						the_content();
					}
					wp_reset_postdata();

				}

			?>
			<div class="clearfix"> </div>
		</div>
	</div><!-- .jarallax .register -->


<?php get_footer(); ?>