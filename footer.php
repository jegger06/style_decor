<?php

/*

	This si the template for the footer

	@package styledecortheme

*/

?>
<div class="footer">
	<div class="container">
		<h2 class="agileinfo_header">Subscribe to  <span>Newsletter</span></h2>
			<p class="agileits_dummy_para">vitae scelerisque condimentum, 
					risus orci lobortis nibh, at gravida .</p>
			<div class="news-w3l">
				<form action="#" method="post">
					<input type="email" name="Email" placeholder="Enter Your Email..." required="">
					<input type="submit" value="Send">
				</form>
			</div>
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
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
					</ul>
				</div>
				<div class="col-md-4 w3agile_footer_grid w3agile_footer_grid1">
					<h3>Navigation</h3>
					<?php 

						wp_nav_menu(
							array(
								'theme_location' => 'secondary',
								'container' => false,
								'before' => '<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>'
							)
						);

					?>
					<!-- <ul>
						<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="about.html">About</a></li>
						<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="gallery.html">Gallery</a></li>
						<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="icons.html">Web Icons</a></li>
						<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="mail.html">Mail Us</a></li>
					</ul> -->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="w3_agileits_copy_right_social">
			<div class="col-md-6 agileits_w3layouts_copy_right">
				<p>© 2017 Style Decor. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
			<div class="col-md-6 w3_agile_copy_right">
				<ul class="agileinfo_social_icons">
					<li><a href="#" class="w3_agileits_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class="agileinfo_google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					<li><a href="#" class="agileits_pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>



	<?php wp_footer(); ?>
</body>
</html>