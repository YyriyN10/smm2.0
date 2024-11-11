<?php

	if ( ! defined( 'ABSPATH' ) ) {
			exit;
		}

?>

	<section class="our-clients indent-top-big">
     <div class="container-fluid">
        <div class="row ">
           <h2 class="block-title text-center col-12"><?php echo esc_html( pll__( 'Вже довірили нам свої проєкти' ) ); ?></h2>
        </div>
        <div class="row">
          <div class="our-clients-slider-wrapper col-12" id="our-clients-slider">
            <?php
              $argsTrustSlides = array(
                'posts_per_page' => -1,
                'orderby' 	 => 'date',
                'post_type'  => 'trust'
              );

              $trustSlides = new WP_Query( $argsTrustSlides );

              if ( $trustSlides->have_posts() ) :

                while ( $trustSlides->have_posts() ) : $trustSlides->the_post();
                  ?>
                  <div class="slide">
                    <img src="<?php echo get_field('logotip_1');?>" alt="">
                  </div>
                  <div class="slide">
                    <img src="<?php echo get_field('logotip_2');?>" alt="">
                  </div>
                  <div class="slide">
                    <img src="<?php echo get_field('logotip_3');?>" alt="">
                  </div>
                <?php endwhile;?>

              <?php endif; ?>

            <?php wp_reset_postdata(); ?>
          </div>
        </div>
     </div>
  </section>