<?php

/* =========

adds stylesheet and javascript files

=================*/

  function custom_theme_scripts(){
    //Main CSS
    wp_enqueue_style('main-styles', get_stylesheet_uri());
  }
    //javascript

      wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/html5shiv-printshiv.min.js');

  add_action('wp_enqueue_scripts', 'custom_theme_scripts');



//Custom header logo

$custom_image_header = array(
  'width' => 225,
  'height' => 68,
  'uploads' => true,
);

add_theme_support('custom-header', $custom_image_header);

/* =========

adds feature image functionality

=================*/

add_theme_support('post-thumbnails');


/* =========

add menus to our theme

=================*/

function register_my_menus(){
  register_nav_menus(
    array(
      'top-menu'      => ('Top Menu'),
    )
  );
}

add_action('init', 'register_my_menus');

/* =========

add widgets to our theme

=================*/

function blank_widgets_init() {
  register_sidebar(array(
    'name'          => ('Footer Left'),
    'id'            => 'footer-left',
    'description'   => 'Left Footer',
    'before_widget' => '<div class="widget-footer-left"',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="footer-left-title">',
    'after_title'   => '</h3>'
  ));
  register_sidebar(array(
    'name'          => ('Footer middle'),
    'id'            => 'footer-middle',
    'description'   => 'Middle Footer',
    'before_widget' => '<div class="widget-footer-middle"',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="footer-middle-title">',
    'after_title'   => '</h3>'
  ));
  register_sidebar(array(
    'name'          => ('Footer right'),
    'id'            => 'footer-right',
    'description'   => 'Right Footer',
    'before_widget' => '<div class="widget-footer-right"',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="footer-right-title">',
    'after_title'   => '</h3>'
  ));
}

add_action('widgets_init', 'blank_widgets_init');





?>
