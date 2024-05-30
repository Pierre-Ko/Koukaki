<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('child-style2', get_stylesheet_directory_uri() . '/assets/css/style2.css');
    wp_enqueue_style('animation', get_stylesheet_directory_uri() . '/assets/css/animation.css');
    wp_enqueue_script( 'custom-scripts', get_stylesheet_directory_uri() . '/assets/js/app.js', array('jquery'), null, true );
    
    wp_enqueue_script('swiper-js', get_stylesheet_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), '6.7.5', true);
    wp_enqueue_style('swiper-css', get_stylesheet_directory_uri() . '/assets/css/swiper-bundle.min.css');
    wp_enqueue_script('swiper-init', get_stylesheet_directory_uri() . '/assets/js/swiper-init.js', array('swiper-js'), '1.0', true);
    
    wp_enqueue_script('skrollr-min', get_stylesheet_directory_uri() .'/assets/js/skrollr.min.js'); // skrollr
    
    wp_enqueue_script('gsap', 'https://unpkg.com/gsap@3.9.0/dist/gsap.min.js', array(), '3.9.0', false);
    wp_enqueue_script('scrolltrigger', 'https://unpkg.com/scrolltrigger-classes@3.8.0/dist/ScrollTrigger.min.js', array('gsap'), '3.8.0', false);
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() .'/assets/js/custom-script.js', array('gsap', 'scrolltrigger'), null, true);
}

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}