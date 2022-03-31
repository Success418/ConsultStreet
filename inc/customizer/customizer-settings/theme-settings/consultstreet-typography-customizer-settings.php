<?php
/**
 * Typography.
 * @package     consultstreet
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/*========================================== TYPOGRAPHY ==========================================*/
if ( ! class_exists( 'ConsultStreet_Customize_Theme_Typography_Option' ) ) :

	/**
	 * Theme Typography option.
	 */
	class ConsultStreet_Customize_Theme_Typography_Option extends ConsultStreet_Customize_Base_Option {

		public function elements() {

			return array(
			
		/* ---------- Enable/Disable TYPOGRAPHY -------------- */		
			
			    'consultstreet_typography_disabled'            => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'ConsultStreet_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Enable Typography', 'consultstreet' ),
						'section'  => 'consultstreet_enable_disable_typography',
					),
				),
            );	
			
		}

	}

	new ConsultStreet_Customize_Theme_Typography_Option();

endif;
