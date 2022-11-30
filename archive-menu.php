<?php get_header(); ?>
  <img class="cpw-background cpw-header-image" src="<?php header_image() ?>" height="<?php echo get_custom_header()->height;?>" width="<?php echo get_custom_header()->width; ?>" alt="">
  <div class="cpw-primary">
    <div class="cpw-main">
      <?php get_template_part( 'template-parts/menu/menu', 'loop' ); ?>  
    </div>
  </div>
  <section class="cpw-resertavion__action cpw-background-secondary cpw-padding">
    <div class="cpw-container">
      <div class="cpw-content">
        <div class="cpw-col">
          <div class="cpw-flex-columns"> 
            <div><h2 class="cpw-copy-white"><?php esc_html_e( 'E se surpreenda com essa infinidade de sabores.', 'wp-cpw' ); ?></h2></div>
            <div><a href="<?php esc_url( home_url( '/' ) ) ?>faca-sua-reserva" class="cpw-button cpw-copy-white "><?php esc_html_e( 'Reservation','wp-cpw' ); ?></a></div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>