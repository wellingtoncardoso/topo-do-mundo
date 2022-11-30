<section class="cpw-padding">
  <div class="cpw-container">
    <div class="cpw-gallery">
      <?php 
        if( have_rows( 'images_pages_slider' ) ):
          while( have_rows( 'images_pages_slider' ) ): the_row();?>
            <figure class="cpw-gallery__item">
              <a aria-label="Image Gallery" class="cpw-gallery-link__item" href="<?php esc_attr_e( the_sub_field( 'image' ) ); ?>">  
                <img src="<?php esc_attr_e( the_sub_field( 'image' ) ); ?>" alt="<?php esc_html_e( 'Image Gallery', 'wp-cpw' ); ?>" >
              </a>
            </figure>
          <?php endwhile;
        endif;
      ?>
    </div>
  </div>
</section>