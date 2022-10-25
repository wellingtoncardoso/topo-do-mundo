<?php
  function wp_cpw_customizer( $wp_customize ){
    //1 copyright config
    $wp_customize->add_section(
      'sec_copyright',
      array(
        'title' => esc_html__( 'Copyright Settings', 'wp-cpw' ),
        'description' => esc_html__( 'Copyright Settings', 'wp-cpw' )
      )
    );
      $wp_customize->add_setting(
        'set_copyright',
        array(
          'type' => 'theme_mod',
          'default' => esc_html__( 'Copyright X - All Rights Reserved', 'wp-cpw' ),
          'sanitize_callback' => 'sanitize_text_field'
        )
      );
      $wp_customize->add_control(
        'set_copyright',
        array(
          'label' => esc_html__( 'Copyright Information', 'wp-cpw' ),
          'description' => esc_html__( 'Please, type your copyright here.', 'wp-cpw' ),
          'section' => 'sec_copyright',
          'type' => 'text'
        )
      );

      // 2 Hero config
      $wp_customize->add_section(
        'sec_hero',
        array(
          'title' => esc_html__( 'Hero Section', 'wp-cpw' )
        )
      );
        // details min height hero
        $wp_customize->add_setting(
          'set_hero_height',
          array(
            'type' => 'theme_mod',
            'default' => esc_html__( '100', 'wp-cpw' ),
            'sanitize_callback' => 'absint'
          )
        );
        $wp_customize->add_control(
          'set_hero_height',
          array(
            'label' => esc_html__( 'Hero min-height', 'wp-cpw' ),
            'description' => esc_html__( 'Please, type your hero min-height ( < 50 ).', 'wp-cpw' ),
            'section' => 'sec_hero',
            'type' => 'number'
          )
        );
        // background hero
        $wp_customize->add_setting(
          'set_hero_background',
          array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
          )
        );
        $wp_customize->add_control(new WP_Customize_Media_Control ( 
          $wp_customize,
          'set_hero_background',
          array(
            'label' => esc_html__( 'Hero Image', 'wp-cpw' ),
            'section' => 'sec_hero',
            'mime_type' => 'image'
          ))
        );

  }  
  add_action( 'customize_register', 'wp_cpw_customizer' );