<?php 

  //function to add new scripts
  function wp_cpw_load_scripts(){
    wp_enqueue_style( 'wp-cpw-style', get_stylesheet_uri(), array(), '1.0', 'all' );
    wp_enqueue_style( 'wp-cpw-assets-style', get_stylesheet_directory_uri(). '/assets/css/style.css', array( 'wp-cpw-style' ), '1.0', 'all' );
  
    wp_enqueue_script( 'wp-cpw-nav-mobile', get_stylesheet_directory_uri(). '/assets/js/nav-mobile.js', array( 'jquery' ), '1.0', true );
  }
  add_action( 'wp_enqueue_scripts', 'wp_cpw_load_scripts' );

 
  function wp_cpw_config(){
     //register menu add
    register_nav_menus(
      array(
        'wp_cpw_main_menu' => esc_html__( 'Main Menu', 'wp-cpw' ),
        'wp_cpw_footer_menu' => esc_html__( 'Footer Menu', 'wp-cpw' )
      )
    );

    $args = array(
      'height'  => 90,
      'width'   => 1920
    );
    add_theme_support('custom-header' );
  }
  add_action( 'after_setup_theme','wp_cpw_config' );
