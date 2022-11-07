<?php
  // create news sidebar
  add_action( 'widgets_init', 'wp_cpw_siderbars' );
  function wp_cpw_siderbars(){
    register_sidebar(
      array(
        'name'          => esc_html__( 'Blog Sidebar', 'wp-cpw' ),
        'id'            => 'sidebar-blog',
        'description'   => esc_html__( 'this is the BLog Sidebar. You can add your widgets here.', 'wp-cpw' ),
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>'
      )
    );
    register_sidebar(
      array(
        'name'          => esc_html__( 'Reservation Form', 'wp-cpw' ),
        'id'            => 'reservation-form',
        'description'   => esc_html__( 'Reservation Form Area', 'wp-cpw' ),
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>'
      )
    );
    register_sidebar(
      array(
        'name'          => esc_html__( 'Column 1 Footer', 'wp-cpw' ),
        'id'            => 'column-1-footer',
        'description'   => esc_html__( 'Footer First Column', 'wp-cpw' ),
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>'
      )
    );
    register_sidebar(
      array(
        'name'          => esc_html__( 'Column 2 Footer', 'wp-cpw' ),
        'id'            => 'column-2-footer',
        'description'   => esc_html__( 'Footer Second Column', 'wp-cpw' ),
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>'
      )
    );
    register_sidebar(
      array(
        'name'          => esc_html__( 'Column 3 Footer', 'wp-cpw' ),
        'id'            => 'column-3-footer',
        'description'   => esc_html__( 'Footer Third Column', 'wp-cpw' ),
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>'
      )
    );
  }
