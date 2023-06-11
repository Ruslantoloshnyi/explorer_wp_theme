<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package explorer
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function explorer_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'explorer_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function explorer_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'explorer_pingback_header' );

/**
 * the_excerpt function
 */
// change count symbol the_excerpt function
add_filter( 'excerpt_length', function(){
	return 65;
} );

// change end visual
add_filter( 'excerpt_more', fn() => '  ...' );


// add cutom post type
function create_custom_post_type() {
    $args = array(
        'public' => true,
        'label'  => 'Stories',
        'supports' => array( 'title', 'editor', 'thumbnail', 'author', ),
		'taxonomies' => array( 'post_tag', 'adventure' )
        // Другие параметры настройки
    );
    register_post_type( 'stories', $args );
}
add_action( 'init', 'create_custom_post_type' );

// add taxanomies into stories post type
function create_adventure_taxonomy() {
    $labels = array(
        'name'              => 'Adventures',
        'singular_name'     => 'Adventure',
        'search_items'      => 'Search adventure',
        'all_items'         => 'All adventures',
        'edit_item'         => 'Edit adventures',
        'update_item'       => 'Update adventure',
        'add_new_item'      => 'Add new adventure',
        'new_item_name'     => 'new adventure name',
        'menu_name'         => 'Adventures'
    );

    $args = array(
        'hierarchical'      => true, // Если таксономия иерархическая (как категории)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'adventures' )
    );

    register_taxonomy( 'adventure', 'stories', $args );
}
add_action( 'init', 'create_adventure_taxonomy' );
