<?php get_header(); ?>
  <img class="cpw-background cpw-header-image" src="<?php header_image() ?>" height="<?php echo get_custom_header()->height;?>" width="<?php echo get_custom_header()->width; ?>" alt="">
  <div class="cpw-primary">
    <div class="cpw-main">
      <section id="cpw-articles" class="cpw-padding">
        <div class="cpw-container">
          <?php get_template_part( 'template-parts/menu/menu', 'loop' ); ?>
        </div>
      </section>
    </div>
  </div>
<?php get_footer(); ?>