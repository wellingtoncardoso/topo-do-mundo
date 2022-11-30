<?php get_header(); ?>
  <img class="cpw-background-page cpw-header-image" src="<?php header_image() ?>" height="<?php echo get_custom_header()->height;?>" width="<?php echo get_custom_header()->width; ?>" alt="" >
  <div class="cpw-primary">
    <div class="cpw-main">
      <div class="cpw-background-light">
        <div class="cpw-container cpw-padding">
          <div class="cpw-col">
            <?php 
              if( have_posts() ):
                while( have_posts() ) : the_post();?>
                  <?php the_title( '<h1>', '</h1>' ); ?>
                  <?php
                  the_content(); 
                endwhile;
                echo '<br>';
                if( $post->post_name == 'evento' || $post->post_name == 'faca-sua-reserva' ){
                  if( $post->post_name == 'evento' ){
                    get_template_part( 'template-parts/content/content', 'gallery-event' );
                  }
                  echo '<div class="cpw-form">';
                    if( is_active_sidebar( 'reservation-form' ) ) dynamic_sidebar( 'reservation-form' );
                  echo '</div>';
                }elseif ( $post->post_name == 'topo-do-mundo' ) {
                  get_template_part( 'template-parts/content/content', 'programmings' );
                }else { ?>
                  <p><?php esc_html_e( 'Nothing yet to be displayed!', 'wp-cpw' );?></p>
              <?php }
            endif;?>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>