<?php
/** 
 * consultstreet Customizer Class
 *
 * @package consultstreet
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'ConsultStreet_Customizer' ) ) :

	// ConsultStreet Customizer class
	
	class ConsultStreet_Customizer {
		
		// Constructor customizer
		public function __construct() {

			add_action( 'customize_register', array( $this, 'consultstreet_customizer_panel_control' ) );
			add_action( 'customize_register', array( $this, 'consultstreet_customizer_register' ) );
			add_action( 'customize_register', array( $this, 'consultstreet_customizer_selective_refresh' ) );
			add_action( 'customize_preview_init', array( $this, 'consultstreet_customizer_preview_js' ) );
			add_action( 'after_setup_theme', array( $this, 'consultstreet_customizer_settings' ) );

		}

		// Register custom controls
		public function consultstreet_customizer_panel_control( $wp_customize ) {

			// Controls path.
			$control_dir = CONSULTSTREET_PARENT_INC_DIR . '/customizer/controls';
			$setting_dir = CONSULTSTREET_PARENT_INC_DIR . '/customizer/settings';

			// Load customizer options extending classes.
			require CONSULTSTREET_PARENT_CUSTOMIZER_DIR . '/custom-customizer/consultstreet-customizer-panel.php';
			require CONSULTSTREET_PARENT_CUSTOMIZER_DIR . '/custom-customizer/consultstreet-customizer-section.php';

			// Register extended classes.
			$wp_customize->register_panel_type( 'ConsultStreet_Customize_Panel' );
			$wp_customize->register_section_type( 'ConsultStreet_Customize_Section' );

			// Load base class for controls.
			require_once $control_dir . '/code/consultstreet-customize-base-control.php';
			// Load custom control classes.
			require_once $control_dir . '/code/consultstreet-customize-color-control.php';
			require_once $control_dir . '/code/consultstreet-customize-heading-control.php';
			require_once $control_dir . '/code/consultstreet-customize-radio-image-control.php';
			require_once $control_dir . '/code/consultstreet-customize-radio-buttonset-control.php';
			require_once $control_dir . '/code/consultstreet-customize-sortable-control.php';
			require_once $control_dir . '/code/consultstreet-customize-toggle-control.php';
			require_once $control_dir . '/code/consultstreet-customize-upgrade-control.php';

			// Register JS-rendered control types.
			$wp_customize->register_control_type( 'ConsultStreet_Customize_Color_Control' );
			$wp_customize->register_control_type( 'ConsultStreet_Customize_Heading_Control' );
			$wp_customize->register_control_type( 'ConsultStreet_Customize_Radio_Image_Control' );
			$wp_customize->register_control_type( 'ConsultStreet_Customize_Radio_Buttonset_Control' );
			$wp_customize->register_control_type( 'ConsultStreet_Customize_Sortable_Control' );
			$wp_customize->register_control_type( 'ConsultStreet_Customize_Toggle_Control' );
			$wp_customize->register_control_type( 'ConsultStreet_Customize_Upgrade_Control' );

		}

		// Customizer selective refresh.
		public function consultstreet_customizer_selective_refresh() {

			require_once CONSULTSTREET_PARENT_INC_DIR . '/customizer/consultstreet-customizer-sanitize.php';
			require_once CONSULTSTREET_PARENT_INC_DIR . '/customizer/consultstreet-customizer-partials.php';

		}


		// Add postMessage support for site title and description for the Theme Customizer.

		public function consultstreet_customizer_register( $wp_customize ) {

			// Customizer selective
			require CONSULTSTREET_PARENT_CUSTOMIZER_DIR . '/consultstreet-customizer-selective.php';

			// Register panels and sections.
			require CONSULTSTREET_PARENT_CUSTOMIZER_DIR . '/consultstreet-panels-and-sections.php';

		}

        // Theme Customizer preview reload changes asynchronously.
		public function consultstreet_customizer_preview_js() {

			wp_enqueue_script( 'consultstreet-customizer', CONSULTSTREET_PARENT_INC_URI . '/customizer/assets/js/customizer.js', array( 'customize-preview' ), CONSULTSTREET_THEME_VERSION, true );

		}

		// Include customizer customizer settings.
	
		public function consultstreet_customizer_settings() {
			
			// Base class.
			require CONSULTSTREET_PARENT_CUSTOMIZER_DIR . '/customizer-settings/consultstreet-customize-base-customizer-settings.php';
			// Menu.
			require CONSULTSTREET_PARENT_CUSTOMIZER_DIR . '/customizer-settings/theme-settings/consultstreet-menu-bar-customizer-settings.php';
			// Page Header.
			require CONSULTSTREET_PARENT_CUSTOMIZER_DIR . '/customizer-settings/theme-settings/consultstreet-page-header-customizer-settings.php';
			// Blog.
			require CONSULTSTREET_PARENT_CUSTOMIZER_DIR . '/customizer-settings/theme-settings/consultstreet-blog-general-customizer-settings.php';
			// Footer.
			require CONSULTSTREET_PARENT_CUSTOMIZER_DIR . '/customizer-settings/theme-settings/consultstreet-footer-copyright-customizer-settings.php';
			require CONSULTSTREET_PARENT_CUSTOMIZER_DIR . '/customizer-settings/theme-settings/consultstreet-footer-widget-customizer-settings.php';
			// Typography.
			require CONSULTSTREET_PARENT_CUSTOMIZER_DIR . '/customizer-settings/theme-settings/consultstreet-typography-customizer-settings.php';

		}
	

	}
endif;

new ConsultStreet_Customizer();