<?php
/** 
 * The template for displaying all single posts
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package consultstreet
 */

get_header();
get_template_part('template-parts/site','breadcrumb');
$consultstreet_single_blog_pages_layout = get_theme_mod('consultstreet_single_blog_pages_layout', 'consultstreet_right_sidebar');
?>
<section class="theme-block theme-blog theme-blog-large">

	<div class="container">
	
		<div class="row">
		<?php if($consultstreet_single_blog_pages_layout == 'consultstreet_left_sidebar' ||  !$consultstreet_single_blog_pages_layout == 'consultstreet_no_sidebar'): ?>
		<!--/Blog Section-->
		<?php get_sidebar(); ?>
		<?php endif; ?>
		
		<?php if($consultstreet_single_blog_pages_layout == 'consultstreet_no_sidebar'): ?>
		
		    <div class="col-lg-12 col-md-12 col-sm-12">	
			
        <?php else: ?>  

            <div class="col-lg-<?php echo ( !is_active_sidebar( 'sidebar-main' ) ? '12' :'8' ); ?> col-md-<?php echo ( !is_active_sidebar( 'sidebar-main' ) ? '12' :'8' ); ?> col-sm-12">

        <?php endif; ?>			

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content-single', get_post_type() );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		
		</div>	
		<?php if($consultstreet_single_blog_pages_layout == 'consultstreet_right_sidebar' || !$consultstreet_single_blog_pages_layout == 'consultstreet_no_sidebar'): ?>
		<!--/Blog Section-->
			<?php get_sidebar(); ?>
        <?php endif; ?>
		</div>	
		
	</div>
	
</section>

<?php
get_footer();