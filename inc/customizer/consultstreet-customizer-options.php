<?php
/**
 * Extend default customizer section.
 *
 * @package consultstreet
 *
 * @see     WP_Customize_Section
 * @access  public
 */

require CONSULTSTREET_PARENT_INC_DIR . '/customizer/webfont.php';
require CONSULTSTREET_PARENT_INC_DIR . '/customizer/controls/code/consultstreet-customize-typography-control.php';
require CONSULTSTREET_PARENT_INC_DIR . '/customizer/controls/code/consultstreet-customize-plugin-control.php';
require CONSULTSTREET_PARENT_INC_DIR . '/customizer/controls/code/consultstreet-customize-category-control.php';
require CONSULTSTREET_PARENT_INC_DIR . '/customizer/customizer-repeater/functions.php';

function consultstreet_customizer_theme_settings( $wp_customize ){
	
	$active_callback    	= isset( $array['active_callback'] ) ? $array['active_callback'] : null;
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	
	$wp_customize->get_section( 'header_image' )->panel = 'consultstreet_theme_settings';
	$wp_customize->get_section( 'header_image' )->title    = __( 'Page Header', 'consultstreet' );
    $wp_customize->get_section( 'header_image' )->priority = 40;
	
	// Sticky Bar Logo
	$wp_customize->add_setting( 'consultstreet_sticky_bar_logo', array(
			'sanitize_callback' => 'esc_url_raw',
		)
	);
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'consultstreet_sticky_bar_logo',
     	array(
			'label'    => esc_html__( 'Set Sticky Bar Logo', 'consultstreet' ),
			'description'    => esc_html__( 'You can Upload the Standrad size of logo (210px*39px)', 'consultstreet' ),
			'section'  => 'consultstreet_theme_menu_bar',
			'settings' => 'consultstreet_sticky_bar_logo',
			'priority'        => 15,
		)
	));	
	
	
		$wp_customize->add_setting( 'consultstreet_typography_base_font_family',array(
            'sanitize_callback' => 'consultstreet_sanitize_select',		
			'capability'     => 'edit_theme_options', 
			'default' => 'Open Sans', 
		) );	
	    $wp_customize->add_control( new ConsultStreet_Customizer_Typography_Control( $wp_customize, 'consultstreet_typography_base_font_family', array(
			'label'   => esc_html__( 'Font Family', 'consultstreet' ),
			'section' => 'consultstreet_base_typography',
			'settings'   => 'consultstreet_typography_base_font_family',
			'priority' 			=> 10,
		) ) );

	    $wp_customize->add_setting( 'consultstreet_typography_base_font_size',
		array(
            'default' => '1rem',
			'sanitize_callback' => 'consultstreet_sanitize_text',
		));	
		$wp_customize->add_control( 'consultstreet_typography_base_font_size',
		array(
			'label'   => esc_html__( 'Font Size', 'consultstreet' ),
			'description'           => esc_html__( 'You can enter font-size in px or rem ', 'consultstreet' ),
			'section' => 'consultstreet_base_typography',
			'priority'        => 15,
			'type' => 'text',
		));	

        $wp_customize->add_setting( 'consultstreet_typography_h1_font_family',array(
			'sanitize_callback' => 'consultstreet_sanitize_select',
			'capability'     => 'edit_theme_options',
			'default' => 'Montserrat', 
		) );	
	    $wp_customize->add_control( new ConsultStreet_Customizer_Typography_Control( $wp_customize, 'consultstreet_typography_h1_font_family', array(
			'label'   => esc_html__( 'Font Family', 'consultstreet' ),
			'section' => 'consultstreet_headings1_typography',
			'settings'   => 'consultstreet_typography_h1_font_family',
			'priority' 			=> 10,
		) ) );
		
		
		$wp_customize->add_setting( 'consultstreet_typography_h2_font_family',array(
			'sanitize_callback' => 'consultstreet_sanitize_select',
			'capability'     => 'edit_theme_options', 
			'default' => 'Montserrat', 
		) );	
	    $wp_customize->add_control( new ConsultStreet_Customizer_Typography_Control( $wp_customize, 'consultstreet_typography_h2_font_family', array(
			'label'   => esc_html__( 'Font Family', 'consultstreet' ),
			'section' => 'consultstreet_headings2_typography',
			'settings'   => 'consultstreet_typography_h2_font_family',
			'priority' 			=> 10,
		) ) );
		
		$wp_customize->add_setting( 'consultstreet_typography_h3_font_family',array(
			'sanitize_callback' => 'consultstreet_sanitize_select',
			'capability'     => 'edit_theme_options', 
			'default' => 'Montserrat',
		) );	
	    $wp_customize->add_control( new ConsultStreet_Customizer_Typography_Control( $wp_customize, 'consultstreet_typography_h3_font_family', array(
			'label'   => esc_html__( 'Font Family', 'consultstreet' ),
			'section' => 'consultstreet_headings3_typography',
			'settings'   => 'consultstreet_typography_h3_font_family',
			'priority' 			=> 10,
		) ) );
		
		$wp_customize->add_setting( 'consultstreet_typography_h4_font_family',array(
            'sanitize_callback' => 'consultstreet_sanitize_select',
			'capability'     => 'edit_theme_options',
			'default' => 'Montserrat', 
		) );	
	    $wp_customize->add_control( new ConsultStreet_Customizer_Typography_Control( $wp_customize, 'consultstreet_typography_h4_font_family', array(
			'label'   => esc_html__( 'Font Family', 'consultstreet' ),
			'section' => 'consultstreet_headings4_typography',
			'settings'   => 'consultstreet_typography_h4_font_family',
			'priority' 			=> 10,
		) ) );	

		$wp_customize->add_setting( 'consultstreet_typography_h5_font_family',array( 
		   'sanitize_callback' => 'consultstreet_sanitize_select',
		   'capability'     => 'edit_theme_options',  
		   'default' => 'Montserrat',
		) );	
	    $wp_customize->add_control( new ConsultStreet_Customizer_Typography_Control( $wp_customize, 'consultstreet_typography_h5_font_family', array(
			'label'   => esc_html__( 'Font Family', 'consultstreet' ),
			'section' => 'consultstreet_headings5_typography',
			'settings'   => 'consultstreet_typography_h5_font_family',
			'priority' 			=> 10,
		) ) );				

        $wp_customize->add_setting( 'consultstreet_typography_h6_font_family',array( 
			'sanitize_callback' => 'consultstreet_sanitize_select',
			'capability'     => 'edit_theme_options', 
			'default' => 'Montserrat',
		) );	
	    $wp_customize->add_control( new ConsultStreet_Customizer_Typography_Control( $wp_customize, 'consultstreet_typography_h6_font_family', array(
			'label'   => esc_html__( 'Font Family', 'consultstreet' ),
			'section' => 'consultstreet_headings6_typography',
			'settings'   => 'consultstreet_typography_h6_font_family',
			'priority' 			=> 10,
		) ) );
		
		// Footer copyright
		
		$wp_customize->add_setting(
			'consultstreet_footer_copright_text',
			array(
				'sanitize_callback' =>  'consultstreet_sanitize_text',
				'default' => __('Copyright &copy; 2020 | Powered by <a href="//wordpress.org/">WordPress</a> <span class="sep"> | </span> ConsultStreet theme by <a target="_blank" href="//themearile.com/">ThemeArile</a>', 'consultstreet'),
				'transport'         => $selective_refresh,
			)	
		);
		$wp_customize->add_control('consultstreet_footer_copright_text', array(
				'label' => esc_html__('Footer Copyright','consultstreet'),
				'section' => 'consultstreet_footer_copyright',
				'priority'        => 10,
				'type'    =>  'textarea'
		));
		
}
add_action( 'customize_register', 'consultstreet_customizer_theme_settings' );


add_action( 'customize_register', 'consultstreet_recommended_plugin_section' );
function consultstreet_recommended_plugin_section( $manager ) {
	// Register custom section types.
	$manager->register_section_type( 'ConsultStreet_Customize_Recommended_Plugin_Section' );
	// Register sections.
	$manager->add_section(
		new ConsultStreet_Customize_Recommended_Plugin_Section(
			$manager,
			'consultstreet_upgrade_to_pro_option',
			array(
				'title'    => esc_html__( 'Ready for more?', 'consultstreet' ),
                'priority' => 500, 
				'plugin_text' => esc_html__( 'Get ConsultStreet Pro', 'consultstreet' ),
				'plugin_url'  => '//themearile.com/consultstreet-pro-theme/'
			)
		)
	);	
}

/*
 *  Customizer Notifications
 */

require get_template_directory() . '/inc/customizer/customizer-notice/consultstreet-customizer-notify.php';

$consultstreet_config_customizer = array(
    'recommended_plugins' => array( 
        'arile-extra' => array(
            'recommended' => true,
            'description' => sprintf( 
                /* translators: %s: plugin name */
                esc_html__( 'If you want to show all the features and business sections of the FrontPage. please install and activate %s plugin', 'consultstreet' ), '<strong>Arile Extra</strong>' 
            ),
        ),
    ),
	'recommended_actions'       => array(),
	'recommended_actions_title' => esc_html__( 'Recommended Actions', 'consultstreet' ),
	'recommended_plugins_title' => esc_html__( 'Recommended Plugin', 'consultstreet' ),
	'install_button_label'      => esc_html__( 'Install and Activate', 'consultstreet' ),
	'activate_button_label'     => esc_html__( 'Activate', 'consultstreet' ),
	'consultstreet_deactivate_button_label'   => esc_html__( 'Deactivate', 'consultstreet' ),
);
ConsultStreet_Customizer_Notify::init( apply_filters( 'consultstreet_customizer_notify_array', $consultstreet_config_customizer ) );