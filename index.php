<?php get_header();?>
    <div id="cpw-content" class="cpw-site-content">
      <div id="cpw-primary" class="cpw-content-area">
        <main id="cpw-main" class="cpw-site-main">
          <section class="cpw-hero">
            <div class="cpw-slick-hero">
  
              <div  class="cpw-background" style="background-image: url( <?php echo get_template_directory_uri().'/assets/images/delete/slide01.jpg' ?>)">
                <div class="cpw-details-hero" style="min-height: 100vh">
                  <div class="cpw-info-hero">
                    <h2>Lorem ipsum dolor sit 1</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque, minus. Facilis est ipsam </p>
                    <a href="#" class="cpw-button"><?php _e( 'Learn More', 'wp-cpw' ) ?></a>
                  </div>
                </div>
              </div>

              <div  class="cpw-background" style="background-image: url( <?php echo get_template_directory_uri().'/assets/images/delete/slide02.jpg' ?>)">
                <div class="cpw-details-hero" style="min-height: 100vh">
                  <div class="cpw-info-hero">
                    <h2>Lorem ipsum dolor sit 2</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque, minus. Facilis est ipsam </p>
                    <a href="#" class="cpw-button"><?php _e( 'Learn More', 'wp-cpw' ) ?></a>
                  </div>
                </div>
              </div>

              <div  class="cpw-background" style="background-image: url( <?php echo get_template_directory_uri().'/assets/images/delete/slide03.jpg' ?>)">
                <div class="cpw-details-hero" style="min-height: 100vh">
                  <div class="cpw-info-hero">
                    <h2>Lorem ipsum dolor sit 3</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque, minus. Facilis est ipsam </p>
                    <a href="#" class="cpw-button"><?php _e( 'Learn More', 'wp-cpw' ) ?></a>
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
                  <h2><?php echo _e( 'Restaurante Topo do Mundo', 'wp-cpw' ); ?></h2>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque eum voluptatum distinctio sunt! 
                  Ipsum beatae, impedit exercitationem libero nemo cupiditate, 
                  explicabo perferendis nihil vel obcaecati alias eligendi voluptatem itaque accusamus!</p>
                  <a href="#" class="cpw-button"><?php echo _e('Lead more','wp-cpw' ); ?></a>
                </div>
                <div class="cpw-reservation">
                  <div class="cpw-form">
                    <h3><?php echo _e( 'Make your reservation','wp-cpw' )?></h3>
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
                    <h2><?php echo _e( 'Our Daily Suggest', 'wp-cpw' ); ?></h2>
                  </div>
                  <div class="cpw-flex-columns">
                    <?php for( $i=0;$i<5;$i++ ){?>
                      <div class="cpw-card">
                        <i class="fa fa-check"></i>
                        <div class="cpw-content-card">
                          <h3><?php echo _e('Title cards services','wp-cpw' )?></h3>
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
                  <h4><?php echo _e( 'Lorem ipsum dolor sit', 'wp-cpw' ); ?></h4>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Ullam quisquam debitis labore hic odio repellendus mollitia</p>
                  <p><span>R$120,00</span></p>
                </div>
              </div>
              <div class="cpw-card-more-suggest">
                <figure><img src="<?php echo get_template_directory_uri('') ?>/assets/images/delete/menu-pack-thumb02.jpg" alt=""></figure>
                <div class="cpw-content">
                  <h4><?php echo _e( 'Lorem ipsum dolor sit', 'wp-cpw' ); ?></h4>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Ullam quisquam debitis labore hic odio repellendus mollitia</p>
                  <p><span>R$120,00</span></p>
                </div>
              </div>
              <div class="cpw-card-more-suggest">
                <figure><img src="<?php echo get_template_directory_uri('') ?>/assets/images/delete/menu-pack-thumb03.jpg" alt=""></figure>
                <div class="cpw-content">
                  <h4><?php echo _e( 'Lorem ipsum dolor sit', 'wp-cpw' ); ?></h4>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Ullam quisquam debitis labore hic odio repellendus mollitia</p>
                  <p><span>R$120,00</span></p>
                </div>
              </div>
            </div>
          </section>
          <!-- end other services -->
          <section id="cpw-our-starters" class="cpw-padding">
            <div class="cpw-container">
              <div class="cpw-content">
                <h2><?php echo _e( 'Our Starters', 'wp-cpw' ); ?></h2>
              </div>
              <div class="cpw-flex-columns">
                <div>
                  <img src="<?php echo get_template_directory_uri('')?>/assets/images/delete/side-image01.png" alt="">
                </div>
                <div class="cpw-card-owr-starters">
                  <h3><?php echo _e( 'Appetizers', "wp-cpw" ); ?></h3>
                  <div class="cpw-itens-menu-our-starters">
                  <?php for( $i=0; $i<5; $i++ ) {?> 
                    <div class="cpw-info">
                      <div>
                        <p>Four Chease Garlic Bread</p>
                        <small>Toested french bread topped with romano</small>
                      </div>
                      <div>
                        <p><span>R$32,00</span></p>
                      </div>
                    </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="cpw-flex-columns">
                <div>
                  <img src="<?php echo get_template_directory_uri('')?>/assets/images/delete/side-image02.png" alt="">
                </div>
                <div class="cpw-card-owr-starters">
                  <h3><?php echo _e( 'Appetizers', "wp-cpw" ); ?></h3>
                  <div class="cpw-itens-menu-our-starters">
                  <?php for( $i=0; $i<5; $i++ ) {?> 
                    <div class="cpw-info">
                      <div>
                        <p>Four Chease Garlic Bread</p>
                        <small>Toested french bread topped with romano</small>
                      </div>
                      <div>
                        <p><span>R$32,00</span></p>
                      </div>
                    </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- end our starters -->
          <section id="cpw-cards-four" class="cpw-background-default cpw-padding"
                  style="background-image: url('<?php echo get_template_directory_uri('')?>/assets/images/delete/section-bg01.jpg')">
            <div class="cpw-container">
              <div class="cpw-flex-columns">
                <?php for( $i=0; $i<4; $i++ ) {?>
                <div class="cpw-card">
                  <figure><img src="<?php echo get_template_directory_uri('')?>/assets/images/delete/icon01.png" alt=""></figure>
                  <div class="cpw-details">
                    <h3><?php echo _e( 'Restaurant', 'wp-cpw' ); ?></h3>
                    <p><?php echo _e( 'This section contains your estimated account balance from the legacy platform.', 'wp-cpw' );?></p>
                  </div>
                </div>
                <?php } ?>
              </div>
            </div>
          </section>
          <!-- end cards four -->
          <section id="cpw-gallery" class="cpw-padding">
            <div class="cpw-container">
              <div class="cpw-content">
                <h2><?php echo _e( 'Our Gallery', 'wp-cpw' ); ?></h2>
              </div>
              <div class="cpw-gallery">
                <figure class="cpw-gallery__item"><a class="cpw-gallery-link__item" href="<?php echo get_template_directory_uri('')?>/assets/images/delete/gallery01.jpg"><img class="cpw-gallery__item-img" src="<?php echo get_template_directory_uri('')?>/assets/images/delete/gallery01.jpg" alt=""></a></figure>
                <figure class="cpw-gallery__item"><a class="cpw-gallery-link__item" href="<?php echo get_template_directory_uri('')?>/assets/images/delete/gallery02.jpg"><img class="cpw-gallery__item-img" src="<?php echo get_template_directory_uri('')?>/assets/images/delete/gallery02.jpg" alt=""></a></figure>
                <figure class="cpw-gallery__item"><a class="cpw-gallery-link__item" href="<?php echo get_template_directory_uri('')?>/assets/images/delete/gallery03.jpg"><img class="cpw-gallery__item-img" src="<?php echo get_template_directory_uri('')?>/assets/images/delete/gallery03.jpg" alt=""></a></figure>
                <figure class="cpw-gallery__item"><a class="cpw-gallery-link__item" href="<?php echo get_template_directory_uri('')?>/assets/images/delete/gallery04.jpg"><img class="cpw-gallery__item-img" src="<?php echo get_template_directory_uri('')?>/assets/images/delete/gallery04.jpg" alt=""></a></figure>
                <figure class="cpw-gallery__item"><a class="cpw-gallery-link__item" href="<?php echo get_template_directory_uri('')?>/assets/images/delete/gallery05.jpg"><img class="cpw-gallery__item-img" src="<?php echo get_template_directory_uri('')?>/assets/images/delete/gallery05.jpg" alt=""></a></figure>
                <figure class="cpw-gallery__item"><a class="cpw-gallery-link__item" href="<?php echo get_template_directory_uri('')?>/assets/images/delete/gallery06.jpg"><img class="cpw-gallery__item-img" src="<?php echo get_template_directory_uri('')?>/assets/images/delete/gallery06.jpg" alt=""></a></figure>
              </div>
            </div>
          </section>
          <!-- end gallery -->
          <section id="cpw-content-chef" class="cpw-background-default cpw-bakground-parallax cpw-padding"
            style="background-image: url('<?php echo get_template_directory_uri('')?>/assets/images/delete/section-bg04.jpg')">
            <div class="cpw-container">
              <div class="cpw-flex-columns">
                <div class="cpw-content">
                  <h2><?php echo _e( 'Our Marterchef', 'wp-cpw' ); ?></h2>
                  <h3><?php echo _e( 'The Steakhouse Bar & Restaurant', 'wp-cpw' ); ?></h3>
                  <p><?php echo _e( 'Hector was born and raised in Colombia. From childhood, thanks to his mother, he developed an interest in cooking. Following the call of his heart and love for haute cuisine, Hector received an honors degree at the Culinary Academy in Bogota.', 'wp-cpw' ); ?></p>
                </div>
                <div>
                  <figure><img src="<?php echo get_template_directory_uri('')?>/assets/images/delete/head-chef.png" alt=""></figure>
                </div>
              </div>
            </div>
          </section>
          <!-- end content chef -->
          <section id="cpw-testimonial" class="cpw-background-default cpw-padding"
            style="background-image: url('<?php echo get_template_directory_uri('')?>/assets/images/delete/section-bg03.jpg')">
            <div class="cpw-container cpw-padding">
              <div class="cpw-slick-testimonial">
                <?php for($i=0; $i<2; $i++) {?>
                  <div class="cpw-testimonial">
                    <div class="cpw-content">
                      <p>
                        <i class="fa fa-quote-left"></i> 
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta consequatur nisi nulla quidem ex voluptate at molestiae minus reiciendis perspiciatis! Mollitia excepturi dolorem facilis error voluptatum ex itaque magni quis. 
                        <i class="fa fa-quote-right"></i>
                      </p>
                    </div>
                    <div class="cpw-details">
                      <p><span>Wellington</span></p>
                    </div>
                  </div>
                <?php } ?>
              </div>
            </div>
          </section>
          <!-- end testmonial -->
          <section id="cpw-articles" class="cpw-padding">
            <div class="cpw-container">
              <div class="cpw-content">
                <h2><?php echo _e( 'Recent articles', 'wp-cpw' );?></h2>
              </div>
              <div class="cpw-flex-columns">
                <?php for($i=0; $i<3; $i++){?>
                <article>
                  <figure>
                    <img src="<?php echo get_template_directory_uri('')?>/assets/images/placeholder-default.jpg" alt="">
                  </figure>
                  <div class="cpw-details">
                    <div class="cpw-content">
                      <h3>Expression alteration entreaties mrs can terminated estimating.</h3>
                      <div class="cpw-info">
                        <div class="cpw-avatar"><img src="<?php echo get_template_directory_uri('')?>/assets/images/placeholder-default.jpg" alt="Avatar author"></div>
                        <div class="cpw-author"><p><?php echo _e( 'Autor', 'wp-cpw' ); ?></p></div>
                      </div>
                    </div>
                  </div>
                </article>
                <?php }?>
              </div>
            </div>
          </section>
          <!-- end articles -->
          <section id="cpw-select-plates" class="cpw-padding">
            <div class="cpw-container">
              <nac class="cpw-nav-select-plates">
                <ul class="cpw-nav-select-plates__itens">
                  <li class="cpw-nav-select-plates__item"><a><?php echo _e(' Link ', 'wp-cpw'); ?></a></li>
                  <li class="cpw-nav-select-plates__item"><a><?php echo _e(' Link ', 'wp-cpw'); ?></a></li>
                  <li class="cpw-nav-select-plates__item"><a><?php echo _e(' Link ', 'wp-cpw'); ?></a></li>
                  <li class="cpw-nav-select-plates__item"><a><?php echo _e(' Link ', 'wp-cpw'); ?></a></li>
                  <li class="cpw-nav-select-plates__item"><a><?php echo _e(' Link ', 'wp-cpw'); ?></a></li>
                </ul>
              </nac>
              <div class="cpw-flex-columns cpw-block-select-plates">
                <div><figure><img src="<?php echo get_template_directory_uri('')?>/assets/images/delete/tab-dishes01.png" alt=""></figure></div>
                <div>
                  <div class="cpw-details">
                    <h2>Try our amazing Newyork Steak</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis repellendus reprehenderit in aperiam iste, necessitatibus saepe aliquam ea, totam iure adipisci minus repellat corporis, nesciunt sunt optio facilis. Assumenda, asperiores.</p>
                    <a href="" class="cpw-button"><?php echo _e( 'Order now', 'wp-cpw' )?></a>
                  </div>
                </div>
              </div>
              <div class="cpw-flex-columns cpw-block-select-plates cpw-hide">
                <div><figure><img src="<?php echo get_template_directory_uri('')?>/assets/images/delete/tab-dishes02.png" alt=""></figure></div>
                <div>
                  <div class="cpw-details">
                    <h2>Try our amazing Newyork Steak</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis repellendus reprehenderit in aperiam iste, necessitatibus saepe aliquam ea, totam iure adipisci minus repellat corporis, nesciunt sunt optio facilis. Assumenda, asperiores.</p>
                    <a href="" class="cpw-button"><?php echo _e( 'Order now', 'wp-cpw' )?></a>
                  </div>
                </div>
              </div>
              <div class="cpw-flex-columns cpw-block-select-plates cpw-hide">
                <div><figure><img src="<?php echo get_template_directory_uri('')?>/assets/images/delete/tab-dishes03.png" alt=""></figure></div>
                <div>
                  <div class="cpw-details">
                    <h2>Try our amazing Newyork Steak</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis repellendus reprehenderit in aperiam iste, necessitatibus saepe aliquam ea, totam iure adipisci minus repellat corporis, nesciunt sunt optio facilis. Assumenda, asperiores.</p>
                    <a href="" class="cpw-button"><?php echo _e( 'Order now', 'wp-cpw' )?></a>
                  </div>
                </div>
              </div>
              <div class="cpw-flex-columns cpw-block-select-plates cpw-hide">
                <div><figure><img src="<?php echo get_template_directory_uri('')?>/assets/images/delete/tab-dishes04.png" alt=""></figure></div>
                <div>
                  <div class="cpw-details">
                    <h2>Try our amazing Newyork Steak</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis repellendus reprehenderit in aperiam iste, necessitatibus saepe aliquam ea, totam iure adipisci minus repellat corporis, nesciunt sunt optio facilis. Assumenda, asperiores.</p>
                    <a href="" class="cpw-button"><?php echo _e( 'Order now', 'wp-cpw' )?></a>
                  </div>
                </div>
              </div>
              <div class="cpw-flex-columns cpw-block-select-plates cpw-hide ">
                <div><figure><img src="<?php echo get_template_directory_uri('')?>/assets/images/delete/tab-dishes05.png" alt=""></figure></div>
                <div>
                  <div class="cpw-details">
                    <h2>Try our amazing Newyork Steak</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis repellendus reprehenderit in aperiam iste, necessitatibus saepe aliquam ea, totam iure adipisci minus repellat corporis, nesciunt sunt optio facilis. Assumenda, asperiores.</p>
                    <a href="" class="cpw-button"><?php echo _e( 'Order now', 'wp-cpw' )?></a>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </main>
      </div>
    </div>
<?php get_footer();?>