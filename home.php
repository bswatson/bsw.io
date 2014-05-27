<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package bsw.io
 */

get_header(); ?>
	<div id="intro-wrap" data-height="22.222">
		<div id="intro" class="preload darken">
			<div class="intro-item" style="background-image: url(http://placehold.it/1800x600/ddd/fff&text=bsw.io);">
				<div class="caption">
					<h2>Prolific Headline</h2>
					<p>And some words to go with it.</p>
				</div><!-- caption -->
			</div><!-- intro -->
		</div><!-- intro -->
	</div><!-- intro-wrap -->

	<div id="main" class="row">
		<div class="row-content buffer-left buffer-right buffer-bottom clear-after">
			<div class="column nine">
				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
						?>

					<?php endwhile; ?>

					<?php bsw_io_paging_nav(); ?>

				<?php else : ?>

					<?php get_template_part( 'content', 'none' ); ?>

				<?php endif; ?>
			</div><!-- column nine -->
			<?php get_sidebar(); ?>
		</div><!-- row-content -->
	</div><!-- row -->

<?php get_footer(); ?>