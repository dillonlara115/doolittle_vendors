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
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<div class="inner-wrap">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'doolittle_vendors' ); ?></a>

	<header id="masthead" class="site-header navbar navbar-default" role="banner">
		<div class="site-branding row">
			<div class="container">
				<?php if ( get_header_image() ) : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand" rel="home">
						<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
					</a>
				<?php endif; // End header image check. ?>
				<h1 class="site-title col-xs-9 col-sm-9 col-lg-9"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<div class="hidden-xs col-sm-3 col-md-3 col-lg-3">
					<span class="col-md-12"><?php echo customText('phoneNumber'); ?></span>
					<small class="site-description col-md-12"><?php bloginfo( 'description' ); ?></small>
				</div>
				
			</div>
		</div><!-- .site-branding -->
		<nav class="row">
		  <div class="container">
		   	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class'      => 'nav navbar-nav' ) ); ?>
		  </div>
		</nav>
		    

		  
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
