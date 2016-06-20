<?php

function dd()
{
	$args = func_get_args();
	call_user_func_array('var_dump', $args);
	die();
}

function get_theme_domain() {
	return 'freelancer';
}


add_action( 'after_setup_theme', function() {
	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'header-menu' => __( 'Header Menu', get_theme_domain() ),
	) );
} );

/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 * @since Twenty Sixteen 1.0
 */
function freelancer_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', get_theme_domain() ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', get_theme_domain() ),
	) );
}
add_action( 'widgets_init', 'freelancer_widgets_init' );

add_theme_support( 'post-thumbnails' );