<?php
/**
 * Footer Copyright.
 *
 * @package     consultstreet
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'ConsultStreet_Customize_Footer_Copyright_Option' ) ) :

	/**
	 * Footer Copyright.
	 */
	class ConsultStreet_Customize_Footer_Copyright_Option extends ConsultStreet_Customize_Base_Option {

		public function elements() {

			return array(

				'consultstreet_footer_copright_enabled'                  => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'ConsultStreet_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 5,
						'label'    => esc_html__( 'Footer Copyright Enable/Disable', 'consultstreet' ),
						'section'  => 'consultstreet_footer_copyright',
					),
				),		
				
				
			);

		}

	}

	new ConsultStreet_Customize_Footer_Copyright_Option();

endif;
