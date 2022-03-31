<?php
/**
 * Override default customizer options.
 *
 * @package consultstreet
 */

// Settings.
$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

if ( isset( $wp_customize->selective_refresh ) ) {
	
	// site title
	$wp_customize->selective_refresh->add_partial(
		'blogname',
		array(
			'selector'        => '.site-title a',
			'render_callback' => array( 'ConsultStreet_Customizer_Partials', 'customize_partial_blogname' ),
		)
	);

    // site tagline
	$wp_customize->selective_refresh->add_partial(
		'blogdescription',
		array(
			'selector'        => '.site-description',
			'render_callback' => array( 'ConsultStreet_Customizer_Partials', 'customize_partial_blogdescription' ),
		)
	);
	
	// main slider
	$wp_customize->selective_refresh->add_partial(
		'consultstreet_main_slider_content',
		array(
			'selector'        => '.theme-main-slider .theme-slider-content',
		)
	);
	
	// service title
	$wp_customize->selective_refresh->add_partial(
		'consultstreet_service_area_title',
		array(
			'selector'        => '.theme-services .theme-section-title',
			'render_callback' => array( 'ConsultStreet_Customizer_Partials', 'customize_partial_consultstreet_service_area_title' ),
		)
	);
	
	// service title
	$wp_customize->selective_refresh->add_partial(
		'consultstreet_service_area_des',
		array(
			'selector'        => '.theme-services .theme-section-subtitle',
			'render_callback' => array( 'ConsultStreet_Customizer_Partials', 'customize_partial_consultstreet_service_area_des' ),
		)
	);
	
	// service content
	$wp_customize->selective_refresh->add_partial(
		'consultstreet_service_content',
		array(
			'selector'        => '.theme-services .row.theme-services-content',
		)
	);
	
	// project title
	$wp_customize->selective_refresh->add_partial(
		'consultstreet_project_area_title',
		array(
			'selector'        => '#theme-project .theme-section-title',
			'render_callback' => array( 'ConsultStreet_Customizer_Partials', 'customize_partial_consultstreet_project_area_title' ),
		)
	);
	
	// project description
	$wp_customize->selective_refresh->add_partial(
		'consultstreet_project_area_des',
		array(
			'selector'        => '#theme-project .theme-section-subtitle',
			'render_callback' => array( 'ConsultStreet_Customizer_Partials', 'customize_partial_consultstreet_project_area_des' ),
		)
	);
	
	// testimonial title
	$wp_customize->selective_refresh->add_partial(
		'consultstreet_testimonial_area_title',
		array(
			'selector'        => '.theme-testimonial .theme-section-title',
			'render_callback' => array( 'ConsultStreet_Customizer_Partials', 'customize_partial_consultstreet_testimonial_area_title' ),
		)
	);
	
	// testimonial description
	$wp_customize->selective_refresh->add_partial(
		'consultstreet_testimonial_area_des',
		array(
			'selector'        => '.theme-testimonial .theme-section-subtitle',
			'render_callback' => array( 'ConsultStreet_Customizer_Partials', 'customize_partial_consultstreet_testimonial_area_des' ),
		)
	);
	
    // testimonial content
	$wp_customize->selective_refresh->add_partial(
		'consultstreet_testimonial_content',
		array(
			'selector'        => '.theme-testimonial .row.theme-testimonial-content',
		)
	);
	
	// call to action title
	$wp_customize->selective_refresh->add_partial(
		'consultstreet_cta_area_title',
		array(
			'selector'        => '.theme-cta .cta-block h5',
			'render_callback' => array( 'ConsultStreet_Customizer_Partials', 'customize_partial_consultstreet_cta_area_title' ),
		)
	);
	
	// call to action subtitle
	$wp_customize->selective_refresh->add_partial(
		'consultstreet_cta_area_subtitle',
		array(
			'selector'        => '.theme-cta .cta-block h2',
			'render_callback' => array( 'ConsultStreet_Customizer_Partials', 'customize_partial_consultstreet_cta_area_subtitle' ),
		)
	);
	
	// call to action description
	$wp_customize->selective_refresh->add_partial(
		'consultstreet_cta_area_des',
		array(
			'selector'        => '.theme-cta .cta-block p',
			'render_callback' => array( 'ConsultStreet_Customizer_Partials', 'customize_partial_consultstreet_cta_area_des' ),
		)
	);
	
	// call to action button text
	$wp_customize->selective_refresh->add_partial(
		'consultstreet_cta_button_text',
		array(
			'selector'        => '.theme-cta .mx-auto a',
			'render_callback' => array( 'ConsultStreet_Customizer_Partials', 'customize_partial_consultstreet_cta_button_text' ),
		)
	);
	
	// blog title
	$wp_customize->selective_refresh->add_partial(
		'consultstreet_blog_area_title',
		array(
			'selector'        => '.theme-blog .theme-section-title',
			'render_callback' => array( 'ConsultStreet_Customizer_Partials', 'customize_partial_consultstreet_blog_area_title' ),
		)
	);
	
	// blog description
	$wp_customize->selective_refresh->add_partial(
		'consultstreet_blog_area_des',
		array(
			'selector'        => '.theme-blog .theme-section-subtitle',
			'render_callback' => array( 'ConsultStreet_Customizer_Partials', 'customize_partial_consultstreet_blog_area_des' ),
		)
	);
	
	// footer copyright text
	$wp_customize->selective_refresh->add_partial(
		'consultstreet_footer_copright_text',
		array(
			'selector'        => '.site-footer .site-info',
			'render_callback' => array( 'ConsultStreet_Customizer_Partials', 'customize_partial_consultstreet_footer_copright_text' ),
		)
	);	
}