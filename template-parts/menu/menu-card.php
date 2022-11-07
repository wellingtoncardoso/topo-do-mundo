<article id="post-menu-<?php the_ID(); ?>" <?php post_class( 'cpw-card-menu' );?> >
  <div class="cpw-details">
    <h3><?php the_title(); ?></h3>
    <p><?php the_excerpt(); ?></p>
    <a href="<?php the_permalink(); ?>" aria-label="<?php the_title(); ?>" class="cpw-button"><?php esc_html_e( 'View more', "wp-cpw" ); ?></a>
  </div>
  <div class="cpw-thumbnail-menu"><?php if( has_post_thumbnail () ){ the_post_thumbnail( array( 140, 140 ) ); } ?> </div>
</article>