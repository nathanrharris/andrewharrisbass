<?php

function theme_js() {
  wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), date("h:i:s"));
}

function theme_styles() {
  wp_enqueue_style('main', get_template_directory_uri() . '/css/styles.css', array(), date("h:i:s"));
}

add_action('wp_enqueue_scripts', 'theme_js');
add_action('wp_enqueue_scripts', 'theme_styles');
