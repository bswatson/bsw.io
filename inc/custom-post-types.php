<?php
/**
 * Custom post types and taxonomies 
 * required to support this custom theme
 *
 * @package bsw.io
 */

/**
 * Register Custom Post Types
 *
 * Experience
 * Self Promotion
 * Skills
 */
function bsw_io_register_custom_post_types() {
	register_post_type('experience', 
		array(
			'label' => __('Experience', 'bsw-io'),
			'description' => __('Previous Experience for Companies'),
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'capability_type' => 'post',
			'map_meta_cap' => true,
			'has_archive' => false,
			'hierarchical' => false,
			'rewrite' => array('slug' => 'experience', 'with_front' => true),
			'query_var' => true,
			'menu_icon' => 'dashicons-businessman',
			'supports' => array('title','custom-fields','revisions','thumbnail'),
			'labels' => array (
				'name' => __('Experience', 'bsw-io'),
				'singular_name' => __('Experience', 'bsw-io'),
				'menu_name' => __('Experience', 'bsw-io'),
				'add_new' => __('Add Experience', 'bsw-io'),
				'add_new_item' => __('Add New Experience', 'bsw-io'),
				'edit' => __('Edit', 'bsw-io'),
				'edit_item' => __('Edit Experience', 'bsw-io'),
				'new_item' => __('New Experience', 'bsw-io'),
				'view' => __('View Experience', 'bsw-io'),
				'view_item' => __('View Experience', 'bsw-io'),
				'search_items' => __('Search Experience', 'bsw-io'),
				'not_found' => __('No Experience Found', 'bsw-io'),
				'not_found_in_trash' => __('No Experience Found in Trash', 'bsw-io'),
				'parent' => __('Parent Experience', 'bsw-io'),
			)
		)
	);
	
	register_post_type('self_promotion', 
		array(
			'taxonomies' => array('promotion_type'),
			'label' => __('Self Promotions', 'bsw-io'),
			'description' => __('Self Promoting items such as Testimonials and About Blurbs'),
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'capability_type' => 'post',
			'map_meta_cap' => true,
			'has_archive' => false,
			'hierarchical' => false,
			'rewrite' => array('slug' => 'self-promotion', 'with_front' => true),
			'query_var' => true,
			'menu_icon' => 'dashicons-megaphone',
			'supports' => array('title','editor','thumbnail'),
			'labels' => array (
				'name' => __('Self Promotions', 'bsw-io'),
				'singular_name' => __('Self Promotion', 'bsw-io'),
			)
		) 
	);
	
	register_post_type('skill', 
		array(
			'label' => __('Skills', 'bsw-io'),
			'description' => __('Technical and Professional Skills'),
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'capability_type' => 'post',
			'map_meta_cap' => true,
			'has_archive' => false,
			'hierarchical' => true,
			'rewrite' => array('slug' => 'skill', 'with_front' => true),
			'query_var' => true,
			'menu_icon' => 'dashicons-welcome-learn-more',
			'exclude_from_search' => true,
			'supports' => array('title','custom-fields','revisions'),
			'labels' => array (
				'name' => __('Skills', 'bsw-io'),
				'singular_name' => __('Skill', 'bsw-io'),
				'menu_name' => __('Skills', 'bsw-io'),
				'add_new' => __('Add Skill', 'bsw-io'),
				'add_new_item' => __('Add New Skill', 'bsw-io'),
				'edit' => __('Edit', 'bsw-io'),
				'edit_item' => __('Edit Skill', 'bsw-io'),
				'new_item' => __('New Skill', 'bsw-io'),
				'view' => __('View Skill', 'bsw-io'),
				'view_item' => __('View Skill', 'bsw-io'),
				'search_items' => __('Search Skills', 'bsw-io'),
				'not_found' => __('No Skills Found', 'bsw-io'),
				'not_found_in_trash' => __('No Skills Found in Trash', 'bsw-io'),
				'parent' => __('Parent Skill', 'bsw-io'),
			)
		) 
	);
	
	register_post_type('work', 
		array(
			'label' => __('Work', 'bsw-io'),
			'description' => '',
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'capability_type' => 'post',
			'map_meta_cap' => true,
			'has_archive' => false,
			'hierarchical' => false,
			'rewrite' => array('slug' => 'work', 'with_front' => true),
			'query_var' => true,
			'menu_icon' => 'dashicons-welcome-view-site',
			'supports' => 			array('title','editor','excerpt','trackbacks','comments','revisions','thumbnail','author','page-attributes','post-formats'),
			'labels' => array (
				'name' => __('Work', 'bsw-io'),
				'singular_name' => __('Work', 'bsw-io'),
				'menu_name' => __('Work', 'bsw-io'),
				'add_new' => __('Add Work', 'bsw-io'),
				'add_new_item' => __('Add New Work', 'bsw-io'),
				'edit' => __('Edit', 'bsw-io'),
				'edit_item' => __('Edit Work', 'bsw-io'),
				'new_item' => __('New Work', 'bsw-io'),
				'view' => __('View Work', 'bsw-io'),
				'view_item' => __('View Work', 'bsw-io'),
				'search_items' => __('Search Work', 'bsw-io'),
				'not_found' => __('No Work Found', 'bsw-io'),
				'not_found_in_trash' => __('No Work Found in Trash', 'bsw-io'),
				'parent' => __('Parent Work', 'bsw-io'),
			)
		) 
	);
}
add_action('init', 'bsw_io_register_custom_post_types');


/**
 * Register Custom Taxonomies
 *
 * Promotion Type - Self Promotion
 */
function bsw_io_register_custom_taxonomies() {
	register_taxonomy( 'promotion_type', 
		array (
			0 => 'self_promotion',
		),
		array( 
			'hierarchical' => true, // Must be true to show up in ACF Location Rules
			'label' => __('Promotion Types', 'bsw-io'),
			'show_ui' => true,
			'query_var' => true,
			'show_admin_column' => false,
			'labels' => array (
				'search_items' => __('Promotion Types', 'bsw-io'),
			)
		)
	);
	
	register_taxonomy( 'capabilities',
		array (
			0 => 'work',
		),
		array( 'hierarchical' => false,
			'label' => __('Capabilities', 'bsw-io'),
			'show_ui' => true,
			'query_var' => true,
			'show_admin_column' => false,
			'labels' => array (
				'search_items' => __('Capability', 'bsw-io'),
			)
		) 
	);
	
	register_taxonomy( 'roles',
		array (
			0 => 'work',
		),
		array( 'hierarchical' => false,
			'label' => __('Roles', 'bsw-io'),
			'show_ui' => true,
			'query_var' => true,
			'show_admin_column' => false,
			'labels' => array (
				'search_items' => __('Role', 'bsw-io'),
			)
		) 
	);
}
add_action('init', 'bsw_io_register_custom_taxonomies');