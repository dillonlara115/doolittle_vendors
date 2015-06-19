<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
<div class="static-header-image-container">
	<?php echo get_the_post_thumbnail( $page->ID, 'large', array( 'class'	=> "static-header-image") ); ?>
</div> 
	<div id="primary" class="content-area row">
		<main id="main" class="site-main large-12 columns" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>