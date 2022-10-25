<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="cpw-page" class="cpw-site">
    <header>
      <section class="cpw-sidebar">
       <div class="cpw-container">
          <div class="cpw-logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php the_custom_logo(); ?></a>
          </div>
          <nav class="cpw-main-menu">
            <div class="cpw-nav-mobile">
              <div class="cpw-line1"></div>
              <div class="cpw-line2"></div>
              <div class="cpw-line3"></div>
            </div>
           <?php wp_nav_menu( 
              array(
                'theme_location' => 'wp_cpw_main_menu',
                'depth' => 2                
              )); 
            ?>
          </nav>
          <div class="cpw-searchbox">
            <?php get_search_form(); ?>
          </div>
       </div>
      </section>
    </header>