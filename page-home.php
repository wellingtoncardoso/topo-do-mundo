<?php get_header();?>
    <div id="cpw-content" class="cpw-site-content">
      <div id="cpw-primary" class="cpw-content-area">
        <main id="cpw-main" class="cpw-site-main">
          <section class="cpw-hero">
            <div class="cpw-slick-hero">
              <?php 
                if( have_rows( 'add_hero', 'option' ) ):
                  while( have_rows( 'add_hero', 'option' ) ): the_row();?>
                      <div  class="cpw-background" 
                            style="background-image:linear-gradient( 180deg, rgba(0, 0, 0,.5) 0%, rgba(0, 0, 0,.7) 100% ), url( <?php esc_attr_e( get_sub_field( 'hero_image' )); ?>)">    
                        <div class="cpw-details-hero" style="min-height: 100vh">
                          <div class="cpw-info-hero">
                            <?php esc_html_e( the_field( 'hero_content', 'option' ) ); ?>
                            <a href="<?php esc_attr_e( the_field( 'hero_button_link', 'option' ) );?>" class="cpw-button"><?php esc_html_e( the_field( 'hero_button_text', 'option' ) ); ?></a>
                          </div>
                        </div>
                      </div>
                  <?php endwhile;
                endif;
              ?>
            </div>
          </section>
          <!-- end slide -->
          <section id="cpw-about-home" class="cpw-padding">
            <div class="cpw-container">
              <div class="cpw-grid-2">
                <div class="cpw-content">
                  <h2><?php esc_html_e( 'Restaurante Topo do Mundo', 'wp-cpw' ); ?></h2>
                  <?php 
                    if( have_posts() ):
                    while( have_posts() ) : the_post();
                      the_content();
                      ?>
                    <?php endwhile; 
                    else: ?>
                      <p><?php esc_html_e( 'Nothing yet to be displayed!', 'wp-cpw' );?></p>
                    <?php 
                  endif;
                  ?> 
                  <a href="#" class="cpw-button"><?php _e('View more','wp-cpw' ); ?></a>
                </div>
                <div class="cpw-information">
                  <div class="cpw-content">
                    <?php 
                      if( have_rows ( 'add_hours', 'option' ) ):
                        while( have_rows( 'add_hours', 'option' ) ): the_row(); ?>
                            <p><i class="fa-regular fa-clock"></i> <?php esc_html_e( the_sub_field( 'day_of_the_week' ) );?> <span><?php esc_html_e( the_sub_field( 'hour_of_the_week' ) ) ;?></span></p>
                        <?php endwhile;
                      endif;
                    ?>
                    <hr>
                    <p><i class="fa-solid fa-location-dot"></i> <span> <?php esc_html_e( the_field( 'text_address', 'option' ) ); ?> </span></p>
                    <hr>
                    <a href="#" class="cpw-button"><?php esc_html_e( 'Request your reservation' , 'wp-cpw'); ?></a>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- end about home -->
          <section id="cpw-gallery" class="cpw-padding">
            <div class="cpw-container">
              <div class="cpw-content">
                <h2><?php esc_html_e( 'Our Gallery', 'wp-cpw' ); ?></h2>
              </div>
              <div class="cpw-gallery">
                <figure class="cpw-gallery__item"><a class="cpw-gallery-link__item" href="<?php echo get_template_directory_uri('')?>/assets/images/delete/gallery01.jpg"><img class="cpw-gallery__item-img" src="<?php echo get_template_directory_uri('')?>/assets/images/delete/gallery01.jpg" alt=""></a></figure>
                <figure class="cpw-gallery__item"><a class="cpw-gallery-link__item" href="<?php echo get_template_directory_uri('')?>/assets/images/delete/gallery02.jpg"><img class="cpw-gallery__item-img" src="<?php echo get_template_directory_uri('')?>/assets/images/delete/gallery02.jpg" alt=""></a></figure>
                <figure class="cpw-gallery__item"><a class="cpw-gallery-link__item" href="<?php echo get_template_directory_uri('')?>/assets/images/delete/gallery03.jpg"><img class="cpw-gallery__item-img" src="<?php echo get_template_directory_uri('')?>/assets/images/delete/gallery03.jpg" alt=""></a></figure>
                <figure class="cpw-gallery__item"><a class="cpw-gallery-link__item" href="<?php echo get_template_directory_uri('')?>/assets/images/delete/gallery04.jpg"><img class="cpw-gallery__item-img" src="<?php echo get_template_directory_uri('')?>/assets/images/delete/gallery04.jpg" alt=""></a></figure>
                <figure class="cpw-gallery__item"><a class="cpw-gallery-link__item" href="<?php echo get_template_directory_uri('')?>/assets/images/delete/gallery05.jpg"><img class="cpw-gallery__item-img" src="<?php echo get_template_directory_uri('')?>/assets/images/delete/gallery05.jpg" alt=""></a></figure>
                <figure class="cpw-gallery__item"><a class="cpw-gallery-link__item" href="<?php echo get_template_directory_uri('')?>/assets/images/delete/gallery06.jpg"><img class="cpw-gallery__item-img" src="<?php echo get_template_directory_uri('')?>/assets/images/delete/gallery06.jpg" alt=""></a></figure>
              </div>
            </div>
          </section>
          <!-- end gallery -->
        </main>
      </div>
    </div>
<?php get_footer();?>