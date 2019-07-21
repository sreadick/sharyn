<?php

function register_menu() {
  register_nav_menu('nav-menu', __('Nav Menu'));
}

add_action('init', 'register_menu');

function my_theme_styles() {
  wp_enqueue_style('main_styles', get_stylesheet_uri(), null, microtime());
}

add_action('wp_enqueue_scripts', 'my_theme_styles');

function my_theme_scripts() {
  wp_enqueue_script( 'nav_dropdown', get_template_directory_uri() . '/js/NavDropdown.js', array('jquery'));
}

add_action('wp_enqueue_scripts', 'my_theme_scripts');

function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

function custom_user_contactmethods($user_contact){ 
  $user_contact['ext_phone'] = 'Phone number';
  $user_contact['street'] = 'Street';
  $user_contact['suite'] = 'Suite';
  $user_contact['city'] = 'City';
  $user_contact['state'] = 'State';
  $user_contact['zip'] = 'Zip';
  
  return $user_contact;
}
add_filter('user_contactmethods', 'custom_user_contactmethods');


