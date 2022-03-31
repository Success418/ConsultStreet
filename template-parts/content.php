<?php
/**
 * Template part for displaying posts
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package consultstreet
 */
 
$blog_content_ordering = get_theme_mod( 'consultstreet_general_blog_arcive_single_content_ordering', array( 'meta-one', 'title', 'meta-two', 'image', )); 
 ?>
<article class="post" <?php post_class(); ?>>		
		
			<?php foreach ( $blog_content_ordering as $blog_content_order ) : ?>	
			   <?php if ( 'meta-one' === $blog_content_order ) : ?>
				<div class="entry-meta">
					<?php if(is_sticky()) : ?>
						<span class="sticky-post"><?php esc_html_e('Featured', 'consultstreet'); ?></span>
						<?php endif; ?>
				    <?php
					if(!empty(get_the_category_list(  ))) {
					echo '<span class="cat-links">' . get_the_category_list( esc_html( '  ' ) ) . '</span>';
					} ?>
				</div>	
				<?php elseif ( 'title' === $blog_content_order ) : ?>
				<header class="entry-header">
					<?php 
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
					?>
				</header>
				<?php elseif ( 'meta-two' === $blog_content_order ) : ?>
				<div class="entry-meta pb-2">
					<span class="posted-on">
						<a href="<?php echo esc_url(get_month_link(get_post_time('Y'),get_post_time('m'))); ?>"><time>
						<?php echo esc_html(get_the_date('M j, Y')); ?></time></a>
					</span>
					<span class="author">
						<a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' )) );?>"><?php echo esc_html(get_the_author());?></a>	
					</span>					
					<span class="comment-links">						
						<a href="<?php esc_url( the_permalink() ); ?>"><?php comments_number( '0', '1', '%' ); ?> <?php esc_html_e('Comment', 'consultstreet'); ?></a> 
					</span>					
				</div>			
				<?php elseif ( 'image' === $blog_content_order ) : ?>
				<?php 
				if(has_post_thumbnail()){
				echo '<figure class="post-thumbnail"><a href="'.esc_url(get_the_permalink()).'">';
				the_post_thumbnail( '', array( 'class'=>'img-fluid' ) );
				echo '</a></figure>';
				} ?>
			<?php  endif; endforeach; ?>
			
			<div class="entry-content">
				<?php the_content( __('Read More','consultstreet') ); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'consultstreet' ), 'after'  => '</div>', ) ); ?>
		 	</div>
		   
</article><!-- #post-<?php the_ID(); ?> -->