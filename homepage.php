<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
<div class="static-header-image-container">
	<?php echo get_the_post_thumbnail( $page->ID, 'large', array( 'class'	=> "static-header-image") ); ?>
</div> 
	<div id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">
			<?php 
				 $number = 0; 
				// args
				$args = array(
					'post_type'		=> 'carousel',
				);
				// query
				$the_query = new WP_Query( $args );
				if( $the_query->have_posts() ): 
			?>
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <?php while( $the_query->have_posts() ) : $the_query->the_post();   ?>
			    <li data-target="#carousel-example-generic"  data-slide-to="<?php echo $number++; ?>"></li>
			    <?php endwhile; ?>
			  </ol>

			  <!-- Carousel items -->
			  <div class="carousel-inner" role="listbox">
			    <?php while( $the_query->have_posts() ) : $the_query->the_post();  ?>
			    <div class="item">
			      <?php the_post_thumbnail('full'); ?>
			      <div class="carousel-caption">
			        <h3><?php the_title(); ?></h3>
			        <p><?php the_excerpt(); ?></p>
			      </div>
			    </div>
			    <?php endwhile; ?>
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
			<?php endif; wp_reset_query(); ?>
		
				<div class=" home-content">
					<div class="col-xs-12 col-sm-12 col-md-9 col-md-push-3">
						<?php while ( have_posts() ) : the_post(); ?>
						
							<?php the_content(); ?>
						<?php endwhile; // end of the loop. ?>
						<div class="featured-section">
							
					
						<h3 class="text-center">Featured Trailers</h3>
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
								),
								array(
									'key'		=> 'featured',
									'value'		=> 'Yes',
									'compare'	=> 'LIKE'
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
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-md-pull-9">
						<?php get_sidebar(); ?>
					</div>
				</div>
			
			

		</main><!-- #main -->
	</div><!-- #primary -->
<script>
jQuery(document).ready(function(){
  $(".carousel-indicators li:first").addClass("active");
  $(".carousel-inner .item:first").addClass("active");
});
</script>
<?php get_footer(); ?>