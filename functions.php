<?php
/**
 * Ressources du theme enfant DFEF.
 * Le parent Twenty Twenty-Five charge deja sa feuille de style.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function dfef_child_enqueue_assets() {
    $theme_version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style(
        'dfef-child-style',
        get_stylesheet_uri(),
        array( 'twentytwentyfive-style' ),
        $theme_version
    );

    wp_enqueue_style(
        'dfef-child-assets',
        get_stylesheet_directory_uri() . '/assets/css/style.css',
        array( 'dfef-child-style' ),
        $theme_version
    );

    wp_enqueue_script(
        'dfef-child-main',
        get_stylesheet_directory_uri() . '/assets/js/main.js',
        array(),
        $theme_version,
        true
    );
}
add_action( 'wp_enqueue_scripts', 'dfef_child_enqueue_assets', 20 );

function eco_enqueue_card_styles() {
    wp_enqueue_style(
        'eco-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Nunito:wght@800&display=swap',
        array(),
        null
    );

    $relative_path = '/assets/css/components/card.css';

    wp_enqueue_style(
        'eco-card',
        get_stylesheet_directory_uri() . $relative_path,
        array( 'eco-fonts' ),
        filemtime( get_stylesheet_directory() . $relative_path )
    );
}
add_action( 'enqueue_block_assets', 'eco_enqueue_card_styles' );

function eco_enqueue_hero_styles() {
    $relative_path = '/assets/css/components/hero.css';

    wp_enqueue_style(
        'eco-hero',
        get_stylesheet_directory_uri() . $relative_path,
        array( 'eco-fonts' ),
        filemtime( get_stylesheet_directory() . $relative_path )
    );
}
add_action( 'enqueue_block_assets', 'eco_enqueue_hero_styles' );

function eco_enqueue_site_chrome() {
    $relative_path = '/assets/css/components/site-chrome.css';
    wp_enqueue_style(
        'eco-site-chrome',
        get_stylesheet_directory_uri() . $relative_path,
        array( 'eco-fonts' ),
        filemtime( get_stylesheet_directory() . $relative_path )
    );
}
add_action( 'enqueue_block_assets', 'eco_enqueue_site_chrome' );
