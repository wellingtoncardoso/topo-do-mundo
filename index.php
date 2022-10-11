<?php get_header();?>
    <div id="cpw-content" class="cpw-site-content">
      <div id="cpw-primary" class="cpw-content-area">
        <main id="cpw-main" class="cpw-site-main">
          <section id="cpw-hero">
            <div class="cpw-slick-slide">
              <div  class="cpw-background" style="background-image: url( <?php echo get_template_directory_uri() ?>/assets/images/delete/slide01.jpg )">
                <div class="cpw-details-slide">
                  <div class="cpw-info-slide">
                    <h2>Tasty Meats Make You Addicted slide 1</h2>
                    <a href="#" class="cpw-button"><?php echo esc_html__( 'Lead more', 'wp-cpw' )?></a>
                  </div>
                </div>
              </div>
              <div  class="cpw-background" style="background-image: url( <?php echo get_template_directory_uri() ?>/assets/images/delete/slide02.jpg )">
                <div class="cpw-details-slide">
                  <div class="cpw-info-slide">
                    <h2>Tasty Meats Make You Addicted slide 2</h2>
                    <a href="#" class="cpw-button"><?php echo esc_html__( 'Lead more', 'wp-cpw' )?></a>
                  </div>
                </div>
              </div>
              <div  class="cpw-background" style="background-image: url( <?php echo get_template_directory_uri() ?>/assets/images/delete/slide03.jpg )">
                <div class="cpw-details-slide">
                  <div class="cpw-info-slide">
                    <h2>Tasty Meats Make You Addicted slide 3</h2>
                    <a href="#" class="cpw-button"><?php echo esc_html__( 'Lead more', 'wp-cpw' )?></a>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- end slide -->
          <section id="cpw-about-home" class="cpw-padding">
            <div class="cpw-container">
              <div class="cpw-grid-2">
                <div class="cpw-content">
                  <h2><?php echo esc_html__( 'Restaurante Topo do Mundo', 'wp-cpw' ); ?></h2>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque eum voluptatum distinctio sunt! 
                  Ipsum beatae, impedit exercitationem libero nemo cupiditate, 
                  explicabo perferendis nihil vel obcaecati alias eligendi voluptatem itaque accusamus!</p>
                  <a href="#" class="cpw-button"><?php echo esc_html__('Lead more','wp-cpw' ); ?></a>
                </div>
                <div class="cpw-reservation">
                  <div class="cpw-form">
                    <h3><?php echo esc_html__( 'Make your reservation','wp-cpw' )?></h3>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- end about home -->
          <section id="cpw-other-services-home">
            <div  class="cpw-background-default cpw-bakground-parallax" 
                  style="background-image: url( <?php echo get_template_directory_uri() ?>/assets/images/delete/section-bg02.jpg )">
              <div class="cpw-container">
                <div class="cpw-padding">
                  <div class="cpw-content">
                    <h2><?php echo esc_html__( 'Our Daily Suggest', 'wp-cpw' ); ?></h2>
                  </div>
                  <div class="cpw-flex-columns">
                    <?php for( $i=0;$i<5;$i++ ){?>
                      <div class="cpw-card">
                        <i class="fa fa-check"></i>
                        <div class="cpw-content-card">
                          <h3><?php echo esc_html__('Title cards services','wp-cpw' )?></h3>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid vel cumque</p>
                        </div>
                      </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="cpw-flex-columns">
              <div class="cpw-card-more-suggest">
                <figure><img src="<?php echo get_template_directory_uri('') ?>/assets/images/delete/menu-pack-thumb01.jpg" alt=""></figure>
                <div class="cpw-content">
                  <h4><?php echo esc_html__( 'Lorem ipsum dolor sit', 'wp-cpw' ); ?></h4>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Ullam quisquam debitis labore hic odio repellendus mollitia</p>
                  <p><span>R$120,00</span></p>
                </div>
              </div>
              <div class="cpw-card-more-suggest">
                <figure><img src="<?php echo get_template_directory_uri('') ?>/assets/images/delete/menu-pack-thumb02.jpg" alt=""></figure>
              </div>
              <div class="cpw-card-more-suggest">
                <figure><img src="<?php echo get_template_directory_uri('') ?>/assets/images/delete/menu-pack-thumb03.jpg" alt=""></figure>
              </div>
            </div>
          </section>
          <!-- end other services -->
          
        </main>
      </div>
    </div>
<?php get_footer();?>