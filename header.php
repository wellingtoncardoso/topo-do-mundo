<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div id="cpw-page" class="cpw-site">
    <header>
      <section class="cpw-sidebar">
       <div class="cpw-container">
          <div class="cpw-logo">
            <img src="<?php echo get_template_directory_uri('')?>/assets/images/topo-do-mundo-logo-yellow.png" alt="">
          </div>
          <nav class="cpw-main-menu">
            <div class="cpw-nav-mobile">
              <div class="cpw-line1"></div>
              <div class="cpw-line2"></div>
              <div class="cpw-line3"></div>
            </div>
            <ul>  
              <li><a href="">Home</a></li>
              <li><a href="">Steaque</a></li>
              <li><a href="">Menus</a></li>
              <li><a href="">News</a></li>
              <li><a href="">Contact</a></li>
            </ul>
          </nav>
          <div class="cpw-searchbox">
            <input type="search" class="search" placeholder="Search">
          </div>
       </div>
      </section>
    </header>