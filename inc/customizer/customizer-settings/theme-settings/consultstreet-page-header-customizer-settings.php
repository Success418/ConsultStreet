<?php
/**
 * Page Header Settings.
 *
 * @package consultstreet
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
* Page Header Settings.
*/

if ( ! class_exists( 'ConsultStreet_Customize_Page_Header_Option' ) ) :

	class ConsultStreet_Customize_Page_Header_Option extends ConsultStreet_Customize_Base_Option {
		

		public function elements() {
			

			return array(
			
			    'consultstreet_page_header_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'Page Header', 'consultstreet' ),
						'section' => 'header_image',
					),
				),
			
				'consultstreet_page_header_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ConsultStreet_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 5,
						'label'    => esc_html__( 'Page Header Enable/Disable', 'consultstreet' ),
						'section'  => 'header_image',
					),
				),
				
								
				'consultstreet_page_header_background_color' => array(
					'setting' => array(
						'default'           => '',
						'sanitize_callback' => array( 'ConsultStreet_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 7,
						'label'           => esc_html__( 'Background color', 'consultstreet' ),
						'section'         => 'header_image',
						'choices'         => array(
							'alpha' => true,
						),
					),
				),
			  

			);

		}

	}

	new ConsultStreet_Customize_Page_Header_Option();

endif;
