<?php get_header(); ?>
  <div id="cpw-primary">
    <div id="cpw-main">
      <div class="cpw-container">
        <?php 
          while( have_posts() ): 
            the_post();?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <header>
                <h2><?php the_title();?></h2>
                <div class="cpw-details">
                  <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                  <p>Categories: <?php the_category( '' ); ?></p>
                  <p>Tags: <?php the_tags( '', ', ' ); ?></p>
                </div>
              </header>          
              <div class="cpw-content">
                <?php the_content(); ?>
              </div>
            </article>
            <?php 
              if( comments_open() || get_comments_number() ){
                comments_template();
              }
          endwhile;
        ?>
      </div>
    </div>
  </div>
<?php get_footer(); ?>