<?php
	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Шаблон страницы "Разработка"
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package smmstudio
	 */
	get_header();

?>

	<!-- Главный экран --->

	<section class="main-serv-screen">
		<div class="container">
			<div class="row">
				<div class="content col-12">
					<?php the_content();?>
					<a href="#our-quiz" class="button scroll-to" >
						<?php echo get_field('tekst_knopki_na_glavnom_ekrane');?>
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M0.0114107 1L0 9.55554L17.1429 12L0 14.4445L0.0114107 23L24 12L0.0114107 1Z" fill="#343BBC"/>
						</svg>
					</a>
				</div>
			</div>
		</div>
        <div class="bg-images-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
	                    <?php
		                    $devFsPic = get_field('kartinki_dlya_glavnogo_ekrana');

		                    if( $devFsPic ):
			                    ?>
                                <div class="images-wrapper">
                                    <div class="pic-wrap">
                                        <img class="lazy" data-src="<?php echo $devFsPic['kartinka_1'];?>" alt="">
                                    </div>
                                    <div class="pic-wrap">
                                        <img class="lazy" data-src="<?php echo $devFsPic['kartinka_2'];?>" alt="">
                                    </div>
                                    <div class="pic-wrap">
                                        <img class="lazy" data-src="<?php echo $devFsPic['kartinka_3'];?>" alt="">
                                    </div>
                                </div>
		                <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
        <a href="#emulator-code-editor" class="go-down scroll-to">
            <span class="arrow-wrapper">
                <span class="white"></span>
                <span class="blue"></span>
                <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.292893 8.70711C-0.0976311 8.31658 -0.0976311 7.68342 0.292893 7.29289L6.65685 0.928932C7.04738 0.538408 7.68054 0.538408 8.07107 0.928932C8.46159 1.31946 8.46159 1.95262 8.07107 2.34315L2.41421 8L8.07107 13.6569C8.46159 14.0474 8.46159 14.6805 8.07107 15.0711C7.68054 15.4616 7.04738 15.4616 6.65685 15.0711L0.292893 8.70711ZM2 9H1V7H2V9Z" fill="#221EC4"/>
                </svg>

            </span>
        </a>
	</section>

    <!--- Эмулятор редактора кода --->
    <?php
        $codeEditorEmulator = get_field('blok_emulyator_redaktora_koda');

        if ( $codeEditorEmulator ):
            $code_text = $codeEditorEmulator['tekst_v_redaktore'];
    ?>
        <section class="emulator-code-editor" id="emulator-code-editor">
            <div class="editor-wrapper">
                <div class="editor-head">
                    <p>SMMSTUDIO.php</p>
                    <div class="editor-controls">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 7H12V8.33333H4V7Z" fill="#6B799A"/>
                        </svg>

                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="2.6" y="4.6" width="8.8" height="8.8" stroke="#6B799A" stroke-width="1.2"/>
                            <path d="M4 4V2H14V12H12" stroke="#6B799A" stroke-width="1.2"/>
                        </svg>

                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.11598 8.00011L2.55798 12.5581L3.44198 13.4421L7.99998 8.88411L12.558 13.4421L13.442 12.5581L8.88398 8.00011L13.442 3.44211L12.558 2.55811L7.99998 7.11611L3.44198 2.55811L2.55798 3.44211L7.11598 8.00011Z" fill="#6B799A"/>
                        </svg>

                    </div>
                </div>
                <div class="editor-body">
                    <?php echo $code_text;?>
                </div>
            </div>
        </section>
    <?php endif;?>

    <!--- Web решения --->

    <?php
	    $webSolutions = get_field('blok_web_resheniya');

	    if ( $webSolutions ):

            $block_title = $webSolutions['zagolovok_bloka'];
	        $block_slider = $webSolutions['slajder'];
    ?>
        <section class="web-solutions">
            <div class="container">
                <div class="row">
                    <h2 class="block-title col-xl-8 offset-xl-2 offset-lg-1 offset-0 col-lg-10 col-12 text-center"><?php echo $block_title;?></h2>
                </div>
                <div class="row">
                    <div class="slider-solutions-wrapper col-12">
		                <?php foreach ( $block_slider as $slide ):?>
                            <div class="item">
                                <a href="#" class="show-btn open-mobile">
                                    <svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.0001 0.799804L6.0001 5.7998L10.0001 0.799805L11.6001 1.7998L6.0001 8.7998L0.400099 1.7998L2.0001 0.799804Z" fill="white"/>
                                    </svg>
                                </a>
                                <h3><?php echo $slide['tip_sajta'];?></h3>
                                <div class="text-container" data-visible="close">
	                                <?php echo $slide['tekst_slajda'];?>
	                                <a href="#contact-form" class="go-form scroll-to">
		                                <?php echo $textMore;?>
                                        <svg width="9" height="12" viewBox="0 0 9 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.799805 9.9999L5.7998 5.9999L0.799805 1.9999L1.7998 0.399902L8.7998 5.9999L1.7998 11.5999L0.799805 9.9999Z" fill="white"/>
                                        </svg>
                                    </a>
                                </div>
                                <div class="pic">
                                    <img class="lazy" data-src="<?php echo $slide['kartinka_dlya_slajda'];?>" alt="">
                                </div>
                            </div>
                        <?php endforeach;?>
                       
                    </div>

                </div>
            </div>

        </section>
    <?php endif;?>

    <!-- Наши кейсы --->

<?php
    $ourCasesTitle = get_field('zagolovok_bloka_portfolio');

    if ( $ourCasesTitle ):
    ?>
    <section class="our-cases animation-tracking">
      <div class="container">
        <div class="row first-up">
          <h2 class="block-title col-lg-5 col-12"><?php echo $ourCasesTitle;?></h2>
        </div>
      </div>
      <div class="container-fluid" id="dev-cases">

        <div class="row cases-list second-up" id="cases-list">
            <?php
                $argsCases = array(
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'cases-cat-tax',
                            'field' => 'id',
                            'terms' => $caseDevCatId,
                        )
                    ),
                    'post_type' => 'cases',
                    'orderby'    => 'date',
                    'post__not_in' => array(3636, 3555, 3828, 3828, 3873, 3870),
                    'posts_per_page' => 3
                );

                $ourDevCases = new WP_Query( $argsCases );
                if ( $ourDevCases->have_posts() ) :
                    while ( $ourDevCases->have_posts() ) : $ourDevCases->the_post();
                        ?>
                <a href="<?php the_permalink();?>" class="case-item col-lg-4 col-sm-6 col-12">
                  <span class="prev-pic-wrapper">
                    <img class="lazy" data-src="<?php the_post_thumbnail_url();?>" alt="">
                  </span>
                  <span class="case-info">
                    <h3><?php the_title();?></h3>
                    <p class="description"><?php echo get_field('chem_zanimaetsya_kompaeiya');?></p>
                  </span>

                </a>
                    <?php endwhile;?>

                <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
          <?php

              $argsCasesDevAll = array(
                  'tax_query' => array(
                      array(
                          'taxonomy' => 'cases-cat-tax',
                          'field' => 'id',
                          'terms' => $caseDevCatId,
                      )
                  ),
                  'post_type' => 'cases',
                  'post__not_in' => array(3636, 3555, 3828, 3828, 3873, 3870),
              );

              $ourDevCasesMore = new WP_Query( $argsCasesDevAll );
              $allDevCases = $ourDevCasesMore->post_count;

              ;?>
        <div class="row" id="mor-cases-btn-wrap" data-allposts="<?php echo $allDevCases;?>">


          <div class="col-12 text-center">

            <a href="#dev-cases"
               class="button less d-none"
               id="less-cases"
               data-currentcat="<?php echo $caseDevCatId;?>"
               data-offsetpost="0"
               data-lang="<?php echo $siteLang;?>">
              <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 10.5L7 4.25L12 10.5L14 9.25L7 0.5L-5.46392e-08 9.25L2 10.5Z" fill="#C6CCDA"/>
              </svg>
                      <?php echo $textLassCases;?>


            </a>
            <a href=""
               class="button more"
               id="more-cases"
               data-currentcat="<?php echo $caseDevCatId;?>"
               data-offsetpost="1"
               data-lang="<?php echo $siteLang;?>">
                      <?php echo $moreCasesText;?>
              <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 0.499999L7 6.75L12 0.5L14 1.75L7 10.5L-5.46392e-08 1.75L2 0.499999Z" fill="#6B799A"/>
              </svg>
            </a>

          </div>

        </div>
      </div>
    </section>
    <?php endif;?>

	<!-- Крутой маркетинг --->

    <?php
        $coolMarketing = get_field('blok_krutoj_marketing');

        if ( $coolMarketing ):
            $block_header = $coolMarketing['zagolovok_bloka'];
            $btn_text = $coolMarketing['tekst_knopki'];
            $animation_text = $coolMarketing['tekst_animaczii'];
    ?>
        <section class="cool-marketing">
            <h2 class="title-text"><?php echo $block_header;?></h2>
            <div class="water-text">
                <?php for ( $i = 0; $i < 10; $i ++ ):?>
                    <p><?php echo $block_header;?></p>
                <?php endfor;?>
            </div>
            <div class="content">
                <div class="animation-wrapper">
                    <div class="printing-wrapper">
                        <p>
                            <span data-typest11="<?php echo $animation_text['stroka_1_chast_1'];?>"></span>
                            <span data-typest12="<?php echo $animation_text['stroka_1_chast_2'];?>"></span>
                            <span data-typest13="<?php echo $animation_text['stroka_1_chast_3'];?>"></span>
                        </p>
                        <p data-typest2="<?php echo $animation_text['stroka_2'];?>"></p>
                        <p>
                            <span data-typest31="<?php echo $animation_text['stroka_3_chast_1'];?>"></span>
                            <span data-typest32="<?php echo $animation_text['stroka_3_chast_2'];?>"></span>
                            <span data-typest33="<?php echo $animation_text['stroka_3_chast_3'];?>"></span>
                            <span data-typest34="<?php echo $animation_text['stroka_3_chast_4'];?>"></span>
                            <span data-typest35="<?php echo $animation_text['stroka_3_chast_5'];?>"></span>
                            <span data-typest36="<?php echo $animation_text['stroka_3_chast_6'];?>"></span>
                        </p>
                        <p>
                            <span data-typest41="<?php echo $animation_text['stroka_4_chast_1'];?>"></span>
                            <span data-typest42="<?php echo $animation_text['stroka_4_chast_2'];?>"></span>
                            <span data-typest43="<?php echo $animation_text['stroka_4_chast_3'];?>"></span>
                        </p>
                        <p data-typest5="<?php echo $animation_text['stroka_5'];?>"></p>
                    </div>

                    <a href="#contact-form" class="button scroll-to"><?php echo $btn_text;?></a>
                </div>

            </div>
        </section>

    <?php endif;?>

    <!-- Процесс разработки -->

    <?php
        $developmentProcess = get_field('blok_proczess_razrabotki');

        if ( $developmentProcess ):

            $block_title = $developmentProcess['zagolovok_bloka'];
            $all_processes = $developmentProcess['proczessy'];
    ?>
        <section class="development-process">
            <div class="container">
                <div class="row">
                    <h2 class="block-title col-lg-7 col-12"><?php echo $block_title;?></h2>
                </div>
                <div class="row">
                    <div class="slider-development-wrapper col-12">
                        <div class="controls-wrapper">
                            <a href="#" class="control prev">
                                <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.292893 8.70711C-0.0976311 8.31658 -0.0976311 7.68342 0.292893 7.29289L6.65685 0.928932C7.04738 0.538408 7.68054 0.538408 8.07107 0.928932C8.46159 1.31946 8.46159 1.95262 8.07107 2.34315L2.41421 8L8.07107 13.6569C8.46159 14.0474 8.46159 14.6805 8.07107 15.0711C7.68054 15.4616 7.04738 15.4616 6.65685 15.0711L0.292893 8.70711ZM2 9H1V7H2V9Z" fill="#6B799A"/>
                                </svg>
                                <span></span>
                            </a>
                            <p class="current-number">0<span>1</span></p>
                            <a href="#" class="control next">
                                <span></span>
                                <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.292893 8.70711C-0.0976311 8.31658 -0.0976311 7.68342 0.292893 7.29289L6.65685 0.928932C7.04738 0.538408 7.68054 0.538408 8.07107 0.928932C8.46159 1.31946 8.46159 1.95262 8.07107 2.34315L2.41421 8L8.07107 13.6569C8.46159 14.0474 8.46159 14.6805 8.07107 15.0711C7.68054 15.4616 7.04738 15.4616 6.65685 15.0711L0.292893 8.70711ZM2 9H1V7H2V9Z" fill="#6B799A"/>
                                </svg>
                            </a>
                        </div>

                        <div class="slider-wrapper-content" id="development-process-slider">
	                        <?php foreach ( $all_processes as $process ):?>
                                <div class="slide">
                                    <h3><?php echo $process['nazvanie'];?></h3>
                                    <p><?php echo $process['kratkoe_opisanie'];?></p>
                                    <img src="<?php echo $process['kartinka'];?>" alt="" class="pic">
                                </div>
                            <?php endforeach;?>
                        </div>
                        <div class="slider-wrapper-previews" id="development-process-slider-previews">
	                        <?php foreach ( $all_processes as $process ):?>
                                <div class="slide">
                                    <img src="<?php echo $process['kartinka'];?>" alt="">
                                </div>
	                        <?php endforeach;?>
                        </div>
                        <p class="current-slide-number">0<span>1</span></p>
                    </div>
                </div>
            </div>

        </section>
     <?php endif;?>

     <!-- Сайты которые помогают -->

    <?php
        $websitesHelp = get_field('sajty_kotorye_pomogayut');

        if( $websitesHelp ):

            $block_title = $websitesHelp['zagolovok_bloka'];
            $advantages = $websitesHelp['preimushhestva'];
            $i = 0;
    ?>
        <section class="websites-help">
            <div class="container">
                <div class="row">
                    <h2 class="block-title col-12"><?php echo $block_title;?></h2>
                </div>
                <div class="row">
                    <?php foreach ( $advantages as $item): $i = $i+1;?>
                    <div class="item col-lg-4">
                        <div class="inner">
                            <p class="number"><?php echo $i;?></p>
                            <div class="info-wrapper">
                                <h3><?php echo $item['nazvanie']?></h3>
                                <p><?php echo $item['kratkoe_opisanie']?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </section>

    <?php endif;?>

    <!-- С нами вы получаете -->

    <?php
        $withUsYouGet = get_field('s_nami_vy_poluchaete');

        if ( $withUsYouGet ):

            $block_title = $withUsYouGet['zagolovok_bloka'];
	        $advantages = $withUsYouGet['preimushhestva'];
    ?>
        <section class="with-us-you-get">
            <div class="container">
                <div class="row">
                    <h2 class="block-title col-lg-8 offset-lg-2"><?php echo $block_title;?></h2>
                </div>
                <div class="row">
                    <?php foreach ( $advantages as $item ):?>
                    <div class="item col-xl-3 col-sm-6 col-12">
                        <div class="inner">
                            <div class="icon-wrapper">
                                <img class="lazy" data-src="<?php echo $item['kartinka'];?>" alt="">
                            </div>
                            <h3><?php echo $item['nazvanie'];?></h3>
                            <p><?php echo $item['kratkoe_opisanie'];?></p>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </section>
    <?php endif;?>

    <!-- Запуск рекламы --->

	<?php

	$startAdd = get_field('blok_zapuskaete_reklammu');

	if ( $startAdd ):
		$block_title = $startAdd['zagolovok_bloka'];
		$block_pic = $startAdd['kartinka_bloka'];
		$block_text = $startAdd['tekst'];
		$btn_text = $startAdd['tekst_knopki'];
		?>
		<section class="start-add">
			<div class="container">
				<div class="row">
					<div class="content col-12">
						<h2 class="small-block-title"><?php echo $block_title;?></h2>
						<p><?php echo $block_text;?></p>
						<a href="#contact-form" class="button scroll-to"><?php echo $btn_text;?></a>
						<div class="pic-wrapper">
							<img class="lazy" data-src="<?php echo $block_pic;?>" alt="">
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endif;?>

    <!-- Отзывы --->

    <?php
	$reviews = get_field('zagolovok_bloka_s_otzyvami');

	if ( $reviews ):
		?>
        <section class="reviews animation-tracking">
            <div class="container-fluid">
                <div class="row first-up">
                    <h2 class="block-title text-center col-12"><?php echo $reviews;?></h2>
                </div>
                <div class="rev-slider-wrapper second-up">
                    <a href="#" class="control prev">
                        <svg width="17" height="24" viewBox="0 0 17 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.4 20.0001L6.40002 12L16.4 4.00005L14.4 0.800049L0.400024 12L14.4 23.2001L16.4 20.0001Z" fill="#6B799A"/>
                        </svg>

                    </a>
                    <a href="#" class="control next">
                        <svg width="17" height="24" viewBox="0 0 17 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.600098 20.0001L10.6001 12L0.600098 4.00005L2.6001 0.800049L16.6001 12L2.6001 23.2001L0.600098 20.0001Z" fill="#6B799A"/>
                        </svg>

                    </a>
                    <div class="rev-slider" id="rev-slider">
						<?php
							$revArgs = array(
								'posts_per_page' => -1,
								'orderby' 	 => 'date',
								'post_type'  => 'reviews'

							);

							$revSlides = new WP_Query( $revArgs );

							if ( $revSlides->have_posts() ) :

								while ( $revSlides->have_posts() ) : $revSlides->the_post(); ?>
                                    <div class="slide">
                                        <div class="slide-wrapper">

											<?php
												$media_type = get_field('kartinkavideo');

												if ( $media_type['value'] == 'image' ): ?>
                                                    <a href="<?php echo get_field('kartinka')?>" data-fancybox="rev">
                                                        <img data-lazy="<?php echo get_field('kartinka')?>" alt="" class="pic">
                                                    </a>
												<?php elseif ( $media_type['value'] == 'video' ):?>
                                                    <div class="author">
                                                        <!-- <div class="photo-wrapper">
                                                            <img data-lazy="<?php the_post_thumbnail_url();?>" alt="">
                                                        </div> -->
                                                        <div class="text">
                                                            <h3><?php the_title();?></h3>
                                                            <p><?php echo get_field('kampaniya');?></p>
                                                        </div>
                                                    </div>
                                                    <div class="youtube" id="<?php echo get_field('video')?>"></div>
                                                    <div class="timing">
                                                        <p><?php echo get_field('dlitelnost_video');?></p>
                                                    </div>
                                                    <a href="#" class="open-review"  data-videoid="<?php echo get_field('video')?>"></a>
												<?php else:?>
												<?php endif;
											?>
                                        </div>
                                    </div>

								<?php endwhile;?>
							<?php endif; ?>
						<?php wp_reset_postdata(); ?>
                    </div>

                </div>
            </div>
        </section>
	<?php endif;?>

	<!-- Квиз --->

    <?php
	$ourQuiz = get_field('blok_s_kvizom');

	if ( $ourQuiz ):

		$block_title = $ourQuiz['zagolovok_bloka'];
		$quiz_questions = $ourQuiz['forma_oprosa']['pole_dlya_oprosa'];
		$text_header_thx = $ourQuiz['zagolovok_slajda_spasibo'];
		$text_thx = $ourQuiz['tekst_slajde_spasibo'];
		$call_leave_contact = $ourQuiz['prizyv_otstavit_kontaktnye_dannye_na_slajde_formy'];
		$moreTextForm = $ourQuiz['dopolnitelnyj_tekst_na_slajde_formy'];
		$submit_btn_text = $ourQuiz['tekst_knopki_otpravki_kviza'];
		$i=0;
		?>
		<section class="our-quiz animation-tracking" id="our-quiz">
			<div class="container-fluid">
				<div class="row first-up">
					<h2 class="block-title col-12 text-center"><?php echo $block_title;?></h2>
				</div>
				<div class="row">

					<div class="content col-12">
						<div class="quiz-wrapper">
							<div class="question-progress-bar" id="question-bar">

								<p><?php echo $questionTextInQuiz;?> <span class="curent-question">1</span> <?php echo $inTextInQuiz;?> <span class="all-questions"></span></p>

								<div class="progress-wrapper" id="progress-wrapper">

								</div>
							</div>
							<form action=""
							      method="post"
							      class="needs-validation"
							      id="quiz-form"
							      data-toggle="validator"
							      novalidate>

								<!--<input type="hidden" name="action" value="quiz_form">-->

								<div class="q-form-wrapper">
									<div class="q-form-slider" id="q-form-slider">
										<?php foreach ( $quiz_questions as $question ): $i = $i + 1 ;?>
											<div class="slide">

												<!-- Обычное поле ввода -->

												<?php
													if( $question['tip_polya'] == 'Поле ввода' ){

														$fild_data = $question['pole_vvoda'];
														?>
														<h3 class="question-name"><?php echo $fild_data['vopros'];?></h3>
														<p><?php echo $youAnsvTextInQuiz;?></p>

														<div class="form-group text-input-type">
															<input type="text"
															       name="textfild<?php echo $i;?>[<?php echo $fild_data['vopros'];?>]"
															       id="textFildId<?php echo $i;?>"
															       oninput="dataOutputTextfild<?php echo $i;?>.value = textFildId<?php echo $i;?>.value"
															       placeholder="<?php echo $fild_data['primer_otveta'];?>"
															       class="form-control">
															<p class="text-out">
																<output name="powerOutputName" id="dataOutputTextfild<?php echo $i;?>">0</output>
															</p>
														</div>

														<!-- Выбор одного варивнта ответа -->

													<?php }elseif ( $question['tip_polya'] == 'Выбор одного варианта'){

														$fild_data = $question['vybor_odnogo_otveta'];
														$possible_answer = $fild_data['variant_otveta'];
														$your_variant = $fild_data['vozmozhnost_vvesti_svoj_variant'];
														$your_variant_text = $fild_data['tekst_dlya_flazhka_svoj_variant'];
														?>
														<h3 class="question-name"><?php echo $fild_data['vopros'];?></h3>
														<div class="radio-type-wrapper">
															<?php foreach ( $possible_answer as $answer ): ?>
																<div class="form-check">
																	<label class="form-check-label">
																		<input type="radio"
																		       id="radiofild<?php echo $i;?>"
																		       class="form-check-input"
																		       name="radiofild<?php echo $i;?>[<?php echo $fild_data['vopros'];?>]"
																		       value="<?php echo $answer['otvet'];?>">
																		<p class="radio__text"><?php echo $answer['otvet'];?></p>
																	</label>
																</div>
															<?php endforeach;?>

															<!-- Флажок для выбора своего варианта -->

															<?php
																if ( $your_variant['value'] == 'variantok'):
																	?>
																	<div class="form-check">
																		<label class="form-check-label">
																			<input type="radio"
																			       id="radiofild<?php echo $i;?>"
																			       class="form-check-input"
																			       name="radiofild<?php echo $i;?>[<?php echo $fild_data['vopros'];?>]"
																			       value="my-ans">
																			<p class="radio__text"><?php echo $your_variant_text;?></p>
																		</label>
																	</div>
																<?php endif;?>
														</div>

														<!-- Поле для ввода своего варианта -->

														<?php
														if ( $your_variant['value'] == 'variantok'):
															?>
															<div class="you-var">
																<p><?php echo $youAnsvTextInQuiz;?></p>
																<div class="form-group text-input-type">
																	<input type="text"
																	       name="textfild<?php echo $i;?>[<?php echo $fild_data['vopros'];?>]"
																	       id="textFildId<?php echo $i;?>"
																	       oninput="dataOutputTextfild<?php echo $i;?>.value = textFildId<?php echo $i;?>.value"
																	       placeholder="<?php echo $fild_data['primer_otveta_dlya_polya_vvoda_svoj_variant'];?>"
																	       class="form-control" >
																	<p class="text-out">
																		<output name="powerOutputName" id="dataOutputTextfild<?php echo $i;?>">0</output>
																	</p>
																</div>
															</div>
														<?php endif;?>

														<!-- Выбор одного варивнта ответа с картинкой -->

													<?php }elseif ($question['tip_polya'] == 'Выбор одного варианта с картинкой'){

														$fild_data = $question['vybor_odnogo_otveta_s_kartinkoj'];

														$possible_answer = $fild_data['variant_otveta'];

														$your_variant = $fild_data['vozmozhnost_vvesti_svoj_variant'];

														$your_variant_grup = $fild_data['tekst_i_kartinka_dlya_flazhka_svoj_variant'];
														?>
														<h3 class="question-name"><?php echo $fild_data['vopros'];?></h3>
														<div class="radio-image-type-wrapper">
															<?php foreach ( $possible_answer as $answer ): ?>
																<div class="form-check">
																	<label class="form-check-label">
																		<input type="radio"
																		       id="radiofild<?php echo $i;?>"
																		       class="form-check-input"
																		       name="radiofild<?php echo $i;?>[<?php echo $fild_data['vopros'];?>]"
																		       value="<?php echo $answer['otvet'];?>">
																		<p class="radio__text">
                                                                             <span class="image">
                                                                                 <img class="lazy" src="<?php echo $answer['kartinka'];?>" alt="">
                                                                             </span>
																			<span class="text"><?php echo $answer['otvet'];?></span>
																		</p>
																	</label>
																</div>
															<?php endforeach;?>

															<!-- Флажок для выбора своего варианта -->

															<?php
																if ( $your_variant['value'] == 'variantok'):
																	?>
																	<div class="form-check">
																		<label class="form-check-label">
																			<input type="radio"
																			       id="radiofild<?php echo $i;?>"
																			       class="form-check-input"
																			       name="radiofild<?php echo $i;?>[<?php echo $fild_data['vopros'];?>]"
																			       value="my-ans">
																			<p class="radio__text">

                                                                                <span class="image">
                                                                                <img class="lazy" src="<?php echo $your_variant_grup['kartinka'];?>" alt="">
                                                                            </span>
																				<span class="text"><?php echo $your_variant_grup['teks'];?></span>
																			</p>
																		</label>
																	</div>
																<?php endif;?>
														</div>

														<!-- Поле для ввода своего варианта -->

														<?php
														if ( $your_variant['value'] == 'variantok'):
															?>
															<div class="you-var">
																<p><?php echo $youAnsvTextInQuiz;?></p>
																<div class="form-group text-input-type">
																	<input type="text"
																	       name="textfild<?php echo $i;?>[<?php echo $fild_data['vopros'];?>]"
																	       id="textFildId<?php echo $i;?>"
																	       oninput="dataOutputTextfild<?php echo $i;?>.value = textFildId<?php echo $i;?>.value"
																	       placeholder="<?php echo $fild_data['primer_otveta_dlya_polya_vvoda_svoj_variant'];?>"
																	       class="form-control" >
																	<p class="text-out">
																		<output name="powerOutputName" id="dataOutputTextfild<?php echo $i;?>">0</output>
																	</p>
																</div>
															</div>
														<?php endif;?>

														<!-- Выбор нескольких варивнта ответа с картинкой -->

													<?php }elseif ($question['tip_polya'] == 'Выбор нескольких вариантов с картинкой'){

														$fild_data = $question['vybor_neskolkih_otvetov_s_kartinkoj'];

														$possible_answer = $fild_data['variant_otveta'];

														$your_variant = $fild_data['vozmozhnost_vvesti_svoj_variant'];

														$your_variant_grup = $fild_data['tekst_i_kartinka_dlya_flazhka_svoj_variant'];
														?>
														<h3 class="question-name"><?php echo $fild_data['vopros'];?></h3>
														<div class="instruction">
															<svg width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path fill-rule="evenodd" clip-rule="evenodd" d="M10.455 0.454932C10.6649 0.24684 10.9483 0.129726 11.2439 0.128911C11.5395 0.128095 11.8235 0.243643 12.0346 0.450574C12.2456 0.657505 12.3668 0.939192 12.3718 1.23473C12.3769 1.53028 12.2654 1.81593 12.0615 2.02993L6.07349 9.51493C5.97058 9.62578 5.84637 9.71474 5.70829 9.77648C5.57021 9.83823 5.4211 9.8715 5.26987 9.8743C5.11864 9.8771 4.9684 9.84937 4.82813 9.79278C4.68786 9.73619 4.56044 9.65189 4.45349 9.54493L0.485992 5.57593C0.375462 5.47294 0.286809 5.34874 0.225321 5.21074C0.163833 5.07274 0.13077 4.92377 0.128105 4.77272C0.12544 4.62166 0.153227 4.47162 0.209808 4.33154C0.26639 4.19145 0.350607 4.0642 0.457435 3.95738C0.564263 3.85055 0.691514 3.76633 0.831596 3.70975C0.971678 3.65317 1.12172 3.62538 1.27278 3.62804C1.42383 3.63071 1.5728 3.66377 1.7108 3.72526C1.8488 3.78675 1.973 3.8754 2.07599 3.98593L5.21699 7.12543L10.4265 0.487932C10.4358 0.476313 10.4458 0.465291 10.4565 0.454932H10.455Z" fill="#212BC3"/>
															</svg>
															<p><?php echo $onMoreAnsvTextInQuiz;?></p>
														</div>
														<div class="checkbox-image-type-wrapper">
															<?php foreach ( $possible_answer as $answer ):?>
																<div class="form-check-inline">
																	<label class="form-check-label">
																		<input type="checkbox"
																		       name="chboxfild<?php echo $i;?>[<?php echo $fild_data['vopros'];?>][]"
																		       class="form-check-input"
																		       value="<?php echo $answer['otvet'];?>">

																		<p class="checkbox__text">
                                                                            <span class="image">
                                                                                <img class="lazy" src="<?php echo $answer['kartinka'];?>" alt="">
                                                                            </span>
																			<span class="text">
                                                                                <?php echo $answer['otvet'];?>
                                                                            </span>
																		</p>
																	</label>
																</div>
															<?php endforeach;?>

															<!-- Флажок для выбора своего варианта -->

															<?php if ( $your_variant['value'] == 'variantok'): ?>
																<div class="form-check-inline">
																	<label class="form-check-label">
																		<input type="checkbox"

																		       class="form-check-input cast"
																		       value="my-ans">

																		<p class="checkbox__text">
                                                                        <span class="image">
                                                                            <img class="lazy" src="<?php echo $your_variant_grup['kartinka'];?>" alt="">
                                                                        </span>
																			<span class="text">
                                                                            <?php echo $your_variant_grup['otvet'];?>
                                                                        </span>
																		</p>
																	</label>
																</div>
															<?php endif;?>

															<!-- Поле для ввода своего варианта -->

															<?php if ( $your_variant['value'] == 'variantok'): ?>
																<div class="you-var">
																	<p><?php echo $youAnsvTextInQuiz;?></p>
																	<div class="form-group text-input-type">
																		<input type="text"
																		       name="textfild<?php echo $i;?>[<?php echo $fild_data['vopros'];?>]"
																		       id="textFildId<?php echo $i;?>"
																		       oninput="dataOutputTextfild<?php echo $i;?>.value = textFildId<?php echo $i;?>.value"
																		       placeholder="<?php echo $fild_data['primer_otveta_dlya_polya_vvoda_svoj_variant'];?>"
																		       class="form-control"
																		       disabled>
																		<p class="text-out">
																			<output name="powerOutputName" id="dataOutputTextfild<?php echo $i;?>">0</output>
																		</p>
																	</div>
																</div>
															<?php endif;?>
														</div>

														<!-- Выбор нескольких варивнта ответа -->

													<?php }else{

														$fild_data = $question['vybor_neskolkih_otvetov'];

														$possible_answer = $fild_data['variant_otveta'];

														$your_variant = $fild_data['vozmozhnost_vvesti_svoj_variant'];

														$your_variant_text = $fild_data['tekst_dlya_flazhka_svoj_variant'];
														?>
														<h3 class="question-name"><?php echo $fild_data['vopros'];?></h3>
														<div class="instruction">
															<svg width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path fill-rule="evenodd" clip-rule="evenodd" d="M10.455 0.454932C10.6649 0.24684 10.9483 0.129726 11.2439 0.128911C11.5395 0.128095 11.8235 0.243643 12.0346 0.450574C12.2456 0.657505 12.3668 0.939192 12.3718 1.23473C12.3769 1.53028 12.2654 1.81593 12.0615 2.02993L6.07349 9.51493C5.97058 9.62578 5.84637 9.71474 5.70829 9.77648C5.57021 9.83823 5.4211 9.8715 5.26987 9.8743C5.11864 9.8771 4.9684 9.84937 4.82813 9.79278C4.68786 9.73619 4.56044 9.65189 4.45349 9.54493L0.485992 5.57593C0.375462 5.47294 0.286809 5.34874 0.225321 5.21074C0.163833 5.07274 0.13077 4.92377 0.128105 4.77272C0.12544 4.62166 0.153227 4.47162 0.209808 4.33154C0.26639 4.19145 0.350607 4.0642 0.457435 3.95738C0.564263 3.85055 0.691514 3.76633 0.831596 3.70975C0.971678 3.65317 1.12172 3.62538 1.27278 3.62804C1.42383 3.63071 1.5728 3.66377 1.7108 3.72526C1.8488 3.78675 1.973 3.8754 2.07599 3.98593L5.21699 7.12543L10.4265 0.487932C10.4358 0.476313 10.4458 0.465291 10.4565 0.454932H10.455Z" fill="#212BC3"/>
															</svg>
															<p><?php echo $onMoreAnsvTextInQuiz;?></p>
														</div>
														<div class="checkbox-type-wrapper">
															<?php foreach ( $possible_answer as $answer ): ?>
																<div class="form-check-inline">
																	<label class="form-check-label">
																		<input type="checkbox"
																		       name="chboxfild<?php echo $i;?>[<?php echo $fild_data['vopros'];?>][]"
																		       class="form-check-input"
																		       value="<?php echo $answer['otvet'];?>">
																		<p class="checkbox__text"><?php echo $answer['otvet'];?></p>
																	</label>
																</div>
															<?php endforeach;?>

															<!-- Флажок для выбора своего варианта -->

															<?php if ( $your_variant['value'] == 'variantok'): ?>
																<div class="form-check-inline">
																	<label class="form-check-label">
																		<input type="checkbox"

																		       class="form-check-input cast"
																		       value="my-ans">
																		<p class="checkbox__text"><?php echo $your_variant_text;?></p>
																	</label>
																</div>
															<?php endif;?>

															<!-- Поле для ввода своего варианта -->

															<?php if ( $your_variant['value'] == 'variantok'): ?>
																<div class="you-var">
																	<p><?php echo $youAnsvTextInQuiz;?></p>
																	<div class="form-group text-input-type">
																		<input type="text"
																		       name="textfild<?php echo $i;?>[<?php echo $fild_data['vopros'];?>]"
																		       id="textFildId<?php echo $i;?>"
																		       oninput="dataOutputTextfild<?php echo $i;?>.value = textFildId<?php echo $i;?>.value"
																		       placeholder="<?php echo $fild_data['primer_otveta_dlya_polya_vvoda_svoj_variant'];?>"
																		       class="form-control"
																		       disabled>
																		<p class="text-out">
																			<output name="powerOutputName" id="dataOutputTextfild<?php echo $i;?>">0</output>
																		</p>
																	</div>
																</div>
															<?php endif;?>
														</div>
													<?php };?>

											</div>
										<?php endforeach;?>
										<div class="slide">
											<div class="contact-form-wrapper">
												<div class="form-call-text-wrapper">
													<h2><?php echo $call_leave_contact;?></h2>
													<?php if ( !empty( $moreTextForm )):?>
														<p><?php echo $moreTextForm;?></p>
													<?php endif;?>
												</div>
												<div class="form-contact-fields">
													<div class="form-group">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M11.9999 11.3333C12.9229 11.3333 13.8252 11.0596 14.5926 10.5469C15.36 10.0341 15.9581 9.30525 16.3114 8.45253C16.6646 7.5998 16.757 6.66149 16.5769 5.75625C16.3969 4.851 15.9524 4.01948 15.2997 3.36684C14.6471 2.71419 13.8156 2.26974 12.9103 2.08967C12.0051 1.90961 11.0668 2.00202 10.2141 2.35523C9.36134 2.70844 8.63251 3.30658 8.11973 4.07401C7.60695 4.84144 7.33325 5.74369 7.33325 6.66667C7.33325 7.90435 7.82492 9.09133 8.70009 9.9665C9.57526 10.8417 10.7622 11.3333 11.9999 11.3333ZM11.9999 3.33334C12.6592 3.33334 13.3037 3.52883 13.8518 3.8951C14.4 4.26137 14.8272 4.78197 15.0795 5.39106C15.3318 6.00014 15.3978 6.67037 15.2692 7.31697C15.1406 7.96357 14.8231 8.55752 14.3569 9.02369C13.8908 9.48987 13.2968 9.80734 12.6502 9.93595C12.0036 10.0646 11.3334 9.99856 10.7243 9.74627C10.1152 9.49398 9.59462 9.06673 9.22835 8.51857C8.86208 7.97041 8.66659 7.32594 8.66659 6.66667C8.66659 5.78261 9.01777 4.93477 9.6429 4.30965C10.268 3.68452 11.1159 3.33334 11.9999 3.33334Z" fill="#101214"/>
															<path d="M20.3132 16.2468C19.2441 15.1168 17.9558 14.2167 16.5269 13.6016C15.0981 12.9865 13.5589 12.6692 12.0033 12.6692C10.4476 12.6692 8.90838 12.9865 7.47956 13.6016C6.05074 14.2167 4.76238 15.1168 3.69325 16.2468C3.46146 16.4944 3.33273 16.821 3.33325 17.1601V20.6668C3.33325 21.0204 3.47373 21.3595 3.72378 21.6096C3.97383 21.8596 4.31296 22.0001 4.66659 22.0001H19.3333C19.6869 22.0001 20.026 21.8596 20.2761 21.6096C20.5261 21.3595 20.6666 21.0204 20.6666 20.6668V17.1601C20.6689 16.8219 20.5426 16.4954 20.3132 16.2468ZM19.3333 20.6668H4.66659V17.1534C5.61141 16.1586 6.74878 15.3663 8.00949 14.825C9.2702 14.2836 10.6279 14.0044 11.9999 14.0044C13.372 14.0044 14.7296 14.2836 15.9903 14.825C17.2511 15.3663 18.3884 16.1586 19.3333 17.1534V20.6668Z" fill="#101214"/>
														</svg>
														<input type="text" name="name"  class="form-control" placeholder="<?php echo $nameTextForm;?>" required >
														<div class="invalid-feedback"><?php echo $errorTextForm;?></div>
													</div>
													<div class="form-group">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M17.8151 22C17.6161 21.9994 17.4176 21.9776 17.2232 21.9348C13.5216 21.1691 10.1114 19.3737 7.38509 16.7553C4.717 14.1312 2.86653 10.7901 2.05759 7.13623C1.9622 6.68086 1.98561 6.20859 2.12557 5.76488C2.26552 5.32117 2.51731 4.92095 2.85671 4.60271L5.22449 2.32372C5.34543 2.20935 5.48912 2.12177 5.6462 2.06669C5.80328 2.01161 5.9702 1.99028 6.13608 2.00407C6.30808 2.02202 6.47406 2.07742 6.62235 2.1664C6.77064 2.25537 6.89763 2.37575 6.9944 2.51907L9.95412 6.89354C10.0651 7.06327 10.1187 7.26415 10.107 7.46662C10.0953 7.66908 10.0188 7.86244 9.88901 8.01823L8.40323 9.79406C8.99497 11.1037 9.83298 12.2874 10.8716 13.2806C11.9036 14.3099 13.1233 15.1317 14.4647 15.7017L16.3057 14.2396C16.4603 14.1174 16.6485 14.0451 16.8451 14.0324C17.0418 14.0197 17.2377 14.0672 17.4067 14.1685L21.8759 17.0572C22.0293 17.1488 22.1599 17.2739 22.2581 17.4231C22.3562 17.5724 22.4193 17.7419 22.4427 17.919C22.466 18.0961 22.449 18.2761 22.3929 18.4457C22.3368 18.6153 22.243 18.77 22.1186 18.8982L19.81 21.1831C19.5478 21.444 19.2365 21.6505 18.8941 21.7907C18.5518 21.9309 18.1851 22.002 17.8151 22ZM6.04137 3.17612L3.6736 5.45511C3.48266 5.63302 3.34133 5.85756 3.26349 6.10665C3.18565 6.35575 3.17398 6.62081 3.22964 6.87578C3.98183 10.3044 5.7109 13.4418 8.20789 15.9088C10.7735 18.3723 13.9827 20.061 17.4659 20.7806C17.7296 20.8357 18.0028 20.8245 18.261 20.7481C18.5193 20.6716 18.7546 20.5323 18.9458 20.3425L21.2543 18.0576L16.9391 15.2695L14.962 16.8441C14.8863 16.904 14.7971 16.9445 14.7022 16.9621C14.6073 16.9796 14.5095 16.9737 14.4174 16.9448C12.7757 16.3399 11.288 15.3798 10.0607 14.133C8.79116 12.9475 7.80574 11.4906 7.17791 9.87102C7.15135 9.77297 7.15046 9.66974 7.17534 9.57125C7.20022 9.47276 7.25003 9.38234 7.31997 9.30867L8.91822 7.39669L6.04137 3.17612Z" fill="#101214"/>
														</svg>
														<input type="tel" name="phone" class="form-control" placeholder="+38 (___) ___ - __ - __ " required >
														<div class="invalid-feedback"><?php echo $errorTextForm;?></div>
													</div>
													<div class="form-group">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path fill-rule="evenodd" clip-rule="evenodd" d="M0.928371 4.31675C0.909884 4.37448 0.899902 4.43603 0.899902 4.4999V19.4999C0.899902 19.8313 1.16853 20.0999 1.4999 20.0999H22.4999C22.8313 20.0999 23.0999 19.8313 23.0999 19.4999V4.4999C23.0999 4.43661 23.0901 4.3756 23.0719 4.31832C23.0534 4.26004 23.0256 4.20361 22.9881 4.15116C22.981 4.14115 22.9736 4.13143 22.966 4.122M22.4919 3.8999H1.4999C1.48761 3.8999 1.47539 3.90027 1.46328 3.901M20.6276 5.0999H3.37218L11.9999 11.2626L20.6276 5.0999ZM21.8999 5.66582L12.3486 12.4881C12.14 12.6372 11.8598 12.6372 11.6512 12.4881L2.0999 5.66582V18.8999H21.8999V5.66582Z" fill="#101214"/>
														</svg>
														<input type="email" name="email" placeholder="E-mail" class="form-control" required >
														<div class="invalid-feedback"><?php echo $errorTextForm;?></div>
													</div>

													<button type="submit" class="btn"><?php echo $submit_btn_text;?></button>
													<div class="form-check">
														<label class="form-check-label">
															<input type="checkbox" checked class="form-check-input" value="yes" required>
															<a href="<?php echo $linkPravPol;?>" target="_blank" class="checkbox__text">
																<?php echo $addPravicyText;?>
															</a>
														</label>
													</div>
													<input type="hidden" name="sendmail" value="<?php echo $mailList;?>">
													<input type="hidden" name="thxpage" value="<?php echo $thx_link;?>">
                                                    <input type="hidden" name="quiz-name" value="Квиз по разработке с сайта smmstudio.com">

												</div>
											</div>
										</div>
									</div>
									<div class="q-slider-controls-wrapper">
										<a href="#" id="prev-q" class="prev-q btn-q btn invisible">
											<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M8.707 1.70703L7.293 0.293028L0.586001 7.00003L7.293 13.707L8.707 12.293L4.414 8.00003L14 8.00003L14 6.00003L4.414 6.00003L8.707 1.70703Z" fill="#101214"/>
											</svg>
											<span><?php echo $prevTextBtnQuiz;?></span>
										</a>
										<a href="#" id="next-q" class="next-q btn-q btn disabled">
											<span class="text-btn"><?php echo $nextTextBtnQuiz;?></span>
											<span class="animaiion-bg">
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5.293 12.293L6.707 13.707L13.414 6.99997L6.707 0.292969L5.293 1.70697L9.586 5.99997L0 5.99997L0 7.99997L9.586 7.99997L5.293 12.293Z" fill="white"/>
                                                    </svg>
                                            </span>

										</a>
									</div>
								</div>
							</form>
							<div class="quiz-thx">
								<div class="bg-pic">
									<img class="lazy" data-src="<?php echo THEME_PATH; ?>/assets/img/quiz-thx-bg-pic.png" alt="">
								</div>

								<div class="quiz-thx-content-wrapper">
									<div class="quiz-thx-text">
										<h2><?php echo $text_header_thx;?></h2>
										<p><?php echo $text_thx;?>
										</p>
									</div>
									<div class="quix-thx-pic">
										<img class="lazy" data-src="<?php echo THEME_PATH; ?>/assets/img/quiz-thx-accent-pic.png" alt="">
									</div>
								</div>

								<svg class="w-text" width="1300" height="215" viewBox="0 0 1300 215" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g opacity="0.1">
										<path d="M59.7885 59.0166H0V5.64443H188.407V59.0166H128.618V209.8H59.7885V59.0166Z" fill="url(#paint0QuizThx)"/>
										<path d="M407.523 5.64443V209.8H338.693V134.554H275.113V209.8H206.284V5.64443H275.113V77.9739H338.693V5.64443H407.523Z" fill="url(#paint1QuizThx)"/>
										<path d="M579.804 174.219H502.225L488.518 209.8H418.521L507.767 5.64443H575.43L664.675 209.8H593.512L579.804 174.219ZM560.847 124.638L541.015 73.3075L521.183 124.638H560.847Z" fill="url(#paint2QuizThx)"/>
										<path d="M876.899 5.64443V209.8H820.319L742.739 117.055V209.8H675.66V5.64443H732.24L809.819 98.3895V5.64443H876.899Z" fill="url(#paint3QuizThx)"/>
										<path d="M993.183 142.137L977.726 159.345V209.8H910.063V5.64443H977.726V79.7238L1044.81 5.64443H1119.76L1038.1 95.4729L1123.84 209.8H1044.22L993.183 142.137Z" fill="url(#paint4QuizThx)"/>
										<path d="M1204.92 214.467C1188.01 214.467 1171.48 212.619 1155.34 208.925C1139.4 205.036 1126.27 199.884 1115.97 193.468L1138.13 143.304C1147.86 148.942 1158.74 153.511 1170.8 157.011C1182.85 160.317 1194.42 161.969 1205.51 161.969C1215.03 161.969 1221.84 161.094 1225.92 159.345C1230 157.4 1232.05 154.581 1232.05 150.887C1232.05 146.609 1229.32 143.401 1223.88 141.262C1218.63 139.123 1209.88 136.79 1197.63 134.263C1181.88 130.957 1168.76 127.457 1158.26 123.763C1147.76 119.874 1138.62 113.653 1130.84 105.097C1123.07 96.3479 1119.18 84.5846 1119.18 69.8077C1119.18 56.975 1122.77 45.309 1129.97 34.8095C1137.16 24.3101 1147.86 16.0467 1162.05 10.0192C1176.44 3.99175 1193.84 0.978027 1214.25 0.978027C1228.25 0.978027 1241.96 2.5335 1255.38 5.64443C1268.99 8.56094 1280.95 12.9357 1291.25 18.7687L1270.54 68.641C1250.52 58.5305 1231.56 53.4752 1213.67 53.4752C1195.98 53.4752 1187.13 57.7528 1187.13 66.3078C1187.13 70.391 1189.76 73.5019 1195.01 75.6407C1200.26 77.585 1208.91 79.7238 1220.96 82.057C1236.52 84.9735 1249.64 88.3761 1260.34 92.2648C1271.03 95.959 1280.26 102.084 1288.04 110.639C1296.01 119.194 1300 130.86 1300 145.637C1300 158.47 1296.4 170.136 1289.21 180.635C1282.01 190.94 1271.22 199.203 1256.84 205.425C1242.64 211.453 1225.34 214.467 1204.92 214.467Z" fill="url(#paint5QuizThx)"/>
									</g>
									<defs>
										<linearGradient id="paint0QuizThx" x1="655.048" y1="-128.403" x2="655.048" y2="334.807" gradientUnits="userSpaceOnUse">
											<stop stop-color="white" stop-opacity="0"/>
											<stop offset="1" stop-color="white"/>
										</linearGradient>
										<linearGradient id="paint1QuizThx" x1="655.048" y1="-128.403" x2="655.048" y2="334.807" gradientUnits="userSpaceOnUse">
											<stop stop-color="white" stop-opacity="0"/>
											<stop offset="1" stop-color="white"/>
										</linearGradient>
										<linearGradient id="paint2QuizThx" x1="655.048" y1="-128.403" x2="655.048" y2="334.807" gradientUnits="userSpaceOnUse">
											<stop stop-color="white" stop-opacity="0"/>
											<stop offset="1" stop-color="white"/>
										</linearGradient>
										<linearGradient id="paint3QuizThx" x1="655.048" y1="-128.403" x2="655.048" y2="334.807" gradientUnits="userSpaceOnUse">
											<stop stop-color="white" stop-opacity="0"/>
											<stop offset="1" stop-color="white"/>
										</linearGradient>
										<linearGradient id="paint4QuizThx" x1="655.048" y1="-128.403" x2="655.048" y2="334.807" gradientUnits="userSpaceOnUse">
											<stop stop-color="white" stop-opacity="0"/>
											<stop offset="1" stop-color="white"/>
										</linearGradient>
										<linearGradient id="paint5QuizThx" x1="655.048" y1="-128.403" x2="655.048" y2="334.807" gradientUnits="userSpaceOnUse">
											<stop stop-color="white" stop-opacity="0"/>
											<stop offset="1" stop-color="white"/>
										</linearGradient>
									</defs>
								</svg>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endif;?>

	<!-- Почему стоит сотрудничать с агенством --->

    <?php
	$cooperationWithAgency = get_field('blok_sotrudnichestvo_s_agenstvom');

	if( $cooperationWithAgency ):
		$block_title = $cooperationWithAgency['zagolovok_bloka'];
		$block_text = $cooperationWithAgency['tekst_bloka'];
		$team_full = $cooperationWithAgency['komanda_speczialistov_sprava'];
		$team_pic = $cooperationWithAgency['komanda_speczialistov_sleva'];
		?>
		<section class="cooperation-with-agency animation-tracking">
            <div class="container">
                <div class="row">
                    <h2 class="block-title col-12"><?php echo $block_title;?></h2>
                    <p class="block-text-content col-12"><?php echo $block_text;?></p>
                </div>
            </div>
            <?php if($team_full):?>
            <div class="slider-wrapper">

                <div class="dev-team-slider" id="dev-team-slider">
                    <?php foreach ( $team_full as $menItem ):?>
                        <div class="slide" data-menname="<?php echo $menItem['imya'];?>" data-menpost="<?php echo $menItem['dolzhnost'];?>">
                            <img src="<?php echo $menItem['fotografiya'];?>" alt="">
                        </div>
                    <?php endforeach;?>
                </div>
                <div class="men-info">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
            <?php endif;?>
			<!-- <div class="container">
				<div class="row">
                    <div class="sliders-wrapper col-lg-6 col-md-7 col-sm-6">
                        <div class="left-slider" id="dev-team-left-slider">
                            <?php foreach ( $team_pic as $menPic ):?>
                                <div class="slide">
                                    <img src="<?php echo $menPic['fotografiya'];?>" alt="">
                                </div>
                            <?php endforeach;?>
                        </div>
                        <div class="right-slider" id="dev-team-right-slider">
		                    <?php foreach ( $team_full as $menItem ):?>
                                <div class="slide" data-menname="<?php echo $menItem['imya'];?>" data-menpost="<?php echo $menItem['dolzhnost'];?>">
                                    <img src="<?php echo $menItem['fotografiya'];?>" alt="">
                                    <div class="info">
                                        <h3><?php echo $menItem['imya'];?></h3>
                                        <p><?php echo $menItem['dolzhnost'];?></p>
                                    </div>
                                </div>
		                    <?php endforeach;?>
                        </div>
                        <p class="mob-block-text-content"><?php echo $block_text;?></p>
                    </div>
                    <div class="info-wrapper col-lg-5 offset-lg-1 col-md-5 col-sm-6">
                        <h2 class="small-block-title"><?php echo $block_title;?></h2>
                        <div class="team-men-info">
                            <h3></h3>
                            <p></p>
                        </div>
                        <p class="block-text-content"><?php echo $block_text;?></p>
                        <div class="controls-wrapper">
                            <a href="#" class="control prev">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.6866 14.3134L8 16L9.53674e-07 8L8 0L9.6866 1.6866L4.56598 6.80722H16V9.19278H4.56598L9.6866 14.3134Z" fill="#ffffff"/>
                                </svg>

                            </a>
                            <a href="#" class="control next">
                                <span>Следующий</span>

                                <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.293 12.793L6.707 14.207L13.414 7.49997L6.707 0.792969L5.293 2.20697L9.586 6.49997L0 6.49997L0 8.49997L9.586 8.49997L5.293 12.793Z" fill="white"/>
                                </svg>

                            </a>
                        </div>
                    </div>
				</div>
                <div class="row mob-controls">
                    
                </div>
			</div> -->
		</section>
	<?php endif;?>

	<!-- Форма обратной связи --->

    <?php
	$contactForm = get_field('forma_obratnoj_svyazi');

	if ( $contactForm ):
		$block_title = $contactForm['zagolovok'];
		$call_to = $contactForm['prizyv'];
		$btn_text = $contactForm['tekst_knopki'];
		$send_mess_text = $contactForm['prizyv_pisat_v_messendzhery'];
		?>
        <section class="contact-form">
            <div class="container">
                <div class="row">
                    <h2 class="small-block-title col-12"><?php echo $block_title;?></h2>
                </div>
                <div class="row">
                    <div class="content col-12" id="contact-form">
                        <div class="form-wrapper">
                            <div class="title-wrapper">
                               
                            </div>
                            <div class="form-pic">
                                <picture>
                                    <source srcset="<?php echo THEME_PATH; ?>/assets/img/form-pic-mob.png" media="(max-width: 992px)">
                                    <img data-src="<?php echo THEME_PATH; ?>/assets/img/form-pic.png" alt="" class="lazy">
                                </picture>

                            </div>
                            <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>"
                                  method="post"
                                  class="needs-validation"
                                  novalidate
                                  data-toggle="validator"
                                  id="form_pageRazrabotka">
                                <input type="hidden" name="action" value="contact_form">
                                <div class="form-step-1">
                                    <h3>1. <?php echo $formStep1Name;?></h3>
                                    <div class="ch-button-wrapper">
                                        <input type="checkbox" name="ch-service[]" class="btn-check" id="btn-check1" autocomplete="off" value="target">
                                        <label class="ch-button" for="btn-check1"><?php echo $formChSrSocialAdvertising;?></label>
                                    </div>
                                    <div class="ch-button-wrapper">
                                        <input type="checkbox" name="ch-service[]" class="btn-check" id="btn-check3" autocomplete="off" value="context">
                                        <label class="ch-button" for="btn-check3"><?php echo $formChSrContextualAdvertising;?></label>
                                    </div>
                                    <div class="ch-button-wrapper">
                                        <input type="checkbox" name="ch-service[]" class="btn-check" id="btn-check2" autocomplete="off" value="ved">
                                        <label class="ch-button" for="btn-check2"><?php echo $formChSrMaintainingSocial;?></label>
                                    </div>
                                    
                                    <div class="ch-button-wrapper">
                                        <input type="checkbox" name="ch-service[]" class="btn-check" id="btn-check4" autocomplete="off" value="dev">
                                        <label class="ch-button active-ch" checked for="btn-check4"><?php echo $formChSrWebsiteDevelopment;?></label>
                                    </div>
                                    <div class="ch-button-wrapper">
                                        <input type="checkbox" name="ch-service[]" class="btn-check" id="btn-check5" autocomplete="off" value="automation">
                                        <label class="ch-button" for="btn-check5"><?php echo $formChSrSalesAutomation;?></label>
                                    </div>
                                    <div class="ch-button-wrapper">
                                        <input type="checkbox" name="ch-service[]" class="btn-check" id="btn-check6" autocomplete="off" value="diz">
                                        <label class="ch-button" for="btn-check6"><?php echo $formChSrDesign;?></label>
                                    </div>

                                </div>
                                <div class="form-step-2">
                                    <h3>2. <?php echo $formStep2Name;?></h3>
                                    <div class="fields-wrapper">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="<?php echo $nameTextForm;?>" required autocomplete="off" >
                                            <div class="invalid-feedback"><?php echo $errorTextForm;?></div>
                                        </div>
                                        <div class="form-group phone-group">
                                            <input type="tel" name="phone" class="form-control" placeholder="+38 (___) ___ - __ - __ " required autocomplete="off">
                                            <div class="invalid-feedback"><?php echo $errorTextForm;?></div>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="E-mail" required autocomplete="off">
                                            <div class="invalid-feedback"><?php echo $errorTextForm;?></div>
                                        </div>
                                    </div>
                                    <div class="form-group textarea-group">
                                        <textarea name="mess" class="form-control" placeholder="<?php echo $messTextForm;?>" autocomplete="off"></textarea>
                                    </div>
                                    <div class="ch-button-wrapper">
                                        <div class="form-group form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox"
                                                       checked
                                                       name="chboxfild"
                                                       class="form-check-input"
                                                       value="">
                                                <p class="checkbox__text">
                                                    <a href="<?php echo $linkPravPol;?>" target="_blank">
                                                        <?php echo $addPravicyText;?>
                                                    </a>
                                                </p>

                                            </label>
                                        </div>
                                        <button type="submit" class="button" onclick="document.getElementById('pageform').value = 'nospam';">
                                            <?php echo $btn_text;?>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.0114107 1L0 9.55554L17.1429 12L0 14.4445L0.0114107 23L24 12L0.0114107 1Z" fill="#ffffff"/>
                                            </svg>
                                        </button>
                                        <input type="hidden" id="pageform"  name="moreinfo" value="">
                                        <!-- <input type="hidden" class="g-recaptcha-response" name="g-recaptcha-response" /> -->
                                        <input type="hidden" name="form-lang" value="<?php echo $siteLang;?>">
                                        <input type="hidden" name="page-name" value="<?php the_title(); ?>">
                                        <input type="hidden" name="home-url" value="<?php echo home_url('/');?>">
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="messengers-wrapper">
                            <h3><?php echo $send_mess_text;?></h3>
                            <div class="messengers">
                                <a href="<?php echo get_field('ssylka_na_telegramm_messendzher', 'options');?>" target="_blank">
                                    <span class="icon-wrapper">
                                        <svg width="50" height="42" viewBox="0 0 50 42" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M46.371 1.06005L3.15408 17.7252C0.204705 18.9099 0.221768 20.5552 2.61296 21.2889L13.7085 24.7501L39.3802 8.55293C40.5941 7.81437 41.7031 8.21168 40.7915 9.02093L19.9923 27.7921H19.9875L19.9923 27.7946L19.227 39.2313C20.3482 39.2313 20.843 38.717 21.4719 38.1101L26.8612 32.8694L38.0713 41.1496C40.1383 42.2879 41.6227 41.7029 42.137 39.2362L49.4958 4.55543C50.249 1.53537 48.3429 0.167929 46.371 1.06005V1.06005Z" fill="#221EC4"/>
</svg>
                                    </span>

                                    <p>Telegram</p>
                                </a>
                                <a href="<?php echo get_field('ssylka_na_fejsbuk_messendzher', 'options');?>" target="_blank">
                                    <span class="icon-wrapper">
                                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M25.25 0.875C38.9829 0.875 49.625 10.9346 49.625 24.5187C49.625 38.1029 38.9829 48.1625 25.25 48.1625C22.8665 48.1686 20.493 47.8538 18.1934 47.2265C17.7615 47.1077 17.3019 47.1413 16.8918 47.3216L12.0558 49.4568C11.7636 49.5859 11.4442 49.6413 11.1256 49.6181C10.807 49.5948 10.499 49.4936 10.2287 49.3234C9.95833 49.1532 9.73394 48.9192 9.57524 48.642C9.41654 48.3648 9.32837 48.0528 9.3185 47.7335L9.18444 43.3948C9.17565 43.1309 9.1132 42.8717 9.00088 42.6328C8.88857 42.3939 8.72875 42.1804 8.53119 42.0054C3.78781 37.7666 0.875 31.6289 0.875 24.5187C0.875 10.9346 11.5196 0.875 25.25 0.875ZM10.6128 31.4339C9.92544 32.5235 11.2661 33.752 12.2923 32.972L19.9826 27.1366C20.2364 26.945 20.5457 26.8414 20.8637 26.8414C21.1817 26.8414 21.4911 26.945 21.7449 27.1366L27.4413 31.4023C27.8454 31.7053 28.3079 31.9214 28.7996 32.0369C29.2913 32.1523 29.8017 32.1647 30.2984 32.073C30.7951 31.9814 31.2675 31.7879 31.6857 31.5046C32.1039 31.2214 32.4589 30.8545 32.7282 30.4272L39.8872 19.0685C40.5746 17.9765 39.2339 16.748 38.2077 17.5256L30.5174 23.3658C30.2636 23.5574 29.9543 23.6611 29.6363 23.6611C29.3183 23.6611 29.0089 23.5574 28.7551 23.3658L23.0587 19.1002C22.6546 18.7971 22.1921 18.581 21.7004 18.4655C21.2087 18.3501 20.6983 18.3378 20.2016 18.4294C19.7049 18.521 19.2325 18.7145 18.8143 18.9978C18.3961 19.2811 18.0411 19.6479 17.7718 20.0752L10.6128 31.4339V31.4339Z" fill="#221EC4"/>
</svg>
                                    </span>

                                    <p>Messenger</p>
                                </a>
                                <!-- <a href="<?php echo get_field('ssylka_na_viber', 'options');?>" target="_blank">
                                    <span class="icon-wrapper">
                                        <svg width="59" height="59" viewBox="0 0 59 59" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0)">
<path d="M27.7838 0.00948897C23.0892 0.0661608 12.9961 0.83763 7.35087 6.01671C3.15167 10.1775 1.68551 16.3292 1.51367 23.936C1.37107 31.5154 1.19923 45.7492 14.9193 49.6248V55.5278C14.9193 55.5278 14.8334 57.8898 16.3946 58.3742C18.3178 58.983 19.4128 57.1658 21.241 55.2134L24.6504 51.3579C34.0378 52.1385 41.2279 50.3396 42.056 50.0727C43.9609 49.4639 54.6902 48.0928 56.4433 33.8572C58.2422 19.1554 55.5677 9.89233 50.7396 5.70227H50.7103C49.2533 4.36043 43.3978 0.0935827 30.3158 0.0460515C30.3158 0.0460515 29.345 -0.019761 27.7838 0.00766085V0.00948897ZM27.9447 4.14288C29.2774 4.13374 30.0873 4.19041 30.0873 4.19041C41.1602 4.21966 46.4453 7.55233 47.6921 8.6748C51.7579 12.1592 53.8529 20.5101 52.3191 32.7841C50.8621 44.6852 42.1602 45.4384 40.5496 45.9521C39.8641 46.1715 33.5314 47.7327 25.5535 47.219C25.5535 47.219 19.6121 54.3889 17.7547 56.2353C17.4604 56.5589 17.1167 56.6539 16.8973 56.6064C16.5829 56.5296 16.4878 56.1402 16.5061 55.6064L16.5628 45.8095C4.92678 42.592 5.61232 30.4514 5.73664 24.1097C5.87923 17.7679 7.06934 12.5797 10.6122 9.06602C15.3818 4.75347 23.9521 4.17213 27.941 4.14288H27.9447ZM28.8222 10.4828C28.7264 10.4819 28.6314 10.4999 28.5426 10.5358C28.4539 10.5717 28.3731 10.6248 28.3049 10.6921C28.2368 10.7594 28.1826 10.8396 28.1456 10.9279C28.1085 11.0162 28.0894 11.111 28.0891 11.2068C28.0891 11.6163 28.4218 11.9398 28.8222 11.9398C30.6348 11.9054 32.4363 12.2301 34.1228 12.8953C35.8092 13.5604 37.3473 14.5529 38.6484 15.8155C41.3046 18.3949 42.5989 21.8611 42.6483 26.393C42.6483 26.7933 42.9719 27.1261 43.3814 27.1261V27.0968C43.5744 27.0973 43.7597 27.0215 43.8971 26.8859C44.0344 26.7503 44.1125 26.5659 44.1145 26.3729C44.2032 24.2397 43.8573 22.1108 43.0977 20.1155C42.3381 18.1202 41.1807 16.3002 39.6959 14.7661C36.802 11.938 33.1347 10.481 28.8222 10.481V10.4828ZM19.1862 12.1592C18.6687 12.0836 18.141 12.1875 17.6907 12.4535H17.6524C16.6071 13.0662 15.6656 13.8406 14.8626 14.7478C14.1954 15.5193 13.8334 16.2999 13.7383 17.0513C13.6817 17.4992 13.7201 17.9471 13.8535 18.3748L13.901 18.4041C14.6524 20.6125 15.6341 22.7367 16.8334 24.7367C18.3782 27.5465 20.2793 30.145 22.4896 32.4678L22.5554 32.5629L22.6596 32.6397L22.7254 32.7165L22.8022 32.7823C25.1335 34.9991 27.7383 36.909 30.5534 38.4659C33.7709 40.2173 35.7234 41.0454 36.8952 41.3891V41.4074C37.2389 41.5116 37.5515 41.5591 37.8659 41.5591C38.8646 41.4859 39.81 41.0805 40.5514 40.4074C41.4546 39.6042 42.2203 38.6588 42.8183 37.6085V37.5903C43.3796 36.5336 43.1894 35.5336 42.3796 34.8572C40.7577 33.4395 39.0038 32.1803 37.142 31.0968C35.8952 30.4203 34.6283 30.8298 34.1146 31.5154L33.0196 32.8956C32.4583 33.5812 31.4382 33.4861 31.4382 33.4861L31.409 33.5044C23.8022 31.5611 21.7729 23.8592 21.7729 23.8592C21.7729 23.8592 21.6779 22.8117 22.3817 22.2779L23.7528 21.1737C24.4091 20.6399 24.8661 19.3748 24.1623 18.1262C23.0863 16.2618 21.8298 14.5075 20.411 12.8886C20.1008 12.507 19.6657 12.2473 19.1825 12.1556L19.1862 12.1592ZM30.0873 14.331C29.1165 14.331 29.1165 15.7972 30.0964 15.7972C31.3035 15.8168 32.4949 16.074 33.6025 16.5543C34.7101 17.0345 35.7122 17.7283 36.5515 18.596C37.3172 19.4406 37.9055 20.4303 38.2817 21.5065C38.6579 22.5826 38.8143 23.7233 38.7416 24.861C38.7449 25.0536 38.8235 25.2371 38.9606 25.3724C39.0976 25.5077 39.2821 25.584 39.4747 25.585L39.5039 25.6233C39.6979 25.6219 39.8835 25.5442 40.0207 25.407C40.1579 25.2699 40.2356 25.0842 40.237 24.8903C40.3028 21.9854 39.3997 19.5485 37.6283 17.5961C35.8477 15.6436 33.3633 14.5486 30.1915 14.331H30.0873ZM31.2883 18.2725C30.2884 18.2432 30.25 19.7386 31.2408 19.7679C33.6503 19.8922 34.8203 21.1097 34.9738 23.6142C34.9772 23.8043 35.0548 23.9856 35.1901 24.1192C35.3254 24.2528 35.5076 24.3281 35.6978 24.329H35.727C35.8248 24.3248 35.9207 24.3012 36.0092 24.2596C36.0978 24.2179 36.1771 24.159 36.2426 24.0863C36.3082 24.0137 36.3585 23.9287 36.3909 23.8363C36.4232 23.744 36.4368 23.6461 36.4309 23.5484C36.259 20.2834 34.4784 18.4443 31.3176 18.2743H31.2883V18.2725Z" fill="#221EC4"/>
</g>
<defs>
<clipPath id="clip0">
<rect width="58.5" height="58.5" fill="white"/>
</clipPath>
</defs>
</svg>
                                    </span>

                                    <p>Viber</p>
                                </a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
	<?php endif;?>

	<!-- Другие услуги --->

    <?php
	$moreServices = get_field('blok_drugie_uslugi');

	if ( $moreServices ):

		$block_title = $moreServices['zagolovok_bloka'];
		$services = $moreServices['uslugi'];
		?>
		<section class="more-services animation-tracking">
			<div class="container">
				<div class="row first-up">
					<h2 class="block-title col-12"><?php echo $block_title;?></h2>
				</div>
				<div class="row second-up">
					<?php foreach ( $services as $item ):?>
						<a href="<?php echo $item['ssylka_na_straniczu'];?>" class="item col-lg-3 col-sm-6 col-12">
							<div class="inner">
								<div class="pic-wrapper">
									<img class="lazy" data-src="<?php echo $item['kartinka_uslugi'];?>" alt="">
								</div>
								<p><?php echo $item['nazvanie_uslugi'];?></p>
							</div>
						</a>
					<?php endforeach;?>
				</div>
			</div>
		</section>
	<?php endif;?>

<?php
	get_footer();
