<?php
/**
 *  A sepia colored overlay
 *
 * How to use:
 * Update the slug and the text domain in all 3 files.
 * Make sure that the file paths to the js and css are correct.
 *
 * @package Wp-block-styles
 */

/**
 * Add the editor assets
 */
function slug_editor_assets() {
	wp_enqueue_script( 'slug-block-styles-script', get_theme_file_uri( 'filter-sepia-block-styles.js' ), array( 'wp-blocks', 'wp-i18n' ) );
	wp_set_script_translations( 'slug-block-styles-script', 'text-domain' );
}

add_action( 'enqueue_block_editor_assets', 'slug_editor_assets' );

/**
 * Add the block assets
 */
function slug_block_styles() {
	wp_enqueue_style( 'slug-block-styles', get_theme_file_uri( 'filter-sepia-block-styles.css' ), false );
}
add_action( 'enqueue_block_assets', 'slug_block_styles' );
