<?php
/**
 * MenuBar.
 *
 * @package consultstreet
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'ConsultStreet_Customize_Menu_Bar_Option' ) ) :

	/**
	 * Menu option.
	 */
	class ConsultStreet_Customize_Menu_Bar_Option extends ConsultStreet_Customize_Base_Option {

		public function elements() {

			return array(
			
			    'consultstreet_main_menu_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
				   		'priority'        => 1,
						'label'   => esc_html__( 'Menu Settings', 'consultstreet' ),
						'section' => 'consultstreet_theme_menu_bar',
					),
				),


					'consultstreet_menu_style'     => array(
						'setting' => array(
							'default'           => 'sticky',
							'sanitize_callback' => array( 'ConsultStreet_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 5,
							'is_default_type' => true,
							'label'           => esc_html__( 'Menu Style', 'consultstreet' ),
							'section'         => 'consultstreet_theme_menu_bar',
							'choices'         => array(
								'sticky'  => esc_html__( 'Sticky', 'consultstreet' ),
								'static' => esc_html__( 'Static', 'consultstreet' ),
							),
						),
					),	
					
					
					'consultstreet_menu_container_size'     => array(
						'setting' => array(
							'default'           => 'container-full',
							'sanitize_callback' => array( 'ConsultStreet_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 7,
							'is_default_type' => true,
							'label'           => esc_html__( 'Container Width', 'consultstreet' ),
							'section'         => 'consultstreet_theme_menu_bar',
							'choices'         => array(
								'container'  => esc_html__( 'Container', 'consultstreet' ),
								'container-full' => esc_html__( 'Container Full', 'consultstreet' ),
							),
						),
			     	),

			);

		}

	}

	new ConsultStreet_Customize_Menu_Bar_Option();

endif;
