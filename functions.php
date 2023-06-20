<?php

add_theme_support('custom-logo');
add_theme_support('custom-header');

register_post_type('gallery', [
  'public' => true,
  'labels' => [
    'name' => 'Gallery',
    'all_items' => 'All Gallery',
    'add_new' => 'Add New Gallery',
    'add_new_item' => 'Add New Gallery',
    'featured_image' => 'Gallery Image',
    'set_featured_image' => 'Set Gallery Image',

  ],
  'supports' => [ 'thumbnail', ],
  'menu_position' => 5,
  'menu_icon' => 'dashicons-format-gallery'


]);

?>