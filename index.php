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

					if ( have_posts() ) :

						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content' . get_post_format() );

						endwhile;

					endif;

				?>

			</div><!-- .container -->

		</main>

	</div>

<?php get_footer(); ?>

<div class="textBlock">
	<h1>This is the heading</h1>
	<p>This is the paragraph</p>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>
</html>