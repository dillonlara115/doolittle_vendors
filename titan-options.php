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
	    'name' => __( 'Headings Font', 'doolittle_vendors' ),
	    'id' => 'headings_font',
	    'type' => 'font',
	    'desc' => __( 'Select the font for all headings in the site', 'doolittle_vendors' ),
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
	        'font-family' => 'Fauna One',
	    ),
		'css' => 'h1, h2, h3, h4, h5, h6 { value }',
	) );


	$section->createOption( array(
	    'name' => __( 'Button Border Radius', 'doolittle_vendors' ),
	    'id' => 'button_radius',
	    'type' => 'radio',
	    'desc' => __( 'Select what border-radius you want for your sites buttons', 'doolittle_vendors' ),
	    'default' => '0',
		'options' => array(
	        '0' => 'none',
	        '2px' => '2px',
	        '5px' => '5px',
    	),
		'css' => '.button-primary, .button-secondary, .button-tertiary { border-radius: value }',
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
	    'name' => __( 'General', 'doolittle_vendors' ),
	) );

	$generalTab->createOption( array(
	    'name' => __( 'Custom Javascript Code', 'doolittle_vendors' ),
	    'id' => 'custom_js',
	    'type' => 'code',
	    'desc' => __( 'If you want to add some additional Javascript code into your site, add them here and it will be included in the frontend header. No need to add <code>script</code> tags', 'doolittle_vendors' ),
	    'lang' => 'javascript',
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
		'name' => __( 'Header Text', 'doolittle_vendors' ),
		'id' => 'headertext',
		'type' => 'text',
		'desc' => __( 'Enter your header text here (sample only)', 'doolittle_vendors' ),
	) );
	
	$HeaderTab->createOption( array(
	    'type' => 'save',
	) );
}