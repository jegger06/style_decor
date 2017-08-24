<?php 

/*

	This is the page.php

	@package styledecortheme

*/

?>
<?php get_header(); ?>

<div id="primary" class="content-area">

	<main id="main" class="site-main" role="main">

		<div class="container">

			<?php


				if ( have_posts() ) :

					while ( have_posts() ) : the_post();
				?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<header class="entry-header text-center">

								<?php echo styldecor_custom_title( false ); ?>

							</header>

							<div class="entry-content">

								<?php the_content(); ?>

							</div><!-- .entry-content -->

						</article>

				<?php

					endwhile;

				endif;

			?>

		</div><!-- .container -->

		<div class="jarallax team">
			<div class="container">
			<?php 
				$title = get_post_meta( $post->ID, 'team title', true);
				echo styldecor_custom_title( false, $title );
			?>
				<p class="agileits_dummy_para"><?php echo get_post_meta( $post->ID, 'team details', true); ?></p>
				<div class="agileits-team-grids">
					<?php

						$args = array(
							'post_type' => 'sd-team',
							'post_status' => 'publish',
							'posts_per_page' => 4,
						);

						$teamQuery = new WP_Query( $args );
						if ( $teamQuery->have_posts() ) :

							while ( $teamQuery->have_posts() ) : $teamQuery->the_post();
								$id = get_the_ID();
								$profile_image = get_the_post_thumbnail_url( $id );
								$title = ucwords( get_the_title() );
								$role = ucwords( get_post_meta( $id, 'team_role', true ) );
								$facebook_handler = get_post_meta( $id, 'team_facebook_handler', true );
								$twitter_handler = get_post_meta( $id, 'team_twitter_handler', true );
								$rss_handler = get_post_meta( $id, 'team_rss_handler', true );
					?>

								<div class="col-md-3 agileits-team-grid">
									<div class="team-info">
										<img src="<?php echo $profile_image; ?>" class="img-responsive" alt="" />
										<div class="team-caption"> 
											<h4><?php echo $title; ?></h4>
											<p><?php echo $role; ?></p>
											<ul>
												<li><a href="https://www.facebook.com/<?php echo $facebook_handler; ?>"><i class="fa fa-facebook"></i></a></li>
												<li><a href="https://twitter.com/<?php echo $twitter_handler; ?>"><i class="fa fa-twitter"></i></a></li>
												<li><a href="<?php echo $rss_handler; ?>"><i class="fa fa-rss"></i></a></li>
											</ul>
										</div>
									</div>
								</div>

					<?php

							endwhile;
							wp_reset_postdata();
						endif;

					?>

					<div class="clearfix"> </div>
				</div>
			</div>
		</div><!-- .jarallax .team -->

		<div class="w3-agileits-choose">
			<div class="container">
			<?php 
				$title = get_post_meta( $post->ID, 'choose title', true);
				echo styldecor_custom_title( false, $title );
			?>
				<p class="agileits_dummy_para"><?php echo ucfirst( get_post_meta( $post->ID, 'choose details', true) ); ?></p>
				<div class="agile-choose-grids">
					<div class="col-sm-4 agile-choose-grid">
						<div class="choose-icon">
							<i class="fa fa-user" aria-hidden="true"></i>
						</div>
						<div class="choose-info">
							<h4><?php echo ucwords( get_post_meta( $post->ID, 'choose reason title 01', true ) ); ?></h4>
							<p><?php echo ucfirst( get_post_meta( $post->ID, 'choose reason detail 01', true ) ); ?></p>
						</div>
					</div>
					<div class="col-sm-4 agile-choose-grid">
						<div class="choose-icon">
							<i class="fa fa-cogs" aria-hidden="true"></i>
						</div>
						<div class="choose-info">
							<h4><?php echo ucwords( get_post_meta( $post->ID, 'choose reason title 02', true ) ); ?></h4>
							<p><?php echo ucfirst( get_post_meta( $post->ID, 'choose reason detail 02', true ) ); ?></p>
						</div>
					</div>
					<div class="col-sm-4 agile-choose-grid">
						<div class="choose-icon">
							<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
						</div>
						<div class="choose-info">
							<h4><?php echo ucwords( get_post_meta( $post->ID, 'choose reason title 03', true ) ); ?></h4>
							<p><?php echo ucfirst( get_post_meta( $post->ID, 'choose reason detail 03', true ) ); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div><!-- .w3-agileits-choose -->

	</main>

</div><!-- #primary .content-area -->

<?php get_footer(); ?>