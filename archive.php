<?php
/**
 * The template for displaying archive pages
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package consultstreet
 */
get_header(); 
get_template_part('template-parts/site','breadcrumb');
$consultstreet_archive_blog_pages_layout = get_theme_mod('consultstreet_archive_blog_pages_layout', 'consultstreet_right_sidebar');
?>

<section class="theme-block theme-blog theme-blog-large theme-bg-grey">

	<div class="container">
	
		<div class="row">
		
			<?php if($consultstreet_archive_blog_pages_layout == 'consultstreet_left_sidebar' ||  !$consultstreet_archive_blog_pages_layout == 'consultstreet_no_sidebar'): ?>
			<!--/Blog Section-->
			<?php get_sidebar(); ?>
			<?php endif; ?>
		
			<?php if($consultstreet_archive_blog_pages_layout == 'consultstreet_no_sidebar'): ?>
		        <div class="col-lg-12 col-md-12 col-sm-12">	
            <?php else: ?>  
                <div class="col-lg-<?php echo ( !is_active_sidebar( 'sidebar-main' ) ? '12' :'8' ); ?> col-md-<?php echo ( !is_active_sidebar( 'sidebar-main' ) ? '12' :'8' ); ?> col-sm-12">
            <?php endif; ?>	
			
				<?php 
				if ( have_posts() ) :
				// Start the loop.
					while ( have_posts() ) : the_post();
					
				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
					     get_template_part( 'template-parts/content', get_post_type() );	
			
					endwhile;
					
			    // End the loop.
						
				
		            // Pgination.
					the_posts_pagination( array(
						'prev_text'          => '<i class="fa fa-angle-double-left"></i>',
						'next_text'          => '<i class="fa fa-angle-double-right"></i>'
					) );
					
				// If no content, include the "No posts found" template.	
					
			    else :
				
			        get_template_part( 'template-parts/content', 'none' );
					
	        	endif;
				
				?>
				
			</div>	
			
			<?php if($consultstreet_archive_blog_pages_layout == 'consultstreet_right_sidebar' ||  !$consultstreet_archive_blog_pages_layout == 'consultstreet_no_sidebar'): ?>
			    <?php get_sidebar(); ?>
			<?php endif; ?>
			
		</div>
		
	</div>
	
</section>
<?php get_footer(); ?>