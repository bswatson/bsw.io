<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package bsw.io
 */
?>

<aside role="complementary" class="sidebar column three last">
	<?php if ( ! dynamic_sidebar( 'sidebar-search-page' ) ) : ?>
		
		<aside id="archives" class="widget">
			<h4 class="widget-title"><?php _e( 'Archives', 'bsw-io' ); ?></h4>
			<ul>
				<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
			</ul>
		</aside>

		<aside id="meta" class="widget">
			<h4 class="widget-title"><?php _e( 'Meta', 'bsw-io' ); ?></h4>
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<?php wp_meta(); ?>
			</ul>
		</aside>

	<?php endif; // end sidebar widget area  ?>
</aside>
