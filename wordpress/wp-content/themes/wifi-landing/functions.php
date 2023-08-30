<?php


function wifi_assets() {
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('ui', get_template_directory_uri() . '/assets/css/ui.min.css');
    wp_enqueue_script('tw-elems', get_template_directory_uri() . '/assets/js/tw-elements.umd.min.js', array(), null, true);
    
};

add_action('wp_enqueue_scripts', 'wifi_assets');
add_filter('wpcf7_autop_or_not', '__return_false');
remove_filter( 'the_content', 'wpautop' );

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

