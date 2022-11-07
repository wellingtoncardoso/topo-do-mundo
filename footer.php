<?php 
/**
 * The template for displaying the footer
 *
 * @package WordPress
 * @subpackage CPW
 * @since CPW 1.0
 */
?>
      <?php esc_html__( get_template_part( 'template-parts/footer/footer' ) ); ?>
      <?php esc_html__( get_template_part( 'template-parts/footer/footer', 'whatsapp' ) ); ?>
      <?php wp_footer();?>
    </div>
  </body>
</html>