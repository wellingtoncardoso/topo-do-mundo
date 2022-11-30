<?php
/*
* The template for displaying 404 pages (not found)
*
* @package WordPress
* @subpackage CPW
* @since CPW 1.0
*/
?>
<?php get_header(); ?>
  <img class="cpw-background-page cpw-header-image" src="<?php header_image() ?>" height="<?php echo get_custom_header()->height;?>" width="<?php echo get_custom_header()->width; ?>" alt="" >
  <div class="cpw-primary">
    <div class="cpw-main">
      <div class="cpw-container">
        <div class="cpw-content">
          <div class="cpw-col">
            <section class="error-404 not-found">
              <header class="page-header">
                <h1><?php esc_html_e( 'Ops! That page can&rsquo;t be found.', 'wp-cpw' ); ?></h1>
              </header>
              <div class="cpw-contents">
                <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'wp-cpw' ); ?></p>
                <?php get_search_form(); ?>
                <a href="<?php esc_attr_e( esc_url( home_url( '/' ) ) ); ?>" class="cpw-button"><?php bloginfo( 'name' ); ?></a>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>