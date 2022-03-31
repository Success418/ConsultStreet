<?php
if( ! function_exists( 'consultstreet_custom_typography_css' ) ):
    function consultstreet_custom_typography_css() {
    
	$consultstreet_typography_disabled = get_theme_mod('consultstreet_typography_disabled', false);
    If($consultstreet_typography_disabled == true):
        
        $output_css = '';
		if(get_theme_mod('consultstreet_typography_base_font_family') != null):
			$output_css .="body { font-family: " .esc_attr( get_theme_mod('consultstreet_typography_base_font_family') )." !important; }\n";
        endif;
		
		if(get_theme_mod('consultstreet_typography_base_font_size') != null):
			$output_css .="body { font-size: " .esc_attr( get_theme_mod('consultstreet_typography_base_font_size') )." !important; }\n";
        endif;
		
		if(get_theme_mod('consultstreet_typography_h1_font_family') != null):
			$output_css .="h1 { font-family: " .esc_attr( get_theme_mod('consultstreet_typography_h1_font_family') )." !important; }\n";
        endif;
		
		if(get_theme_mod('consultstreet_typography_h2_font_family') != null):
			$output_css .="h2 { font-family: " .esc_attr( get_theme_mod('consultstreet_typography_h2_font_family') )." !important; }\n";
        endif;
		
		if(get_theme_mod('consultstreet_typography_h3_font_family') != null):
			$output_css .="h3 { font-family: " .esc_attr( get_theme_mod('consultstreet_typography_h3_font_family') )." !important; }\n";
        endif;
		
		if(get_theme_mod('consultstreet_typography_h4_font_family') != null):
			$output_css .="h4 { font-family: " .esc_attr( get_theme_mod('consultstreet_typography_h4_font_family') )." !important; }\n";
        endif;
		
		if(get_theme_mod('consultstreet_typography_h5_font_family') != null):
			$output_css .="h5 { font-family: " .esc_attr( get_theme_mod('consultstreet_typography_h5_font_family') )." !important; }\n";
        endif;
		
		if(get_theme_mod('consultstreet_typography_h6_font_family') != null):
			$output_css .="h6 { font-family: " .esc_attr( get_theme_mod('consultstreet_typography_h6_font_family') )." !important; }\n";
        endif;
    
        wp_add_inline_style( 'consultstreet-style', $output_css );
		
	endif;
		
    }
endif;
add_action( 'wp_enqueue_scripts', 'consultstreet_custom_typography_css' );