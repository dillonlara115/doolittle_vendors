<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package doolittle_vendors
 */

get_header(); ?>

	<div id="primary" class="content-area row">
		<main id="main" class="site-main container" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title(); ?></h1>	
				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
