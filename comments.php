<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package bsw.io
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<div class="comment-section">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h3 id="comments">
			<?php
				printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'bsw-io' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</h3>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-above" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'bsw-io' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'bsw-io' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'bsw-io' ) ); ?></div>
		</nav><!-- #comment-nav-above -->
		<?php endif; // check for comment navigation ?>

		<?php
			wp_list_comments( array(
				'walker'     => new bsw_io_comment_walker(),
				'short_ping' => true,
			) );
		?>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'bsw-io' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'bsw-io' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'bsw-io' ) ); ?></div>
		</nav><!-- #comment-nav-below -->
		<?php endif; // check for comment navigation ?>

	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'bsw-io' ); ?></p>
	<?php endif; ?>
</div><!-- comment-section -->
<div id="post-comment" class="clear-after">
	<?php
	
	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );
	
	$args = array(
		'id_form'           => 'commentform',
		'id_submit'         => 'submit',
		'title_reply'       => __( 'Leave a Reply' ),
		'title_reply_to'    => __( 'Leave a Reply to %s' ),
		'cancel_reply_link' => __( 'Cancel Reply' ),
		'label_submit'      => __( 'Submit Comment' ),
		'comment_field' =>  '<textarea name="comment" class="plain buffer" cols="45" rows="8" aria-required="true"  placeholder="'. __( 'Comments', 'domainreference' ) . '"></textarea>',

		'must_log_in' => '<p class="must-log-in">' .
			sprintf(
				__( 'You must be <a href="%s">logged in</a> to post a comment.' ),
				wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
			) . '</p>',

		'logged_in_as' => '<p class="logged-in-as">' .
			sprintf(
				__( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ),
				admin_url( 'profile.php' ),
				$user_identity,
				wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
			) . '</p>',

		'comment_notes_before' => '<p class="comment-note">' .
			__( 'Your email address will not be published.' ) .
			'</p>',

		'comment_notes_after' => '<p class="form-allowed-tags">' .
			sprintf(
				__( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: %s' ),
				' <code>' . allowed_tags() . '</code>'
			) . '</p>',

		'fields' => apply_filters( 'comment_form_default_fields', array(
			'author' =>
				'<span class="pre-input"><i class="icon icon-user"></i></span>' .
				'<input id="author" name="author" class="name plain buffer" type="text" placeholder="' .
				__( 'Name', 'domainreference' ) .'" value="' . esc_attr( $commenter['comment_author'] ) .
				'" size="30"' . $aria_req . ' />',

			'email' =>
				'<span class="pre-input"><i class="icon icon-email"></i></span>' .
				'<input id="email" name="email" class="email plain buffer" type="email" placeholder="' . 
				__( 'Email', 'domainreference' ) . '" value="' . esc_attr(  $commenter['comment_author_email'] ) .
				'" size="30"' . $aria_req . ' />',

	    'url' =>
				'<span class="pre-input"><i class="icon icon-globe"></i></span>' .
				'<input id="url" name="url" class="url plain buffer" type="text" placeholder="'.
				__( 'Website', 'domainreference' ) . '" value="' . esc_attr( $commenter['comment_author_url'] ) .
				'" size="30" />'
			)
		),
	);
	?>
		<?php comment_form($args); ?>
	</div><!-- post-comment -->
