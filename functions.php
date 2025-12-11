<?php
/**
 * My Theme Functions
 *
 * This file acts as an index for all theme functionalities.
 */

// Define the path to our includes directory.
define( 'MYTHEME_SUB_FUNCTIONS_DIR', get_template_directory() . '/sub_functions/' );

// Require our separate function files.
require_once MYTHEME_SUB_FUNCTIONS_DIR . 'beliefs_page.php';
require_once MYTHEME_SUB_FUNCTIONS_DIR . 'enqueue_styles.php';
require_once MYTHEME_SUB_FUNCTIONS_DIR . 'events_page.php';
require_once MYTHEME_SUB_FUNCTIONS_DIR . 'home_page.php';
require_once MYTHEME_SUB_FUNCTIONS_DIR . 'ministries_page.php';

// Theme setup
function mychurch_setup() {
    // Enable dynamic title tags
    add_theme_support('title-tag');

    // Enable featured images
    add_theme_support('post-thumbnails');

    // Add support for custom logo
    add_theme_support('custom-logo', [
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ]);

    // Register primary menu
    register_nav_menus([
        'primary' => __('Primary Menu', 'mychurch'),
    ]);
}
add_action('after_setup_theme', 'mychurch_setup');
