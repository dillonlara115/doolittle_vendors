<?php
/**
 * The template for displaying all single posts.
 *
 * @package doolittle_vendors
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main col-xs-12 col-sm-12 col-md-9 col-lg-9 col-md-push-3" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<?php 
			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				the_post_thumbnail();
			} 
			?>
			<?php if(get_field('price')) { ?>
				<strong>Price: </strong><?php the_field('price'); ?><br>
			<?php } ?>

			<strong>Description:</strong><br>
			<?php the_content( ); ?>

			<?php doolittle_vendors_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-md-pull-9">
			<?php get_sidebar(); ?>
		</div>
	</div><!-- #primary -->


<?php get_footer(); ?>
