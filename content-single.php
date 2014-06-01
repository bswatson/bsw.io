<?php
/**
 * @package bsw.io
 */
?>

<article role="main" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		/* translators: used between list items, there is a space after the comma */
		$category_list = get_the_category_list( __( ', ', 'bsw-io' ) );

		/* translators: used between list items, there is a space after the comma */
		$tag_list = get_the_tag_list( '', __( ', ', 'bsw-io' ) );
	?>
	<h5 class="meta-post"><?php echo $tag_list; ?> - <?php bsw_io_posted_on(); ?></h5>
	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	<?php the_content(); ?>
</article>
<?php edit_post_link( __( 'Edit', 'bsw-io' ), '<span class="edit-link">', '</span>' ); ?>
