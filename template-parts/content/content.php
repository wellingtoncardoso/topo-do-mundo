<div class="cpw-flex-columns">
  <?php
    if( have_posts() ):
      while( have_posts() ): the_post();?>
        <article>
          <figure>
            <a href="<?php the_permalink(); ?>"><?php if( has_post_thumbnail () ){ the_post_thumbnail( 'medium' ); } ?></a>         
          </figure>
          <div class="cpw-details">
            <div class="cpw-contents">
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p><?php the_excerpt(); ?></p>
              <div class="cpw-info">
                <div class="cpw-avatar"><img src="<?php echo esc_html( get_template_directory_uri('') )?>/assets/images/placeholder-default.jpg" alt="Avatar author"></div>
                <div class="cpw-author"><p><?php the_author(); ?></p></div>
              </div>
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