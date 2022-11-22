<?php get_header(); ?>
  <img class="cpw-background cpw-header-image" src="<?php header_image() ?>" height="<?php echo get_custom_header()->height;?>" width="<?php echo get_custom_header()->width; ?>" alt="">
  <div class="cpw-primary">
    <div class="cpw-main">
      <div class="cpw-container">
        <div class="cpw-content">
          <div class="cpw-col">
            <section id="cpw-articles" class="cpw-padding">
              <div class="cpw-container">
                <?php get_template_part( 'template-parts/menu/menu' ); ?>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>