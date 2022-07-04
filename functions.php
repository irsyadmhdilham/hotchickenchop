<?php

function wp_init() {
  //styles
  wp_enqueue_style('style', get_stylesheet_uri(), NULL, rand(1, 10));
  wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=League+Gothic&family=Montserrat:wght@300;400;700&display=swap', array('gstatic', 'googleapis'));
  wp_enqueue_style('gstatic', 'https://fonts.gstatic.com');
  wp_enqueue_style('googleapis', 'https://fonts.googleapis.com');
  wp_enqueue_style('swiper-js', 'https://unpkg.com/swiper@8/swiper-bundle.min.css');

  //scripts
  wp_enqueue_script('main', get_theme_file_uri('/main.js'), array('swiper-js'), rand(1, 100), true);
  wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper@8/swiper-bundle.min.js');
  wp_enqueue_script('google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyA2VHwcCXsZSLajMvrknu6LndTyyzH3UUQ&callback=initMap', array('main'), null, true);
}

add_action('wp_enqueue_scripts', 'wp_init');

function add_google_font_attributes($html, $handle) {
  if ($handle == 'googleapis') {
    $html = str_replace("rel='stylesheet'", "rel='preconnect'", $html);
  }
  if ($handle == 'gstatic') {
    $html = str_replace("rel='stylesheet'", "rel='preconnect' crossorigin", $html);
  }
  return $html;
}

add_filter('style_loader_tag', 'add_google_font_attributes', 10, 2);

function google_map_script_adjustment($tag, $handle) {
  if ($handle == 'google-map') {
    $tag = str_replace("script", "script async defer", $tag);
  }
  return $tag;
}

add_filter('script_loader_tag', 'google_map_script_adjustment', 10, 2);

function theme_supports() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('html5', array('style', 'script'));
}

add_action('after_setup_theme', 'theme_supports');

function register_menu() {
  register_nav_menus(array(
    'header-menu' => 'Header menu'
  ));
}

add_action('init', 'register_menu');