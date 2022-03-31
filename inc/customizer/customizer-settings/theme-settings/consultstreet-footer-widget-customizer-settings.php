<?php
/**
 * Footer widgets.
 *
 * @package     consultstreet
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'ConsultStreet_Customize_Footer_Widget_Option' ) ) :

	/**
	 * Option: Footer widget.
	 */
	class ConsultStreet_Customize_Footer_Widget_Option extends ConsultStreet_Customize_Base_Option {

		public function elements() {

			return array(

				'consultstreet_footer_widgets_enabled'                  => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ConsultStreet_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 10,
						'label'    => esc_html__( 'Footer Widget Area Enable/Disable', 'consultstreet' ),
						'section'  => 'consultstreet_footer_widgets',
					),
				),
				
								
				'consultstreet_footer_container_size'     => array(
						'setting' => array(
							'default'           => 'container-full',
							'sanitize_callback' => array( 'ConsultStreet_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio',
							'priority'        => 25,
							'is_default_type' => true,
							'label'           => esc_html__( 'Container Width', 'consultstreet' ),
							'section'         => 'consultstreet_footer_widgets',
							'choices'         => array(
								'container'  => esc_html__( 'Container', 'consultstreet' ),
								'container-full' => esc_html__( 'Container Full', 'consultstreet' ),
							),
						),
				),	
				
				

			);

		}

	}

	new ConsultStreet_Customize_Footer_Widget_Option();

endif;
