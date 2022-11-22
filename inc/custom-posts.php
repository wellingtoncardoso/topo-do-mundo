<?php

  // hook <strong> wp_cpw_custom_´post_menu </strong> to the init action hooke
  add_action( 'init', 'wp_cpw_custom_post_menu' );
  // the custom function to register a menu post type
  function wp_cpw_custom_post_menu(){
    $label = array(
      'name'                => esc_html__( 'Menu', 'wp-cpw' ),
      'singular_name'       => esc_html__( 'Menu', 'wp-cpw' ),
      'add_new'             => esc_html__( 'Add New Menu', 'wp-cpw' ),
      'add_new_item'        => esc_html__( 'Add New Menu', 'wp-cpw' ),
      'edit_item'           => esc_html__( 'Edit Menu', 'wp-cpw' ),
      'new_item'            => esc_html__( 'New Menu', 'wp-cpw' ),
      'all_item'            => esc_html__( 'All Menus', 'wp-cpw' ),
      'view_item'           => esc_html__( 'View Menu', 'wp-cpw' ),
      'search_items'        => esc_html__( 'Search Menu', 'wp-cpw' ),
      'featured_image'      => esc_html__( 'Menu Image','wp-cpw' ),
      'set_featured_image'  => esc_html__( 'Add Image', 'wp-cpw' )
    );
    $args = array(
      'labels'            => $label,
      'description'       => esc_html__( 'Keep our menus and menu data', 'wp-cpw' ),
      'public'            => true,
      'taxonomies'        => array( 'category' ),
      'manu_position'     => 5,
      'supports'          => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
      'has_archive'       => true,
      'show_in_admin_bar' => true,
      'show_in_nav_menus' => true,
      'has_archive'       => true,
      'query_var'         => true,
      'menu_icon'          => 'dashicons-media-text'
    );
    register_post_type( 'menu', $args );
  }

   // hook <strong> wp_cpw_custom_team </strong> to the init action hooke
  add_action( 'init', 'wp_cpw_custom_team' );
  // the custom function to register team
  function wp_cpw_custom_team(){
    $label = array(
      'name'                => esc_html__( 'Teams', 'wp-cpw' ),
      'singular_name'       => esc_html__( 'Team', 'wp-cpw' ),
      'add_new'             => esc_html__( 'Add New Member', 'wp-cpw' ),
      'add_new_item'        => esc_html__( 'Add New Member', 'wp-cpw' ),
      'edit_item'           => esc_html__( 'Edit Member', 'wp-cpw' ),
      'new_item'            => esc_html__( 'New Member', 'wp-cpw' ),
      'all_item'            => esc_html__( 'All Member', 'wp-cpw' ),
      'view_item'           => esc_html__( 'View Member', 'wp-cpw' ),
      'Search_items'        => esc_html__( 'Search Member', 'wp-cpw' ),
      'featured_image'      => esc_html__( 'Member Image', 'wp-cpw' ),
      'set_featured_image'  => esc_html__( 'Add Image', ' wp-cpw' )
    );
    $args = array(
      'labels'            => $label,
      'description'       => esc_html( 'Keep our data from our team', 'wp-cpw' ),
      'public'            => true,
      'menu_position'     => 10,
      'supports'          => array( 'title', 'editor', 'thumbnail' ),
      'has_archive'       => true,
      'show_in_admin_bar' => false,
      'show_in_nav_menus' => false,
      'has_archive'       => true,
      'query_var'         => false,
      'menu_icon'          => 'dashicons-groups'
    );
    register_post_type( 'team', $args );
  }

  // hook <strong> wp_cpw_custom_programming </strong> to the init action hooke
  add_action( 'init', 'wp_cpw_custom_programming' );
  // the custom function to register programming
  function wp_cpw_custom_programming(){
    $label = array(
      'name'                => esc_html__( 'Programmings', 'wp-cpw' ),
      'singular_name'       => esc_html__( 'Programming', 'wp-cpw' ),
      'add_new'             => esc_html__( 'Add New Programming', 'wp-cpw' ),
      'add_new_item'        => esc_html__( 'Add New Programming', 'wp-cpw' ),
      'edit_item'           => esc_html__( 'Edit Programming', 'wp-cpw' ),
      'new_item'            => esc_html__( 'New Programming', 'wp-cpw' ),
      'all_item'            => esc_html__( 'All Programming', 'wp-cpw' ),
      'view_item'           => esc_html__( 'View Programming', 'wp-cpw' ),
      'search_items'        => esc_html__( 'Search Programming', 'wp-cpw' ),
      'featured_image'      => esc_html__( 'Programming Image', 'wp-cpw' ),
      'set_featured_image'  => esc_html__( 'Add Image', 'wp-cpw' )
    );
    $args = array(
      'labels'            => $label,
      'description'       => esc_html__( 'Keep our event schedule data', 'wp-cpw' ),
      'public'            => true,
      'menu_position'     => 15,
      'supports'          => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
      'has_archive'       => true,
      'show_in_admin_bar' => false,
      'show_in_nav_menus' => false,
      'has_archive'       => true,
      'query_var'         => false,
      'menu_icon'          => 'dashicons-calendar-alt'
    );
    register_post_type( 'programming', $args );
  }