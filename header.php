<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package bsw.io
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="<?php if ( is_single() ) {
		single_post_title('', true);
	} else {
		bloginfo('name'); echo " - "; bloginfo('description');
	}
	?>">
	<style type="text/css">@-ms-viewport{width: device-width;}</style>
	<title><?php wp_title( "&raquo;", true, 'right' ); ?></title>
	<?php // <link rel="icon" href="favicon.ico"> ?>
	<?php // <link rel="apple-touch-icon" href="img/apple-touch-icon.png"> ?>
	<?php // <link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png"> ?>
	<?php // <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png"> ?>
	<?php // <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png"> ?>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'bsw-io' ); ?></a>
<header role="banner" class="transparent light">
	<div class="row">
		<div class="nav-inner row-content buffer-left buffer-right even clear-after">
			<div id="brand">
				<h1 class="reset"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</div><!-- brand -->
			<a id="menu-toggle" href="#"><i class="fa fa-bars fa-lg"></i></a>
			<nav role="navigation">
				<?php wp_nav_menu(
						array(
								'menu'            => 'primary',
								'container'       => '',
								'container_class' => 'false',
								'container_id'    => '',
								'menu_class'      => 'reset',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'items_wrap'      => '<ul id="%1$s" class="menu-item %2$s">%3$s</ul>',
								'depth'           => 0
						)
				); ?>
			</nav>
		</div><!-- row-content -->
	</div><!-- row -->
</header>

<main role="main">
