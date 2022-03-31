<?php
/**
 * consultstreet functions and definitions
 *
 * @link    https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package consultstreet
 */

if ( ! function_exists( 'consultstreet_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function consultstreet_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on consultstreet, use a find and replace
		 * to change 'consultstreet' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'consultstreet', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary'     => esc_html__( 'Primary', 'consultstreet' ),
		) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// woocommerce support
		
		add_theme_support( 'woocommerce' );
		
		// Woocommerce Gallery Support
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 42,
			'width'       => 257,
			'flex-height' => true,
			'header-text' => array( 'site-title', 'site-description' ),
			
		) );
		
		/**
		 * Enable support for Post Formats.
		 *
		 * See: https://codex.wordpress.org/Post_Formats
		 */
		add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
			'gallery',
			'status',
			'audio',
			'chat',
		) );

		/**
		 * Custom background support.
		 */
		add_theme_support( 'custom-background', apply_filters( 'consultstreet_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		/**
		 * Set default content width.
		 */
		if ( ! isset( $content_width ) ) {
			$content_width = 800;
		}

	}
endif;
add_action( 'after_setup_theme', 'consultstreet_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function consultstreet_widgets_init() {
	$sidebars = apply_filters( 'consultstreet_sidebars_data', array(
	    'sidebar-main'            => esc_html__( 'Sidebar', 'consultstreet' ),
		'footer-sidebar-one'         => esc_html__( 'Footer Sidebar One', 'consultstreet' ),
		'footer-sidebar-two'         => esc_html__( 'Footer Sidebar Two', 'consultstreet' ),
		'footer-sidebar-three'         => esc_html__( 'Footer Sidebar Three', 'consultstreet' ),
		'footer-sidebar-four'         => esc_html__( 'Footer Sidebar Four', 'consultstreet' ),
	) );

	if ( class_exists( 'WooCommerce' ) ) {
		$sidebars['woocommerce']  = esc_html__( 'WooCommerce Sidebar', 'consultstreet' );
	}

	foreach ( $sidebars as $id => $name ) :

		register_sidebar( array(
			'id'            => $id,
			'name'          => $name,
			'description'   => esc_html__( 'Add widgets here.', 'consultstreet' ),
			'before_widget' => '<aside id="%1$s" class="widget text_widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );

	endforeach;

}
add_action( 'widgets_init', 'consultstreet_widgets_init');

add_filter('woocommerce_show_page_title', '__return_false');

/**
 * Enqueue scripts and styles.
 */
function consultstreet_scripts() {
	$suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';
	/**
	 * Styles.
	 */
	 
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css'); 
	// Fontawesome.
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome/css/font-awesome.css', false, '4.7.0' );
	// Theme style.
	wp_enqueue_style( 'consultstreet-style', get_stylesheet_uri() );
	wp_enqueue_style('consultstreet-theme-default', get_template_directory_uri() . '/assets/css/theme-default.css');
	wp_enqueue_style('animate-css', get_template_directory_uri() . '/assets/css/animate.css');
	wp_enqueue_style('owl.carousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.css');
	wp_enqueue_style('bootstrap-smartmenus-css', get_template_directory_uri() . '/assets/css/bootstrap-smartmenus.css');
	
	
	
	/**
	 * Scripts.
	 */
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'));
	// Theme JavaScript.
	wp_enqueue_script('consultstreet-smartmenus-js', get_template_directory_uri() . '/assets/js/smartmenus/jquery.smartmenus.js');
	wp_enqueue_script( 'consultstreet-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script('consultstreet-custom-js', get_template_directory_uri() . '/assets/js/custom.js');
	wp_enqueue_script('bootstrap-smartmenus-js', get_template_directory_uri() . '/assets/js/smartmenus/bootstrap-smartmenus.js');
	wp_enqueue_script('owl-carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.js');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'consultstreet_scripts' );

function consultstreet_customizer_script() {
	wp_enqueue_style( 'consultstreet-customize',get_template_directory_uri().'/inc/customizer/assets/css/customize.css', CONSULTSTREET_THEME_VERSION, 'screen' );
	wp_enqueue_script( 'consultstreet-customizer-script', get_template_directory_uri() .'/inc/customizer/assets/js/customizer-section.js', array("jquery"),'', true  );	
}
add_action( 'customize_controls_enqueue_scripts', 'consultstreet_customizer_script' );


/**
 * Define constants
 */
// Root path/URI.
define( 'CONSULTSTREET_PARENT_DIR', get_template_directory() );
define( 'CONSULTSTREET_PARENT_URI', get_template_directory_uri() );

// Include path/URI.
define( 'CONSULTSTREET_PARENT_INC_DIR', CONSULTSTREET_PARENT_DIR . '/inc' );
define( 'CONSULTSTREET_PARENT_INC_URI', CONSULTSTREET_PARENT_URI . '/inc' );

// Icons path.
define( 'CONSULTSTREET_PARENT_INC_ICON_URI', CONSULTSTREET_PARENT_URI . '/assets/img/icons' );
// Customizer path.
define( 'CONSULTSTREET_PARENT_CUSTOMIZER_DIR', CONSULTSTREET_PARENT_INC_DIR . '/customizer' );

// Theme version.
$consultstreet_theme = wp_get_theme();
define( 'CONSULTSTREET_THEME_VERSION', $consultstreet_theme->get( 'Version' ) );
define ( 'CONSULTSTREET_THEME_NAME', $consultstreet_theme->get( 'Name' ) );

/**
 * Implement the Custom Header feature.
 */
require CONSULTSTREET_PARENT_INC_DIR . '/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require CONSULTSTREET_PARENT_INC_DIR . '/template-tags.php';

/**
 * Customizer additions.
 */
require CONSULTSTREET_PARENT_INC_DIR . '/customizer/consultstreet-customizer.php';
require CONSULTSTREET_PARENT_INC_DIR . '/customizer/consultstreet-customizer-options.php';


/**
 * Pgge layout setting.
 */

require CONSULTSTREET_PARENT_INC_DIR . '/metabox.php';


/**
 * Pgge layout setting.
 */

require CONSULTSTREET_PARENT_INC_DIR . '/theme-custom-typography.php';


/**
 * Bootstrap class navwalker.
 */

require CONSULTSTREET_PARENT_INC_DIR . '/consultstreet-class-bootstrap-navwalker.php';

/**
 * Admin page.
 */
 
if ( 'ConsultStreet' == $consultstreet_theme->name) {
	if ( is_admin() ) {
		require CONSULTSTREET_PARENT_INC_DIR . '/admin/getting-started.php';
	}
}