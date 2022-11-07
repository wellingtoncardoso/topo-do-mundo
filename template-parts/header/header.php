<header>
  <section class="cpw-sidebar">
    <div class="cpw-sidebar-text-topo">
      <div class="cpw-container">
        <div class="cpw-content">
          <p><span>Uma experiência gastronômica no Topo</span></p>
        </div>
      </div>
    </div>
    <div class="cpw-container">
      <div class="cpw-logo cpw-desktop">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php the_custom_logo(); ?></a>
      </div>
      <div>
        <nav class="cpw-rede-social">
          <?php 
            if( have_rows( 'add_new_rede_social', 'option' ) ):
              while( have_rows( 'add_new_rede_social', 'option' ) ): the_row(); ?>
                <li>
                  <a href="<?php the_sub_field( 'link_rede_social' ); ?>" aria-label="<?php the_sub_field( 'link_rede_social' ); ?>" target="_blank" rel="nofollow">
                    <?php the_sub_field( 'item_font_awesome_rede_social' ); ?>
                  </a>
                </li>
              <?php endwhile;
            endif;
          ?>
        </nav>
      </div>
    </div>
    <div class="cpw-container">
      <nav class="cpw-main-menu">
        <div class="cpw-nav-mobile">
          <div class="cpw-line1"></div>
          <div class="cpw-line2"></div>
          <div class="cpw-line3"></div>
        </div>
        <?php wp_nav_menu( 
          array(
            'theme_location' => 'wp_cpw_main_menu',
            'depth' => 2                
          )); 
        ?>
      </nav>
      <div class="cpw-searchbox">
        <?php get_search_form(); ?>
      </div>
    </div>
  </section>
</header>