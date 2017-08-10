<?php 

/*

	This is the tempalte for the header

	@package styledecortheme

*/


?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo( 'name' ); wp_title(); ?></title>
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Style Decor Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<![endif]-->
</head>
<body <?php body_class(); ?>>
	<div class="banner jarallax" style="background-image: url(<?php header_image(); ?>);">
		<div class="agileinfo-dot">
			<div class="w3ls-banner-info-bottom">
				<div class="container">
					<div class="banner-address">
						<div class="col-md-3 banner-address-left">
							<p><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo esc_html( wp_strip_all_tags( get_option( 'location' ) ) ); ?></p>
						</div>
						<div class="col-md-3 banner-address-left">
							<p><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:<?php echo esc_attr( get_option( 'email' ) ); ?>"><?php echo esc_attr( get_option( 'email' ) ); ?></a></p>
						</div>
						<div class="col-md-3 banner-address-left">
							<p><i class="fa fa-phone" aria-hidden="true"></i> +<?php echo esc_attr( get_option( 'number' ) ); ?></p>
						</div>
						<div class="col-md-3 agileinfo-social-grids">
							<ul>
								<li><a href="https://facebook.com/<?php echo esc_attr( get_option( 'facebook' ) ); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/<?php echo esc_attr( get_option( 'twitter' ) ); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<li><a href="<?php bloginfo('rss2_url'); ?>"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<div class="header">
				<div class="container">
					<div class="header-top-grids">
						<div class="agileits-logo">
							<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
						</div>
						<div class="top-nav">
							<nav class="navbar navbar-default">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
									<nav>
									<?php
										wp_nav_menu(
											array(
												'theme_location' => 'primary',
												'menu_class' => 'nav navbar-nav',
												'container' => false,
												'walker' => new Styledecor_Walker_Nav_Primary
											)
										);
									?>
									</nav>
								</div>
								<!-- /.navbar-collapse -->
							</nav>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="w3layouts-banner">
				<div class="container">
					<section class="slider">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<div class="agileits_w3layouts_banner_info">
										<h3>simply dummy text of the printing</h3>
										<p>Standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
									</div>
								</li>
								<li>
									<div class="agileits_w3layouts_banner_info">
										<h3>simply dummy text of the printing</h3>
										<p>Standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
									</div>
								</li>
								<li>
									<div class="agileits_w3layouts_banner_info">
										<h3>simply dummy text of the printing</h3>
										<p>Standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
									</div>
								</li>
							</ul>
						</div>
					</section>
				</div>
			</div>
			<!-- flexSlider -->
				<!-- <script defer src="js/jquery.flexslider.js"></script> -->
				<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						// start: function(slider){
						//   $('body').removeClass('loading');
						// }
					  });
					});
				</script>
			<!-- //flexSlider -->
				</div>
			</div>
		</div>
	</div>