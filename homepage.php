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
		<main id="main" class="site-main container" role="main">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      <img src="http://placehold.it/1200x500" alt="...">
			      <div class="carousel-caption">
			        ...
			      </div>
			    </div>
			    <div class="item">
			      <img src="http://placehold.it/1200x500" alt="...">
			      <div class="carousel-caption">
			        ...
			      </div>
			    </div>
			    ...
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
			<div class="row">
				<div class="container">
					<div class="col-xs-12 col-sm-10 col-md-9">
						<?php while ( have_posts() ) : the_post(); ?>

							<?php the_content(); ?>
						<?php endwhile; // end of the loop. ?>
					</div>
					<div class="col-xs-12 col-sm-2 col-md-3">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>