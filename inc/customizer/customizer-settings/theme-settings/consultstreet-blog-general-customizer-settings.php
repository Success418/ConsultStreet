<?php
/**
 * General Blog.
 *
 * @package     consultstreet
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'ConsultStreet_Customize_Blog_General_Option' ) ) :

	/**
	 * General Blog..
	 */
	class ConsultStreet_Customize_Blog_General_Option extends ConsultStreet_Customize_Base_Option {

		public function elements() {

			return array(
			
			    'consultstreet_general_arcive_single_blog_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
				   		'priority'        => 1,
						'label'   => esc_html__( 'Blog/Archive/Single', 'consultstreet' ),
						'section' => 'consultstreet_blog_general',
					),
				),

				'consultstreet_general_blog_arcive_single_content_ordering'        => array(
					'setting' => array(
						'default'           => array(
							'meta-one',
							'title',
							'meta-two',
							'image',
						),
						'sanitize_callback' => array( 'ConsultStreet_Customizer_Sanitize', 'sanitize_sortable' ),
					),
					'control' => array(
						'type'        => 'sortable',
						'priority'    => 5,
						'label'       => esc_html__( 'General Post', 'consultstreet' ),
						'description' => esc_html__( 'Drag & Drop post items to re-arrange the order', 'consultstreet' ),
						'section'     => 'consultstreet_blog_general',
						'choices'     => array(
							'meta-one' => esc_attr__( 'Meta One', 'consultstreet' ),
							'title'          => esc_attr__( 'Title', 'consultstreet' ),
							'meta-two'           => esc_attr__( 'Meta Two', 'consultstreet' ),
							'image'           => esc_attr__( 'Image', 'consultstreet' ),
						),
					),
				),
				
				'consultstreet_archive_blog_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
				   		'priority'        => 15,
						'label'   => esc_html__( 'Archive Blog Pages', 'consultstreet' ),
						'section' => 'consultstreet_blog_general',
					),
				),  
				
				
					'consultstreet_archive_blog_pages_layout'                    => array(
						'setting' => array(
							'default'           => 'consultstreet_right_sidebar',
							'sanitize_callback' => array( 'ConsultStreet_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio_image',
							'priority'        => 20,
							'label'           => esc_html__( 'Layout', 'consultstreet' ),
							'section'         => 'consultstreet_blog_general',
							'choices'         => array(
								'consultstreet_right_sidebar'   => CONSULTSTREET_PARENT_INC_ICON_URI . '/theme-right-sidebar.png',
								'consultstreet_left_sidebar'   => CONSULTSTREET_PARENT_INC_ICON_URI . '/theme-left-sidebar.png',
								'consultstreet_no_sidebar' => CONSULTSTREET_PARENT_INC_ICON_URI . '/theme-fullwidth.png',
							),
						),
					),
				
				'consultstreet_single_blog_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
				   		'priority'        => 30,
						'label'   => esc_html__( 'Single Blog Pages', 'consultstreet' ),
						'section' => 'consultstreet_blog_general',
					),
				),
				
				    'consultstreet_single_blog_pages_layout'                    => array(
						'setting' => array(
							'default'           => 'consultstreet_right_sidebar',
							'sanitize_callback' => array( 'ConsultStreet_Customizer_Sanitize', 'sanitize_radio' ),
						),
						'control' => array(
							'type'            => 'radio_image',
							'priority'        => 35,
							'label'           => esc_html__( 'Layout', 'consultstreet' ),
							'section'         => 'consultstreet_blog_general',
							'choices'         => array(
								'consultstreet_right_sidebar'   => CONSULTSTREET_PARENT_INC_ICON_URI . '/theme-right-sidebar.png',
								'consultstreet_left_sidebar'   => CONSULTSTREET_PARENT_INC_ICON_URI . '/theme-left-sidebar.png',
								'consultstreet_no_sidebar' => CONSULTSTREET_PARENT_INC_ICON_URI . '/theme-fullwidth.png',
							),
						),
					),
				

			);

		}

	}

	new ConsultStreet_Customize_Blog_General_Option();

endif;
