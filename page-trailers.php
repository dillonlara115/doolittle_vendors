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

<?php 

	// starting the session
	session_start();
		
	$_SESSION = array();
	if (isset($_POST['submit'])) {
		$_SESSION['brand'] = $_POST['brand'];
		$_SESSION['trailer_type'] = $_POST['trailer_type'];
		$_SESSION['sort'] = $_POST['sort'];
	} 

?> 

	<div id="primary" class="content-area container">
		<main id="main" class="site-main col-xs-12 col-sm-12 col-md-9 col-lg-9 col-md-push-3" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				 <h1><?php the_title(); ?></h1>	
				<?php the_content( ); ?>
			
			<?php endwhile; // end of the loop. ?>

<form name="searchform" action="" method="post" class="form-inline filter-form">
<p>Filter Results by:</p>
<div class="form-group">
<label for="brand">Brand</label>
<?php 
	/*
	*  Get a field object and create a select form element
	*/
	$field_key = "field_55db6cc9e3a20";
	$field = get_field_object($field_key);

	if( $field ) {
	echo '<select name="brand" id="brand" class="form-control brand-select"><option class="filter" ></option>';
		foreach( $field['choices'] as $k => $v )
		{ ?>
			<option class="filter" name="brand" data-filter="<?php echo $k ?>"  value="<?php echo $k ?>" <?php if ($k == $_SESSION['brand']) print 'selected'; ?>> <?php echo $v ?> </option>
		<?php } ?>
	</select>

<?php } ?>
</div>

<div class="form-group">
<label for="type">Trailer Type</label>
<?php 
	/*
	*  Get a field object and create a select form element
	*/
	$field_key = "field_55db6cc4e3a1f";
	$field = get_field_object($field_key);

	if( $field ) {
	echo '<select name="trailer_type" id="type" class="form-control type-select"><option class="filter" name="trailer_type" ></option>';
		foreach( $field['choices'] as $k => $v )
		{ ?>
			<option class="filter" name="trailer_type" data-filter="<?php echo $k ?>"  value="<?php echo $k ?>" <?php if ($k == $_SESSION['trailer_type']) print 'selected'; ?>> <?php echo $v ?> </option>
		<?php } ?>
	</select>

<?php } ?>
</div>
<br><br>
<div class="form-group">
<label for="sort">Sort Results by:</label>
<select name="sort" class="sort-select form-control" id="sort">
	<option value="A-Z" >A-Z</option>
	<option value="Z-A">Z-A</option>
</select> 
</div>
<input type="submit" name="submit" class="filter-button btn btn-default hidden" value="Filter">
</form>
			<?php 


			$brandQuery = array();
			if(isset($_SESSION['brand'])){
				$brandQuery[] = array(
					'key'		=> 'brand',
					'value'		=>  $_SESSION['brand'],
					'compare'	=> 'LIKE'
				);
			};
			$trailerTypeQuery = array();
			if(isset($_SESSION['trailer_type'])){
				$trailerTypeQuery[] = array(
					'key'		=> 'trailer_type',
					'value'		=>  $_SESSION['trailer_type'],
					'compare'	=> 'LIKE'
				);
			};

			
			if($_SESSION['sort'] == 'A-Z') {
				$sortby = 'ASC';
			} elseif ($_SESSION['sort'] == 'Z-A') {
				$sortby = 'DESC';
			} else {
				$sortby = 'ASC';
			}

						// args
						$args = array(
							'numberposts'	=> -1,
							'post_type'		=> 'Trailers',
							'order'                  => $sortby,
							'orderby'                => 'title',
							'meta_query'	=> array(
								'relation'		=> 'AND',
								array(
									'key'		=> 'inventory_management',
									'value'		=> 'This trailer is out of stock',
									'compare'	=> 'NOT LIKE'
								),
								$brandQuery,
								$trailerTypeQuery
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
												<span class="glyphicon glyphicon-usd" aria-hidden="true"></span><?php the_field('price'); ?>
												<a href="<?php the_permalink(); ?>" class="pull-right btn btn-default">learn more</a>

											</p>	
									</div>
								</li>
							<?php endwhile; ?>
							</ul>
						<?php else : ?>
							<h3>No Trailers Found</h3>
						<?php endif; ?>

						<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>

		</main><!-- #main -->
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-md-pull-9">
			<?php get_sidebar(); ?>
		</div>
	</div><!-- #primary -->



<script type="text/javascript">
	(function($) {
		$(".brand-select").change(function(){
			$('.filter-button').click();
		});
		$(".type-select").change(function(){
			$('.filter-button').click();
		});
		$(".sort-select").change(function(){
			$('.filter-button').click();
		});

})(jQuery);
</script>

<?php get_footer(); ?>
