<?php
/**
 * @package bsw.io
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('clear-after'); ?>>
	<div class="column three">
		<figure><img src="http://placehold.it/600x600/ddd/fff&text=bsw.io" alt=""></figure>
	</div><!-- column three -->
	<div class="column nine last">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<h5 class="meta-post">
			<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
				<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'bsw-io' ) );
				if ( $categories_list && bsw_io_categorized_blog() ) :
					?>
					<span class="cat-links">
						<?php printf( __( 'Posted in %1$s', 'bsw-io' ), $categories_list ); ?>
					</span>
				<?php endif; // End if categories ?>

				<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'bsw-io' ), ' - ' );
				if ( $tags_list ) :
					if ( $categories_list && bsw_io_categorized_blog() ) :
						echo '-';
					endif;
					?>
					<span class="tags-links">
						<?php printf( __( '%1$s', 'bsw-io' ), $tags_list ); ?>
					</span>
				<?php endif; // End if $tags_list ?>
			<?php endif; // End if 'post' == get_post_type() ?>
			<?php bsw_io_posted_on(); ?>
		</h5>
		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->
		<?php else : ?>
			<p>
				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'bsw-io' ) ); ?>
				<?php
				wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'bsw-io' ),
						'after'  => '</div>',
				) );
				?>
			</p>
		<?php endif; ?>
		<?php edit_post_link( __( 'Edit', 'bsw-io' ), '<span class="edit-link">', '</span>' ); ?>
		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'bsw-io' ), __( '1 Comment', 'bsw-io' ), __( '% Comments', 'bsw-io' ) ); ?></span>
		<?php endif; ?>
	</div><!-- column nine -->
</article>
