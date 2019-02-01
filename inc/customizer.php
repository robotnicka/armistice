<?php
/**
 * armistice Theme Customizer
 *
 * @package armistice
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

 // Implementing custom settings in WP Customize
function armistice_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'armistice_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'armistice_customize_partial_blogdescription',
		) );
	}

	$wp_customize->add_section( 'armistice_date_and_location_info' , array(
	    'title'      => __('Date and Location Info','mytheme'),
	    'priority'   => 30,
	) );
	
	$wp_customize->add_section( 'armistice_media_highlighter' , array(
	    'title'      => __('Media Highlight','mytheme'),
	    'priority'   => 30,
	) );

	$wp_customize->add_setting( 'armistice_date_text_1', array(
	  'capability' => 'edit_theme_options',
	  'default' => 'e.g. Nov 15',
	  'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'armistice_date_text_1', array(
	  'type' => 'text',
	  'section' => 'armistice_date_and_location_info',
	  'label' => __( 'Event Date' ),
	  'description' => __( 'Displays Crowley Chronicle date on home page.' ),
	) );

	$wp_customize->add_setting( 'armistice_location_text_1', array(
	  'capability' => 'edit_theme_options',
	  'default' => 'e.g. New Orleans',
	  'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'armistice_location_text_1', array(
	  'type' => 'text',
	  'section' => 'armistice_date_and_location_info',
	  'label' => __( 'Event Location' ),
	  'description' => __( 'Displays Crowley Chronicle event location on home page.' ),
	) );
	
	$wp_customize->add_setting( 'armistice_date_text_2', array(
	  'capability' => 'edit_theme_options',
	  'default' => 'e.g. Nov 15',
	  'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'armistice_date_text_2', array(
	  'type' => 'text',
	  'section' => 'armistice_date_and_location_info',
	  'label' => __( 'Event Date' ),
	  'description' => __( 'Displays Kingsford Chronicle date on home page.' ),
	) );

	$wp_customize->add_setting( 'armistice_location_text_2', array(
	  'capability' => 'edit_theme_options',
	  'default' => 'e.g. New Orleans',
	  'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'armistice_location_text_2', array(
	  'type' => 'text',
	  'section' => 'armistice_date_and_location_info',
	  'label' => __( 'Event Location' ),
	  'description' => __( 'Displays Kingsford Chronicle event location on home page.' ),
	) );
	
	$wp_customize->add_setting( 'armistice_media_highlight', array(
	  'capability' => 'edit_theme_options',
	  'default' => '',
	  'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'armistice_media_highlight', array(
	  'type' => 'text',
	  'section' => 'armistice_media_highlighter',
	  'label' => __( 'Media Highlight' ),
	  'description' => __( 'Displays a highlighted piece of text on home page.' ),
	) );
	
	$wp_customize->add_setting( 'armistice_media_highlight_link', array(
	  'capability' => 'edit_theme_options',
	  'default' => '',
	  'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'armistice_media_highlight_link', array(
	  'type' => 'text',
	  'section' => 'armistice_media_highlighter',
	  'label' => __( 'Media Highlight Link' ),
	  'description' => __( 'Displays a highlighted piece of text on home page.' ),
	) );
	
	$wp_customize->add_setting( 'armistice_date_text_2', array(
	  'capability' => 'edit_theme_options',
	  'default' => 'e.g. Nov 15',
	  'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'armistice_date_text_2', array(
	  'type' => 'text',
	  'section' => 'armistice_date_and_location_info',
	  'label' => __( 'Event Date' ),
	  'description' => __( 'Displays date on home page.' ),
	) );

	$wp_customize->add_setting( 'armistice_location_text_2', array(
	  'capability' => 'edit_theme_options',
	  'default' => 'e.g. New Orleans',
	  'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'armistice_location_text_2', array(
	  'type' => 'text',
	  'section' => 'armistice_date_and_location_info',
	  'label' => __( 'Event Location' ),
	  'description' => __( 'Displays event location on home page.' ),
	) );
	
	$wp_customize->add_setting( 'armistice_media_highlight', array(
	  'capability' => 'edit_theme_options',
	  'default' => '',
	  'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'armistice_media_highlight', array(
	  'type' => 'text',
	  'section' => 'armistice_media_highlighter',
	  'label' => __( 'Media Highlight' ),
	  'description' => __( 'Displays a highlighted piece of text on home page.' ),
	) );
	
	$wp_customize->add_setting( 'armistice_media_highlight_link', array(
	  'capability' => 'edit_theme_options',
	  'default' => '',
	  'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'armistice_media_highlight_link', array(
	  'type' => 'text',
	  'section' => 'armistice_media_highlighter',
	  'label' => __( 'Media Highlight Link' ),
	  'description' => __( 'Displays a highlighted piece of text on home page.' ),
	) );
}

add_action( 'customize_register', 'armistice_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function armistice_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function armistice_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function armistice_customize_preview_js() {
	wp_enqueue_script( 'armistice-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'armistice_customize_preview_js' );
