<div class="cpw-container">
  <?php
    if( have_posts() ):
      while( have_posts() ): the_post();?>
        <article>
          <div class="cpw-details">
            <div class="cpw-contents">
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <p><?php the_excerpt(); ?></p>
            </div>
          </div>
        </article>
        <?php endwhile; 
        else: ?>
          <p><?php esc_html_e( 'Nothing yet to be displayed!', 'wp-cpw' );?></p>
      <?php 
    endif; 
  ?>
</div>
<div class="cpw-section">
  <!-- loop the pagination -->
  <?php the_posts_pagination(); ?>
</div>