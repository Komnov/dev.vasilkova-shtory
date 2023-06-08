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


//подключаем стили со шрифтами
function storefront_child_enqueue_styles() {
    wp_enqueue_style( 'child-fonts', get_stylesheet_directory_uri() . '/assets/css/fonts.css' );
}
add_action( 'wp_enqueue_scripts', 'storefront_child_enqueue_styles' );