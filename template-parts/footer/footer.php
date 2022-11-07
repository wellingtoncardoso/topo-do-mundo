<footer class="cpw-site-footer">
  <div class="cpw-container cpw-padding">
    <div class="cpw-flex-columns">  
      <?php if( is_active_sidebar( 'column-3-footer' ) ) : ?>
        <div class="cpw-block-footer"><?php dynamic_sidebar( 'column-1-footer' ); ?></div>
        <div class="cpw-block-footer"><?php dynamic_sidebar( 'column-2-footer' ); ?></div>
        <div class="cpw-block-footer"><?php dynamic_sidebar( 'column-3-footer' ); ?></div>
      <?php endif;?>
    </div>
  </div>
  <nav class="cpw-main-menu">
    <?php wp_nav_menu( 
      array(
        'theme_location' => 'wp_cpw_footer_menu',
        'depth' => 1                
      )); 
    ?>
  </nav>
  <div class="cpw-copyright">
    <div class="cpw-container">
      <div class="cpw-flex-columns">
        <div><p>&copy; <?php echo esc_html( get_theme_mod( 'set_copyright', 'Copyright X - All Rights Reserved' ) ); ?></p></div>
        <div><p><a href="<?php echo esc_url( __( 'http://4dimensoes.com/', 'wp-cpw' ) ); ?>" target="_blank"><?php echo esc_html_e( 'Developed by - 4 Dimensões', 'wp-cpw' ); ?></a></p></div>
      </div>
    </div>
  </div>
</footer>