<?php 
/*
Template Name: General Template
*/ 
get_header(); ?>
  <div class="cpw-primary">
    <div class="cpw-main">
      <div class="cpw-container cpw-padding">
        <?php 
          while( have_posts() ) : the_post();?>
            <h1><?php the_title(); ?></h1>
            <?php
            the_content(); 
          endwhile;?>
      </div>
    </div>
  </div>
<?php get_footer(); ?>