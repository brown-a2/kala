<?php

function kala_theme_setup() {
    // Add theme support for block styles
    add_theme_support( 'wp-block-styles' );

    // Enqueue theme stylesheet
    wp_enqueue_style( 'kala-theme-style', get_stylesheet_uri() );
}

add_action( 'after_setup_theme', 'kala_theme_setup' );

