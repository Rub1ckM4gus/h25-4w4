<?php 
/* Les options */
add_action('customize_register', 'theme_tp_customize_register');

function mon_theme_supports() {
  add_theme_support('title-tag');
  add_theme_support('menus');
  add_theme_support('post-thumbnails');
  add_image_size('carte', 300, 160, true);
  add_theme_support('custom-logo', array(
    'height'      => 160,
    'width'       => 300,
    'flex-height' => true,
    'flex-width'  => true,
));
}
add_action( 'after_setup_theme', 'mon_theme_supports' );



function theme_4w4_enqueue_styles() { 
wp_enqueue_style('normalize', get_template_directory_uri(). '/normalize.css');
wp_enqueue_style('mon-style-style', get_stylesheet_uri());

wp_enqueue_script(
  'destination_restapi',
  get_template_directory_uri() . '/js/destination.js',
  array(),
  filemtime(get_template_directory() . 
  '/js/destination.js'),
  true
);
wp_enqueue_script(
    'carrousel_restapi',
    get_template_directory_uri() . '/js/carrousel.js',
    array(),
    filemtime(get_template_directory() . 
    '/js/carrousel.js'),
    true
  );
}
/*
*/
add_action('wp_enqueue_scripts', 'theme_4w4_enqueue_styles');