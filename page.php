<?php get_header(); ?>
  <div id="cpw-primary">
    <div class="cpw-main">
      <section class="cpw-hero">
          <?php 
            $hero_min_height = get_theme_mod( 'set_hero_height', 50 );
            $hero_background = wp_get_attachment_url( get_theme_mod( 'set_hero_background' ) );
          ?>
          <div  class="cpw-background-page" style="background-image: url( <?php echo $hero_background ?>)">
            <div class="cpw-details-hero" style="min-height: <?php echo $hero_min_height ?>vh">
              <div class="cpw-info-hero">
                <h1><?php the_title(); ?></h1>
              </div>
            </div>
          </div>
      </section>
    </div>
  </div>
<?php get_footer(); ?>