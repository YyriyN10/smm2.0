<?php
	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Шаблон страницы "Памятка клиенту"
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package smmstudio
	 */
	get_header();

	$siteLang = get_bloginfo('language');

	$allCasesText = get_field('tekst_knopki_vse_kejsy', 'options');

	$moreCasesText = get_field('tekst_knopki_bolshe_kejsov', 'options');

	$lidForText = get_field('podpis_polya_zayavok_za_period', 'options');

	$lidCostText = get_field('podpis_polya_stoimost_zayavki', 'options');

	$workDayText = get_field('podpis_polya_dnej_raboty', 'options');

	$lidNameText = get_field('podpis_nazvanie_sdelki', 'options');

	$budgetText = get_field('podpis_byudzhet', 'options');

	$questionTextInQuiz = get_field('podpis_vopros_v_kvize', 'options');

	$inTextInQuiz = get_field('slovo_iz_v_voprosah_kviza', 'options');

	$youAnsvTextInQuiz = get_field('podpis_vvedite_vash_otvet_v_kvize', 'options');

	$onMoreAnsvTextInQuiz = get_field('podpis_vyberite_odin_ili_neskolko_variantov_v_kvize', 'options');

	$prevTextBtnQuiz = get_field('tekst_knopka_nazad_v_kvize', 'options');

	$nextTextBtnQuiz = get_field('tekst_knopka_dalee_v_kvize', 'options');

	$nameTextForm = get_field('podpis_polya_imya_v_forme', 'options');

	$messTextForm = get_field('podpis_polya_soobshhenie_v_forme', 'options');

	$errorTextForm = get_field('podpis_oshibki_dlya_ne_zapolennogo_polya_formy', 'options');

	$addPravicyText = get_field('tekst_flazhka_soglasiya_s_politikoj_konfidenczialnosti_v_forme', 'options');

	$linkPravPol = get_field('ssylka_na_straniczu_politiki_konfidenczialnosti', 'options');

	$brifAnimationTextHeader = get_field('tekst_dlya_animaczii_zapolneniya_brifa_brif_po_proektu', 'options');

	$brifAnimationTextLb1 = get_field('tekst_dlya_animaczii_zapolneniya_brifa_nazvanie_proekta', 'options');

	$brifAnimationTextLb2 = get_field('tekst_dlya_animaczii_zapolneniya_brifa_ssylka_na_sajt', 'options');

	$brifAnimationTextLb3 = get_field('tekst_dlya_animaczii_zapolneniya_brifa_opeshite_voronku', 'options');

	$textMoreCases = get_field('podpis_podrobnee_pri_navedenii_na_kejs', 'options');

	$textMore = get_field('tekst_knopka_podrobnee', 'options');

	if ( $siteLang == 'ua'){

		$caseCatId = 20;
		$allCasesText = $allCasesText['ua'];
		$moreCasesText = $moreCasesText['ua'];
		$lidForText = $lidForText['ua'];
		$lidCostText = $lidCostText['ua'];
		$workDayText = $workDayText['ua'];
		$lidNameText = $lidNameText['ua'];
		$budgetText = $budgetText['ua'];
		$questionTextInQuiz = $questionTextInQuiz['ua'];
		$inTextInQuiz = $inTextInQuiz['ua'];
		$youAnsvTextInQuiz = $youAnsvTextInQuiz['ua'];
		$onMoreAnsvTextInQuiz = $onMoreAnsvTextInQuiz['ua'];
		$prevTextBtnQuiz = $prevTextBtnQuiz['ua'];
		$nextTextBtnQuiz = $nextTextBtnQuiz['ua'];
		$nameTextForm = $nameTextForm['ua'];
		$messTextForm = $messTextForm['ua'];
		$errorTextForm = $errorTextForm['ua'];
		$addPravicyText = $addPravicyText['ua'];
		$linkPravPol = $linkPravPol['ua'];
		$brifAnimationTextHeader = $brifAnimationTextHeader['ua'];
		$brifAnimationTextLb1 = $brifAnimationTextLb1['ua'];
		$brifAnimationTextLb2 = $brifAnimationTextLb2['ua'];
		$brifAnimationTextLb3 = $brifAnimationTextLb3['ua'];
		$textMoreCases = $textMoreCases['ua'];
		$textMore = $textMore['ua'];

	}elseif ( $siteLang == 'ru'){

		$caseCatId = 10;
		$allCasesText = $allCasesText['ru'];
		$moreCasesText = $moreCasesText['ru'];
		$lidForText = $lidForText['ru'];
		$lidCostText = $lidCostText['ru'];
		$workDayText = $workDayText['ru'];
		$lidNameText = $lidNameText['ru'];
		$budgetText = $budgetText['ru'];
		$questionTextInQuiz = $questionTextInQuiz['ru'];
		$inTextInQuiz = $inTextInQuiz['ru'];
		$youAnsvTextInQuiz = $youAnsvTextInQuiz['ru'];
		$onMoreAnsvTextInQuiz = $onMoreAnsvTextInQuiz['ru'];
		$prevTextBtnQuiz = $prevTextBtnQuiz['ru'];
		$nextTextBtnQuiz = $nextTextBtnQuiz['ru'];
		$nameTextForm = $nameTextForm['ru'];
		$messTextForm = $messTextForm['ru'];
		$errorTextForm = $errorTextForm['ru'];
		$addPravicyText = $addPravicyText['ru'];
		$linkPravPol = $linkPravPol['ru'];
		$brifAnimationTextHeader = $brifAnimationTextHeader['ru'];
		$brifAnimationTextLb1 = $brifAnimationTextLb1['ru'];
		$brifAnimationTextLb2 = $brifAnimationTextLb2['ru'];
		$brifAnimationTextLb3 = $brifAnimationTextLb3['ru'];
		$textMoreCases = $textMoreCases['ru'];
		$textMore = $textMore['ru'];
	}

?>

	<!-- Главный экран --->

	<section class="memo-main-screen">
		<div class="container">
			<div class="row">
				<div class="content col-lg-6 col-12">
					<?php the_content();?>
                    <div class="pic">
                        <img src="<?php echo get_field('kartinka_glavnogo_ekrana');?>" alt="">
	                    <?php /*include( 'template-parts/pic-1.php' );*/?>
                    </div>
				</div>
			</div>
		</div>
        <svg class="bg-text" width="1891" height="244" viewBox="0 0 1891 244" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.1" d="M228.378 0.742079V244H160.266V55.3014H67.8281V244H0.0633479V0.742079H228.378ZM448.228 196.738H345.365L326.252 244H256.054L363.435 0.742079H431.2L538.928 244H467.341L448.228 196.738ZM428.072 146.002L396.796 68.1593L365.52 146.002H428.072ZM786.085 244L785.738 115.073L723.186 220.022H692.605L630.052 117.853V244H566.805V0.742079H623.45L708.938 141.137L792.34 0.742079H848.985L849.68 244H786.085ZM1105.06 0.742079V244H1037.3V182.838H999.766L959.803 244H887.52L936.867 172.76C920.65 165.578 908.255 155.269 899.683 141.832C891.111 128.163 886.825 111.946 886.825 93.1801C886.825 74.1828 891.227 57.7339 900.031 43.8335C908.834 29.933 921.461 19.276 937.909 11.8624C954.358 4.44887 973.587 0.742079 995.596 0.742079H1105.06ZM996.986 54.9538C969.88 54.9538 956.328 67.3484 956.328 92.1376C956.328 104.416 959.687 113.799 966.405 120.286C973.356 126.541 983.318 129.669 996.291 129.669H1037.3V54.9538H996.986ZM1353.3 55.3014H1278.93V244H1211.17V55.3014H1136.45V0.742079H1353.3V55.3014ZM1483.36 150.867H1452.09V244H1383.63V0.742079H1452.09V95.2652H1485.1L1543.14 0.742079H1615.42L1539.31 118.201L1616.11 244H1538.62L1483.36 150.867ZM1800.26 196.738H1697.4L1678.29 244H1608.09L1715.47 0.742079H1783.24L1890.96 244H1819.38L1800.26 196.738ZM1780.11 146.002L1748.83 68.1593L1717.56 146.002H1780.11Z" fill="url(#paint0_linear)"/>
            <defs>
                <linearGradient id="paint0_linear" x1="934" y1="-141" x2="934" y2="379.915" gradientUnits="userSpaceOnUse">
                    <stop stop-color="white" stop-opacity="0"/>
                    <stop offset="1" stop-color="white"/>
                </linearGradient>
            </defs>
        </svg>
    </section>

	<!--- Основной контент --->
	<style type="text/css">
		.reminder-list .row:nth-child(12) .number-pic .pic-wrapper {
    		top: 25px;
    		left: 15px;
		}
		@media (max-width: 1200px){
			.reminder-list .row:nth-child(12) .number-pic .pic-wrapper {
    			top: 65px;
			}
		}
		@media (max-width: 992px){
			.reminder-list .row:nth-child(12) .number-pic .pic-wrapper {
			    left: -15px;
			    top: 155px;
			}
		}

		@media (max-width: 768px){
			.reminder-list .row .content .pic-wrapper img {
			    width: 100%;
			    height: auto;
			}
		}

	</style>

    <?php

        $reminderList = get_field('spisok_napomenanij');

        if( $reminderList ):

            $i = 0;
    ?>
        <section class="reminder-list">
            <div class="container">
                <?php foreach ( $reminderList as $item ): $i = $i+1;?>
                <div class="row">
                    <div class="number-pic col-md-4 col-12">
                        <?php if ( $i >= 10 ):?>
                            <p class="number"><?php echo $i;?></p>
                        <?php else:?>
                            <p class="number">0<?php echo $i;?></p>
                        <?php endif;?>
                        <?php if ( !empty($item['kartinka'])):?>
                            <div class="pic-wrapper">
                                <img class="lazy" data-src="<?php echo $item['kartinka'];?>" alt="">
                            </div>
                        <?php endif;?>
                    </div>
                    <div class="content col-md-8 col-12">
                        <h3><?php echo $item['zagolovok'];?></h3>
	                    <?php echo $item['opisanie'];?>
	                    <?php if ( !empty($item['kartinka'])):?>
                            <div class="pic-wrapper">
                                <img src="<?php echo $item['kartinka'];?>" alt="">
                            </div>
	                    <?php endif;?>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </section>

    <?php endif;?>

    <!-- Скидки --->

    <?php
        $discountBomb = get_field('blok_so_skidkoj');

        if ( $discountBomb ):

            $block_title = $discountBomb['zagolovok'];
            $bomb_pic = $discountBomb['kartinka'];
    ?>
        <section class="discount-bomb">
            <div class="container">
                <div class="row">
                    <div class="content col-12">
                        <h3><?php echo $block_title;?></h3>
                        <div class="bomb-wrapper">
                            <div class="pic-wrapper">
                                <img class="lazy" data-src="<?php echo $bomb_pic;?>" alt="">
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
