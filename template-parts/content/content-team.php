<div class="cpw-container cpw-padding">
    <div class="cpw-col">
      <?php 
      while( have_posts() ) : the_post();?>
        <?php the_title('<h1>', '</h1>'); ?>
        <?php
        the_content(); 
      endwhile;?>
    </div>
</div>
<div class="cpw-container">
  <h2><?php esc_html_e( 'Our Team', 'wp-cpw' ); ?></h2>
</div>
<?php 
  $args = array( 'post_type' => 'team', 'posts_per_page' => -1 );
  $list = new WP_Query( $args );
  if( $list->have_posts() ):
    while( $list->have_posts() ): $list->the_post(); ?>
      <div class="cpw-container cpw-team">
        <div class="cpw-flex-columns">
          <div class="cpw-contents"><?php the_content( ); ?></div>
          <div class="cpw-thumbnail"><?php the_post_thumbnail( 'large' ); ?></div>
        </div>
      </div>
    <?php endwhile;
    wp_reset_postdata();
  endif;
?>