<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package bsw.io
 */

if ( ! function_exists( 'bsw_io_paging_nav' ) ) :
	/**
	 * Display navigation to next/previous set of posts when applicable.
	 */
	function bsw_io_paging_nav() {
		// Don't print empty markup if there's only one page.
		if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
			return;
		}
		?>
		<nav id="pagination">
			<h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'bsw-io' ); ?></h1>
			<ul class="clear-after reset plain">
				<?php if ( get_next_posts_link() ) : ?>
					<li id="older" class="pagination-nav"><?php next_posts_link( __( '<i class="fa fa-chevron-left"></i><span class="label">Older</span>', 'bsw-io' ) ); ?></li>
				<?php endif; ?>
				<?php if ( get_previous_posts_link() ) : ?>
					<li id="newer" class="pagination-nav"><?php previous_posts_link( __( '<span class="label">Newer</span><i class="fa fa-chevron-right"></i>', 'bsw-io' ) ); ?></li>
				<?php endif; ?>
			</ul>
		</nav>
	<?php
	}
endif;

if ( ! function_exists( 'bsw_io_post_nav' ) ) :
	/**
	 * Display navigation to next/previous post when applicable.
	 */
	function bsw_io_post_nav() {
		// Don't print empty markup if there's nowhere to navigate.
		$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
		$next     = get_adjacent_post( false, '', false );

		if ( ! $next && ! $previous ) {
			return;
		}
		?>
		<div id="post-nav" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Post navigation', 'bsw-io' ); ?></h1>
			<ul class="clear-after reset plain">
				<li id="prev-items" class="post-nav">
				<?php previous_post_link( '%link ', _x( '<i class="fa fa-chevron-left"></i><span class="label">%title</span>', 'Previous post link', 'bsw-io' ) ); ?>
				</li>
				<li id="all-items" class="post-nav">
					<a href="<?php echo bsw_io_blog_page(); ?>"><i class="icon icon-images"></i>
					</a>
				</li>
				<li id="next-items" class="post-nav">
				<?php next_post_link( '%link', _x( '<span class="label">%title</span><i class="fa fa-chevron-right"></i>', 'Next post link', 'bsw-io' ) ); ?>
				</li>
			</ul>
		</div>
	<?php
	}
endif;


if ( ! function_exists( 'bsw_io_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time and author.
	 */
	function bsw_io_posted_on() {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';

		$time_string = sprintf( $time_string,
				esc_attr( get_the_date( 'c' ) ),
				esc_html( get_the_date() ),
				esc_attr( get_the_modified_date( 'c' ) ),
				esc_html( get_the_modified_date() )
		);

		printf( __( '<span class="posted-on">Posted on %1$s</span><span class="byline"> by %2$s</span>', 'bsw-io' ),
				sprintf( '<a href="%1$s" rel="bookmark">%2$s</a>',
						esc_url( get_permalink() ),
						$time_string
				),
				sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s">%2$s</a></span>',
						esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
						esc_html( get_the_author() )
				)
		);
	}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function bsw_io_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'bsw_io_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
				'fields'     => 'ids',
				'hide_empty' => 1,

			// We only need to know if there is more than one category.
				'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'bsw_io_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so bsw_io_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so bsw_io_categorized_blog should return false.
		return false;
	}
}

if ( ! function_exists( 'bsw_io_blog_page' ) ) :
	/**
	 * Returns the main listing page
	 * 
	 * @return string url for the listing page
	 */
	function bsw_io_blog_page() {
		if( get_option( 'show_on_front' ) == 'page' ) 
			return get_permalink( get_option( 'page_for_posts' ) );
		else 
			return bloginfo('url');
	}
endif;

/**
 * Flush out the transients used in bsw_io_categorized_blog.
 */
function bsw_io_category_transient_flusher() {
	// Like, beat it. Dig?
	delete_transient( 'bsw_io_categories' );
}
add_action( 'edit_category', 'bsw_io_category_transient_flusher' );
add_action( 'save_post',     'bsw_io_category_transient_flusher' );
