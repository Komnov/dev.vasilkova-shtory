<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

// END ENQUEUE PARENT ACTION

// создаем область меню для шапки
function storefront_child_register_new_menu() {
    register_nav_menu( 'header-menu', __( 'Header menu', 'storefront-child' ) );
}
add_action( 'after_setup_theme', 'storefront_child_register_new_menu', 20 );

// создаем область меню для футера
function storefront_child_register_footer_menu() {
    register_nav_menu( 'footer-menu', __( 'Footer Menu', 'storefront-child' ) );
}
add_action( 'after_setup_theme', 'storefront_child_register_footer_menu' );

// основной файл со стилями
function storefront_style_enqueue_styles() {
    wp_enqueue_style( 'style-fonts', get_stylesheet_directory_uri() . '/assets/css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'storefront_style_enqueue_styles' );

//подключаем стили со шрифтами
function storefront_child_enqueue_styles() {
    wp_enqueue_style( 'child-fonts', get_stylesheet_directory_uri() . '/assets/css/fonts.css' );
}
add_action( 'wp_enqueue_scripts', 'storefront_child_enqueue_styles' );

//подключаем стили для адаптива
function storefront_adaptive_enqueue_styles() {
    wp_enqueue_style( 'adaptive-fonts', get_stylesheet_directory_uri() . '/assets/css/adaptive.css' );
}
add_action( 'wp_enqueue_scripts', 'storefront_adaptive_enqueue_styles' );

// подключаем файл со скриптами
function enqueue_custom_scripts() {
    wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/assets/js/main.js', array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_custom_scripts' );

function enqueue_jquery() {
    wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_jquery' );
