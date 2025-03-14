<?php
/**
 * Enqueue scripts and styles
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

function boes_branding_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style('boes-branding-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0');
    wp_enqueue_style('boes-branding-stylesheet', get_template_directory_uri() . '/assets/css/stylesheet.css', array(), '1.0.0');
    wp_enqueue_style('boes-branding-webfonts', get_template_directory_uri() . '/assets/css/MyWebfontsKit.css', array(), '1.0.0');
    
    // Enqueue custom scripts
    wp_enqueue_script('boes-branding-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'boes_branding_scripts'); 