<?php
// define( 'WP_DEBUG', true ); 

// LINKING TO STYLES
function theme_scripts_and_styles() {
  wp_enqueue_script('main-scripts', get_template_directory_uri() . '/scripts/main-scripts.js', [], false, ['in_footer => true']);

  wp_enqueue_style( 'normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css');

  wp_enqueue_style( 'themeStyle', get_template_directory_uri() . '/css/themeStyle.css');

};

add_action('wp_enqueue_scripts', 'theme_scripts_and_styles');
// add_action('wp_enqueue_style', 'theme_scripts_and_styles');

function register_theme_menus() {
register_nav_menus([
  'primary' => 'Primary Menu',
  'footer' => 'Footer Menu',
  '404-menu' => '404 Menu'

]);
};

add_action('init', 'register_theme_menus');

add_theme_support('post-thumbnails');
 
add_post_type_support('page', 'excerpt');
 
// add_post_type_support( 'gallery', 'date');

function my_custom_post_gallery() {
$post_type_name = 'gallery';
$post_type_options = [
  'labels' => [
    'name' => __('Galleries'),
    'singular_name' => __('Gallery')
  ],
  'public' => true,
  'has_archive' => true,
  'post-thumbnails' => true,
  'show_in_rest' => true,
  'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'summary' )
];
register_post_type($post_type_name, $post_type_options);
};
add_action('init', 'my_custom_post_gallery');

function add_widgets() {
register_sidebar([

  'name' => 'Main Sidebar',
  'id' => 'main_sidebar'
]);

// register_widget('Custom_Hours_Widget');

};
add_action('init', 'add_widgets');



?>