<?php
/**
 * Custom comment walker to support theme
 * https://gist.github.com/georgiecel/9445357
 *
 *
 * @package bsw.io
 */

class bsw_io_comment_walker extends Walker_Comment {
	var $tree_type = 'comment';
	var $db_fields = array( 'parent' => 'comment_parent', 'id' => 'comment_ID' );

	// constructor – wrapper for the comments list
	function __construct() { ?>

		<ul class="comment-list plain">

	<?php }

	// start_lvl – wrapper for child comments list
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$GLOBALS['comment_depth'] = $depth + 1; ?>
		
		<ul class="children plain">

	<?php }

	// end_lvl – closing wrapper for child comments list
	function end_lvl( &$output, $depth = 0, $args = array() ) {
		$GLOBALS['comment_depth'] = $depth + 1; ?>

		</ul>

	<?php }

	// start_el – HTML for comment template
	function start_el( &$output, $comment, $depth = 0, $args = array(), $id = 0 ) {
		$depth++;
		$GLOBALS['comment_depth'] = $depth;
		$GLOBALS['comment'] = $comment;
		?>
		
		<li class="comment">
			<div <?php comment_class( 'single-comment' ); ?> id="comment-<?php comment_ID() ?>">
				<div class="comment-author" role="complementary">
					<?php echo get_avatar( $comment, 60 ); ?>
					<cite><a class="comment-author-link" href="<?php comment_author_url(); ?>" itemprop="author"><?php comment_author(); ?></a></cite>
					<span class="says">says:</span>	
				</div>
				<div class="comment-meta">
					<time datetime="<?php comment_date('Y-m-d') ?>T<?php comment_time('H:iP') ?>" itemprop="datePublished"><?php comment_date('jS F Y') ?> at <a href="#comment-<?php comment_ID() ?>" itemprop="url"><?php comment_time() ?></a></time> / 
					<?php $reply_args = array(
						'add_below' => 'comment',
						'depth' => $depth,
						'max_depth' => $args['max_depth']);
					comment_reply_link( array_merge( $args, $reply_args ), $comment->comment_ID );  ?>
				</div><!-- comment-meta -->
				<p><?php comment_text() ?></p>
				<?php edit_comment_link('<p class="comment-meta-item">Edit this comment</p>','',''); ?>
				<?php if ($comment->comment_approved == '0') : ?>
				<p class="comment-meta-item">Your comment is awaiting moderation.</p>
				<?php endif; ?>
			</div><!-- single-comment -->
	<?php }

	// end_el – closing HTML for comment template
	function end_el(&$output, $comment, $depth = 0, $args = array() ) { ?>
			</li>
	<?php }

	// destructor – closing wrapper for the comments list
	function __destruct() { ?>

		</ul>
	
	<?php }

}