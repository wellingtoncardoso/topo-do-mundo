<?php 
  // file customizer
  require get_template_directory() .'/inc/customizer.php';
  //file functions add
  require get_template_directory() .'/inc/custom-posts.php';
  //file widgets add
  require get_template_directory() .'/inc/widgets.php';

  //function to add new scripts
  function wp_cpw_load_scripts(){
    // styles
    wp_enqueue_style( 'wp-cpw-style', get_stylesheet_uri(), array(), '1.0', 'all' );
    wp_enqueue_style( 'wp-cpw-assets-style', get_stylesheet_directory_uri(). '/assets/css/style.css', array( 'wp-cpw-style' ), '1.0', 'all' );
  
    // script
    wp_enqueue_script( 'wp-cpw-jquery', get_stylesheet_directory_uri(). '/assets/js/jquery.min.js' ,array(),'3.4.1', true); 
    wp_enqueue_script( 'wp-cpw-main', get_stylesheet_directory_uri(). '/assets/js/main.js', array( 'wp-cpw-jquery' ), '1.0', true );
  
    // external files
		wp_enqueue_style( 'wp-cpw-fontawesome-style','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css', array( 'wp-cpw-assets-style' ),'6.2.0','all' );		
    wp_enqueue_style( 'wp-cpw-slick-theme-style', get_stylesheet_directory_uri(). '/lib/slick/slick-theme.css', array( 'wp-cpw-assets-style' ), '1.0', 'all' );
    wp_enqueue_style( 'wp-cpw-slick-style', get_stylesheet_directory_uri(). '/lib/slick/slick.css', array( 'wp-cpw-assets-style' ), '1.0', 'all' );
    wp_enqueue_script( 'wp-cpw-slick-script', get_stylesheet_directory_uri(). '/lib/slick/slick.min.js', array( 'wp-cpw-jquery' ), '1.0', true );
    wp_enqueue_style( 'wp-cpw-magnific-popup-style', get_stylesheet_directory_uri(). '/lib/magnific-popup/magnific-popup.css', array( 'wp-cpw-assets-style' ), '1.0', 'all' );
    wp_enqueue_script( 'wp-cpw-magnific-popoup-script', get_stylesheet_directory_uri() .'/lib/magnific-popup/magnific-popup.min.js', array( 'wp-cpw-jquery' ), '3.1.0', true );

  }
  add_action( 'wp_enqueue_scripts', 'wp_cpw_load_scripts' );
 
  function wp_cpw_config(){  
    $textdomain = 'wp-cpw';
    load_theme_textdomain( $textdomain, get_template_directory() .'/languages/' );

     //register menu add
    register_nav_menus(
      array(
        'wp_cpw_main_menu' => esc_html__( 'Main Menu', 'wp-cpw' ),
        'wp_cpw_footer_menu' => esc_html__( 'Footer Menu', 'wp-cpw' )
      )
    );

    // $args = array(
    //   'height'  => 800,
    //   'width'   => 1920
    // );
    $default = array(
      'width'   => 1920,
      'height'  => 520
    );
    add_theme_support( 'custom-header', $default );
    add_theme_support( 'post-thumbnails' );
    //set image
    add_image_size( 'size__520', 520, 520, true );
    add_theme_support( 'custom-logo', array(
      'width'   => 280,
      'height'  => 160,
      'flex-height' => true,
      'flex-width'  => true
    ));
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'title-tag' );

    //theme supports Gutenberg
    add_theme_support( 'align-wide' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'editor-styles' );
    add_editor_style( 'style-editor.css' );
  }
  add_action( 'after_setup_theme','wp_cpw_config', 0 );


  // general config website Restaurante Topo do Mundo
  if( function_exists( 'acf_add_options_page' ) ){
    acf_add_options_page(
      array(
        'page_title'  => esc_html__( 'Restaurant', 'wp-cpw' ),
        'menu_title'  => esc_html__( 'Restaurant', 'wp-cpw' ),
        'menu_slug'   => 'website_options',
        'capability'  => 'edit_posts',
        'position'    => 5,
        'icon_url'    => 'dashicons-food'
      )
    );
  }  

  //Change browser header color on mobile to be the site's secondary color
  function wp_cpw_change_header_color(){
    echo '<meta name="theme-color" content="#CB7822">';
    echo '<meta name="apple-mobile-web-app-status-bar-style" content="#CB7822">';
    echo '<meta name="msapplication-navbutton-color" content="#CB7822">';
  }
  add_action( 'wp_head', 'wp_cpw_change_header_color' );

  // if the wp version is less than 5.2 we will create the wp_body_open function
  if( ! function_exists( 'wp_body_open' ) ){
    function wp_body_open(){
      do_action( 'wp_body_open' );
    }
  }