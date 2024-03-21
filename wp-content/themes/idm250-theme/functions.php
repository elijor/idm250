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
  'taxonomies' => array('category', 'post_tag'),
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

add_action( 'init', 'register_acf_blocks' );
function register_acf_blocks() {
    register_block_type( __DIR__ . '/blocks/my-block' );
};


add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

  global $wp_version;
  if ( $wp_version !== '4.7.1' ) {
     return $data;
  }

  $filetype = wp_check_filetype( $filename, $mimes );

  return [
      'ext'             => $filetype['ext'],
      'type'            => $filetype['type'],
      'proper_filename' => $data['proper_filename']
  ];

}, 10, 4 );

function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
  echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );
// if( function_exists('acf_register_block_type') ) {
//   add_action( 'init', 'blo_register_acf_blocks' );
//   function blo_register_acf_blocks() {
//     register_block_type( __DIR__ . '/blocks/my-block' );
//   }
// };
// add_action( 'init', 'register_acf_blocks' );
// function register_acf_blocks() {
//     register_block_type( __DIR__ . '/blocks/my-block/' );
// };
add_action('wp_ajax_load_more_posts', 'load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');

function load_more_posts() {
    $args = array(
        'posts_per_page' => -1,
        'post_type' => 'Gallery',
        'post_status' => 'publish',
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            // Display your post content here
            // the_title('<h2>', '</h2>');
            // while ($loop->have_posts()) : $loop->the_post();
            echo '<div>';
            echo '<a href="'. get_post_permalink() .'">';
                echo '<div class="wp-gallery-img">';
                echo get_the_post_thumbnail();
                echo '</div>';
                echo '<figcaption class="in-image">' .  get_the_title() . '</figcaption>';
                echo '</a>';
            echo '</div>';
        endwhile;
    endif;

    // wp_die();
};



?>