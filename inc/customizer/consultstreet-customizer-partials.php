<?php
/**
 * ConsultStreet Customizer partials.
 *
 * @package consultstreet
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'ConsultStreet_Customizer_Partials' ) ) {

	/**
	 * Customizer Partials.
	 */
	class ConsultStreet_Customizer_Partials {

		/**
		 * Instance.
		 *
		 * @access private
		 * @var object
		 */
		private static $instance;

		/**
		 * Initiator.
		 */
		public static function get_instance() {
			if ( ! isset( self::$instance ) ) {
				self::$instance = new self();
			}

			return self::$instance;
		}

		// site title
		public static function customize_partial_blogname() {
			return get_bloginfo( 'name' );
		}

		// Site tagline
		public static function customize_partial_blogdescription() {
			return get_bloginfo( 'description' );
		}
		
		// service title
		public static function customize_partial_consultstreet_service_area_title() {
			return get_theme_mod( 'consultstreet_service_area_title' );
		}
		
		// service description
		public static function customize_partial_consultstreet_service_area_des() {
			return get_theme_mod( 'consultstreet_service_area_des' );
		}
		
		// project title
		public static function customize_partial_consultstreet_project_area_title() {
			return get_theme_mod( 'consultstreet_project_area_title' );
		}
		
		// project description
		public static function customize_partial_consultstreet_project_area_des() {
			return get_theme_mod( 'consultstreet_project_area_des' );
		}
		
	    // testimonial title
		public static function customize_partial_consultstreet_testimonial_area_title() {
			return get_theme_mod( 'consultstreet_testimonial_area_title' );
		}
		
		// testimonial description
		public static function customize_partial_consultstreet_testimonial_area_des() {
			return get_theme_mod( 'consultstreet_testimonial_area_des' );
		}
		
		// call to action title
		public static function customize_partial_consultstreet_cta_area_title() {
			return get_theme_mod( 'consultstreet_cta_area_title' );
		}
		
		// call to action subtitle
		public static function customize_partial_consultstreet_cta_area_subtitle() {
			return get_theme_mod( 'consultstreet_cta_area_subtitle' );
		}
		
		// call to action description
		public static function customize_partial_consultstreet_cta_area_des() {
			return get_theme_mod( 'consultstreet_cta_area_des' );
		}
		
	    // call to action button text
		public static function customize_partial_consultstreet_cta_button_text() {
			return get_theme_mod( 'consultstreet_cta_button_text' );
		}
		
	    // blog title
		public static function customize_partial_consultstreet_blog_area_title() {
			return get_theme_mod( 'consultstreet_blog_area_title' );
		}
		
		// blog description
		public static function customize_partial_consultstreet_blog_area_des() {
			return get_theme_mod( 'consultstreet_blog_area_des' );
		}

		// footer copyright text
		public static function customize_partial_consultstreet_footer_copright_text() {
			return get_theme_mod( 'consultstreet_footer_copright_text' );
		}

	}
}

ConsultStreet_Customizer_Partials::get_instance();
