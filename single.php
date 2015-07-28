<?php
/**
 * The template for displaying all single posts.
 *
 * @package doolittle_vendors
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main col-xs-12 col-sm-12 col-md-9 col-lg-9" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php doolittle_vendors_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
			<?php get_sidebar(); ?>
		</div>
	</div><!-- #primary -->


<?php get_footer(); ?>
