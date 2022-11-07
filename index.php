<?php get_header(); ?>
  <div class="cpw-primary">
    <div class="cpw-main">
      <section id="cpw-articles" class="cpw-padding">
        <div class="cpw-container">
          <h1><?php echo esc_html_e( 'List Of Articles', 'wp-cpw' );?></h1>
          <?php get_template_part( 'template-parts/content/content' ); ?>
          <!-- <?php get_sidebar( ); ?> -->
        </div>
      </section>
    </div>
  </div>
<?php get_footer(); ?>