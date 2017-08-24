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

	<div class="banner-bottom-1">
		<div class="container">
			<?php

				$args = array(
					'post_type' => 'page',
					'page_id' => 444,
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
		</div><!-- .container -->
	</div><!-- .banner-bottom-1 -->

	<div class="events">
		<div class="container">
			<?php

				$args = array(
					'post_type' => 'page',
					'page_id' => 439,
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

				$args = array(
					'post_type' => 'sd-news-events',
					'post_status' => 'publish',
					'posts_per_page' => 3,
				);

				$newseventsQuery = new WP_Query( $args );

				if ( $newseventsQuery->have_posts() ) {
					echo '<div class="events-grids">';

					while ( $newseventsQuery->have_posts() ) {
						$newseventsQuery->the_post();
						$date = get_the_date( 'j F Y' );
						$title = get_the_title();
						$excerpt = get_the_excerpt();
						$permalink = get_the_permalink();

						echo '<div class="col-md-4 events-grid1"><div class="events-grid11"><div class="events-grid11-info"><h4><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i><label>' . $date . '</label><a href="' . $permalink . '" title="' . $title . '">' . $title . '</a></h4><p>' . $excerpt . '</p></div></div></div>';
					}
					wp_reset_postdata();
					echo '</div>';
				}

			?>
		</div><!-- .container -->
	</div><!-- .events -->


<?php get_footer(); ?>