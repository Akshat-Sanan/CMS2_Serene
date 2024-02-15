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
add_action( 'enqueue_block_editor_assets', 'serene_enqueue_block_editor_assets' );
