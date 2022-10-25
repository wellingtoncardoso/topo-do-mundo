<?php get_header(); ?>
  <div class="cpw-primary">
    <div class="cpw-main">
      <section id="cpw-articles" class="cpw-padding">
        <div class="cpw-container">
          <h2><?php echo _e( 'List Of Articles', 'wp-cpw' );?></h2>
          <div class="cpw-flex-columns">
            <?php
              if( have_posts() ):
                while( have_posts() ): the_post();?>
                  <article>
                    <figure>
                      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>         
                    </figure>
                    <div class="cpw-details">
                      <div class="cpw-content">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p><?php the_excerpt(); ?></p>
                        <div class="cpw-info">
                          <div class="cpw-avatar"><img src="<?php echo get_template_directory_uri('')?>/assets/images/placeholder-default.jpg" alt="Avatar author"></div>
                          <div class="cpw-author"><p><?php the_author(); ?></p></div>
                        </div>
                      </div>
                    </div>
                  </article>
                  <?php endwhile; 
                  else: ?>
                    <p><?php _e( 'Nothing yet to be displayed!', 'wp-cpw' );?></p>
                <?php 
              endif; 
            ?>
          </div>
          <!-- <?php get_sidebar( ); ?> -->
        </div>
      </section>
    </div>
  </div>
<?php get_footer(); ?>