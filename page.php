<?php get_header(); ?>
  <div class="cpw-primary">
    <div class="cpw-main">
      <div class="cpw-container cpw-padding">
        <div class="cpw-content">
          <?php 
          while( have_posts() ) : the_post();?>
            <h1><?php the_title(); ?></h1>
            <?php
            the_content(); 
          endwhile;?>
        </div>
      </div>
      <div class="cpw-background-light">
        <div class="cpw-container">
          <?php 
            switch($post->post_name){
              case 'event' :
                echo '<div class="cpw-form">';
                  if( is_active_sidebar( 'reservation-form' ) ) dynamic_sidebar( 'reservation-form' );
                echo '</div>';
              break;
              case 'about' : 
                get_template_part( 'template-parts/content/content', 'team' );
              break;
              case 'programmings' :
                get_template_part( 'template-parts/content/content', 'programmings' );
              break;
              case 'location' :         
                echo "API GOOGLE MAPS 'key' => 'AIzaSyBiN9yM-I4GVhzKJ8X0atpKY76mwAAzP04 ";  
              break;
              default: 
              break;
            }   
          ?>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>