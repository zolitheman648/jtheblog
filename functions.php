<?php

function jthecat_setup(){
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );
    
    /*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
    add_theme_support( 'title-tag' );
    
    /*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'jthecat-featured-image', 2000, 1200, true );

    add_image_size( 'jthecat-thumbnail-avatar', 100, 100, true );
    
    // This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top'    => __( 'Main menu', 'jthecat' ),
		'bottom' => __( 'Bottom menu', 'jthecat' ),
    ) );
    
    /*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
    ) );
    
    // Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
    ) );
	
}

add_action( 'after_setup_theme', 'jthecat_setup' );

// Sidebar function
function jtheblog_widget_setup(){
	
	register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'sidebar-1',
		'class' => 'custom',
		'description' => 'Standard Sidebar',
		'before_widget' => '<aside id="%1$s" class="widget-%2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>'
	));

}

add_action('widgets_init','jtheblog_widget_setup');

