<?php

class ConsultStreet_Customizer_Notify {

	private $recommended_actions;

	
	private $recommended_plugins;

	
	private static $instance;

	
	private $recommended_actions_title;

	
	private $recommended_plugins_title;

	
	private $dismiss_button;

	
	private $install_button_label;

	
	private $activate_button_label;

	
	private $consultstreet_deactivate_button_label;

	
	public static function init( $config ) {
		if ( ! isset( self::$instance ) && ! ( self::$instance instanceof ConsultStreet_Customizer_Notify ) ) {
			self::$instance = new ConsultStreet_Customizer_Notify;
			if ( ! empty( $config ) && is_array( $config ) ) {
				self::$instance->config = $config;
				self::$instance->setup_config();
				self::$instance->setup_actions();
			}
		}

	}

	
	public function setup_config() {

		global $consultstreet_customizer_notify_recommended_plugins;
		global $consultstreet_customizer_notify_recommended_actions;

		global $install_button_label;
		global $activate_button_label;
		global $consultstreet_deactivate_button_label;

		$this->recommended_actions = isset( $this->config['recommended_actions'] ) ? $this->config['recommended_actions'] : array();
		$this->recommended_plugins = isset( $this->config['recommended_plugins'] ) ? $this->config['recommended_plugins'] : array();

		$this->recommended_actions_title = isset( $this->config['recommended_actions_title'] ) ? $this->config['recommended_actions_title'] : '';
		$this->recommended_plugins_title = isset( $this->config['recommended_plugins_title'] ) ? $this->config['recommended_plugins_title'] : '';
		$this->dismiss_button            = isset( $this->config['dismiss_button'] ) ? $this->config['dismiss_button'] : '';

		$consultstreet_customizer_notify_recommended_plugins = array();
		$consultstreet_customizer_notify_recommended_actions = array();

		if ( isset( $this->recommended_plugins ) ) {
			$consultstreet_customizer_notify_recommended_plugins = $this->recommended_plugins;
		}

		if ( isset( $this->recommended_actions ) ) {
			$consultstreet_customizer_notify_recommended_actions = $this->recommended_actions;
		}

		$install_button_label    = isset( $this->config['install_button_label'] ) ? $this->config['install_button_label'] : '';
		$activate_button_label   = isset( $this->config['activate_button_label'] ) ? $this->config['activate_button_label'] : '';
		$consultstreet_deactivate_button_label = isset( $this->config['consultstreet_deactivate_button_label'] ) ? $this->config['consultstreet_deactivate_button_label'] : '';

	}

	
	public function setup_actions() {

		// Register the section
		add_action( 'customize_register', array( $this, 'consultstreet_plugin_notification_customize_register' ) );

		// Enqueue scripts and styles
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'consultstreet_customizer_notify_scripts_for_customizer' ), 0 );

		/* ajax callback for dismissable recommended actions */
		add_action( 'wp_ajax_quality_customizer_notify_dismiss_action', array( $this, 'consultstreet_customizer_notify_dismiss_recommended_action_callback' ) );

		add_action( 'wp_ajax_ti_customizer_notify_dismiss_recommended_plugins', array( $this, 'consultstreet_customizer_notify_dismiss_recommended_plugins_callback' ) );

	}

	
	public function consultstreet_customizer_notify_scripts_for_customizer() {

		wp_enqueue_style( 'consultstreet-customizer-notify-css', get_template_directory_uri() . '/inc/customizer/customizer-notice/css/consultstreet-customizer-notify.css', array());

		wp_enqueue_style( 'plugin-install' );
		wp_enqueue_script( 'plugin-install' );
		wp_add_inline_script( 'plugin-install', 'var pagenow = "customizer";' );

		wp_enqueue_script( 'updates' );

		wp_enqueue_script( 'consultstreet-customizer-notify-js', get_template_directory_uri() . '/inc/customizer/customizer-notice/js/consultstreet-customizer-notify.js', array( 'customize-controls' ));
		wp_localize_script(
			'consultstreet-customizer-notify-js', 'consultstreetCustomizercompanionObject', array(
				'ajaxurl'            => admin_url( 'admin-ajax.php' ),
				'template_directory' => get_template_directory_uri(),
				'base_path'          => admin_url(),
				'activating_string'  => __( 'Activating', 'consultstreet' ),
			)
		);

	}

	
	public function consultstreet_plugin_notification_customize_register( $wp_customize ) {

		
		require_once get_template_directory() . '/inc/customizer/customizer-notice/consultstreet-customizer-notify-section.php';

		$wp_customize->register_section_type( 'ConsultStreet_Customizer_Notify_Section' );

		$wp_customize->add_section(
			new consultstreet_Customizer_Notify_Section(
				$wp_customize,
				'ConsultStreet-customizer-notify-section',
				array(
					'title'          => $this->recommended_actions_title,
					'plugin_text'    => $this->recommended_plugins_title,
					'dismiss_button' => $this->dismiss_button,
					'priority'       => 0,
				)
			)
		);

	}

	
	public function consultstreet_customizer_notify_dismiss_recommended_action_callback() {

		global $consultstreet_customizer_notify_recommended_actions;

		$action_id = ( isset( $_GET['id'] ) ) ? $_GET['id'] : 0;

		echo $action_id; 

		if ( ! empty( $action_id ) ) {

			
			if ( get_option( 'consultstreet_customizer_notify_show' ) ) {

				$consultstreet_customizer_notify_show_recommended_actions = get_option( 'consultstreet_customizer_notify_show' );
				switch ( $_GET['todo'] ) {
					case 'add':
						$consultstreet_customizer_notify_show_recommended_actions[ $action_id ] = true;
						break;
					case 'dismiss':
						$consultstreet_customizer_notify_show_recommended_actions[ $action_id ] = false;
						break;
				}
				update_option( 'consultstreet_customizer_notify_show', $consultstreet_customizer_notify_show_recommended_actions );

				
			} else {
				$consultstreet_customizer_notify_show_recommended_actions = array();
				if ( ! empty( $consultstreet_customizer_notify_recommended_actions ) ) {
					foreach ( $consultstreet_customizer_notify_recommended_actions as $consultstreet_lite_customizer_notify_recommended_action ) {
						if ( $consultstreet_lite_customizer_notify_recommended_action['id'] == $action_id ) {
							$consultstreet_customizer_notify_show_recommended_actions[ $consultstreet_lite_customizer_notify_recommended_action['id'] ] = false;
						} else {
							$consultstreet_customizer_notify_show_recommended_actions[ $consultstreet_lite_customizer_notify_recommended_action['id'] ] = true;
						}
					}
					update_option( 'consultstreet_customizer_notify_show', $consultstreet_customizer_notify_show_recommended_actions );
				}
			}
		}
		die(); 
	}

	
	public function consultstreet_customizer_notify_dismiss_recommended_plugins_callback() {

		$action_id = ( isset( $_GET['id'] ) ) ? $_GET['id'] : 0;

		echo $action_id; 

		if ( ! empty( $action_id ) ) {

			$consultstreet_lite_customizer_notify_show_recommended_plugins = get_option( 'consultstreet_customizer_notify_show_recommended_plugins' );

			switch ( $_GET['todo'] ) {
				case 'add':
					$consultstreet_lite_customizer_notify_show_recommended_plugins[ $action_id ] = false;
					break;
				case 'dismiss':
					$consultstreet_lite_customizer_notify_show_recommended_plugins[ $action_id ] = true;
					break;
			}
			update_option( 'consultstreet_customizer_notify_show_recommended_plugins', $consultstreet_lite_customizer_notify_show_recommended_plugins );
		}
		die(); 
	}

}
