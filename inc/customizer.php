<?php
/**
 * Mosaic_Theme Theme Customizer
 *
 * @package Mosaic_Theme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function mosaic_theme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';


	$wp_customize->add_setting(
	    'sidebar_subtitle',
	    array(
	        'default' => 'Welcome!',
	        'sanitize_callback' => 'mosaic_theme_sanitize_text',
	    )
	);

	$wp_customize->add_control(
	    'sidebar_subtitle',
	    array(
	        'label' => 'Sidebar Subtitle',
	        'section' => 'title_tagline',
	    )
	);
}
add_action( 'customize_register', 'mosaic_theme_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function mosaic_theme_customize_preview_js() {
	wp_enqueue_script( 'mosaic_theme_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'mosaic_theme_customize_preview_js' );



/**
 * Sanitize inpue before saving
 */
function mosaic_theme_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}