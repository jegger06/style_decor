<?php get_header(); ?>
<div class="container">
	<header>
		<h1><?php the_title(); ?></h1>
	</header>
<?php 
	
	while( have_posts() ) : the_post();

?>

		
		<div class="content">
			<?php the_content(); ?>
		</div>

<?php 
	endwhile;
 ?>

</div>

<?php get_footer(); ?>