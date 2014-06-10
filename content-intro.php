<?php
/**
 * @package bsw.io
 */
?>
<?php
	$page_for_posts = get_option('page_for_posts');	
	$posts_page = get_page( $page_for_posts);
?>
<?php if ( has_post_thumbnail( $page_for_posts ) ) :
	$header = wp_get_attachment_image_src( get_post_thumbnail_id($page_for_posts), 'bsw-featured-header' );
	$header_url = $header['0'];
?>
	<div id="intro-wrap" data-height="22.222">
		<div id="intro" class="preload darken"> 
			<div class="intro-item" style="background-image: url(<?php echo $header_url; ?>);">
				<div class="caption">
					<?php echo $posts_page->post_content; ?>
				</div><!-- caption -->
			</div>
		</div><!-- intro -->
	</div><!-- intro-wrap -->
<?php endif; ?>