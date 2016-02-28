<?php

include_once('inc/customizer.php');

function modtherapy_enqueue_style() {
	wp_enqueue_style( 'core', get_stylesheet_directory_uri().'/style.css', false ); 
}
add_action( 'wp_enqueue_scripts', 'modtherapy_enqueue_style' );

function modtherapy_register_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'modtherapy_register_menu' );

function create_testimonials() {
	 $labels = array(
    'name' => _x('Testimonials', 'post type general name'),
    'singular_name' => _x('Testimonial', 'post type singular name'),
    'add_new' => _x('Add New', 'Testimonial'),
    'add_new_item' => __('Add new Testimonial'),
    'edit_item' => __('Edit testimonial'),
    'new_item' => __('New testimonial'),
    'view_item' => __('View testimonial'),
    'search_items' => __('Search testimonials'),
    'not_found' =>  __('No testimonials found'),
    'not_found_in_trash' => __('No testimonials found in Trash'),
    'parent_item_colon' => ''
  );

  $supports = array('title', 'editor', 'excerpt');

  register_post_type( 'testimonials',
    array(
      'labels' => $labels,
      'public' => true,
      'supports' => $supports,
      'hierarchical' => false
    )
  );
}
add_action( 'init', 'create_testimonials' );