<?php

function modtherapy_enqueue_style() {
	wp_enqueue_style( 'core', get_stylesheet_directory_uri().'/style.css', false ); 
}
add_action( 'wp_enqueue_scripts', 'modtherapy_enqueue_style' );

function modtherapy_register_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'modtherapy_register_menu' );