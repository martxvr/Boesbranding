<?php
/**
 * Theme setup functions
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

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