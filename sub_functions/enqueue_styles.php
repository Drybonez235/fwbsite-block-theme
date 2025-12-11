<?php

add_action('wp_enqueue_scripts', 'fwbsite_enqueue_styles', 60);

function fwbsite_enqueue_styles() {

    $theme_uri  = get_template_directory_uri();
    $theme_path = get_template_directory();
    $theme_ver  = wp_get_theme()->get('Version');

    // 1) Reset and Base
    wp_register_style('church-reset', $theme_uri . '/css_skins/reset.css', [], $theme_ver);
    wp_enqueue_style('church-reset');

    wp_register_style('church-base-style', get_stylesheet_uri(), ['church-reset'], $theme_ver);
    wp_enqueue_style('church-base-style');

    // 2) Determine chosen skin
    $skin = get_theme_mod('church_style_skin', 'basic'); // e.g. 'modern' or 'city'
    $skin_dir_path = get_template_directory() . '/css_skins/' . $skin . '/';
    $skin_dir_uri  = get_template_directory_uri() . '/css_skins/' . $skin . '/';

    // 3) Locate the main skin file (prefer {skin}.css else first .css)
    $skin_css_file = $skin_dir_path . $skin . '.css';

    // Register & enqueue skin file (so variables are present)
    $skin_handle = 'fwbsite-skin-' . sanitize_key($skin);
    $has_skin_file = false;
    if ($skin_css_file) {
        $skin_css_uri = $skin_dir_uri . basename($skin_css_file);
        $skin_ver = filemtime($skin_css_file);
        wp_register_style($skin_handle, $skin_css_uri, ['church-base-style'], $skin_ver);
        wp_enqueue_style($skin_handle);
        $has_skin_file = true;
    }

    // 4) Load all CSS from /css_skins/basic/ and make them depend on the skin (or base if no skin)
    $basic_dir_path = trailingslashit($theme_path . '/css_skins/basic');
    $basic_dir_uri  = trailingslashit($theme_uri  . '/css_skins/basic');

    if (is_dir($basic_dir_path)) {
        $files = glob($basic_dir_path . '*.css');
        natsort($files);
        $files = array_values($files);

        foreach ($files as $file_path) {
            $file_name = basename($file_path);
            $handle = 'fwbsite-basic-' . sanitize_key(str_replace('.css', '', $file_name));
            $deps = $has_skin_file ? array($skin_handle) : array('church-base-style');
            $ver = filemtime($file_path);
            wp_register_style($handle, $basic_dir_uri . $file_name, $deps, $ver);
            wp_enqueue_style($handle);
        }
    }
}
/**
 * Registers the Theme Style panel, section, and controls in the Customizer.
 *
 * @param WP_Customize_Manager $wp_customize The WP_Customize_Manager instance.
 */
function church_register_style_customizer( $wp_customize ) {

    // --- 1. Add the new Customizer Panel for Theme Styles ---
    $style_panel_id = 'church_style_panel'; // Unique ID for our new panel
    if ( ! $wp_customize->get_panel( $style_panel_id ) ) {
        $wp_customize->add_panel(
            $style_panel_id,
            array(
                'title'       => __( 'Edit Site Theme', 'your-theme' ), // This is the top-level title in the Customizer
                'description' => __( 'Customize the overall look and feel of your theme with different style presets.', 'your-theme' ),
                'priority'    => 60, // Adjust priority to position it in the customizer
                                 // (e.g., between "Site Identity" (20) and "Menus" (50))
            )
        );
    }

    // --- 2. Add a Section that will go inside the "Theme Styles" Panel ---
    $style_section_id = 'church_style_settings_section'; // Unique ID for this section
    if ( ! $wp_customize->get_section( $style_section_id ) ) {
        $wp_customize->add_section(
            $style_section_id,
            array(
                'title'       => __( 'Select Theme', 'your-theme' ), // Title of the section inside the panel
                'description' => __( 'Select from various pre-defined style skins for your theme.', 'your-theme' ),
                'panel'       => $style_panel_id, // IMPORTANT: Assign this section to the new Theme Styles panel
                'priority'    => 60, // Priority WITHIN the 'Theme Styles' panel
            )
        );
    }

    // Add setting
    $setting_id = 'church_style_skin'; // Define setting ID for clarity
    $wp_customize->add_setting(
        $setting_id,
        array(
            'default'           => 'basic',
            'transport'         => 'refresh',
            'sanitize_callback' => 'church_info_sanitize_style_skin', // Keep the sanitization callback
        )
    );

    // Add control
    $control_id = 'church_style_skin_control'; // Define control ID for clarity
    $wp_customize->add_control(
        $control_id,
        array(
            'label'   => __( 'Choose Theme Style', 'your-theme' ),
            'section' => $style_section_id, // IMPORTANT: Link to our new Style Presets section
            'settings'=> $setting_id,
            'type'    => 'select',
            'choices' => array(
                'classic' => __( 'Classic', 'your-theme' ),
                'country'  => __( 'Country', 'your-theme' ),
                'modern'  => __( 'Modern', 'your-theme' ),
                'city'    => __( 'City', 'your-theme' ),
                'sunrise' => __( 'Sunrise', 'your-theme' ),
            ),
        )
    );
}

// Keep your sanitization function as is
/**
 * Sanitize the theme style skin selection.
 *
 * @param string $input The input value.
 * @param WP_Customize_Setting $setting The setting object.
 * @return string The sanitized value or the default.
 */
function church_info_sanitize_style_skin( $input, $setting ) {
    // Get list of choices from the control (assuming 'church_style_skin_control' is the ID)
    // IMPORTANT: Make sure the control ID matches what you've defined: $control_id
    $choices = $setting->manager->get_control( 'church_style_skin_control' )->choices;

    // If the input is a valid choice, return it, otherwise return the default.
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

add_action( 'customize_register', 'church_register_style_customizer' );