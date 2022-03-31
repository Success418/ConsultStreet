<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package consultstreet
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
 ?>
<?php if ( post_password_required() ) : ?>
	<p class="nopassword"><?php esc_html_e( 'This post is password protected. Enter the password to view any comments.', 'consultstreet' ); ?></p>
	<?php return; endif; ?>
         <?php if ( have_comments() ) : ?>
		<article class="theme-comment-section">	
			<div class="theme-comment-title">
				<h3>
				<?php echo esc_html ( comments_number(__( 'No Comments', 'consultstreet'), __('One comment','consultstreet'), __('% comments', 'consultstreet'))); ?>
				</h3>
			</div>
			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :  ?>		
			<?php endif; ?>
			<?php wp_list_comments( array( 'callback' => 'consultstreet_comment' ) ); ?>
		</article>
		
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<nav id="comment-nav-below">
			<h1 class="assistive-text"><?php esc_html_e( 'Comment navigation', 'consultstreet' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'consultstreet' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'consultstreet' ) ); ?></div>
		</nav>
		<?php endif;  ?>
		<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : 
		?>
	<?php endif; ?>
	<?php if ('open' == $post->comment_status) : ?>
	<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
		<p><?php 
		/* translators: %1$s %2$s: logged in */
		echo sprintf( esc_html__( 'You must be <a href="%s">logged in</a> to post a comment','consultstreet' ), esc_url(home_url( 'wp-login.php' ) . '?redirect_to=' .  urlencode(get_permalink()))); ?></p>
</p>
<?php else : ?>
	<article class="theme-comment-form">
	<?php  
	 $fields=array(
		'author' => '<div class="form-group"><label>'.esc_html__("Name",'consultstreet').'<span class="required">*</span></label><input class="form-control" name="author" id="author" value="" type="text"/></div>',
		'email' => '<div class="form-group"><label>'.esc_html__("Email",'consultstreet').'<span class="required">*</span></label><input class="form-control" name="email" id="email" value=""   type="email" ></div>',		
		);
	function my_fields($fields) { 
		return $fields;
	}
	add_filter('comment_form_default_fields','my_fields');
		$defaults = array(
		'fields'=> apply_filters( 'comment_form_default_fields', $fields ),
		'comment_field'=> '<div class="form-group"><label>'.esc_html__("Comment",'consultstreet').'</label>
		<textarea id="comments" rows="5" class="form-control" name="comment" type="text"></textarea></div>',		
		'logged_in_as' => '<p class="logged-in-as">' . esc_html__( "Logged in as",'consultstreet' ).' '.'<a href="'. admin_url( 'profile.php' ).'">'. esc_html( $user_identity ).'</a>'. ' '. '<a href="'. wp_logout_url( get_permalink() ).'" title="'. esc_attr__("Log out of this account",'consultstreet').'">'.esc_html__("Logout",'consultstreet').'</a>' . '</p>',
		'id_submit'=> 'send_button',
		'label_submit'=>esc_html__( 'Submit','consultstreet'),
		'comment_notes_after'=> '',
		'title_reply'=> '<div class="theme-comment-title"><h3>'.esc_html__('Leave a Reply','consultstreet').'</h3></div>',
		'id_form'=> 'action'
		);
	comment_form($defaults);?>						
<?php endif; // If registration required and not logged in ?>
<?php endif;  ?>