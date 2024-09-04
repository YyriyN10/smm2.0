<?php
	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Шаблон страницы "Дизайн"
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package smmstudio
	 */
	get_header();

?>

	<!-- Главный экран --->

	<section class="main-serv-screen">
        <div class="glow-1 glow">
            <svg width="651" height="320" viewBox="0 0 651 320" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.7" filter="url(#filter0bl1_f)">
                    <ellipse rx="74.5787" ry="131.723" transform="matrix(-0.16273 0.986671 -0.944345 -0.328956 325.05 14.6456)" fill="#FF5C00"/>
                    <ellipse rx="41.0046" ry="72.4234" transform="matrix(-0.16273 0.986671 -0.944345 -0.328956 344.168 73.0051)" fill="#FFF613"/>
                </g>
                <defs>
                    <filter id="filter0bl1_f" x="0.0585022" y="-270.763" width="649.983" height="590.727" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                        <feGaussianBlur stdDeviation="100" result="effect1_foregroundBlur"/>
                    </filter>
                </defs>
            </svg>

        </div>
        <div class="glow-2 glow"></div>
        <div class="glow-3 glow"></div>
        <div class="glow-4 glow"></div>
		<div class="container">
			<div class="row">
				<div class="content col-12">
					<?php the_content();?>
                    <a href="#" class="button" data-toggle="modal" data-target="#formModal">
						<?php echo get_field('tekst_knopki_na_glavnom_ekrane');?>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.0114107 1L0 9.55554L17.1429 12L0 14.4445L0.0114107 23L24 12L0.0114107 1Z" fill="#343BBC"/>
                        </svg>
                    </a>
					<div class="main-pic-wrapper">
                        <?php include ('template-parts/design-page-animation.php');?>
                        <div class="mukup-wrapper">

                            <div class="mukup-pic">
                                <img src="<?php echo get_field('kartinka_na_glavnom_ekrane');?>" alt="" >
                            </div>
                            <?php
                                $desktopSlider = get_field('slajder_mokapa_noutbuk');

                            ?>
                            <?php if ( $desktopSlider ):?>
                                <div class="disign-page-nout-slider" id="disign-page-nout-slider">
                                    <?php foreach ( $desktopSlider as $slide ):?>
                                    <div class="slide"><img src="<?php echo $slide['slajd'];?>" alt=""></div>
                                    <?php endforeach;?>
                                </div>
                            <?php endif;?>
                        </div>
                    </div>
				</div>
			</div>
		</div>
		<a href="#good-packing" class="go-down scroll-to">
            <span class="arrow-wrapper">
                <span class="white"></span>
                <span class="blue"></span>
                <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.292893 8.70711C-0.0976311 8.31658 -0.0976311 7.68342 0.292893 7.29289L6.65685 0.928932C7.04738 0.538408 7.68054 0.538408 8.07107 0.928932C8.46159 1.31946 8.46159 1.95262 8.07107 2.34315L2.41421 8L8.07107 13.6569C8.46159 14.0474 8.46159 14.6805 8.07107 15.0711C7.68054 15.4616 7.04738 15.4616 6.65685 15.0711L0.292893 8.70711ZM2 9H1V7H2V9Z" fill="#E4E4F6"/>
                </svg>

            </span>
		</a>
	</section>

	<!-- Хорошая упаковка --->

    <?php

        $goodPacking = get_field('blok_horoshaya_upakovka_biznesa');

        if ( $goodPacking ):

            $block_title = $goodPacking['zagolovok_bloka'];
            $block_content = $goodPacking['perechislenie'];
    ?>
        <section class="good-packing" id="good-packing">
            <div class="container">
                <div class="row">
                    <h2 class="block-title col-12"><?php echo $block_title;?></h2>
                </div>
                <div class="row">
                    <?php foreach ( $block_content as $item ):?>
                    <div class="item col-md-6 col-12">
                        <div class="inner">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 16C10 12.6863 12.6863 10 16 10H24C27.3137 10 30 12.6863 30 16V24C30 27.3137 27.3137 30 24 30H10V16Z" fill="#E4E4F6"/>
                                <path d="M16 2H8C4.691 2 2 4.691 2 8V21C2 21.2652 2.10536 21.5196 2.29289 21.7071C2.48043 21.8946 2.73478 22 3 22H16C19.309 22 22 19.309 22 16V8C22 4.691 19.309 2 16 2ZM20 16C20 18.206 18.206 20 16 20H4V8C4 5.794 5.794 4 8 4H16C18.206 4 20 5.794 20 8V16Z" fill="#221EC4"/>
                                <path d="M11 13.586L8.707 11.293L7.293 12.707L11 16.414L17.207 10.207L15.793 8.79297L11 13.586Z" fill="#221EC4"/>
                            </svg>
                            <p><?php echo $item['parametr'];?></p>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </section>
    <?php endif;?>

	<!-- Делаем дизайн --->

    <?php
        $weMakeDesign = get_field('blok_delaem_dizajn');

        if ( $weMakeDesign ):

            $block_title = $weMakeDesign['zagolovok_bloka'];
            $design_types = $weMakeDesign['tip_dizajna'];
            $i = 0;
    ?>
        <section class="we-make-design">
            <div class="container">
                <div class="row">
                    <h2 class="block-title col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-12"><?php echo $block_title;?></h2>
                </div>
                <?php if ($design_types): ?>

                <div class="row">
                    <?php foreach ( $design_types as $item ): $i = $i + 1;?>
                    <div class="item col-12">
                        <div class="text-wrapper">
                            <h3>
                                <?php echo $item['nazvanie'];?>
	                            <?php if ( $i < 10 ):?>
                                    <span class="number">0<?php echo $i;?></span>
	                            <?php else:?>
                                    <span class="number"><?php echo $i;?></span>
	                            <?php endif;?>
                            </h3>
                            <p><?php echo $item['kratkoe_opisanie'];?></p>
                        </div>
                        <div class="pic-wrapper">
                            <div class="pic">
                                <img src="<?php echo $item['kartinka'];?>" alt="" >
                            </div>

                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
                <?php endif ?>
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
		<section class="start-add animation-tracking">
			<div class="container">
				<div class="row first-up">
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

	<!-- Наши кейсы --->

   <!--  <?php
	$ourCasesTitle = get_field('zagolovok_bloka_nashi_kejsy');

	if ( $ourCasesTitle ):
		?>
		<section class="our-cases animation-tracking" id="our-cases">
			<div class="container">
				<div class="row first-up">
					<h2 class="block-title col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-12"><?php echo $ourCasesTitle;?></h2>
				</div>
			</div>
			<div class="cases-list second-up" id="cases-list">
				<?php
					$argsCases = array(
						'tax_query' => array(
							array(
								'taxonomy' => 'cases-cat-tax',
								'field' => 'id',
								'terms' => 10,
							)
						),
						'post_type' => 'cases',
						'orderby' 	 => 'date',
                        'post__not_in' => array(3636, 3555, 3828, 3828, 3873, 3870),
						'posts_per_page' => 2
					);

					$ourDevCases = new WP_Query( $argsCases );

					if ( $ourDevCases->have_posts() ) :

						while ( $ourDevCases->have_posts() ) : $ourDevCases->the_post();

							?>

                            <a href="<?php the_permalink();?>" class="case-item">
                                <img class="case-pic" src="<?php the_post_thumbnail_url();?>" alt="">

                                <div class="hover-preview-content">
                                    <div class="inner-content">
                                        <div class="case-logo-wrapper">
                                            <img src="" alt="">
                                        </div>
                                        <h3><?php the_title();?></h3>
                                        <p><?php echo get_field('chem_zanimaetsya_kompaeiya');?></p>
                                        <p class="more">
											<?php echo $textMoreCases;?>
                                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.79999 12.4478L9.79999 8.44778L4.79999 4.44778L5.79999 2.84778L12.8 8.44778L5.79999 14.0478L4.79999 12.4478Z" fill="white"/>
                                            </svg>
                                        </p>
                                    </div>
                                </div>
                                <div class="case-cat-teg-wrapper">
									<?php
										global $post;

										$category = get_the_terms($post->ID, 'cases-cat-tax');
										$current_cat_id = $category[0]->term_id;
										$cat_posts_count = $category[0]->count;
									?>

                                    <p>#<?php echo $category[0]->name;?></p>

                                </div>
                                <div class="preview-content">
                                    <h3><?php the_title();?></h3>
                                    <p><?php echo get_field('sfera_deyatelnosti_-_kratko');?></p>
                                </div>
                            </a>
						<?php endwhile;?>

					<?php endif; ?>
				<?php wp_reset_postdata(); ?>

			</div>

			<div id="mor-cases-btn-wrap">
				<div class="col-12 text-center">
					<a href="#"
					   class="button"
					   id="more-cases"
					   data-currentcat="10"
                       data-domen="<?php echo get_home_url();?>"
					   data-offsetpost="1"
					   data-allcat=""
					   data-allcases=""
					   data-lang="<?php echo $siteLang;?>"
					><?php echo $moreCasesText;?></a>
				</div>
			</div>
		</section>
	<?php endif;?> -->

	<!-- Наши приимущества --->

    <?php
        $realBenefits = get_field('blok_preimushhestva');

        if ( $realBenefits ):

            $block_title = $realBenefits['zagolovok_bloka'];
            $sub_title = $realBenefits['podzagolovok'];
            $advantages = $realBenefits['preimushhestvo'];
    ?>
        <section class="real-advantages">
            <div class="container">
                <div class="row">
                    <h2 class="block-title col-12"><?php echo $block_title;?></h2>
                    <h3 class="sub-title col-12"><?php echo $sub_title;?></h3>
                </div>
                <div class="row">
                    <div class="content col-12">
                        <?php foreach ( $advantages as $item): ?>
                        <div class="item">
                            <div class="icon-wrapper">
                                <img src="<?php echo $item['kartinka'];?>" alt="">
                            </div>
                            <div class="text-wrapper">
                                <h3><?php echo $item['nazvanie'];?></h3>
                                <p><?php echo $item['kratkoe_opisanie'];?></p>
                            </div>
                            <div class="dialog-wrapper" id="">
                                <?php
                                    $designChatList = get_field('tekst_dlya_animaczii_chata_na_stranicze_dizajna', 'options');
                                    if ( $designChatList ):
                                ?>
                                    <?php foreach ( $designChatList as $chat ):?>
                                        <?php

                                        $chat_role = $chat['tekst_v_chate']['chej_tekst'];

                                        if ( $chat_role['value'] == 'compani'):?>
                                            <div class="slide answer">
                                                <div class="avatar">
                                                    <img src="<?php echo THEME_PATH;?>/assets/img/compani-avatar.svg" alt="">
                                                </div>
                                                <div class="text">
                                                    <?php echo $chat['tekst_v_chate'][$siteLang];?>
                                                    <svg class="angle" width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g filter="url(#filter0class="angle"_d)">
                                                        <path d="M13 12H7C11 9.6 12.6667 4.33333 13 2V12Z" fill="white"/>
                                                        </g>
                                                        <defs>
                                                            <filter id="filter0class="angle"_d" x="0" y="0" width="14" height="18" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                                                            <feOffset dx="-3" dy="2"/>
                                                            <feGaussianBlur stdDeviation="2"/>
                                                            <feColorMatrix type="matrix" values="0 0 0 0 0.419608 0 0 0 0 0.47451 0 0 0 0 0.603922 0 0 0 0.25 0"/>
                                                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                                                            </filter>
                                                        </defs>
                                                    </svg>
                                                </div>
                                            </div>
                                        <?php else:?>
                                            <div class="slide question">
                                                <div class="text">
                                                    <?php echo $chat['tekst_v_chate'][$siteLang];?>
                                                    <svg class="angle" width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g filter="url(#filter0disOuestPic_d)">
                                                            <path d="M1 12H7C3 9.6 1.33333 4.33333 1 2V12Z" fill="#F0F0F4"/>
                                                        </g>
                                                        <defs>
                                                            <filter id="filter0disOuestPic_d" x="0" y="0" width="14" height="18" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                                                                <feOffset dx="3" dy="2"/>
                                                                <feGaussianBlur stdDeviation="2"/>
                                                                <feColorMatrix type="matrix" values="0 0 0 0 0.419608 0 0 0 0 0.47451 0 0 0 0 0.603922 0 0 0 0.25 0"/>
                                                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                                                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                                                            </filter>
                                                        </defs>
                                                    </svg>
                                                </div>
                                                <div class="avatar">
                                                    <img src="<?php echo THEME_PATH;?>/assets/img/men-avatar.png" alt="">
                                                </div>
                                            </div>
                                        <?php endif;?>
                                     <?php endforeach;?>
                                <?php endif;?>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif;?>

	<!-- DreamTeam --->

    <?php
        $dreamTeam = get_field('blok_dream_team');

        if ( $dreamTeam ):

            $block_title = $dreamTeam['zagolovok_bloka'];
            $all_team = $dreamTeam['uchastniki'];
            $i = 0;
    ?>
        <section class="dream-team">
            <div class="container">
                <div class="row">
                    <h2 class="block-title col-12"><?php echo $block_title;?></h2>
                </div>
            </div>
            <div class="slider-wrapper">

                <div class="dream-team-slider" id="dream-team-slider">
	                <?php foreach ( $all_team as $item ):?>
                        <div class="slide" data-menname="<?php echo $item['imya'];?>" data-menpost="<?php echo $item['dolzhnost'];?>">
                            <img src="<?php echo $item['fotografiya'];?>" alt="">
                        </div>
	                <?php endforeach;?>
                </div>

                <div class="men-info">
                    <h3></h3>
                    <p></p>
                </div>
                <!--<div class="controls-wrapper">
                    <a href="#" class="control prev">
                        <svg width="13" height="18" viewBox="0 0 13 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.8 15.0001L5.29999 9.0001L12.8 3.0001L11.3 0.600098L0.799988 9.0001L11.3 17.4001L12.8 15.0001Z" fill="#6B799A"/>
                        </svg>
                    </a>
                    <div class="numbers-list" id="dream-team-numbers">
	                    <?php /*foreach ( $all_team as $item ): $i = $i + 1;*/?>
                            <?php /*if ( $i < 10 ):*/?>
                                <p class="slide">0<?php /*echo $i;*/?></p>
                            <?php /*else:*/?>
                                <p class="slide"><?php /*echo $i;*/?></p>
                            <?php /*endif;*/?>
	                    <?php /*endforeach;*/?>
                    </div>
                    <a href="#" class="control next">
                        <svg width="13" height="18" viewBox="0 0 13 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.199951 15.0001L7.69995 9.0001L0.199951 3.0001L1.69995 0.600098L12.2 9.0001L1.69995 17.4001L0.199951 15.0001Z" fill="#6B799A"/>
                        </svg>
                    </a>
                </div>-->
            </div>
        </section>

    <?php endif;?>

	<!-- Как мы работаем --->

    <?php

        $howWeWork = get_field('blok_kak_my_rabotaem');

        if ( $howWeWork ):

            $block_title = $howWeWork['zagolovok_bloka'];
            $steps = $howWeWork['shag'];
            $i = 0;
    ?>
        <section class="des-how-we-work">
            <div class="container">
                <div class="row">
                    <h2 class="block-title col-12"><?php echo $block_title;?></h2>
                </div>
                <div class="row">
                    <div class="content col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-12 offset-0" id="start-pb">
                        <div class="progress-bar">
                            <span></span>
                        </div>
                        <?php foreach ( $steps as $step ): $i = $i + 1;?>
                        <div class="step">
                            <div class="marker">
                                <p>0<?php echo $i;?></p>

                            </div>
                            <div class="text">
                                <h3><?php echo $step['nazvanie'];?></h3>
                                <p><?php echo $step['kratkoe_opisanie'];?></p>
                            </div>
                        </div>
                        <?php endforeach;?>
                        <div id="stop-position"></div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif;?>

	<!-- Проблемы, которые мы решаем --->

    <?php
        $solvableProblems = get_field('blok_problemy_kotorye_reshaem');

        if( $solvableProblems ):

            $block_title = $solvableProblems['zagolovok_bloka'];
            $problem_list = $solvableProblems['problema'];
            $i = 0;
    ?>
        <section class="solvable-problems">
            <div class="container">
                <div class="row">
                    <h2 class="block-title col-12"><?php echo $block_title;?></h2>
                </div>
                <div class="row content">
                    <?php foreach ( $problem_list as $item ): $i = $i + 1;?>
                    <div class="problem col-lg-4 col-12">
                        <div class="pic-wrapper">
                            <img src="<?php echo $item['kartinka'];?>" alt="">
                        </div>
                        <div class="text-content">
                            <div class="name">
                                <h3><?php echo $item['nazvanie'];?></h3>
                                <p>0<?php echo $i;?></p>
                            </div>
                            <p class="core"><?php echo $item['sut_problemy'];?></p>
                            <p class="decision"><?php echo $item['reshenie_problemy'];?></p>
                        </div>

                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </section>
    <?php endif;?>

	<!-- Нам доверяют --->

    <?php
	$trustUs = get_field('zagolovok_bloka_nam_doveryayut');

	if( $trustUs ):
		?>
		<section class="trust-us animation-tracking">
			<div class="container">
				<div class="row first-up">
					<h2 class="block-title text-center col-12"><?php echo $trustUs;?></h2>
				</div>
				<div class="row second-up">
					<div class="trust-us-slider-wrapper owl-carousel owl-theme" id="trust-us-slider">
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
										<div class="partner">
											<img data-lazy="<?php echo get_field('logotip_1');?>" alt="">
										</div>
										<div class="partner">
											<img data-lazy="<?php echo get_field('logotip_2');?>" alt="">
										</div>
										<div class="partner">
											<img data-lazy="<?php echo get_field('logotip_3');?>" alt="">
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
								<!--<h2 class="first-up"><?php /*echo $call_to;*/?></h2>
								<h3 class="first-up"><?php /*echo $block_title;*/?></h3>-->
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
							      id="form_pageDesign">
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
                                        <label class="ch-button" for="btn-check4"><?php echo $formChSrWebsiteDevelopment;?></label>
                                    </div>
                                    <div class="ch-button-wrapper">
                                        <input type="checkbox" name="ch-service[]" class="btn-check" id="btn-check5" autocomplete="off" value="automation">
                                        <label class="ch-button" for="btn-check5"><?php echo $formChSrSalesAutomation;?></label>
                                    </div>
                                    <div class="ch-button-wrapper">
                                        <input type="checkbox" checked name="ch-service[]" class="btn-check" id="btn-check6" autocomplete="off" value="diz">
                                        <label class="ch-button active-ch" for="btn-check6"><?php echo $formChSrDesign;?></label>
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
                                        <input type="hidden" class="g-recaptcha-response" name="g-recaptcha-response" />
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
    <!-- Test -->

    <!--<div class="test">
        <div class="form-outline">
            <input type="text" id="form1" class="form-control" placeholder="Имя" />
            <label class="form-label" for="form1">Example label</label>
        </div>
    </div>-->
<?php
	get_footer();
