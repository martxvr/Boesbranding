<?php
/**
 * Theme functions and definitions
 */

// Include theme functions
require_once get_template_directory() . '/inc/setup.php';
require_once get_template_directory() . '/inc/enqueue.php';
require_once get_template_directory() . '/inc/template-functions.php';

// Enable featured images (post thumbnails)
add_theme_support('post-thumbnails');

// Enqueue scripts and styles
function boes_branding_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style('boes-branding-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0');
    wp_enqueue_style('boes-branding-stylesheet', get_template_directory_uri() . '/assets/css/stylesheet.css', array(), '1.0.0');
    wp_enqueue_style('boes-branding-webfonts', get_template_directory_uri() . '/assets/css/MyWebfontsKit.css', array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'boes_branding_scripts'); 