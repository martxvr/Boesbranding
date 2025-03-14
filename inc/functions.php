<?php
/**
 * Theme functions and definitions
 */

// Include required files
require_once get_template_directory() . '/inc/setup.php';
require_once get_template_directory() . '/inc/enqueue.php';
require_once get_template_directory() . '/inc/template-functions.php';

// Theme Setup
function boes_branding_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'boes-branding'),
        'footer' => esc_html__('Footer Menu', 'boes-branding'),
    ));
}
add_action('after_setup_theme', 'boes_branding_setup');

// Enqueue scripts and styles
function boes_branding_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style('boes-branding-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0');
    
    // Enqueue custom scripts
    wp_enqueue_script('boes-branding-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'boes_branding_scripts');
