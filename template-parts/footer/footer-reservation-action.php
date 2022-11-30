<?php if ( $post->post_name == 'topo-do-mundo' ){ ?>
  <section class="cpw-resertavion__action cpw-background-secondary cpw-padding">
    <div class="cpw-container">
      <div class="cpw-content">
        <div class="cpw-col">
          <div class="cpw-flex-columns"> 
            <div><h2 class="cpw-copy-white"><?php esc_html_e( 'Venha viver momentos únicos no Topo!', 'wp-cpw' ); ?></h2></div>
            <div><a href="<?php esc_attr_e( esc_url( home_url( '/' ) ) ); ?>faca-sua-reserva" class="cpw-button cpw-copy-white "><?php esc_html_e( 'Make your reservation','wp-cpw' ); ?></a></div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php }?>
