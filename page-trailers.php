<?php
/**
* Template Name: Trailer Inventory Page
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
			<?php 

						// args
						$args = array(
							'numberposts'	=> -1,
							'post_type'		=> 'Trailers',
							'meta_query'	=> array(
								'relation'		=> 'AND',
								array(
									'key'		=> 'inventory_management',
									'value'		=> 'This trailer is out of stock',
									'compare'	=> 'NOT LIKE'
								)
							)
						);


						// query
						$the_query = new WP_Query( $args );

						?>
						<?php if( $the_query->have_posts() ): ?>
							<ul class="media-list">
							<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
								<li class="media">
									<div class="media-left">
										<a href="<?php the_permalink(); ?>">
											<?php the_post_thumbnail( 'large', array( 'class' => 'media-object' )  ); ?>
										</a>
									</div>
									<div class="media-body">
										<h4 class="media-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
											<p>
												<?php the_field('trailer_excerpt'); ?>
												<br>
												$<?php the_field('price'); ?>
												<a href="<?php the_permalink(); ?>" class="pull-right btn btn-default">learn more</a>

											</p>	
									</div>
								</li>
							<?php endwhile; ?>
							</ul>
						<?php endif; ?>

						<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>

		</main><!-- #main -->
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-md-pull-9">
			<?php get_sidebar(); ?>
		</div>
	</div><!-- #primary -->


<?php get_footer(); ?>
