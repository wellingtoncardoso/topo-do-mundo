<?php 
  while( have_posts() ): the_post();?>
    <div>
      <a href="<?php echo esc_url( home_url( '/' ) );?>menu" class="cpw-back">
        <i class="fa-sharp fa-solid fa-arrow-left"></i>
      </a>
    </div>
    <section id="post-menu-<?php the_ID(); ?>" <?php post_class( ); ?>>
      <header>
        <?php if( has_post_thumbnail () ){ the_post_thumbnail( 'full' ); } ?>
        <h1><?php the_title();?></h1>
      </header>          
      <div class="cpw-content">
        <?php the_content(); ?>
      </div>
    </section>
  <?php endwhile;
?>