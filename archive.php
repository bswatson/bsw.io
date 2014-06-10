<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package bsw.io
 */
?>
<?php get_header(); ?>

	<div id="main" class="row">
		<div class="row-content buffer-left buffer-right buffer-bottom clear-after">

		<?php if ( have_posts() ) : ?>

			<section class="clear-after">
				<h2 class="page-title">
					<?php
						if ( is_category() ) :
							single_cat_title(__( 'Category: ', 'bsw-io' ), true);

						elseif ( is_tag() ) :
							single_tag_title(__( 'Tag: ', 'bsw-io' ) ,true);

						elseif ( is_author() ) :
							printf( __( 'Author: %s', 'bsw-io' ), '<span class="vcard">' . get_the_author() . '</span>' );

						elseif ( is_day() ) :
							printf( __( 'Day: %s', 'bsw-io' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Month: %s', 'bsw-io' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'bsw-io' ) ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Year: %s', 'bsw-io' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'bsw-io' ) ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'bsw-io' );

						elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
							_e( 'Galleries', 'bsw-io');

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'bsw-io');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'bsw-io' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'bsw-io' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'bsw-io' );

						elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
							_e( 'Statuses', 'bsw-io' );

						elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
							_e( 'Audios', 'bsw-io' );

						elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
							_e( 'Chats', 'bsw-io' );

						else :
							_e( 'Archives', 'bsw-io' );

						endif;
					?>
				</h2>
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</section>
				<?php get_template_part( 'content' , 'listing' )?>
				<?php get_sidebar(); ?>
			
			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>
				<?php get_sidebar( 'search-page' ); ?>

			<?php endif; ?>
		</div><!-- row-content -->
	</div><!-- row -->

<?php get_footer();