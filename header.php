<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package doolittle_vendors
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/normalize.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/foundation.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site off-canvas-wrap" data-offcanvas>
	<div class="inner-wrap">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'doolittle_vendors' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php if ( get_header_image() ) : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
				</a>
			<?php endif; // End header image check. ?>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div><!-- .site-branding -->


		
		  

		    <a class="right-off-canvas-toggle" href="#">Menu</a>

		    <!-- Off Canvas Menu -->
		    <aside class="right-off-canvas-menu tab-bar">
		        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		    </aside>

		   
		  <!-- close the off-canvas menu -->
		  <a class="exit-off-canvas">close</a>

		  
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
