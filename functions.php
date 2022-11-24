<?php
if ( ! function_exists( 'adventcalendar_setup' ) ) :

    function adventcalendar_setup() {

        // Let wordpress manage the page title
        add_theme_support( 'title-tag' );

        add_theme_support( 'post-thumbnails' );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

        // Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'adventcalendar_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => get_theme_file_uri('pictures/bck@0,5x.jpg'),
        ) ) );
    }
endif;
add_action( 'after_setup_theme', 'adventcalendar_setup' );

/**
 * Theme CSS & JS
 */
function adventcalendar_scripts() {

    wp_enqueue_style('adventcalendar-style-bootstrap', get_theme_file_uri('/css/bootstrap.min.css'));
    wp_enqueue_style('adventcalendar-style-main', get_stylesheet_uri());

    wp_enqueue_script('adventcalendar-script-jquery', get_theme_file_uri('/js/jquery.min.js'));
    wp_enqueue_script('adventcalendar-script-bootstrap', get_theme_file_uri('/js/bootstrap.min.js'), array('adventcalendar-script-jquery'));
    wp_enqueue_script('adventcalendar-script-swal', get_theme_file_uri('/js/sweetalert.min.js'));
    wp_enqueue_script('adventcalendar-script-imagesloaded', get_theme_file_uri('/js/imagesloaded.min.js'), ['adventcalendar-script-jquery']);
    wp_enqueue_script('adventcalendar-script-masonry', get_theme_file_uri('/js/masonry.min.js'), ['adventcalendar-script-imagesloaded']);
    wp_enqueue_script('adventcalendar-script-app', get_theme_file_uri('/js/app.js'), [
        'adventcalendar-script-bootstrap',
        'adventcalendar-script-swal',
        'adventcalendar-script-masonry'
    ]);

}
add_action( 'wp_enqueue_scripts', 'adventcalendar_scripts' );

/**
 * Theme functions
 */
require('inc/template-functions.php');

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom class for comment handler
 */
require('inc/class-wp-bootstrap-commentwalker.php');