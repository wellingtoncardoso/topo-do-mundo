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
  <div class="cpw-primary">
    <div class="cpw-main">
      <section class="error-404 not-found">
        <header class="page-header">
          <h1><?php esc_html__( 'Ops! That page can&rsquo;t be found.', 'wp-cpw' ); ?></h1>
        </header>
        <div class="cpw-content">
          <p><?php esc_html__( 'It looks like nothing was found at this location. Maybe try a search?', 'wp-cpw' ); ?></p>
          <?php get_search_form(); ?>
        </div>
      </section>
    </div>
  </div>
<?php get_footer(); ?>