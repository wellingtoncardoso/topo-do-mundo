<?php get_header(); ?>
  <div class="cpw-primary">
    <div class="cpw-main">
      <div class="cpw-container cpw-padding">
        <?php 
          while( have_posts() ): 
            the_post();?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <header>
                <?php if( has_post_thumbnail () ){ the_post_thumbnail( 'full' ); } ?>
                <h1><?php the_title();?></h1>
                <div class="cpw-details">
                  <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                  <p><?php esc_html_e( 'Categories', 'wp-cpw' ); ?>: <?php the_category( '' ); ?></p>
                  <p><?php esc_html_e( 'Tags', 'wp-cpw' ); ?>: <?php the_tags( '', ', ' ); ?></p>
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