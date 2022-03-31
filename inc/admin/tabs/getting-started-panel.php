<?php
/**
 * Getting Started Panel.
 *
 * @package ConsultStreet
 */
?>
<div id="getting-started-panel" class="panel-left visible">
    <div class="panel-aside panel-column">
     
	<?php 
	$free_plugins = array(
		'arile-extra' => array(
		    'name'      => 'Arile Extra',
			'slug'     	=> 'arile-extra',
			'filename' 	=> 'arile-extra.php',
		),
	);
	if( !empty( $free_plugins ) ) { ?>
		<div class="recomended-plugin-wrap">
		<?php
		foreach( $free_plugins as $plugin ) {
			$info 		= consultstreet_call_plugin_api( $plugin['slug'] ); ?>
				
			<h4 title="<?php echo esc_attr( $plugin['name'] ); ?>">
				<?php echo esc_html( $plugin['name'] ); ?>	
			</h4>
			<p class="mt-0"><?php esc_html_e('Arile Extra Plugin requires you to be highly recommended. And after installing it, you will be able to show all the front page features and, all business sections of the FrontPage.', 'consultstreet'); ?></p>
			<?php 
			echo '<div class="mt-12">';
			echo ConsultStreet_Getting_Started_Page_Plugin_Helper::instance()->get_button_html( $plugin['slug'] );
			echo '</div>';
			?>

			</br>
			<?php
		} ?>
		</div>
	<?php
	} ?>
	 
	 
	 
	 
    </div> 
    <div class="panel-aside panel-column">
        <h4><?php esc_html_e( 'Extensive Documentation', 'consultstreet' ); ?></h4>
        <p><?php esc_html_e( 'Read detailed documentation of the theme. The documentation has all the necessary information to set up the theme. Which will help you set up the theme. So you must read the document carefully before using it.', 'consultstreet' ); ?></p>
        <a href="//helpdoc.themearile.com/" class="hyperlink" title="<?php esc_attr_e( 'Visit the Support', 'consultstreet' ); ?>" target="_blank"><?php esc_html_e( 'Documentation', 'consultstreet' ); ?></a>
    </div>
   <div class="panel-aside panel-column">
        <h4><?php esc_html_e( 'Go to the Customizer', 'consultstreet' ); ?></h4>
        <p><?php esc_html_e( 'Using the WordPress Customizer you can easily customize every single aspect of the theme. Because this theme provides advanced settings to control the theme layout through the customizer.', 'consultstreet' ); ?></p>
        <a class="button button-primary" target="_blank" href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" title="<?php esc_attr_e( 'Visit the Support', 'consultstreet' ); ?>"><?php esc_html_e( 'Go to the Customizer', 'consultstreet' ); ?></a>
    </div>
</div>