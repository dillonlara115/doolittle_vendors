<?php
/**
* Template Name: Secondary Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package doolittle_vendors
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main col-xs-12 col-sm-12 col-md-9 col-lg-9 col-md-push-3" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title(); ?></h1>	
				<?php the_content( ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-md-pull-9">
			<?php get_sidebar(); ?>
		</div>
	</div><!-- #primary -->


<?php get_footer(); ?>
