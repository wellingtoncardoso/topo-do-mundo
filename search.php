<?php get_header(); ?>
  <div class="cpw-primary">
    <div class="cpw-main">
      <div class="cpw-container">
        <section id="cpw-articles" class="cpw-padding">
          <div class="cpw-container">
            <?php get_template_part( 'template-parts/content/content' , 'search' ); ?>
            <!-- <?php get_sidebar( ); ?> -->
          </div>
        </section>
      </div>
    </div>
  </div>
<?php get_footer(); ?>