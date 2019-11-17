<?php
/**
 * load system jQuery
 */
function theme_enable_jquery() {
  wp_register_script('jquery', array('jquery'));
  wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'theme_enable_jquery');

/**
 * custom page title
 */
function theme_title() {
  $site_description = get_bloginfo('description', 'display');
  $site_name = get_bloginfo('name');
  // for home page
  if ( $site_description && ( is_home() || is_front_page() ) ):
    echo $site_name . ' | ' .  $site_description;
  endif;
  // for other pages
  if (!( is_home() ) && ! is_404() ):
    echo the_title() . ' | ' . $site_name;
  endif;
}

/**
 * enable post thumbnails
 */
add_theme_support('post-thumbnails');

/**
 * enable site menu
 */
function theme_default_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'theme_default_menu' );