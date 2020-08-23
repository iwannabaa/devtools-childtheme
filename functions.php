<?php

  function wpb_add_google_fonts() {
    wp_enqueue_style( 'wpb_google_fonts', 'https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@400;700&family=Quicksand:wght@400;700&display=swap', false, null );
  }
  add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

  function my_theme_enqueue_styles() {
    $parent_style = 'twentytwenty-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child_style',
      get_stylesheet_directory_uri() . '/style.css',
      array( $parent_style ),
      wp_get_theme()->get('Version')
    );
  }
  add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

?>