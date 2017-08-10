<?php

/*

	This is the template for the footer

	@package styledecortheme

*/

?>
<div class="footer">
	<div class="container">
		<div class="agile_footer_copy">
			<div class="w3agile_footer_grids">
				<div class="col-md-4 w3agile_footer_grid">
					<h3>About Us</h3>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse.<span>Excepteur sint occaecat cupidatat 
						non proident, sunt in culpa qui officia deserunt mollit.</span></p>
				</div>
				<div class="col-md-4 w3agile_footer_grid">
					<h3>Contact Info</h3>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><?php echo get_option( 'location' ); ?></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:<?php echo esc_attr( get_option( 'email' ) ); ?>"><?php echo esc_attr( get_option( 'email' ) ); ?></a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+<?php echo esc_attr( get_option( 'number' ) ); ?></li>
					</ul>
				</div>
				<div class="col-md-4 w3agile_footer_grid w3agile_footer_grid1">
					<h3><?php echo esc_attr( 'Navigation' ); ?></h3>
					<?php 

						wp_nav_menu(
							array(
								'theme_location' => 'secondary',
								'container' => false,
								'before' => '<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>'
							)
						);

					?>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="w3_agileits_copy_right_social">
			<div class="col-md-6 agileits_w3layouts_copy_right">
				<p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. <?php echo esc_attr( 'All rights reserved | Design by' ); ?> <a href="<?php echo esc_url( 'w3layouts.com/' ); ?>"><?php echo esc_attr( 'W3layouts' ); ?></a></p>
			</div>
			<div class="col-md-6 w3_agile_copy_right">
				<ul class="agileinfo_social_icons">
					<li><a href="https://facebook.com/<?php echo esc_attr( get_option( 'facebook' ) ); ?>" class="w3_agileits_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="https://twitter.com/<?php echo esc_attr( get_option( 'twitter' ) ); ?>" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="https://plus.google.com/u/0/+<?php echo esc_attr( get_option( 'googleplus' ) ); ?>" class="agileinfo_google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					<li><a href="https://www.pinterest.com/<?php echo esc_attr( get_option( 'penterest' ) ); ?>" class="agileits_pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<?php wp_footer(); ?>
</body>
</html>