<?php
  $args = array( 'post_type' => 'programming', 'posts_per_page' => -1 );
  $list = new WP_Query( $args );
  if( $list->have_posts() ):
    while( $list->have_posts() ): $list->the_post();?>
      <div class="cpw-container cpw-programmings">
        <div class="cpw-flex-columns">
          <div  class="cpw-background" 
                style="background-image: url( <?php the_post_thumbnail_url(); ?> )"></div>
          <div class="cpw-content">
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?><br>
            <p><span class="cpw-add-event-date"><?php the_field( 'add_event_date' ); ?></span></p>
          </div>
        </div>
      </div>
  <?php endwhile;
  wp_reset_postdata();
  endif;