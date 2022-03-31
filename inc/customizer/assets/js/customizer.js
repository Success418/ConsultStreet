/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function ( $ ) {

	// Site title and description.
	wp.customize( 'blogname', function ( value ) {
		value.bind( function ( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function ( value ) {
		value.bind( function ( to ) {
			$( '.site-description' ).text( to );
		} );
	} );
	
	// Service title
	wp.customize(
		'consultstreet_service_area_title', function( value ) {
			value.bind(
				function( newval ) {
					$( '.theme-services .theme-section-title' ).text( newval );
				}
			);
		}
	);
	
	// Service description
	wp.customize(
		'consultstreet_service_area_des', function( value ) {
			value.bind(
				function( newval ) {
					$( '.theme-services .theme-section-subtitle' ).text( newval );
				}
			);
		}
	);
	
	// Project title
	wp.customize(
		'consultstreet_project_area_title', function( value ) {
			value.bind(
				function( newval ) {
					$( '.theme-project .theme-section-title' ).text( newval );
				}
			);
		}
	);
	
	// Project description
	wp.customize(
		'consultstreet_project_area_des', function( value ) {
			value.bind(
				function( newval ) {
					$( '.theme-project .theme-section-subtitle' ).text( newval );
				}
			);
		}
	);
	
	
	// Testimonial title
	wp.customize(
		'consultstreet_testimonial_area_title', function( value ) {
			value.bind(
				function( newval ) {
					$( '.theme-testimonial .theme-section-title' ).text( newval );
				}
			);
		}
	);
	
	// Testimonial description
	wp.customize(
		'consultstreet_testimonial_area_des', function( value ) {
			value.bind(
				function( newval ) {
					$( '.theme-testimonial .theme-section-subtitle' ).text( newval );
				}
			);
		}
	);
	
	// Call to action title
	wp.customize(
		'consultstreet_cta_area_title', function( value ) {
			value.bind(
				function( newval ) {
					$( '.theme-cta .cta-block h5' ).text( newval );
				}
			);
		}
	);
	
	// Call to action subtitle
	wp.customize(
		'consultstreet_cta_area_subtitle', function( value ) {
			value.bind(
				function( newval ) {
					$( '.theme-cta .cta-block h2' ).text( newval );
				}
			);
		}
	);
	
	// Call to action description
	wp.customize(
		'consultstreet_cta_area_des', function( value ) {
			value.bind(
				function( newval ) {
					$( '.theme-cta .cta-block p' ).text( newval );
				}
			);
		}
	);
	
	// Call to action button text
	wp.customize(
		'consultstreet_cta_button_text', function( value ) {
			value.bind(
				function( newval ) {
					$( '.theme-cta .btn-small' ).text( newval );
				}
			);
		}
	);
	
	// Call to action video text
	wp.customize(
		'consultstreet_video_text', function( value ) {
			value.bind(
				function( newval ) {
					$( '.theme-cta .youtube-click a' ).text( newval );
				}
			);
		}
	);
	
	// Blog title
	wp.customize(
		'consultstreet_blog_area_title', function( value ) {
			value.bind(
				function( newval ) {
					$( '.theme-blog .theme-section-title' ).text( newval );
				}
			);
		}
	);
	
	// Blog description
	wp.customize(
		'consultstreet_blog_area_des', function( value ) {
			value.bind(
				function( newval ) {
					$( '.theme-blog .theme-section-subtitle' ).text( newval );
				}
			);
		}
	);
	
	
	// footer copyright text
	wp.customize(
		'consultstreet_footer_copright_text', function( value ) {
			value.bind(
				function( newval ) {
					$( '.site-footer .site-info' ).text( newval );
				}
			);
		}
	);
	
	
} )( jQuery );
