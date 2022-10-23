      <footer class="cpw-site-footer">
        <div class="cpw-container cpw-padding">
          <div class="cpw-flex-columns">
            <div class="cpw-block-footer">
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem repellendus vitae ex eveniet, quod natus tempora! Temporibus exercitationem officia rerum veniam iste, odit reiciendis delectus cum sed blanditiis itaque aliquam.</p>
            </div>
            <div class="cpw-block-footer">
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem repellendus vitae ex eveniet, quod natus tempora! Temporibus exercitationem officia rerum veniam iste, odit reiciendis delectus cum sed blanditiis itaque aliquam.</p>
            </div>
            <div class="cpw-block-footer">
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem repellendus vitae ex eveniet, quod natus tempora! Temporibus exercitationem officia rerum veniam iste, odit reiciendis delectus cum sed blanditiis itaque aliquam.</p>
            </div>
          </div>
        </div>
      </footer>
      <div class="cpw-copyright">
        <div class="cpw-container">
          <div class="cpw-flex-columns">
            <div><p><?php echo get_theme_mod( 'set_copyright', 'Copyright X - All Rights Reserved' ); ?></p></div>
            <div><p><?php echo _e( 'Developed by - 4 Dimensões', 'wp-cpw' ); ?></p></div>
          </div>
        </div>
      </div>
      <?php wp_footer();?>
    </div>
  </body>
</html>

<!-- modals -->
<?php echo get_template_part( 'template-parts/behaviors/behavior', 'gallery' ); ?>