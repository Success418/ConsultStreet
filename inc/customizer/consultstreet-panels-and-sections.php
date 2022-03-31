<?php
/**
 * Register customizer panels and sections.
 *
 * @package consultstreet
 */

/* Theme Settings. */
 
$wp_customize->add_panel( new ConsultStreet_Customize_Panel( $wp_customize, 'consultstreet_theme_settings', array(
	'priority'   => 28,
	'title'      => esc_html__( 'Theme Options', 'consultstreet' ),
	'capabitity' => 'edit_theme_options',
) ) );
	

// Section: Menu.
	
	$wp_customize->add_section( new ConsultStreet_Customize_Section( $wp_customize, 'consultstreet_theme_menu_bar', array(
		'title'    => esc_html__( 'Menu', 'consultstreet' ),
		'panel'    => 'consultstreet_theme_settings',
		'priority' => 20,
	) ) );


// Section: Blog.

	$wp_customize->add_section( new ConsultStreet_Customize_Section( $wp_customize, 'consultstreet_theme_blog_settings', array(
		'title'    => esc_html__( 'Blog', 'consultstreet' ),
		'panel'    => 'consultstreet_theme_settings',
		'priority' => 30,
	) ) );
	
		$wp_customize->add_section( new ConsultStreet_Customize_Section( $wp_customize, 'consultstreet_blog_general', array(
			'title'    => esc_html__( 'General', 'consultstreet' ),
			'panel'    => 'consultstreet_theme_settings',
			'section'  => 'consultstreet_theme_blog_settings',
			'priority' => 10,
		) ) );


// Section: Page Header.
	
	$wp_customize->add_section( new ConsultStreet_Customize_Section( $wp_customize, 'consultstreet_theme_page_header', array(
		'title'    => esc_html__( 'Page Header', 'consultstreet' ),
		'panel'    => 'consultstreet_theme_settings',
		'priority' => 40,
	) ) );


// Section: Footer.

	$wp_customize->add_section( new ConsultStreet_Customize_Section( $wp_customize, 'consultstreet_theme_footer', array(
		'title'    => esc_html__( 'Footer', 'consultstreet' ),
		'panel'    => 'consultstreet_theme_settings',
		'priority' => 50,
	) ) );
	
		$wp_customize->add_section( new ConsultStreet_Customize_Section( $wp_customize, 'consultstreet_footer_widgets', array(
			'title'    => esc_html__( 'Footer Widgets', 'consultstreet' ),
			'panel'    => 'consultstreet_theme_settings',
			'section'  => 'consultstreet_theme_footer',
			'priority' => 10,
		) ) );
		
		$wp_customize->add_section( new ConsultStreet_Customize_Section( $wp_customize, 'consultstreet_footer_copyright', array(
			'title'    => esc_html__( 'Footer Copyright', 'consultstreet' ),
			'panel'    => 'consultstreet_theme_settings',
			'section'  => 'consultstreet_theme_footer',
			'priority' => 20,
		) ) );

/**
 * Panel: Typography.
 */
$wp_customize->add_panel( new ConsultStreet_Customize_Panel( $wp_customize, 'consultstreet_theme_typography', array(
	'priority'   => 32,
	'title'      => esc_html__( 'Typography', 'consultstreet' ),
	'capabitity' => 'edit_theme_options',
) ) );

    // Section: Typography > Base typography.
	$wp_customize->add_section( new ConsultStreet_Customize_Section( $wp_customize, 'consultstreet_enable_disable_typography', array(
		'title'    => esc_html__( 'Enable Typography', 'consultstreet' ),
		'panel'    => 'consultstreet_theme_typography',
		'priority' => 5,
	) ) );

	// Section: Typography > Base typography.
	$wp_customize->add_section( new ConsultStreet_Customize_Section( $wp_customize, 'consultstreet_base_typography', array(
		'title'    => esc_html__( 'Base Typography', 'consultstreet' ),
		'panel'    => 'consultstreet_theme_typography',
		'priority' => 10,
	) ) );

	// Section: Typography > Headings ( h1 - h6 ) Typography.
	$wp_customize->add_section( new ConsultStreet_Customize_Section( $wp_customize, 'consultstreet_headings1_typography', array(
		'title'    => esc_html__( 'Headings H1', 'consultstreet' ),
		'panel'    => 'consultstreet_theme_typography',
		'priority' => 70,
	) ) );
	
	$wp_customize->add_section( new ConsultStreet_Customize_Section( $wp_customize, 'consultstreet_headings2_typography', array(
		'title'    => esc_html__( 'Headings H2', 'consultstreet' ),
		'panel'    => 'consultstreet_theme_typography',
		'priority' => 80,
	) ) );
	
	$wp_customize->add_section( new ConsultStreet_Customize_Section( $wp_customize, 'consultstreet_headings3_typography', array(
		'title'    => esc_html__( 'Headings H3', 'consultstreet' ),
		'panel'    => 'consultstreet_theme_typography',
		'priority' => 90,
	) ) );
	
	$wp_customize->add_section( new ConsultStreet_Customize_Section( $wp_customize, 'consultstreet_headings4_typography', array(
		'title'    => esc_html__( 'Headings H4', 'consultstreet' ),
		'panel'    => 'consultstreet_theme_typography',
		'priority' => 100,
	) ) );
	
	$wp_customize->add_section( new ConsultStreet_Customize_Section( $wp_customize, 'consultstreet_headings5_typography', array(
		'title'    => esc_html__( 'Headings H5', 'consultstreet' ),
		'panel'    => 'consultstreet_theme_typography',
		'priority' => 110,
	) ) );

    $wp_customize->add_section( new ConsultStreet_Customize_Section( $wp_customize, 'consultstreet_headings6_typography', array(
		'title'    => esc_html__( 'Headings H6', 'consultstreet' ),
		'panel'    => 'consultstreet_theme_typography',
		'priority' => 120,
	) ) );