<?php
	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Шаблон страницы "Бриф"
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

	if ( $siteLang == 'ua'){

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

	}elseif ( $siteLang == 'ru'){

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
	}

?>

	<!-- Главный экран --->

	<section class="main-screen-brief">
		<div class="container">
			<div class="row">
				<div class="text-wrapper col-lg-7 col-12">
					<?php the_content();?>
					<h3><?php echo get_field('podpis_foto_imya_dolzhnost');?></h3>
				</div>
				<div class="pic-wrapper col-lg-5 col-sm-6 col-8 offset-2 offset-sm-3 offset-lg-0">
					<img src="<?php echo get_field('foto_na_pervyj_ekran')?>" alt="">
				</div>
			</div>
		</div>
	</section>

    <!-- Основной контент брифа -->

    <section class="brief-main-content">
        <div class="container">
            <div class="row">
                <h2 class="block-title col-12">
                
                	<?php 

                		$brifTitleText = get_field('podpis_brif', 'options');

                		echo $brifTitleText[$siteLang];

                	?>
                		
                </h2>
            </div>
            <div class="row">
                <form class="col-12"
                      method="post"
                      action="https://smmstudio.com/briefs/send-breaf.php"
                      id="brief-form">

                    <!--<input type="hidden" name="action" value="brief_form">-->
                    <?php
                        $question1 = get_field('vopros_1');

                        if( $question1 ):

                            $question_text = $question1['tekst_voprosa'];
                            $example_type = $question1['tip_primera_zapolneniya'];
                            $example_text = $question1['tekst_primera_zapolneniya'];
                            $example_video = $question1['video_primer'];
                    ?>
                        <div class="question">
                            <label for="question-1">1. <?php echo $question_text;?></label>
                            <div class="form-group">
                                <textarea type="text" name="question-1" class="form-control" id="question-1"></textarea>
                            </div>
                            <div class="example-filling">
                                
                                <?php
                                    if( $example_type['value'] == 'text'):?>

                                    	<?php if (!empty($example_text)):?>
						               			<h3><?php echo $exampleOfFillingBriefText;?></h3>
						               		<?php endif;?>

                                        <?php echo $example_text;?>

                                    <?php elseif ( $example_type['value'] == 'video' ):?>

                                    	<h3><?php echo $exampleOfFillingBriefText;?></h3>
                                    	
                                        <?php foreach ( $example_video as $item ):?>
                                            <a href="#" class="video-ex" data-exvideoid="<?php echo $item['id_video_s_youtube'];?>">
                                                <svg height="512pt" viewBox="0 -77 512.00213 512" width="512pt" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="m501.453125 56.09375c-5.902344-21.933594-23.195313-39.222656-45.125-45.128906-40.066406-10.964844-200.332031-10.964844-200.332031-10.964844s-160.261719 0-200.328125 10.546875c-21.507813 5.902344-39.222657 23.617187-45.125 45.546875-10.542969 40.0625-10.542969 123.148438-10.542969 123.148438s0 83.503906 10.542969 123.148437c5.90625 21.929687 23.195312 39.222656 45.128906 45.128906 40.484375 10.964844 200.328125 10.964844 200.328125 10.964844s160.261719 0 200.328125-10.546875c21.933594-5.902344 39.222656-23.195312 45.128906-45.125 10.542969-40.066406 10.542969-123.148438 10.542969-123.148438s.421875-83.507812-10.546875-123.570312zm0 0" fill="#f00"/><path d="m204.96875 256 133.269531-76.757812-133.269531-76.757813zm0 0" fill="#fff"/>
                                                </svg>
                                                <span><?php echo $item['nazvanie_video'];?></span>

                                            </a>
                                        <?php endforeach;?>
                                <?php endif;?>
                            </div>
                        </div>
                    <?php endif;?>

	                <?php
		                $question2 = get_field('vopros_2');

		                if( $question2 ):

			                $question_text = $question2['tekst_voprosa'];
			                $example_type = $question2['tip_primera_zapolneniya'];
			                $example_text = $question2['tekst_primera_zapolneniya'];
			                $example_video = $question2['video_primer'];
			                ?>
                            <div class="question">
                                <label for="question-2">2. <?php echo $question_text;?></label>
                                <div class="form-group">
                                    <textarea type="text" name="question-2" class="form-control" id="question-2"></textarea>
                                </div>
                                <div class="example-filling">
                                    
					                <?php
						                if( $example_type['value'] == 'text'):?>

						                	<?php if (!empty($example_text)):?>
						               			<h3><?php echo $exampleOfFillingBriefText;?></h3>
						               		<?php endif;?>

							                <?php echo $example_text;?>

						                <?php elseif ( $example_type['value'] == 'video' ):?>

						                	<h3><?php echo $exampleOfFillingBriefText;?></h3>

							                <?php foreach ( $example_video as $item ):?>
                                                <a href="#" class="video-ex" data-exvideoid="<?php echo $item['id_video_s_youtube'];?>">
                                                    <svg height="512pt" viewBox="0 -77 512.00213 512" width="512pt" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m501.453125 56.09375c-5.902344-21.933594-23.195313-39.222656-45.125-45.128906-40.066406-10.964844-200.332031-10.964844-200.332031-10.964844s-160.261719 0-200.328125 10.546875c-21.507813 5.902344-39.222657 23.617187-45.125 45.546875-10.542969 40.0625-10.542969 123.148438-10.542969 123.148438s0 83.503906 10.542969 123.148437c5.90625 21.929687 23.195312 39.222656 45.128906 45.128906 40.484375 10.964844 200.328125 10.964844 200.328125 10.964844s160.261719 0 200.328125-10.546875c21.933594-5.902344 39.222656-23.195312 45.128906-45.125 10.542969-40.066406 10.542969-123.148438 10.542969-123.148438s.421875-83.507812-10.546875-123.570312zm0 0" fill="#f00"/><path d="m204.96875 256 133.269531-76.757812-133.269531-76.757813zm0 0" fill="#fff"/>
                                                    </svg>
                                                    <span><?php echo $item['nazvanie_video'];?></span>
                                                </a>
							                <?php endforeach;?>
						                <?php endif;?>
                                </div>
                            </div>
		                <?php endif;?>

	                <?php
		                $question3 = get_field('vopros_3');

		                if( $question3 ):

			                $question_text = $question3['tekst_voprosa'];
			                $example_type = $question3['tip_primera_zapolneniya'];
			                $example_text = $question3['tekst_primera_zapolneniya'];
			                $example_video = $question3['video_primer'];
			                ?>
                            <div class="question">
                                <label for="question-3">3. <?php echo $question_text;?></label>
                                <div class="form-group">
                                    <textarea type="text" name="question-3" class="form-control" id="question-3"></textarea>
                                </div>
                                <div class="example-filling">
                                    
					                <?php
						                if( $example_type['value'] == 'text'):?>

						                	<?php if (!empty($example_text)):?>
						               			<h3><?php echo $exampleOfFillingBriefText;?></h3>
						               		<?php endif;?>

							                <?php echo $example_text;?>

						                <?php elseif ( $example_type['value'] == 'video' ):?>

						                	<h3><?php echo $exampleOfFillingBriefText;?></h3>

							                <?php foreach ( $example_video as $item ):?>
                                                <a href="#" class="video-ex" data-exvideoid="<?php echo $item['id_video_s_youtube'];?>">
                                                    <svg height="512pt" viewBox="0 -77 512.00213 512" width="512pt" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m501.453125 56.09375c-5.902344-21.933594-23.195313-39.222656-45.125-45.128906-40.066406-10.964844-200.332031-10.964844-200.332031-10.964844s-160.261719 0-200.328125 10.546875c-21.507813 5.902344-39.222657 23.617187-45.125 45.546875-10.542969 40.0625-10.542969 123.148438-10.542969 123.148438s0 83.503906 10.542969 123.148437c5.90625 21.929687 23.195312 39.222656 45.128906 45.128906 40.484375 10.964844 200.328125 10.964844 200.328125 10.964844s160.261719 0 200.328125-10.546875c21.933594-5.902344 39.222656-23.195312 45.128906-45.125 10.542969-40.066406 10.542969-123.148438 10.542969-123.148438s.421875-83.507812-10.546875-123.570312zm0 0" fill="#f00"/><path d="m204.96875 256 133.269531-76.757812-133.269531-76.757813zm0 0" fill="#fff"/>
                                                    </svg>
                                                    <span><?php echo $item['nazvanie_video'];?></span>
                                                </a>
							                <?php endforeach;?>
						                <?php endif;?>
                                </div>
                            </div>
		                <?php endif;?>

	                <?php
		                $question4 = get_field('vopros_4');

		                if( $question4 ):

			                $question_text = $question4['tekst_voprosa'];
			                $example_type = $question4['tip_primera_zapolneniya'];
			                $example_text = $question4['tekst_primera_zapolneniya'];
			                $example_video = $question4['video_primer'];
			                ?>
                            <div class="question">
                                <label for="question-4">4. <?php echo $question_text;?></label>
                                <div class="form-group">
                                    <textarea type="text" name="question-4" class="form-control" id="question-4"></textarea>
                                </div>
                                <div class="example-filling">
                                    
					                <?php
						                if( $example_type['value'] == 'text'):?>

						               		<?php if (!empty($example_text)):?>
						               			<h3><?php echo $exampleOfFillingBriefText;?></h3>
						               		<?php endif;?>
						                	

							                <?php echo $example_text;?>

						                <?php elseif ( $example_type['value'] == 'video' ):?>

						                	<h3><?php echo $exampleOfFillingBriefText;?></h3>

							                <?php foreach ( $example_video as $item ):?>
                                                <a href="#" class="video-ex"  data-exvideoid="<?php echo $item['id_video_s_youtube'];?>">
                                                    <svg height="512pt" viewBox="0 -77 512.00213 512" width="512pt" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m501.453125 56.09375c-5.902344-21.933594-23.195313-39.222656-45.125-45.128906-40.066406-10.964844-200.332031-10.964844-200.332031-10.964844s-160.261719 0-200.328125 10.546875c-21.507813 5.902344-39.222657 23.617187-45.125 45.546875-10.542969 40.0625-10.542969 123.148438-10.542969 123.148438s0 83.503906 10.542969 123.148437c5.90625 21.929687 23.195312 39.222656 45.128906 45.128906 40.484375 10.964844 200.328125 10.964844 200.328125 10.964844s160.261719 0 200.328125-10.546875c21.933594-5.902344 39.222656-23.195312 45.128906-45.125 10.542969-40.066406 10.542969-123.148438 10.542969-123.148438s.421875-83.507812-10.546875-123.570312zm0 0" fill="#f00"/><path d="m204.96875 256 133.269531-76.757812-133.269531-76.757813zm0 0" fill="#fff"/>
                                                    </svg>
                                                    <span><?php echo $item['nazvanie_video'];?></span>
                                                </a>
							                <?php endforeach;?>
						                <?php endif;?>
                                </div>
                            </div>
		                <?php endif;?>

	                <?php
		                $question5 = get_field('vopros_5');

		                if( $question5 ):

			                $question_text = $question5['tekst_voprosa'];
			                $example_type = $question5['tip_primera_zapolneniya'];
			                $example_text = $question5['tekst_primera_zapolneniya'];
			                $example_video = $question5['video_primer'];
			                ?>
                            <div class="question">
                                <label for="question-5">5. <?php echo $question_text;?></label>
                                <div class="form-group">
                                    <textarea type="text" name="question-5" class="form-control" id="question-5"></textarea>
                                </div>
                                <div class="example-filling">
                                    
					                <?php
						                if( $example_type['value'] == 'text'):?>

						                	<?php if (!empty($example_text)):?>
						               			<h3><?php echo $exampleOfFillingBriefText;?></h3>
						               		<?php endif;?>

							                <?php echo $example_text;?>

						                <?php elseif ( $example_type['value'] == 'video' ):?>

						                	<h3><?php echo $exampleOfFillingBriefText;?></h3>

							                <?php foreach ( $example_video as $item ):?>
                                                <a href="#" class="video-ex" data-exvideoid="<?php echo $item['id_video_s_youtube'];?>">
                                                    <svg height="512pt" viewBox="0 -77 512.00213 512" width="512pt" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m501.453125 56.09375c-5.902344-21.933594-23.195313-39.222656-45.125-45.128906-40.066406-10.964844-200.332031-10.964844-200.332031-10.964844s-160.261719 0-200.328125 10.546875c-21.507813 5.902344-39.222657 23.617187-45.125 45.546875-10.542969 40.0625-10.542969 123.148438-10.542969 123.148438s0 83.503906 10.542969 123.148437c5.90625 21.929687 23.195312 39.222656 45.128906 45.128906 40.484375 10.964844 200.328125 10.964844 200.328125 10.964844s160.261719 0 200.328125-10.546875c21.933594-5.902344 39.222656-23.195312 45.128906-45.125 10.542969-40.066406 10.542969-123.148438 10.542969-123.148438s.421875-83.507812-10.546875-123.570312zm0 0" fill="#f00"/><path d="m204.96875 256 133.269531-76.757812-133.269531-76.757813zm0 0" fill="#fff"/>
                                                    </svg>
                                                    <span><?php echo $item['nazvanie_video'];?></span>
                                                </a>
							                <?php endforeach;?>
						                <?php endif;?>
                                </div>
                            </div>
		                <?php endif;?>

	                <?php
		                $question6 = get_field('vopros_6');

		                if( $question6 ):

			                $question_text = $question6['tekst_voprosa'];
			                $example_type = $question6['tip_primera_zapolneniya'];
			                $example_text = $question6['tekst_primera_zapolneniya'];
			                $example_video = $question6['video_primer'];
			                ?>
                            <div class="question">
                                <label for="question-6">6. <?php echo $question_text;?></label>
                                <div class="form-group">
                                    <textarea type="text" name="question-6" class="form-control" id="question-6"></textarea>
                                </div>
                                <div class="example-filling">
                                   
					                <?php
						                if( $example_type['value'] == 'text'):?>

						                	<?php if (!empty($example_text)):?>
						               			<h3><?php echo $exampleOfFillingBriefText;?></h3>
						               		<?php endif;?>

							                <?php echo $example_text;?>

						                <?php elseif ( $example_type['value'] == 'video' ):?>

						                	<h3><?php echo $exampleOfFillingBriefText;?></h3>


							                <?php foreach ( $example_video as $item ):?>
                                                <a href="#" class="video-ex" data-exvideoid="<?php echo $item['id_video_s_youtube'];?>">
                                                    <svg height="512pt" viewBox="0 -77 512.00213 512" width="512pt" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m501.453125 56.09375c-5.902344-21.933594-23.195313-39.222656-45.125-45.128906-40.066406-10.964844-200.332031-10.964844-200.332031-10.964844s-160.261719 0-200.328125 10.546875c-21.507813 5.902344-39.222657 23.617187-45.125 45.546875-10.542969 40.0625-10.542969 123.148438-10.542969 123.148438s0 83.503906 10.542969 123.148437c5.90625 21.929687 23.195312 39.222656 45.128906 45.128906 40.484375 10.964844 200.328125 10.964844 200.328125 10.964844s160.261719 0 200.328125-10.546875c21.933594-5.902344 39.222656-23.195312 45.128906-45.125 10.542969-40.066406 10.542969-123.148438 10.542969-123.148438s.421875-83.507812-10.546875-123.570312zm0 0" fill="#f00"/><path d="m204.96875 256 133.269531-76.757812-133.269531-76.757813zm0 0" fill="#fff"/>
                                                    </svg>
                                                    <span><?php echo $item['nazvanie_video'];?></span>
                                                </a>
							                <?php endforeach;?>
						                <?php endif;?>
                                </div>
                            </div>
		                <?php endif;?>

	                <?php
		                $question7 = get_field('vopros_7');

		                if( $question7 ):

			                $question_text = $question7['tekst_voprosa'];
			                $example_type = $question7['tip_primera_zapolneniya'];
			                $example_text = $question7['tekst_primera_zapolneniya'];
			                $example_video = $question7['video_primer'];
			                ?>
                            <div class="question">
                                <label for="question-7">7. <?php echo $question_text;?></label>
                                <div class="form-group">
                                    <textarea type="text" name="question-7" class="form-control" id="question-7"></textarea>
                                </div>
                                <div class="example-filling">
                                    
					                <?php
						                if( $example_type['value'] == 'text'):?>

						                	<?php if (!empty($example_text)):?>
						               			<h3><?php echo $exampleOfFillingBriefText;?></h3>
						               		<?php endif;?>

							                <?php echo $example_text;?>

						                <?php elseif ( $example_type['value'] == 'video' ):?>

						                	<h3><?php echo $exampleOfFillingBriefText;?></h3>

							                <?php foreach ( $example_video as $item ):?>
                                                <a href="#" class="video-ex" data-exvideoid="<?php echo $item['id_video_s_youtube'];?>">
                                                    <svg height="512pt" viewBox="0 -77 512.00213 512" width="512pt" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m501.453125 56.09375c-5.902344-21.933594-23.195313-39.222656-45.125-45.128906-40.066406-10.964844-200.332031-10.964844-200.332031-10.964844s-160.261719 0-200.328125 10.546875c-21.507813 5.902344-39.222657 23.617187-45.125 45.546875-10.542969 40.0625-10.542969 123.148438-10.542969 123.148438s0 83.503906 10.542969 123.148437c5.90625 21.929687 23.195312 39.222656 45.128906 45.128906 40.484375 10.964844 200.328125 10.964844 200.328125 10.964844s160.261719 0 200.328125-10.546875c21.933594-5.902344 39.222656-23.195312 45.128906-45.125 10.542969-40.066406 10.542969-123.148438 10.542969-123.148438s.421875-83.507812-10.546875-123.570312zm0 0" fill="#f00"/><path d="m204.96875 256 133.269531-76.757812-133.269531-76.757813zm0 0" fill="#fff"/>
                                                    </svg>
                                                    <span><?php echo $item['nazvanie_video'];?></span>
                                                </a>
							                <?php endforeach;?>
						                <?php endif;?>
                                </div>
                            </div>
		                <?php endif;?>

	                <?php
		                $question8 = get_field('vopros_8');

		                if( $question8 ):

			                $question_text = $question8['tekst_voprosa'];
			                $example_type = $question8['tip_primera_zapolneniya'];
			                $example_text = $question8['tekst_primera_zapolneniya'];
			                $example_video = $question8['video_primer'];
			                ?>
                            <div class="question">
                                <label for="question-8">8. <?php echo $question_text;?></label>
                                <div class="form-group">
                                    <textarea type="text" name="question-8" class="form-control" id="question-8"></textarea>
                                </div>
                                <div class="example-filling">
                                   
					                <?php
						                if( $example_type['value'] == 'text'):?>

						                	<?php if (!empty($example_text)):?>
						               			<h3><?php echo $exampleOfFillingBriefText;?></h3>
						               		<?php endif;?>

							                <?php echo $example_text;?>

						                <?php elseif ( $example_type['value'] == 'video' ):?>

						                	<h3><?php echo $exampleOfFillingBriefText;?></h3>

							                <?php foreach ( $example_video as $item ):?>
                                                <a href="#" class="video-ex" data-exvideoid="<?php echo $item['id_video_s_youtube'];?>">
                                                    <svg height="512pt" viewBox="0 -77 512.00213 512" width="512pt" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m501.453125 56.09375c-5.902344-21.933594-23.195313-39.222656-45.125-45.128906-40.066406-10.964844-200.332031-10.964844-200.332031-10.964844s-160.261719 0-200.328125 10.546875c-21.507813 5.902344-39.222657 23.617187-45.125 45.546875-10.542969 40.0625-10.542969 123.148438-10.542969 123.148438s0 83.503906 10.542969 123.148437c5.90625 21.929687 23.195312 39.222656 45.128906 45.128906 40.484375 10.964844 200.328125 10.964844 200.328125 10.964844s160.261719 0 200.328125-10.546875c21.933594-5.902344 39.222656-23.195312 45.128906-45.125 10.542969-40.066406 10.542969-123.148438 10.542969-123.148438s.421875-83.507812-10.546875-123.570312zm0 0" fill="#f00"/><path d="m204.96875 256 133.269531-76.757812-133.269531-76.757813zm0 0" fill="#fff"/>
                                                    </svg>
                                                    <span><?php echo $item['nazvanie_video'];?></span>
                                                </a>
							                <?php endforeach;?>
						                <?php endif;?>
                                </div>
                            </div>
		                <?php endif;?>

	                <?php
		                $question9 = get_field('vopros_9');

		                if( $question9 ):

			                $question_text = $question9['tekst_voprosa'];
			                $example_type = $question9['tip_primera_zapolneniya'];
			                $example_text = $question9['tekst_primera_zapolneniya'];
			                $example_video = $question9['video_primer'];
			                ?>
                            <div class="question">
                                <label for="question-9">9. <?php echo $question_text;?></label>
                                <div class="form-group">
                                    <textarea type="text" name="question-9" class="form-control" id="question-9"></textarea>
                                </div>
                                <div class="example-filling">
                                    
					                <?php
						                if( $example_type['value'] == 'text'):?>

						                	<?php if (!empty($example_text)):?>
						               			<h3><?php echo $exampleOfFillingBriefText;?></h3>
						               		<?php endif;?>

							                <?php echo $example_text;?>

						                <?php elseif ( $example_type['value'] == 'video' ):?>

						                	<h3><?php echo $exampleOfFillingBriefText;?></h3>

							                <?php foreach ( $example_video as $item ):?>
                                                <a href="#" class="video-ex" data-exvideoid="<?php echo $item['id_video_s_youtube'];?>">
                                                    <svg height="512pt" viewBox="0 -77 512.00213 512" width="512pt" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m501.453125 56.09375c-5.902344-21.933594-23.195313-39.222656-45.125-45.128906-40.066406-10.964844-200.332031-10.964844-200.332031-10.964844s-160.261719 0-200.328125 10.546875c-21.507813 5.902344-39.222657 23.617187-45.125 45.546875-10.542969 40.0625-10.542969 123.148438-10.542969 123.148438s0 83.503906 10.542969 123.148437c5.90625 21.929687 23.195312 39.222656 45.128906 45.128906 40.484375 10.964844 200.328125 10.964844 200.328125 10.964844s160.261719 0 200.328125-10.546875c21.933594-5.902344 39.222656-23.195312 45.128906-45.125 10.542969-40.066406 10.542969-123.148438 10.542969-123.148438s.421875-83.507812-10.546875-123.570312zm0 0" fill="#f00"/><path d="m204.96875 256 133.269531-76.757812-133.269531-76.757813zm0 0" fill="#fff"/>
                                                    </svg>
                                                    <span><?php echo $item['nazvanie_video'];?></span>
                                                </a>
							                <?php endforeach;?>
						                <?php endif;?>
                                </div>
                            </div>
		                <?php endif;?>

	                <?php
		                $question10 = get_field('vopros_10');

		                if( $question10 ):

			                $question_text = $question10['tekst_voprosa'];
			                $example_type = $question10['tip_primera_zapolneniya'];
			                $example_text = $question10['tekst_primera_zapolneniya'];
			                $example_video = $question10['video_primer'];
			                ?>
                            <div class="question">
                                <label for="question-10">10. <?php echo $question_text;?></label>
                                <div class="form-group">
                                    <textarea type="text" name="question-10" class="form-control" id="question-10"></textarea>
                                </div>
                                <div class="example-filling">
                                    
					                <?php
						                if( $example_type['value'] == 'text'):?>

						                	<?php if (!empty($example_text)):?>
						               			<h3><?php echo $exampleOfFillingBriefText;?></h3>
						               		<?php endif;?>

							                <?php echo $example_text;?>

						                <?php elseif ( $example_type['value'] == 'video' ):?>

						                	<h3><?php echo $exampleOfFillingBriefText;?></h3>

							                <?php foreach ( $example_video as $item ):?>
                                                <a href="#" class="video-ex" data-exvideoid="<?php echo $item['id_video_s_youtube'];?>">
                                                    <svg height="512pt" viewBox="0 -77 512.00213 512" width="512pt" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m501.453125 56.09375c-5.902344-21.933594-23.195313-39.222656-45.125-45.128906-40.066406-10.964844-200.332031-10.964844-200.332031-10.964844s-160.261719 0-200.328125 10.546875c-21.507813 5.902344-39.222657 23.617187-45.125 45.546875-10.542969 40.0625-10.542969 123.148438-10.542969 123.148438s0 83.503906 10.542969 123.148437c5.90625 21.929687 23.195312 39.222656 45.128906 45.128906 40.484375 10.964844 200.328125 10.964844 200.328125 10.964844s160.261719 0 200.328125-10.546875c21.933594-5.902344 39.222656-23.195312 45.128906-45.125 10.542969-40.066406 10.542969-123.148438 10.542969-123.148438s.421875-83.507812-10.546875-123.570312zm0 0" fill="#f00"/><path d="m204.96875 256 133.269531-76.757812-133.269531-76.757813zm0 0" fill="#fff"/>
                                                    </svg>
                                                    <span><?php echo $item['nazvanie_video'];?></span>
                                                </a>
							                <?php endforeach;?>
						                <?php endif;?>
                                </div>
                            </div>
		                <?php endif;?>

	                <?php
		                $question11 = get_field('vopros_11');

		                if( $question11 ):

			                $question_text = $question11['tekst_voprosa'];
			                $example_type = $question11['tip_primera_zapolneniya'];
			                $example_text = $question11['tekst_primera_zapolneniya'];
			                $example_video = $question11['video_primer'];
			                ?>
                            <div class="question">
                                <label for="question-11">11. <?php echo $question_text;?></label>
                                <div class="form-group">
                                    <textarea type="text" name="question-11" class="form-control" id="question-11"></textarea>
                                </div>
                                <div class="example-filling">
                                    
					                <?php
						                if( $example_type['value'] == 'text'):?>

						                	<?php if (!empty($example_text)):?>
						               			<h3><?php echo $exampleOfFillingBriefText;?></h3>
						               		<?php endif;?>

							                <?php echo $example_text;?>

						                <?php elseif ( $example_type['value'] == 'video' ):?>

						                	<h3><?php echo $exampleOfFillingBriefText;?></h3>

							                <?php foreach ( $example_video as $item ):?>
                                                <a href="#" class="video-ex" data-exvideoid="<?php echo $item['id_video_s_youtube'];?>">
                                                    <svg height="512pt" viewBox="0 -77 512.00213 512" width="512pt" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m501.453125 56.09375c-5.902344-21.933594-23.195313-39.222656-45.125-45.128906-40.066406-10.964844-200.332031-10.964844-200.332031-10.964844s-160.261719 0-200.328125 10.546875c-21.507813 5.902344-39.222657 23.617187-45.125 45.546875-10.542969 40.0625-10.542969 123.148438-10.542969 123.148438s0 83.503906 10.542969 123.148437c5.90625 21.929687 23.195312 39.222656 45.128906 45.128906 40.484375 10.964844 200.328125 10.964844 200.328125 10.964844s160.261719 0 200.328125-10.546875c21.933594-5.902344 39.222656-23.195312 45.128906-45.125 10.542969-40.066406 10.542969-123.148438 10.542969-123.148438s.421875-83.507812-10.546875-123.570312zm0 0" fill="#f00"/><path d="m204.96875 256 133.269531-76.757812-133.269531-76.757813zm0 0" fill="#fff"/>
                                                    </svg>
                                                    <span><?php echo $item['nazvanie_video'];?></span>
                                                </a>
							                <?php endforeach;?>
						                <?php endif;?>
                                </div>
                            </div>
		                <?php endif;?>

	                <?php
		                $question12 = get_field('vopros_12');

		                if( $question12 ):

			                $question_text = $question12['tekst_voprosa'];
			                $example_type = $question12['tip_primera_zapolneniya'];
			                $example_text = $question12['tekst_primera_zapolneniya'];
			                $example_video = $question12['video_primer'];
			                ?>
                            <div class="question">
                                <label for="question-12">12. <?php echo $question_text;?></label>
                                <div class="form-group">
                                    <textarea type="text" name="question-12" class="form-control" id="question-12"></textarea>
                                </div>
                                <div class="example-filling">
                                    
					                <?php
						                if( $example_type['value'] == 'text'):?>

						                	<?php if (!empty($example_text)):?>
						               			<h3><?php echo $exampleOfFillingBriefText;?></h3>
						               		<?php endif;?>

							                <?php echo $example_text;?>

						                <?php elseif ( $example_type['value'] == 'video' ):?>

						                	<h3><?php echo $exampleOfFillingBriefText;?></h3>

							                <?php foreach ( $example_video as $item ):?>
                                                <a href="#" class="video-ex" data-exvideoid="<?php echo $item['id_video_s_youtube'];?>">
                                                    <svg height="512pt" viewBox="0 -77 512.00213 512" width="512pt" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m501.453125 56.09375c-5.902344-21.933594-23.195313-39.222656-45.125-45.128906-40.066406-10.964844-200.332031-10.964844-200.332031-10.964844s-160.261719 0-200.328125 10.546875c-21.507813 5.902344-39.222657 23.617187-45.125 45.546875-10.542969 40.0625-10.542969 123.148438-10.542969 123.148438s0 83.503906 10.542969 123.148437c5.90625 21.929687 23.195312 39.222656 45.128906 45.128906 40.484375 10.964844 200.328125 10.964844 200.328125 10.964844s160.261719 0 200.328125-10.546875c21.933594-5.902344 39.222656-23.195312 45.128906-45.125 10.542969-40.066406 10.542969-123.148438 10.542969-123.148438s.421875-83.507812-10.546875-123.570312zm0 0" fill="#f00"/><path d="m204.96875 256 133.269531-76.757812-133.269531-76.757813zm0 0" fill="#fff"/>
                                                    </svg>
                                                    <span><?php echo $item['nazvanie_video'];?></span>
                                                </a>
							                <?php endforeach;?>
						                <?php endif;?>
                                </div>
                            </div>
		                <?php endif;?>
                    <input type="hidden" name="page-name" value="<?php the_title(); ?>">
                    <input type="hidden" name="home-url" value="<?php echo home_url('/');?>">
                    <input type="hidden" name="site-lang" value="<?php echo $siteLang?>">
                    <button type="submit" class="button">
                        <?php echo $sendBriefBtnText;?>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.0114107 1L0 9.55554L17.1429 12L0 14.4445L0.0114107 23L24 12L0.0114107 1Z" fill="#ffffff"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </section>

<?php
	get_footer('small');
