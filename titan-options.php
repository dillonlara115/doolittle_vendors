<?php

/*
 * Titan Framework options sample code. We've placed here some
 * working examples to get your feet wet
 * @see	http://www.titanframework.net/get-started/
 */


add_action( 'tf_create_options', 'doolittle_vendors_create_options' );

/**
 * Initialize Titan & options here
 */
function doolittle_vendors_create_options() {

	$titan = TitanFramework::getInstance( 'doolittle_vendors' );
	
	
	/**
	 * Create a Theme Customizer panel where we can edit some options.
	 * You should put options here that change the look of your theme.
	 */
	
	$section = $titan->createThemeCustomizerSection( array(
	    'name' => __( 'Theme Options', 'doolittle_vendors' ),
	) );
	
	$section->createOption( array(
	    'name' => __( 'Background Color', 'doolittle_vendors' ),
	    'id' => 'sample_color1',
	    'type' => 'color',
	    'desc' => __( 'This color changes the background of your theme', 'doolittle_vendors' ),
	    'default' => '#FFFFFF',
		'css' => 'body { background-color: value }',
	) );

	$section->createOption( array(
	    'name' => __( 'Homepage Slide Show Background Color', 'doolittle_vendors' ),
	    'id' => 'slideshow_color1',
	    'type' => 'color',
	    'desc' => __( 'This color changes the background of your theme', 'doolittle_vendors' ),
	    'default' => '#FFFFFF',
		'css' => '.homepage-slide-show { background-color: value }',
	) );


	$section->createOption( array(
	    'name' => __( 'Body Color', 'doolittle_vendors' ),
	    'id' => 'body_color1',
	    'type' => 'color',
	    'desc' => __( 'This color changes the text and border colors for your theme', 'doolittle_vendors' ),
	    'default' => '#000000',
		'css' => 'body { color: value }',
	) );

		/* set link colors */
	$section->createOption( array(
	    'name' => __( 'Link Colors', 'doolittle_vendors' ),
	    'id' => 'link_color1',
	    'type' => 'color',
	    'desc' => __( 'This color changes the link colors in your theme', 'doolittle_vendors' ),
	    'default' => '#9F52CB',
		'css' => 'a { color: value }',
	) );

	$section->createOption( array(
	    'name' => __( 'Header Background Color', 'doolittle_vendors' ),
	    'id' => 'header_background_color1',
	    'type' => 'color',
	    'desc' => __( 'This color changes the background of your theme', 'doolittle_vendors' ),
	    'default' => '#FFFFFF',
		'css' => '.navbar-default, .sub-menu, .widget_nav_menu { background-color: value }',
	) );

			/* set link colors */
	$section->createOption( array(
	    'name' => __( 'Header Link Color', 'doolittle_vendors' ),
	    'id' => 'navLink_color1',
	    'type' => 'color',
	    'desc' => __( 'This color changes the link colors in your theme', 'doolittle_vendors' ),
	    'default' => '#9F52CB',
		'css' => '.navbar-default .navbar-nav>li>a, .menu-our-inventory-container .menu-item a, ul li ul.sub-menu li a, .menu-btn { color: value }',
	) );

	/* set link colors */
	$section->createOption( array(
	    'name' => __( 'Widget Header Color', 'doolittle_vendors' ),
	    'id' => 'widgetText_color1',
	    'type' => 'color',
	    'desc' => __( 'This color changes the Widget Header text color in your theme', 'doolittle_vendors' ),
	    'default' => '#9F52CB',
		'css' => '.widget-title { color: value }',
	) );


	/* set link colors */
	$section->createOption( array(
	    'name' => __( 'Widget Hover Color', 'doolittle_vendors' ),
	    'id' => 'widgetTexthover_color1',
	    'type' => 'color',
	    'desc' => __( 'This color changes the Widget link hover color in your theme', 'doolittle_vendors' ),
	    'default' => '#9F52CB',
		'css' => '.menu-our-inventory-container a:hover { background-color: value }',
	) );

	/* set link colors */
	$section->createOption( array(
	    'name' => __( 'Widget Form Background Color', 'doolittle_vendors' ),
	    'id' => 'widgetform_color1',
	    'type' => 'color',
	    'desc' => __( 'This color changes the Widget link hover color in your theme', 'doolittle_vendors' ),
	    'default' => '#cccccc',
		'css' => '.widget.gform_widget { background-color: value }',
	) );
	
	$section->createOption( array(
	    'name' => __( 'Headings Font', 'doolittle_vendors' ),
	    'id' => 'headings_font',
	    'type' => 'font',
	    'desc' => __( 'Select the font for all headings on the site', 'doolittle_vendors' ),
		'show_color' => false,
		'show_font_size' => false,
	    'show_font_weight' => false,
	    'show_font_style' => false,
	    'show_line_height' => false,
	    'show_letter_spacing' => false,
	    'show_text_transform' => false,
	    'show_font_variant' => false,
	    'show_text_shadow' => false,
	    'default' => array(
	        'font-family' => 'Lora',
	    ),
		'css' => 'h1, h2, h3, h4, h5, h6, .single-trailer-content strong { value }',
	) );



	$section->createOption( array(
	    'name' => __( 'Body Font', 'doolittle_vendors' ),
	    'id' => 'body_font',
	    'type' => 'font',
	    'desc' => __( 'Select the font for all text on the site', 'doolittle_vendors' ),
		'show_color' => false,
		'show_font_size' => false,
	    'show_font_weight' => false,
	    'show_font_style' => false,
	    'show_line_height' => false,
	    'show_letter_spacing' => false,
	    'show_text_transform' => false,
	    'show_font_variant' => false,
	    'show_text_shadow' => false,
	    'default' => array(
	        'font-family' => 'Open Sans',
	    ),
		'css' => 'body, p, a, small, strong, em, b, label { value }',
	) );


	$section->createOption( array(
	    'name' => __( 'Border Radius', 'doolittle_vendors' ),
	    'id' => 'button_radius',
	    'type' => 'radio',
	    'desc' => __( 'Select the border-radius you want for your theme(buttons and inputs)', 'doolittle_vendors' ),
	    'default' => '0',
		'options' => array(
	        '0' => 'none',
	        '2px' => '2px',
	        '5px' => '5px',
    	),
		'css' => '.btn, .gform_button.button, .ginput_container input, .ginput_container select, .ginput_container textarea, input, textarea  { border-radius: value }',
	) );
	
	
	/**
	 * Create an admin panel & tabs
	 * You should put options here that do not change the look of your theme
	 */
	
	$adminPanel = $titan->createAdminPanel( array(
	    'name' => __( 'Vendor Site Settings', 'doolittle_vendors' ),
	    'position' => '1'
	) );
	
	$generalTab = $adminPanel->createTab( array(
	    'name' => __( 'Social', 'doolittle_vendors' ),
	) );

	$generalTab->createOption( array(
	    'name' => __( 'facebook', 'doolittle_vendors' ),
	    'id' => 'facebook',
	    'type' => 'text',
	    'desc' => __( 'input the link to your Facebook page here.', 'doolittle_vendors' ),
	) );

	$generalTab->createOption( array(
	    'name' => __( 'twitter', 'doolittle_vendors' ),
	    'id' => 'twitter',
	    'type' => 'text',
	    'desc' => __( 'input the link to your Twitter page here.', 'doolittle_vendors' ),
	) );

	$generalTab->createOption( array(
	    'name' => __( 'google Plus', 'doolittle_vendors' ),
	    'id' => 'goolePlus',
	    'type' => 'text',
	    'desc' => __( 'input the link to your Google Plus page here.', 'doolittle_vendors' ),
	) );
	
	$generalTab->createOption( array(
	    'type' => 'save',
	) );
	
	
	$footerTab = $adminPanel->createTab( array(
	    'name' => __( 'Footer', 'doolittle_vendors' ),
	) );
	
	$footerTab->createOption( array(
		'name' => __( 'Copyright Text', 'doolittle_vendors' ),
		'id' => 'copyright',
		'type' => 'text',
		'desc' => __( 'Enter your copyright text here (sample only)', 'doolittle_vendors' ),
	) );
	
	$footerTab->createOption( array(
	    'type' => 'save',
	) );

	$HeaderTab = $adminPanel->createTab( array(
	    'name' => __( 'Header', 'doolittle_vendors' ),
	) );
	
	$HeaderTab->createOption( array(
		'name' => __( 'Phone Number', 'doolittle_vendors' ),
		'id' => 'phoneNumber',
		'type' => 'text',
		'desc' => __( 'Enter your phone number here (sample only)', 'doolittle_vendors' ),
	) );
	
	$HeaderTab->createOption( array(
	    'type' => 'save',
	) );
}