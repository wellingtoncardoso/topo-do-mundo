<?php 
  if ( have_posts() ):
    while( have_posts() ) : the_post();?>
      <?php the_title('<h1>', '</h1>'); ?>
      <?php
      the_content(); 
    endwhile;
    else: ?>
      <p><?php esc_html_e( 'Nothing yet to be displayed!', 'wp-cpw' );?></p>
    <?php 
  endif;     