<?php
/*
 * Plugin Name: Caprica Air Core Block Hooks
 */

// Function that add_action registers so WP knows to look at caprica-air-core-block-hooks.js for custom style classes.
function caprica_air_enqueue_block_editor_assets() {
    wp_enqueue_script(
        'caprica-air-core-block-hooks',
        plugins_url( './assets/js/caprica-air-core-block-hooks.js', __FILE__ ),
        array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
        filemtime( plugin_dir_path( __FILE__ ) . './assets/js/caprica-air-core-block-hooks.js')
    );
}

add_action( 'enqueue_block_editor_assets', 'caprica_air_enqueue_block_editor_assets' );