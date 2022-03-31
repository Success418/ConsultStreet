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
 * Class ConsultStreet_Customize_Heading_Control
 */
class ConsultStreet_Customize_Heading_Control extends ConsultStreet_Customize_Base_Control {

	/**
	 * Customize control type.
	 *
	 * @access public
	 * @var    string
	 */
	public $type = 'consultstreet-heading';

	/**
	 * Renders the Underscore template for this control.
	 *
	 * @see    WP_Customize_Control::print_template()
	 * @access protected
	 * @return void
	 */
	protected function content_template() {
		?>

		<h4>
			<# if ( data.label ) { #><span class="customize-control-title">{{{ data.label }}}</span><# } #>
		</h4>

		<?php
	}

	/**
	 * Render content is still called, so be sure to override it with an empty function in your subclass as well.
	 */
	protected function render_content() {

	}

}
