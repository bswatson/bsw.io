<?php
/**
 * bsw.io functions and definitions
 *
 * @package bsw.io
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 664; /* pixels */
}

if ( ! function_exists( 'bsw_io_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function bsw_io_setup() {

		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on bsw.io, use a find and replace
		 * to change 'bsw-io' to the name of your theme in all the template files
		 */
		load_theme_textdomain( 'bsw-io', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 600, 600, true );
		add_image_size( 'bsw-featured-header', 1800, 600);
		add_image_size( 'bsw-carousel', 800, 300, true);
		add_image_size( 'bsw-latest-work', 800, 600, array('center', 'center'));
		add_image_size( 'bsw-experience-logo', 120, 120, true);
 
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
				'primary' => __( 'Primary Menu', 'bsw-io' ),
		) );

		// Enable support for Post Formats.
		add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

		// Setup the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'bsw_io_custom_background_args', array(
				'default-color' => 'ffffff',
				'default-image' => '',
		) ) );

		// Enable support for HTML5 markup.
		add_theme_support( 'html5', array(
				'comment-list',
				'search-form',
				'comment-form',
				'gallery',
				'caption',
		) );
	}
endif; // bsw_io_setup
add_action( 'after_setup_theme', 'bsw_io_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function bsw_io_widgets_init() {
	register_sidebar( array(
			'name'          => __( 'Primary Sidebar', 'bsw-io' ),
			'id'            => 'primary-sidebar',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>',
	) );
	
	register_sidebar( array(
			'name'          => __( 'Search Sidebar', 'bsw-io' ),
			'id'            => 'sidebar-search-page',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>',
	) );

	register_sidebar( array(
			'name'          => __( 'Footer', 'bsw-io' ),
			'id'            => 'footer-widgets',
			'description'   => '',
			'before_widget' => '<div id="%1$s" class="widget column three %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'bsw_io_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bsw_io_scripts() {
	wp_enqueue_style( 'dashicons' );
	wp_enqueue_style( 'bsw-io-custom-style', get_template_directory_uri() . '/css/layers.min.css' );
	wp_enqueue_style( 'bsw-io-font-awesome-style', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'bsw-io-style', get_stylesheet_uri() );

	wp_enqueue_script( 'bsw-io-google-api', 'https://maps.googleapis.com/maps/api/js?sensor=false', array(), '', true);
	wp_enqueue_script( 'bsw-io-plugins', get_template_directory_uri() . '/js/plugins.js', array('jquery'), '', true);
	wp_enqueue_script( 'bsw-io-beetle', get_template_directory_uri() . '/js/beetle.js', array('jquery'), '', true);
	wp_enqueue_script( 'bsw-io-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bsw_io_scripts' );

/**
 * Load External fonts
 */
function load_fonts() {
	wp_register_style('bsw-io-google-fonts', 'http://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400italic,700italic,400,700');
	wp_enqueue_style( 'bsw-io-google-fonts');
}
add_action('wp_print_styles', 'load_fonts');

/**
 * Add media query support for pre-IE9 browsers
 */
function add_ie_respond_js () {
	echo '<!--[if lt IE 9]>';
	echo '<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>';
	echo '<![endif]-->';
}
add_action('wp_head', 'add_ie_respond_js');

/**
 * Register Custom Post Types and Taxonomies
 */
require get_template_directory() . '/inc/custom-post-types.php';

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
//require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
//require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom comment walker
 */
require get_template_directory() . '/inc/comment-walker.php';