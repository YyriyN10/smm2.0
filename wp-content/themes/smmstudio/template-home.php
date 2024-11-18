<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Шаблон шаблон головної сторінки
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package smmstudio
	 */
	get_header('new');?>

	<?php
	    $homeMainScreenTitle = carbon_get_post_meta(get_the_ID(), 'smmstudio_main_page_main_screen_title'.carbon_lang_prefix());
      $homeMainScreenTextList = carbon_get_post_meta(get_the_ID(), 'smmstudio_main_page_main_screen_dynamic_text_list'.carbon_lang_prefix());
      $homeMainScreenPartnerList = carbon_get_post_meta(get_the_ID(), 'smmstudio_main_page_main_screen_partners_list'.carbon_lang_prefix());
      $homeMainScreenVideo = carbon_get_post_meta(get_the_ID(), 'smmstudio_main_page_main_screen_video'.carbon_lang_prefix());
	    $homeMainScreenVideoPoster = carbon_get_post_meta(get_the_ID(), 'smmstudio_main_page_main_screen_video_poster'.carbon_lang_prefix());
	    $i = 0;

	    if( $homeMainScreenTitle && $homeMainScreenVideoPoster ):?>
	    <!-- Головний екран -->
	    <section class="main-screen home-main-screen">
	      <div class="container-fluid">
	        <div class="row">
            <div class="text-content col-lg-6">
              <h1 class="main-title">
                <?php echo $homeMainScreenTitle;?>
                <?php if( $homeMainScreenTextList ):?>
                  <div class="main-text-slider" id="main-text-slider">
                    <?php foreach( $homeMainScreenTextList as $item ): $i++;?>
                      <span class="type-item typed-number-<?php echo $i;?>" data-text="<?php echo $item['text'];?>"></span>
                    <?php endforeach;?>
                  </div>
                <?php endif;?>
              </h1>
              <a href="#" rel="nofollow" class="button arrow-btn">
                <?php echo esc_html( pll__( 'Отримати пропозицію' ) ); ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path d="M19 12L13 18M19 12L13 6M19 12L5 12" stroke="#FFFEFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
              <div class="mobile-video">
                <video src="<?php echo $homeMainScreenVideo;?>" autoplay muted loop poster="<?php echo $homeMainScreenVideoPoster;?>"></video>
              </div>
              <?php if( $homeMainScreenPartnerList ):?>
                <div class="partner-list">
                  <?php foreach( $homeMainScreenPartnerList as $item ):?>
                    <div class="partner-list__item">
                      <img src="<?php echo $item['partner_logo'];?>" alt="" class="svg-pic">
                    </div>
                  <?php endforeach;?>
                </div>
              <?php endif;?>
            </div>
	          <div class="video-content col-lg-6">
              <video src="<?php echo $homeMainScreenVideo;?>" autoplay muted loop poster="<?php echo $homeMainScreenVideoPoster;?>"></video>
            </div>
	        </div>
	      </div>
	    </section>
	<?php endif;?>

  <?php
      $homeNumbersList = carbon_get_post_meta(get_the_ID(), 'smmstudio_main_page_our_numbers_list'.carbon_lang_prefix());

      if( $homeNumbersList ):?>
      <!-- Наші цифри -->
      <section class="home-our-numbers indent-top-big">
        <div class="container-fluid">
          <div class="row content">
            <?php foreach( $homeNumbersList as $item ):?>
              <div class="item col-lg-3 col-sm-6 col-10 offset-1 offset-sm-0">
                <div class="inner">
                  <div>
                    <p class="full-number">
                      <span class="number"><?php echo $item['number'];?></span>
		                  <?php if( $item['number_more'] ):?>
                        <span class="number-more"><?php echo $item['number_more'];?></span>
		                  <?php endif;?>
                    </p>
                    <p class="description"><?php echo $item['description'];?></p>
                  </div>
                </div>
              </div>
            <?php endforeach;?>
          </div>
        </div>
      </section>
  <?php endif;?>

  <?php
      $homeAboutUsTitleList = carbon_get_post_meta(get_the_ID(), 'smmstudio_main_page_about_us_title_list'.carbon_lang_prefix());
	    $homeAboutUsAssertionList = carbon_get_post_meta(get_the_ID(), 'smmstudio_main_page_about_us_assertion_list'.carbon_lang_prefix());

      if( $homeAboutUsAssertionList && $homeAboutUsTitleList ):?>
      <!-- Про нас -->
      <section class="home-about-us">
        <div class="container-fluid">
          <div class="row">
            <div class="tittle-wrapper col-12 text-center">
              <?php foreach( $homeAboutUsTitleList as $title ):?>
                <h2 class="medium-title"><?php echo $title['title'];?></h2>
              <?php endforeach;?>
            </div>
          </div>
          <div class="row">
            <?php foreach( $homeAboutUsAssertionList as $assertion ):?>
              <div class="assertion col-md-6">
                <div class="inner">
                  <div class="text"><?php echo wpautop( $assertion['assertion'] );?></div>
                  <a href="" target="_blank" class="button arrow-btn">
                    <?php echo esc_html( pll__( 'Більше про нас' ) ); ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path d="M22 12L16 18M22 12L16 6M22 12L2.5 12" stroke="#181818" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </a>
                </div>
              </div>
            <?php endforeach;?>

          </div>
        </div>
      </section>
  <?php endif;?>

  <?php
      $homeOurServicesTitle = carbon_get_post_meta(get_the_ID(), 'smmstudio_main_page_our_services_title'.carbon_lang_prefix());
	    $homeOurServicesList = carbon_get_post_meta(get_the_ID(), 'smmstudio_main_page_our_services_list'.carbon_lang_prefix());
	    $i = 0;

      if( $homeOurServicesList && $homeOurServicesTitle ):?>
      <!-- Наші сервіси -->
      <section class="home-our-services">
        <div class="container-fluid">
          <div class="row">
            <h2 class="block-title col-12"><?php echo $homeOurServicesTitle;?></h2>
          </div>
          <div class="row desktop">
            <div class="content col-12">
              <ul class="nav nav-tabs">
	              <?php foreach( $homeOurServicesList as $index=>$item ):?>
                  <li class="nav-item">
                    <a class="nav-link" rel="nofollow" data-toggle="tab" href="#aboutTab<?php echo $index;?>">
                      <span class="name"><?php echo $item['name'];?></span>
                      <span class="description"><?php echo $item['description'];?></span>
                      <span class="indicator">
                        <span class="inner">
                          <svg xmlns="http://www.w3.org/2000/svg" width="59" height="47" viewBox="0 0 59 47" fill="none">
                            <path d="M2.91836 2.94095C18.3933 14.5192 33.2644 28.1408 49.2156 38.6171C56.849 43.6305 45.6043 23.9901 45.0001 19.4997C44.229 13.768 51.6328 39.3332 55.5378 43.4476C57.0832 45.0758 33.3038 42.4316 31 44" stroke="#1C1C1C" stroke-width="5" stroke-linecap="round"/>
                          </svg>
                        </span>
                      </span>
                    </a>
                  </li>
	              <?php endforeach;?>
              </ul>
              <div class="tab-content">
                <svg class="common-bg-element" xmlns="http://www.w3.org/2000/svg" width="661" height="694" viewBox="0 0 661 694" fill="none">
                  <path d="M495.833 34.723C451.9 32.7894 410.648 57.3226 374.852 79.9557C322.942 112.778 269.261 151.241 229.385 198.493C218.534 211.351 208.061 222.321 232.452 218.979C245.8 217.149 258.683 212.795 271.711 209.361C342.55 190.691 314.309 196.211 384.712 179.59C420.004 171.258 455.566 164.399 491.691 161.041C500.441 160.227 508.397 159.814 517.119 159.749C528.035 159.668 541.692 155.854 520.463 169.114C428.083 226.818 329.165 273.452 237.122 331.857C204.593 352.498 177.368 375.999 154.724 407.01C148.744 415.198 145.866 419.285 158.76 415.129C245.708 387.102 330.503 353.205 418.25 327.35C470.326 312.005 506.855 302.285 559.325 292.503C575.779 289.436 592.269 285.992 608.978 285.045C615.084 284.7 627.768 282.608 626.961 288.673C625.781 297.557 613.955 301.245 606.224 305.771C584.869 318.273 562.315 328.611 540.105 339.52C455.531 381.062 369.468 419.485 285.133 461.534C227.779 490.131 167.809 518.863 118.348 560.414C104.83 571.77 87.46 589.681 75.5212 602.776C62.276 617.303 46.2159 633.454 36.4829 650.835C27.204 667.405 48.5442 654.817 61.8768 650.322C112.544 633.239 234.133 585.9 270.851 571.877C341.67 544.83 427.859 511.405 501.089 485.292C527.667 475.815 550.099 469.641 576.47 463.296" stroke="url(#paint0_linear_1661_8690)" stroke-width="68" stroke-linecap="round"/>
                  <defs>
                    <linearGradient id="paint0_linear_1661_8690" x1="48.2786" y1="337.336" x2="623.722" y2="362.664" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#DBFF45"/>
                      <stop offset="1" stop-color="#CCFF26"/>
                    </linearGradient>
                  </defs>
                </svg>
	              <?php foreach( $homeOurServicesList as $index=>$item ):?>
                  <div class="tab-pane" id="aboutTab<?php echo $index;?>">
                    <?php if( $item['icons_list'] ):?>
                      <?php foreach( $item['icons_list'] as $icon ):?>
                        <div class="icon-wrapper">
                          <img src="<?php echo $icon['icon'];?>" alt="" class="svg-pic">
                        </div>
                      <?php endforeach;?>
                    <?php endif;?>

                    <div class="pic-wrapper">
                      <img
                         class="lazy"
                         data-src="<?php echo wp_get_attachment_image_src($item['image'], 'full')[0];?>"
                         alt="<?php echo get_post_meta($item['image'], '_wp_attachment_image_alt', TRUE);?>"
                      >
                    </div>
                  </div>
	              <?php endforeach;?>
              </div>
            </div>
          </div>
          <div class="row mobile">
            <div class="accordion col-12" id="accordion-services">
              <?php foreach( $homeOurServicesList as $index=>$item ):?>
                <div class="card">
                  <div class="card-header">
                    <a class="card-link collapsed" data-toggle="collapse" href="#servicesHome<?php echo $index;?>">
                      <span class="name"><?php echo $item['name'];?></span>
                      <span class="description"><?php echo $item['description'];?></span>
                      <span class="indicator">
                        <span class="inner">
                          <svg xmlns="http://www.w3.org/2000/svg" width="59" height="47" viewBox="0 0 59 47" fill="none">
                            <path d="M2.91836 2.94095C18.3933 14.5192 33.2644 28.1408 49.2156 38.6171C56.849 43.6305 45.6043 23.9901 45.0001 19.4997C44.229 13.768 51.6328 39.3332 55.5378 43.4476C57.0832 45.0758 33.3038 42.4316 31 44" stroke="#1C1C1C" stroke-width="5" stroke-linecap="round"/>
                          </svg>
                        </span>
                      </span>
                    </a>
                  </div>
                  <div id="servicesHome<?php echo $index;?>" class="collapse" data-parent="#accordion-services">
                    <div class="card-body">
                      <svg class="common-bg-element" xmlns="http://www.w3.org/2000/svg" width="661" height="694" viewBox="0 0 661 694" fill="none">
                        <path d="M495.833 34.723C451.9 32.7894 410.648 57.3226 374.852 79.9557C322.942 112.778 269.261 151.241 229.385 198.493C218.534 211.351 208.061 222.321 232.452 218.979C245.8 217.149 258.683 212.795 271.711 209.361C342.55 190.691 314.309 196.211 384.712 179.59C420.004 171.258 455.566 164.399 491.691 161.041C500.441 160.227 508.397 159.814 517.119 159.749C528.035 159.668 541.692 155.854 520.463 169.114C428.083 226.818 329.165 273.452 237.122 331.857C204.593 352.498 177.368 375.999 154.724 407.01C148.744 415.198 145.866 419.285 158.76 415.129C245.708 387.102 330.503 353.205 418.25 327.35C470.326 312.005 506.855 302.285 559.325 292.503C575.779 289.436 592.269 285.992 608.978 285.045C615.084 284.7 627.768 282.608 626.961 288.673C625.781 297.557 613.955 301.245 606.224 305.771C584.869 318.273 562.315 328.611 540.105 339.52C455.531 381.062 369.468 419.485 285.133 461.534C227.779 490.131 167.809 518.863 118.348 560.414C104.83 571.77 87.46 589.681 75.5212 602.776C62.276 617.303 46.2159 633.454 36.4829 650.835C27.204 667.405 48.5442 654.817 61.8768 650.322C112.544 633.239 234.133 585.9 270.851 571.877C341.67 544.83 427.859 511.405 501.089 485.292C527.667 475.815 550.099 469.641 576.47 463.296" stroke="url(#paint0_linear_1661_8690_m<?php echo $index;?>)" stroke-width="68" stroke-linecap="round"/>
                        <defs>
                          <linearGradient id="paint0_linear_1661_8690_m<?php echo $index;?>" x1="48.2786" y1="337.336" x2="623.722" y2="362.664" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#DBFF45"/>
                            <stop offset="1" stop-color="#CCFF26"/>
                          </linearGradient>
                        </defs>
                      </svg>
	                    <?php if( $item['icons_list'] ):?>
		                    <?php foreach( $item['icons_list'] as $icon ):?>
                          <div class="icon-wrapper">
                            <img src="<?php echo $icon['icon'];?>" alt="" >
                          </div>
		                    <?php endforeach;?>
	                    <?php endif;?>

                      <div class="pic-wrapper">
                        <img
                            class="lazy"
                            data-src="<?php echo wp_get_attachment_image_src($item['image'], 'full')[0];?>"
                            alt="<?php echo get_post_meta($item['image'], '_wp_attachment_image_alt', TRUE);?>"
                        >
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach;?>

            </div>
          </div>
          <div class="inner-shape"></div>
          <svg class="flt_svg" xmlns="http://www.w3.org/2000/svg">
            <defs>
              <filter id="flt_tag">
                <feGaussianBlur in="SourceGraphic" stdDeviation="27.5" result="blur" />
                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="flt_tag" />
                <feComposite in="SourceGraphic" in2="flt_tag" operator="atop"/>
              </filter>
            </defs>
          </svg>
        </div>
      </section>
  <?php endif;?>

  <?php
      $homeWhyWeTitle = carbon_get_post_meta(get_the_ID(), 'smmstudio_main_page_why_rob_us_title'.carbon_lang_prefix());
	    $homeWhyWeList = carbon_get_post_meta(get_the_ID(), 'smmstudio_main_page_why_rob_us_list'.carbon_lang_prefix());

      if( $homeWhyWeList && $homeWhyWeTitle ):?>
      <!-- Чому ми -->
      <section class="home-why-we indent-top-big indent-bottom-big">
        <div class="container-fluid">
          <div class="row">
            <h2 class="block-title col-12 text-center"><?php echo $homeWhyWeTitle;?></h2>
          </div>
          <div class="row content">
            <?php foreach( $homeWhyWeList as $index => $item ):?>
              <?php if( $index == 0 || $index == 1 ):?>
                <div class="home-why-we__item col-lg-6">
                  <div class="inner">
                    <h3 class="name"><?php echo $item['name'];?></h3>
                    <div class="description"><?php echo wpautop( $item['description'] );?></div>
                  </div>
                </div>
              <?php else:?>
                <div class="home-why-we__item col-lg-4">
                  <div class="inner">
                    <h3 class="name"><?php echo $item['name'];?></h3>
                    <div class="description"><?php echo wpautop( $item['description'] );?></div>
                  </div>
                </div>
              <?php endif;?>

            <?php endforeach;?>

          </div>
        </div>
      </section>
  <?php endif;?>

  <?php
      $homeCasesTitle = carbon_get_post_meta(get_the_ID(), 'smmstudio_main_page_our_effectiveness_title'.carbon_lang_prefix());
	    $homeCasesLink = carbon_get_post_meta(get_the_ID(), 'smmstudio_main_page_our_effectiveness_link'.carbon_lang_prefix());

      if( $homeCasesLink && $homeCasesTitle):?>
      <!-- Наші кейси -->
      <section class="home-our-case">
        <div class="container-fluid">
          <div class="row">
            <div class="content col-12">
              <h2 class="block-title text-center"><?php echo $homeCasesTitle;?></h2>
              <ul class="cases-category-list">
	              <?php
		              $serviceSubCat = get_categories( array(
			              'taxonomy'     => 'cases-cat-tax',
			              'type'         => 'cases',
			              'child_of'     => false,
			              'parent'       => 0,
			              'orderby'      => 'name',
			              'order'        => 'ASC',
			              'hide_empty'   => 1,
			              'hierarchical' => false,
			              'number'       => 0,
			              'pad_counts'   => false,

		              ) );

		              if ( $serviceSubCat ):?>

                    <?php foreach( $serviceSubCat as $innerCat ):?>
                      <li>
                        <a href="#" rel="nofollow" class="cases-category" data-cat="<?php echo $innerCat->term_id;?>">
	                        <?php echo $innerCat->name;?>
                          <?php echo $innerCat->count;?>
                        </a>
                      </li>
                    <?php endforeach;?>
                <?php endif;?>
              </ul>
              <div class="cases-list" id="cases-list">
                <a href="" target="_blank" class="case-item">

                </a>
              </div>
              <a href="<?php echo $homeCasesLink;?>" target="_blank" class="go-to-all">
                <svg class="circle" viewBox="0 0 100 100">
                  <path id="circle" d="M 0,50 a 50,50 0 1,1 0,1 z" />
                  <text>
                    <textPath xlink:href="#circle">
	                    <?php echo esc_html( pll__( 'всі кейси' ) ); ?>
                    </textPath>
                  </text>
                </svg>
                <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="22" height="42" viewBox="0 0 22 42" fill="none">
                  <path d="M14.8937 3C13.6281 13.4722 11.2175 24.2166 10.6111 34.6132C10.3209 39.5884 16.6149 28.9157 18.5974 27.405C21.128 25.4767 10.9363 35.9509 10.046 38.9189C9.69371 40.0934 4.38748 28.1343 3 27.4735" stroke="#1C1C1C" stroke-width="5" stroke-linecap="round"/>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </section>
  <?php endif;?>

  <?php get_template_part('template-parts/block-our-clients');?>

  <?php get_template_part('template-parts/block-reviews');?>

<?php
  $faqBlockTitle = carbon_get_post_meta(get_the_ID(), 'smmstudio_main_page_faq_title'.carbon_lang_prefix());
	$faqBlockList = carbon_get_post_meta(get_the_ID(), 'smmstudio_main_page_faq_list'.carbon_lang_prefix());

	if ( $faqBlockList && $faqBlockTitle ){

	  $content = array(
	      'title' => $faqBlockTitle,
        'question_list' => $faqBlockList
    );

		get_template_part( 'template-parts/block-faq', '', $content );

  }

?>

<?php
	$formBlockTitle = carbon_get_post_meta(get_the_ID(), 'smmstudio_main_page_contact_form_title'.carbon_lang_prefix());
	$formBlockService = carbon_get_post_meta(get_the_ID(), 'smmstudio_main_page_contact_form_default_service'.carbon_lang_prefix());

	if ( $formBlockTitle && $formBlockService ){

		$content = array(
			'title' => $formBlockTitle,
			'form_service' => $formBlockService
		);

		get_template_part( 'template-parts/block-contact-form', '', $content );

	}

?>

<?php
	$friendsBlockTitle = carbon_get_post_meta(get_the_ID(), 'smmstudio_main_page_be_friends_title'.carbon_lang_prefix());
	$friendsBlockImageList = carbon_get_post_meta(get_the_ID(), 'smmstudio_main_page_be_friends_image_list'.carbon_lang_prefix());

	if ( $friendsBlockTitle && $friendsBlockImageList ){

		$content = array(
			'title' => $friendsBlockTitle,
			'image_list' => $friendsBlockImageList
		);

		get_template_part( 'template-parts/block-friends', '', $content );

	}

?>

<?php
	$seoBlockTitle = carbon_get_post_meta(get_the_ID(), 'smmstudio_main_page_seo_title'.carbon_lang_prefix());
	$seoBlockText = carbon_get_post_meta(get_the_ID(), 'smmstudio_main_page_seo_text'.carbon_lang_prefix());

	if ( $seoBlockTitle && $seoBlockText ){

		$content = array(
			'title' => $seoBlockTitle,
			'text' => $seoBlockText
		);

		get_template_part( 'template-parts/block-seo', '', $content );

	}

?>

<?php get_footer('new');
