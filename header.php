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
	<?php wp_head(); ?>
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<![endif]-->
</head>
<body <?php body_class(); ?>>
	<div class="banner jarallax">
		<div class="agileinfo-dot">
			<div class="w3ls-banner-info-bottom">
				<div class="container">
					<div class="banner-address">
						<div class="col-md-3 banner-address-left">
							<p><i class="fa fa-map-marker" aria-hidden="true"></i> St Dolore Place,ingsport 56777.</p>
						</div>
						<div class="col-md-3 banner-address-left">
							<p><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:example@email.com">mail@example.com</a></p>
						</div>
						<div class="col-md-3 banner-address-left">
							<p><i class="fa fa-phone" aria-hidden="true"></i> +1 234 567 8901</p>
						</div>
						<div class="col-md-3 agileinfo-social-grids">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
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
							<h1><a href="index.html">Style Decor</a></h1>
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
												'container' => false
											)
										);


									?>
										<!-- <ul class="nav navbar-nav">
											<li class="active"><a href="index.html">Home</a></li>
											<li><a href="about.html">About</a></li>
											<li><a href="gallery.html">Gallery</a></li>
											<li><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Codes<span class="caret"></span></a>
												<ul class="dropdown-menu">
													<li><a class="hvr-bounce-to-bottom" href="icons.html">Icons</a></li>
													<li><a class="hvr-bounce-to-bottom" href="typography.html">Typography</a></li>          
												</ul>
											</li>	
											<li><a href="mail.html">Mail Us</a></li>
										</ul> -->
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
			<!-- flexSlider -->
				<!-- <script defer src="js/jquery.flexslider.js"></script> -->
				<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				</script>
			<!-- //flexSlider -->

				</div>
			</div>
		</div>
	</div>