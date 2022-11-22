<?php get_header(); ?>
  <img class="cpw-background-page cpw-header-image" src="<?php header_image() ?>" height="<?php echo get_custom_header()->height;?>" width="<?php echo get_custom_header()->width; ?>" alt="" >
  <div class="cpw-primary">
    <div class="cpw-main">
      <div class="cpw-background-light">
            <?php 
              switch($post->post_name){
                case 'event' :
                  get_template_part( 'template-parts/content/content', 'columns2' );
                  echo '<div class="cpw-form">';
                    if( is_active_sidebar( 'reservation-form' ) ) dynamic_sidebar( 'reservation-form' );
                  echo '</div>';
                break;
                case 'about' : 
                  get_template_part( 'template-parts/content/content', 'columns2' );
                break;
                case 'programmings' :
                  get_template_part( 'template-parts/content/content', 'programmings' );
                break;
                case 'special-conditions' :
                  get_template_part( 'template-parts/content/content', 'columns2' );
                break;
                default:?> 
                  <div class="cpw-container cpw-padding">
                    <div class="cpw-col">
                      <?php 
                      while( have_posts() ) : the_post();?>
                        <?php the_title( '<h1>', '</h1>' ); ?>
                        <?php
                        the_content(); 
                      endwhile;?>
                    </div>
                  </div>
                <?php break;
              }   
            ?>
      </div>
    </div>
  </div>
<?php get_footer(); ?>