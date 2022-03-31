<?php
/**
 * Template part for displaying posts
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package consultstreet
*/
$blog_content_ordering = get_theme_mod( 'consultstreet_general_blog_arcive_single_content_ordering', array( 'meta-one', 'title', 'meta-two', 'image',));
?>
<article class="post" <?php post_class(); ?>>		
		
			<?php foreach ( $blog_content_ordering as $blog_content_order ) : ?>	
			   <?php if ( 'meta-one' === $blog_content_order ) : ?>
				<div class="entry-meta">
				    <?php
					if(!empty(get_the_category_list(  ))) {
					echo '<span class="cat-links">' . get_the_category_list( esc_html( '  ' ) ) . '</span>';
					} ?>
				</div>	
				<?php elseif ( 'title' === $blog_content_order ) : ?>
				<header class="entry-header">
	            <?php 
					the_title( '<h2 class="entry-title">', '</h2>' );
				?>
				</header>
				<?php elseif ( 'meta-two' === $blog_content_order ) : ?>
				<div class="entry-meta pb-2">
					<span class="author">
						<a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' )) );?>"><span class="grey"><?php echo esc_html__('by ','consultstreet');?></span><?php echo esc_html(get_the_author());?></a>	
					</span>
					<span class="posted-on">
					<a href="<?php echo esc_url(get_month_link(get_post_time('Y'),get_post_time('m'))); ?>"><time>
					<?php echo esc_html(get_the_date('M j, Y')); ?></time></a>
					</span>
					<span class="comment-links">						
						<a href="<?php esc_url( the_permalink() ); ?>"><?php comments_number( '0', '1', '%' ); ?> <?php esc_html_e('Comment', 'consultstreet'); ?></a> 
					</span>
				</div>
				<?php elseif ( 'image' === $blog_content_order ) : ?>
				<?php 
				if(has_post_thumbnail()){
				echo '<figure class="post-thumbnail">';
				the_post_thumbnail( '', array( 'class'=>'img-fluid' ) );
				echo '</figure>'; } ?>	
				<?php  endif; endforeach; ?>
				
			    <div class="entry-content">
				    <?php the_content( __('Read More','consultstreet') );
					    wp_link_pages();?>
				</div>
				<?php $theme_tag_list = get_the_tag_list();
		        if(!empty($theme_tag_list)) { ?>
				<div class="entry-meta mt-4 mb-0 pt-3 theme-b-top">
					<span class="tag-links">
					<?php the_tags('',''); ?>
					</span>
				</div>
				<?php } ?>
		 
</article><!-- #post-<?php the_ID(); ?> -->

<!--Blog Post Author-->
<article class="theme-blog-author media">
	<figure class="avatar">
		<?php echo get_avatar( get_the_author_meta('ID'), 200); ?>
	</figure>
	<div class="media-body align-self-center">
		<h4 class="name"><?php the_author_link(); ?></h4>
		<p class="website-url pb-3"><b><?php esc_html_e('Website:', 'consultstreet'); ?></b> <a href="<?php echo esc_url( get_the_author_meta('user_url') ); ?>" target="_blank"><?php echo esc_url(get_the_author_meta('user_url') ); ?></a></p>
		<p class="mb-2"><?php esc_html( the_author_meta( 'description' ) ); ?></p>		
	</div>
</article>
<!--/Blog Post Author-->