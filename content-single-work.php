<?php
/**
 * @package bsw.io
 */
?>

<article role="main" id="post-<?php the_ID(); ?>" <?php post_class('column nine'); ?>
	<?php
		$roles = get_the_terms( the_ID(), 'roles'); 
		$roles_list = "";
		if ( !empty( $roles ) && !is_wp_error( $roles ) ){
			$roles_list = "<ul>";
			foreach ( $roles as $role ) {
				$roles_list .= "<li>" . $role->name . "</li>";
			}
			$roles_list .= "</ul>";
		}
		
		$capabilities = get_the_terms( the_ID(), 'capabilities'); 
		$capabilities_list = "";
		if ( !empty( $capabilities ) && !is_wp_error( $capabilities ) ){
			$capabilities_list = "<ul>";
			foreach ( $capabilities as $capability ) {
				$capabilities_list .= "<li>" . $capability->name . "</li>";
			}
			$capabilities_list .= "</ul>";
		}
	?>
	<h5 class="meta-post"></h5>
	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	<?php the_content(); ?>
</article>
<aside role="complementary" class="sidebar column three last">
	<div class="widget">
		<h4>Client</h4>
		<p><?php the_field('client')?></p>
	</div>
	<div class="widget">
		<h4>Role in Project</h4>
		<ul>
			<?php echo $roles_list; ?>
		</ul>
	</div>
	<div class="widget">
		<h4>Project included</h4>
		<ul>
			<?php echo $capabilities_list; ?>
		</ul>
	</div>
	<div class="widget">
		<h4>External Links</h4>
		<a href="<?php the_field('external_link'); ?>" class="button transparent">View Project</a>
	</div>
</aside>
<?php edit_post_link( __( 'Edit', 'bsw-io' ), '<span class="edit-link">', '</span>' ); ?>
