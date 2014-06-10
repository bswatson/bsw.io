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
?>
<?php get_header(); ?>
<?php get_template_part( 'content' , 'intro' ); ?>
	<div id="main" class="row">
		<div class="row-content buffer-left buffer-right buffer-bottom clear-after">
			<?php get_template_part( 'content' , 'listing' )?>
			<?php get_sidebar(); ?>
		</div><!-- row-content -->
	</div><!-- row -->
<?php get_footer();