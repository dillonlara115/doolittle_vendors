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
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/normalize.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/pushy.css">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<div class="inner-wrap">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'doolittle_vendors' ); ?></a>

	<header id="masthead" class="site-header navbar navbar-default push" role="banner">
		<nav class="container">
		  <div class="col-md-4 header-brand">
		  	<?php if ( get_header_image() ) : ?>
					<div class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand" rel="home">
							<img src="<?php header_image(); ?>"  class="header-logo" alt="">
						</a>
					</div>
				<?php else: ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php endif; // End header image check. ?>
			</div>
			<div class="col-md-8">
			   	
			   	<div class="hidden-xs col-sm-offset-6 col-sm-6 col-md-6 col-lg-6 header-contact">
					<p class="site-description"><?php echo customText('phoneNumber'); ?> 
						<a href="<?php echo customText('facebook'); ?>" class="social-link"><img src="http://maxtestdomain.com/doolittle-vendors/wp-content/uploads/2015/08/facebook.png" /></a>
						<a href="<?php echo customText('twitter'); ?>" class="social-link"><img src="http://maxtestdomain.com/doolittle-vendors/wp-content/uploads/2015/08/twitter.png" /></a>
						<a href="<?php echo customText('googleplus'); ?>" class="social-link"><img src="http://maxtestdomain.com/doolittle-vendors/wp-content/uploads/2015/08/googleplus.png" /></a>
					</p>	
				</div>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class'      => 'nav navbar-nav hidden-xs pull-right' ) ); ?>
				
				<div class="menu-btn menu-btn--right visible-xs col-xs-1 pull-right">&#9776;</div>
		   	
		  </div>
		</nav>
		    

		  
		
	</header><!-- #masthead -->

	<div id="container" class="site-content">
