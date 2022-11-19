<?php
  if( have_posts() ):
    while( have_posts() ): the_post();?>
      <section class="cpw-padding">
        <div class="cpw-container">
          <div class="cpw-content">
            <div class="cpw-col">
              <div class="cpw-grid-2">
                <div class="cpw-contents size__520">
                  <?php the_title( '<h1>', '</h1>' ); ?>
                  <?php the_content(); ?>
                </div>
                <?php if ( is_page( 'about' ) || is_page( 'event' ) ): ?>
                  <div class="cpw-slick-img__520">
                    <?php
                    if( have_rows( 'images_pages_slider' ) ):
                      while( have_rows( 'images_pages_slider' ) ): the_row();?>
                        <div class="">
                          <img class="size__520" src="<?php the_sub_field( 'image' ); ?>" alt="<?php the_title(); ?>">
                        </div>
                      <?php 
                      endwhile;
                    endif; ?>
                  </div>
                <?php else: ?>
                  <div  class="cpw-background" 
                        style="background-image: url( <?php the_post_thumbnail_url(); ?> ); height: 520px;"></div>
                <?php endif;?>
              </div>
            </div>
          </div>
          </div>
      </section>
    <?php endwhile; 
    else: ?>
      <p><?php esc_html_e( 'Nothing yet to be displayed!', 'wp-cpw' );?></p>
  <?php endif; 
?>