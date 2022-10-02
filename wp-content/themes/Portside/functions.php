<?php
function my_theme_enqueue_styles() {
    $parent_style = 'divi-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css', array(), strval(time()) );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ), strval(time()));
    wp_enqueue_script( 'child-script', get_stylesheet_directory_uri() . '/script.js', array( 'jquery' ), strval(time()), true );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
add_filter( 'body_class','my_body_classes' );
function my_body_classes( $classes ) {
    $custom_class = get_post_meta(get_the_ID(), 'custom_body_class', true);
    $classes[] = $custom_class;
    return $classes;
}