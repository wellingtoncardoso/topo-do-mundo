<nav class="cpw-nav-menu">
  <li class="cpw-nav-menu__item"><a href="#cpw-cat1">Antipasti</a></li>
  <li class="cpw-nav-menu__item"><a href="#cpw-cat2">Pasta</a></li>
</nav>

<div class="cpw-categories-menu" id="cpw-cat1"><h2><?php esc_html_e( 'Antipasti', 'wp-cpw' )?></h2></div>
<div class="cpw-flex-columns">   
  <?php $args = array( 'post_type' => 'menu', 'posts_per_page'  => -1, 'category__in' => array( 7 ) ); 
    $list = new WP_Query( $args );
    if( $list->have_posts() ): 
      while( $list->have_posts() ): $list->the_post();?>
        <?php get_template_part( 'template-parts/menu/menu', 'card' ); ?>
      <?php endwhile;
    wp_reset_postdata();
    else: ?>
    <p><?php esc_html_e( 'Nothing yet to be displayed!', 'wp-cpw' );?></p>
  <?php endif; ?>
</div>

<div class="cpw-categories-menu" id="cpw-cat2"><h2><?php esc_html_e( 'Pasta', 'wp-cpw' )?></h2></div>
<div class="cpw-flex-columns">   
  <?php $args = array( 'post_type' => 'menu', 'posts_per_page'  => -1, 'category__in' => array( 8 ) ); 
    $list = new WP_Query( $args );
    if( $list->have_posts() ): 
      while( $list->have_posts() ): $list->the_post();?>
        <?php get_template_part( 'template-parts/menu/menu', 'card' ); ?>
      <?php endwhile;
    wp_reset_postdata();
    else: ?>
    <p><?php esc_html_e( 'Nothing yet to be displayed!', 'wp-cpw' );?></p>
  <?php endif; ?>
</div>