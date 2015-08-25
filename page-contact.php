<?php
/**
* Template Name: Contact Page
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
				<h2>Business Hours</h2>
				<?php if(get_field('monday')) { ?>
					<strong>Monday: </strong><?php the_field('monday'); ?><br>
				<?php } ?>
				<?php if(get_field('tuesday')) { ?>
					<strong>Tuesday: </strong><?php the_field('tuesday'); ?><br>
				<?php } ?>
				<?php if(get_field('wednesday')) { ?>
					<strong>Wednesday: </strong><?php the_field('wednesday'); ?><br>
				<?php } ?>
				<?php if(get_field('thursday')) { ?>
					<strong>Thursday: </strong><?php the_field('thursday'); ?><br>
				<?php } ?>
				<?php if(get_field('friday')) { ?>
					<strong>Friday: </strong><?php the_field('friday'); ?><br>
				<?php } ?>
				<?php if(get_field('saturday')) { ?>
					<strong>Saturday: </strong><?php the_field('saturday'); ?><br>
				<?php } ?>
				<?php if(get_field('Sunday')) { ?>
					<strong>Sunday: </strong><?php the_field('sunday'); ?><br>
				<?php } ?>
				<br><br>
				<?php if(get_field('primary_email_address')) { ?>
					<strong>Email Address: </strong><a href="mailto:<?php the_field('primary_email_address'); ?>"><?php the_field('primary_email_address'); ?></a><br>
				<?php } ?>
				<?php if(get_field('phone_number')) { ?>
					<strong>Phone Number: </strong><a href="tel:<?php the_field('phone_number'); ?>"><?php the_field('phone_number'); ?></a><br>
				<?php } ?>
				<?php if(get_field('fax_number')) { ?>
					<strong>Fax Number: </strong><?php the_field('fax_number'); ?><br>
				<?php } ?>
				<?php 

				$location = get_field('address');

				if( !empty($location) ):
				?>
				<div class="acf-map">
					<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
				</div>
				<?php endif; ?>
		
			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
		<div class="col-sm-12 col-md-3 col-lg-3 col-md-pull-9">
			<?php get_sidebar(); ?>
		</div>
	</div><!-- #primary -->


<?php get_footer(); ?>

<style type="text/css">

.acf-map {
	width: 100%;
	height: 400px;
	border: #ccc solid 1px;
	margin: 20px 0;
}

</style>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script type="text/javascript">
(function($) {

/*
*  render_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$el (jQuery element)
*  @return	n/a
*/

function render_map( $el ) {

	// var
	var $markers = $el.find('.marker');

	// vars
	var args = {
		zoom		: 16,
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.ROADMAP
	};

	// create map	        	
	var map = new google.maps.Map( $el[0], args);

	// add a markers reference
	map.markers = [];

	// add markers
	$markers.each(function(){

    	add_marker( $(this), map );

	});

	// center map
	center_map( map );

}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$marker (jQuery element)
*  @param	map (Google Map object)
*  @return	n/a
*/

function add_marker( $marker, map ) {

	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map
	});

	// add to array
	map.markers.push( marker );

	// if marker contains HTML, add it to an infoWindow
	if( $marker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
		});

		// show info window when marker is clicked
		google.maps.event.addListener(marker, 'click', function() {

			infowindow.open( map, marker );

		});
	}

}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/

function center_map( map ) {

	// vars
	var bounds = new google.maps.LatLngBounds();

	// loop through all markers and create bounds
	$.each( map.markers, function( i, marker ){

		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

		bounds.extend( latlng );

	});

	// only 1 marker?
	if( map.markers.length == 1 )
	{
		// set center of map
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 16 );
	}
	else
	{
		// fit to bounds
		map.fitBounds( bounds );
	}

}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/

$(document).ready(function(){

	$('.acf-map').each(function(){

		render_map( $(this) );

	});

});

})(jQuery);
</script>