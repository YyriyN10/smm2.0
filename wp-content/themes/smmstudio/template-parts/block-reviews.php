<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

?>

<section class="reviews animation-tracking indent-top-big">
	<div class="container-fluid title-container">
		<div class="row first-up">
			<h2 class="block-title text-center col-12"><?php echo esc_html( pll__( 'Відгуки про співпрацю' ) ); ?></h2>
		</div>
	</div>
  <div class="container-fluid slider-container-wrapper">
    <div class="rev-slider-wrapper col-12 second-up">
      <a href="#" class="control prev">
        <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 72 72" fill="none">
          <path d="M46.5 15L25.5 36L46.5 57" stroke="#FFFEFE" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </a>
      <a href="#" class="control next">
        <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 72 72" fill="none">
          <path d="M25.5 15L46.5 36L25.5 57" stroke="url(#paint0_linear_1661_9164)" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
          <defs>
            <linearGradient id="paint0_linear_1661_9164" x1="36" y1="57" x2="36" y2="15" gradientUnits="userSpaceOnUse">
              <stop stop-color="#DBFF45"/>
              <stop offset="1" stop-color="#CCFF26"/>
            </linearGradient>
          </defs>
        </svg>
      </a>
      <div class="decor">
        <svg xmlns="http://www.w3.org/2000/svg" width="101" height="77" viewBox="0 0 101 77" fill="none">
          <path d="M97.5261 10.4613C95.7239 20.1609 94.3929 29.8959 89.2177 38.4473C87.6412 41.0523 82.7316 50.1767 79.1225 50.3574C69.2817 50.8502 68.5096 24.6101 67.3313 19.0072C64.3016 4.60069 57.2123 -3.70731 44.5513 9.24791C30.8938 23.2227 17.2105 44.831 10.3251 63.2373C8.50351 68.1066 1.43858 77.6529 10.202 72.1935C13.3485 70.2334 26.7688 62.263 15.7428 67.3569C14.7603 67.8109 4.64889 74.5256 4.35053 74.0467C3.62837 72.8874 5.53729 65.617 5.26727 63.6183C4.79926 60.1543 5.16588 57.5711 3.26493 54.5197" stroke="#1C1C1C" stroke-width="5" stroke-linecap="round"/>
        </svg>
      </div>
      <div class="rev-slider" id="new-rev-slider">
			  <?php
				  $revArgs = array(
					  'posts_per_page' => -1,
					  'orderby' 	 => 'date',
					  'post_type'  => 'reviews'
				  );

				  $revSlides = new WP_Query( $revArgs );

				  if ( $revSlides->have_posts() ) :

					  while ( $revSlides->have_posts() ) : $revSlides->the_post(); ?>

            <?php
              $media_type = get_field('kartinkavideo');

              if ( $media_type['value'] == 'image' ): ?>
                <div class="slide text-slide">
                  <div class="slide-wrapper">
                    <div class="info">
                      <div class="top-info">
                        <h3 class="company"><?php echo get_field('kampaniya');?></h3>
                        <div class="description"><?php the_excerpt();?></div>
                      </div>
                      <div class="bottom-info">
	                      <?php
		                      $reviewContent = get_the_content();

		                      if( !empty( $reviewContent ) ):?>
                            <a href="#" rel="nofollow" id="<?php echo get_the_ID();?>" class="button marker-btn">
                              <span class="btn-text"><?php echo esc_html( pll__( 'Читати більше' ) ); ?></span>
                              <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <path d="M19 12.5L13 18.5M19 12.5L13 6.5M19 12.5L5 12.5" stroke="#181818" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                              <span class="animation-wrapper">
                              <svg class="hover-line" xmlns="http://www.w3.org/2000/svg" width="257" height="54" viewBox="0 0 257 54" fill="none">
                              <path d="M25.9846 26.3114C35.8613 26.2101 43.4683 26.0802 53.3453 26.0308C71.8754 25.9381 90.3984 26.3783 108.923 26.6519C119.138 26.8028 129.385 26.4964 139.594 26.7415C153.781 27.0823 167.82 28.0681 182.034 27.7314C200.576 27.2922 212.301 26.1182 230.85 25.7419" stroke="url(#paint0_linear_1661_9183)" stroke-width="51.2019" stroke-linecap="round"/>
                              <defs>
                                <linearGradient id="paint0_linear_1661_9183" x1="26.0001" y1="27.8206" x2="230.85" y2="25.7198" gradientUnits="userSpaceOnUse">
                                  <stop stop-color="#DBFF45"/>
                                  <stop offset="1" stop-color="#CCFF26"/>
                                </linearGradient>
                              </defs>
                            </svg>
                            </span>
                            </a>
		                      <?php endif;?>

                        <div class="about">
                          <div class="avatar">
                            🙋‍♀️
                          </div>
                          <div>
                            <p class="name"><?php the_title();?></p>
                            <p class="position"></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php elseif ( $media_type['value'] == 'video' ):?>
                <div class="slide video-slide">
                  <div class="slide-wrapper">
                    <div class="youtube" id="<?php echo get_field('video')?>"></div>
                    <a href="#" class="open-review"  data-videoid="<?php echo get_field('video')?>">
                      <svg xmlns="http://www.w3.org/2000/svg" width="71" height="50" viewBox="0 0 71 50" fill="none">
                        <g clip-path="url(#clip0_1668_9200)">
                          <path d="M68.5513 8.33971C68.1503 6.85787 67.3681 5.50693 66.2826 4.42141C65.1972 3.33588 63.8463 2.55365 62.3644 2.15261C56.9395 0.673077 35.1059 0.673077 35.1059 0.673077C35.1059 0.673077 13.2712 0.717861 7.84627 2.19739C6.36442 2.59846 5.01349 3.38073 3.92801 4.46631C2.84253 5.55188 2.06037 6.90288 1.65944 8.38477C0.0185179 18.0238 -0.618025 32.7116 1.70449 41.965C2.10547 43.4469 2.88765 44.7978 3.97312 45.8833C5.0586 46.9689 6.40951 47.7511 7.89133 48.1521C13.3163 49.6317 35.1504 49.6317 35.1504 49.6317C35.1504 49.6317 56.9843 49.6317 62.409 48.1521C63.8908 47.7511 65.2418 46.9689 66.3273 45.8834C67.4128 44.7979 68.1951 43.4469 68.5961 41.965C70.3268 32.3123 70.8601 17.6336 68.5513 8.33971Z" fill="#FF0000"/>
                          <path d="M28.1562 35.6433L46.2689 25.1522L28.1562 14.6612V35.6433Z" fill="white"/>
                        </g>
                        <defs>
                          <clipPath id="clip0_1668_9200">
                            <rect width="69.9213" height="49.1538" fill="white" transform="translate(0.179688 0.67308)"/>
                          </clipPath>
                        </defs>
                      </svg>
                    </a>
                    <div class="info">
                      <h3 class="company"><?php echo get_field('kampaniya');?></h3>
                      <div class="about">
                        <p class="name"><?php the_title();?></p>
                        <p class="position"></p>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endif;?>

					  <?php endwhile;?>
				  <?php endif; ?>
			  <?php wp_reset_postdata(); ?>
      </div>
    </div>

  </div>
  <div class="shape-container">
    <div class="shape"></div>
    <svg class="svg-shape" xmlns="http://www.w3.org/2000/svg">
      <defs>
        <filter id="svg-shape-reviews">
          <feGaussianBlur in="SourceGraphic" stdDeviation="27.5" result="blur" />
          <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="svg-shape-reviews" />
          <feComposite in="SourceGraphic" in2="svg-shape-reviews" operator="atop"/>
        </filter>
      </defs>
    </svg>
  </div>
</section>
