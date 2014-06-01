<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package bsw.io
 */

get_header(); ?>

<div id="main" class="row">
	<div class="row-content buffer-left buffer-right buffer-bottom clear-after">
		<div class="column nine">
			<?php if ( have_posts() ) : ?>
				<div class="search-results">
					<h4><?php printf( __( ' %s %s for "%s" ', 'bsw-io' ), '<span>' .  $wp_query->post_count . '<span>' , $wp_query->post_count > 1 ? 'results' : 'result' , '<span>' . get_search_query() . '</span>' ); ?></h4>
				</div>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'content', 'search' );
					?>

				<?php endwhile; ?>

				<?php bsw_io_paging_nav(); ?>

			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>
		</div><!-- column nine -->
		<?php get_sidebar('search-page'); ?>
	</div><!-- row-content -->
</div><!-- row -->

<?php get_footer(); ?>
