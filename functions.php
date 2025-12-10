<?php

/**
 * Registers block pattern categories and individual patterns.
 */
function fwbchurch_register_block_patterns() {
    // 1. Register a custom pattern category specific to your church theme. (Keep this)
    register_block_pattern_category(
        'fwbchurch',
        array( 'label' => esc_html__( 'FWB Church Layouts', 'fwbchurch' ) )
    );

    // 2. Register individual patterns manually (REPLACEMENT CODE)

    
    // Service Times Card Pattern (Your current pattern)
    register_block_pattern(
        'fwbchurch/service-times-card',
        require get_template_directory() . '/patterns/service-times-card.php'
    );
    
    // You must add a 'register_block_pattern' line for every file in your /patterns folder.
}
add_action( 'init', 'fwbchurch_register_block_patterns' );