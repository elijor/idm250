<?php
if( function_exists('acf_register_block_type') ) {
  add_action('acf/init', 'blo_register_acf_blocks');
  function blo_acf_blocks() {
    acf_register_block_type(array(
      'name'              => 'my-block', // a system name of the block
      'title'             => __('My Block'), 
      'description'       => __('Just another awesome block.'),
      'render_template'   => 'blocks/my-block/block.php',
      'category'          => 'common', // The core provided categories are [ common | formatting | layout | widgets | embed ].
      'icon'              => 'book-alt', // These can be any of WordPress' Dashicons, or a custom svg element.
      'keywords'          => array( 'block', 'custom' ),
      'supports'          => array( 'anchor' => true )
    ));
  }
}

?>