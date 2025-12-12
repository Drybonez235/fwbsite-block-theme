<?php
/**
 * Enqueues all CSS files found in the /css_skins/basic/ folder.
 *
 * All enqueued styles will depend on the main theme stylesheet ('church-base-style').
 * The file modification time is used as the version number for cache busting.
 */
add_action('wp_enqueue_scripts', 'fwbsite_enqueue_basic_styles');

function fwbsite_enqueue_basic_styles() {

    $theme_uri  = get_template_directory_uri();
    $theme_path = get_template_directory();

    // 1. Define the directory path and URI for the 'basic' skin.
    $basic_dir_path = trailingslashit($theme_path . '/css_skins/basic');
    $basic_dir_uri  = trailingslashit($theme_uri  . '/css_skins/basic');

    // 2. Check if the directory exists and process the files.
    if (is_dir($basic_dir_path)) {
        // Find all .css files in the directory.
        $files = glob($basic_dir_path . '*.css');

        // Sort the files naturally (e.g., file-1.css, file-10.css, file-2.css becomes file-1.css, file-2.css, file-10.css).
        natsort($files);
        $files = array_values($files);

        // Define the common dependency (assuming you still want the main theme style to load first).
        $dependency_handle = 'church-base-style';
        
        // Ensure the main theme stylesheet is registered/enqueued first (optional, based on your theme structure).
        // If your main style.css isn't loaded elsewhere, uncomment the lines below:
        wp_register_style('church-base-style', get_stylesheet_uri(), [], wp_get_theme()->get('Version'));
        wp_enqueue_style('church-base-style');


        // Loop through and enqueue each file.
        foreach ($files as $file_path) {
            $file_name = basename($file_path);
            
            // Create a unique handle (e.g., 'fwbsite-basic-layout').
            $handle = 'fwbsite-basic-' . sanitize_key(str_replace('.css', '', $file_name));
            
            // Use file modification time as the version number for cache busting.
            $ver = filemtime($file_path);
            
            // Register the style, making it depend on the main style.
            wp_register_style($handle, $basic_dir_uri . $file_name, [$dependency_handle], $ver);
            
            // Enqueue the style.
            wp_enqueue_style($handle);
        }
    }
}