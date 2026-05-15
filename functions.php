<?php
/**
 * Ohio Child Theme functions.
 */

add_action( 'wp_enqueue_scripts', 'kmra_ohio_child_enqueue_styles' );

function kmra_ohio_child_enqueue_styles() {
    wp_enqueue_style(
        'ohio-parent-style',
        get_template_directory_uri() . '/style.css'
    );

    wp_enqueue_style(
        'ohio-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'ohio-parent-style' ),
        wp_get_theme()->get( 'Version' )
    );
}