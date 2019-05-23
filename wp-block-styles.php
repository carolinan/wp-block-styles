<?php
/**
 * This file adds all the avialable blocks to your theme at once.
 * Copy the code below to your themes functions.php file or include this file.
 *
 * Update: 20190523
 *
 * @package Wp-block-styles
 */

/**
 * Add the editor assets
 */
function slug_editor_assets() {
	wp_enqueue_script( 'wp-block-styles-script', get_theme_file_uri( 'all-block-styles.js' ), array( 'wp-blocks', 'wp-i18n' ) );
	wp_set_script_translations( 'wp-block-styles-script', 'text-domain' );
}

add_action( 'enqueue_block_editor_assets', 'slug_editor_assets' );

/**
 * Add the block assets
 */
function slug_block_styles() {
	wp_enqueue_style( 'wp-block-styles', get_theme_file_uri( 'all-block-styles.css' ), false );
}
add_action( 'enqueue_block_assets', 'slug_block_styles' );





