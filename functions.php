<?php 
  // file customizer
  require get_template_directory() .'/inc/customizer.php';

  //function to add new scripts
  function wp_cpw_load_scripts(){
    // styles
    wp_enqueue_style( 'wp-cpw-style', get_stylesheet_uri(), array(), '1.0', 'all' );
    wp_enqueue_style( 'wp-cpw-assets-style', get_stylesheet_directory_uri(). '/assets/css/style.css', array( 'wp-cpw-style' ), '1.0', 'all' );
  
    // script
    wp_enqueue_script( 'wp-cpw-jquery', get_stylesheet_directory_uri(). '/assets/js/jquery.min.js' ,array(),'3.4.1', true); 
    wp_enqueue_script( 'wp-cpw-main', get_stylesheet_directory_uri(). '/assets/js/main.js', array( 'wp-cpw-jquery' ), '1.0', true );
  
    // external files
		wp_enqueue_style( 'wp-cpw-fontawesome-style','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css', array( 'wp-cpw-assets-style' ),'5.15.4','all' );		
    wp_enqueue_style( 'wp-cpw-slick-theme-style', get_stylesheet_directory_uri(). '/vendor/slick/slick-theme.css', array( 'wp-cpw-assets-style' ), '1.0', 'all' );
    wp_enqueue_style( 'wp-cpw-slick-style', get_stylesheet_directory_uri(). '/vendor/slick/slick.css', array( 'wp-cpw-assets-style' ), '1.0', 'all' );
    wp_enqueue_script( 'wp-cpw-slick-script', get_stylesheet_directory_uri(). '/vendor/slick/slick.min.js', array( 'wp-cpw-jquery' ), '1.0', true );
    wp_enqueue_style( 'wp-cpw-magnific-popup-style', get_stylesheet_directory_uri(). '/vendor/magnific-popup/magnific-popup.css', array( 'wp-cpw-assets-style' ), '1.0', 'all' );
    wp_enqueue_script( 'wp-cpw-magnific-popoup-script', get_stylesheet_directory_uri() .'/vendor/magnific-popup/magnific-popup.min.js', array( 'wp-cpw-jquery' ), '3.1.0', true );


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
    add_theme_support( 'custom-header' );
    add_theme_support( 'post-thumgnails' );
    add_theme_support( 'custom-logo', array(
      'width'   => 180,
      'height'  => 105,
      'flex-width'  => true,
      'flex-height' => true,
    ));
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'title-tag' );
  }
  add_action( 'after_setup_theme','wp_cpw_config' );

  // if the wp version is less than 5.2 we will create the wp_body_open function
  if( ! function_exists( 'wp_body_open' ) ){
    function wp_body_open(){
      do_action( 'wp_body_open' );
    }
  }