<?php
function mijn_thema_enqueue_styles() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mijn_thema_enqueue_styles');

// Enable featured images (post thumbnails)
add_theme_support('post-thumbnails');
