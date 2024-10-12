<?php


require_once (get_theme_file_path('/inc/tgm.php'));



if(site_url() ==  'localhost'){
    define('VERSION',time());
}else{
    define('VERSION',wp_get_theme()->get('Version'));
}


function meal_theme_setup (){
    load_theme_textdomain( 'meal', get_template_directory() . '/languages' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',

    ) );
    add_theme_support('custom-logo');


}

add_action('after_setup_theme', 'meal_theme_setup');

function meal_theme_scripts(){
    wp_enqueue_style('fonts', '//fonts.googleapis.com/css?family=Playfair+Display:300,400,700,800|Open+Sans:300,400,700');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css',null,VERSION);
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css',null,VERSION);
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css',null,VERSION);
    wp_enqueue_style('magnific', get_template_directory_uri() . '/assets/css/magnific-popup.css',null,VERSION);
    wp_enqueue_style('aos', get_template_directory_uri() . '/assets/css/aos.css',null,VERSION);
    wp_enqueue_style('datepicker', get_template_directory_uri() . '/assets/css/bootstrap-datepicker.css',null,VERSION);
    wp_enqueue_style('timepicker', get_template_directory_uri() . '/assets/css/jquery.timepicker.css',null,VERSION);
    wp_enqueue_style('icon', get_template_directory_uri() . '/assets/fonts/ionicons/css/ionicons.min.css',null,VERSION);
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/fonts/fontawesome/css/font-awesome.min.css',null,VERSION);
    wp_enqueue_style('flaticon', get_template_directory_uri() . '/assets/fonts/flaticon/font/flaticon.css',null,VERSION);
    wp_enqueue_style('portfolio', get_template_directory_uri() . '/assets/css/portfolio.css',null,VERSION);
    wp_enqueue_style('meal-css', get_template_directory_uri() . '/assets/css/style.css',null,VERSION);
    wp_enqueue_style( 'meal-style', get_stylesheet_uri() );




    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.2.1.min.js',array('jquery'),VERSION, true);
    wp_enqueue_script('jquery-migrate', get_template_directory_uri() . '/assets/js/jquery-migrate-3.0.1.min.js',array('jquery'),VERSION, true);
    wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js',array('jquery'),VERSION, true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js',array('jquery'),VERSION, true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js',array('jquery'),VERSION, true);
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js',array('jquery'),VERSION, true);
    wp_enqueue_script('magnific', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js',array('jquery'),VERSION, true);
    wp_enqueue_script('bootstrap-datepicker', get_template_directory_uri() . '/assets/js/bootstrap-datepicker.js',array('jquery'),VERSION, true);
    wp_enqueue_script('timepicker', get_template_directory_uri() . '/assets/js/jquery.timepicker.min.js',array('jquery'),VERSION, true);
    wp_enqueue_script('jquery-stellar', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js',array('jquery'),VERSION, true);
    wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js',array('jquery'),VERSION, true);
    wp_enqueue_script('aos', get_template_directory_uri() . '/assets/js/aos.js',array('jquery'),VERSION, true);
    wp_enqueue_script('google-map', '//maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false',null,VERSION,true);
    wp_enqueue_script('image-loaded', get_template_directory_uri() . '/assets/js/imagesloaded.js',array('jquery'),VERSION, true);
    wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js',array('jquery'),VERSION, true);
    wp_enqueue_script('portfolio', get_template_directory_uri() . '/assets/js/portfolio.js',array('jquery','magnific','image-loaded','isotope'),VERSION, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js',array('jquery'),VERSION, true);

}


add_action('wp_enqueue_scripts', 'meal_theme_scripts');
