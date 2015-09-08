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
				the_post_thumbnail('full');
			} 
			?>
			<div class="single-trailer-content">
			

			  <!-- Nav tabs -->
			  <ul class="nav nav-tabs nav-justified" role="tablist">
			    <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a></li>
			    <li role="presentation"><a href="#features" aria-controls="features" role="tab" data-toggle="tab">Features</a></li>
			  </ul>

			  <!-- Tab panes -->
			  <div class="tab-content">
			    <div role="tabpanel" class="tab-pane fade in active" id="description">
			    	<?php the_content( ); ?>
			    </div>
			    <div role="tabpanel" class="tab-pane fade " id="features">
			    	<?php if(get_field('price')) { ?>
						<strong><span class="glyphicon glyphicon-usd" aria-hidden="true"></span>Price: </strong><?php echo number_format(get_field('price'), 2, '.', ','); ?><br>
					<?php } ?>
					<?php if(get_field('color')) { ?>
						<strong><span class="glyphicon glyphicon-tint" aria-hidden="true"></span>Color: </strong>
						<?php the_field('color'); ?><br>
					<?php } ?>
					<?php if(get_field('dimensions')) { ?>
						<strong><span class="glyphicon glyphicon-road" aria-hidden="true"></span>Dimensions: </strong>
						<?php the_field('dimensions'); ?><br>
					<?php } ?>
					<?php if(get_field('features')) { ?>
						<strong><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>Features: </strong>
						<?php the_field('features'); ?><br>
					<?php } ?>
			    </div>
			  </div>

			
			</div>
		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-md-pull-9">
			<?php get_sidebar(); ?>
		</div>
	</div><!-- #primary -->


<?php get_footer(); ?>
