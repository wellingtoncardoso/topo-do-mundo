<?php get_header(); ?>
  <div class="cpw-primary">
    <div class="cpw-main">
      <div class="cpw-container">
        <div class="cpw-content">
          <div class="cpw-col">
            <section id="cpw-articles" class="cpw-padding">
              <?php get_template_part( 'template-parts/content/content' , 'search' ); ?>  
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>