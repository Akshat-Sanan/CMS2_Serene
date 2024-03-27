<?php
/*
* Plugin Name: serene-customPlugin
 */

 function serene_enqueue_block_editor_assets() {
    wp_enqueue_script(
        'serene-customPlugin',
        plugins_url( 'plugin.js', __FILE__ ),
        array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
        filemtime( plugin_dir_path( __FILE__ ) . '/plugin.js' )
    );
}

wp_enqueue_style(
    'serene-customPlugin-css',
    plugins_url( 'style.css', __FILE__ ),
    array(), // No dependencies
    filemtime( plugin_dir_path( __FILE__ ) . '/style.css' ) // Version parameter to bust cache
);

add_action( 'enqueue_block_editor_assets', 'serene_enqueue_block_editor_assets' );
