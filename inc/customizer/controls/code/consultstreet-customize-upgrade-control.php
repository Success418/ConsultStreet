<?php
/** 
 * Customize Heading control class.
 *
 * @package consultstreet
 * 
 * @see     WP_Customize_Control
 * @access  public
 */

/**
 * Class ConsultStreet_Customize_Upgrade_Control
 */
class ConsultStreet_Customize_Upgrade_Control extends ConsultStreet_Customize_Base_Control {

	/**
	 * Customize control type.
	 *
	 * @access public
	 * @var    string
	 */
	public $type = 'consultstreet-upgrade';

	/**
	 * Renders the Underscore template for this control.
	 *
	 * @see    WP_Customize_Control::print_template()
	 * @access protected
	 * @return void
	 */
	protected function content_template() {
		$upgrade_to_pro_link = 'https://themearile.com/consultstreet-pro-theme/';
		?>

		<div class="consultstreet-upgrade-pro-message" style="display:none;";>
			<# if ( data.label ) { #><h4 class="customize-control-title"><?php echo wp_kses_post( 'Upgrade to <a href="'.$upgrade_to_pro_link.'" target="_blank" > ConsultStreet Pro </a> to be add more', 'consultstreet'); ?> {{{ data.label }}} <?php esc_html_e( 'and get the other pro features.', 'consultstreet') ?></h4><# } #>
		</div>

		<?php
	}

	/**
	 * Render content is still called, so be sure to override it with an empty function in your subclass as well.
	 */
	protected function render_content() {

	}

}