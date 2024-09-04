<?php
	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Шаблон страницы "Бриф по контексту"
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package smmstudio
	 */
	get_header();

?>

	<!-- Главный экран --->

	<section class="main-screen-brief">
		<div class="container">
			<div class="row">
				<div class="text-wrapper col-lg-7 col-12">
					<?php the_content();?>
				</div>
			</div>
		</div>
	</section>

	<!-- Основной контент брифа -->

	<section class="brief-main-content">
		<div class="container">
			<div class="row">
				<h2 class="block-title col-12">Бриф</h2>
			</div>
			<div class="row">
				<form class="col-12"
				      method="post"
				      action="<?php echo SITE_URL; ?>/brief-context/send-breaf.php"
				      id="brief-form">
					<!--<input type="hidden" name="action" value="brief_form">-->
					<?php
						$question1 = get_field('vopros_1');

						if( $question1 ):

							$question_text = $question1['tekst_voprosa'];

							?>
							<div class="question">
								<label for="question-1">1. <?php echo $question_text;?></label>
								<div class="form-group">
									<textarea type="text" name="question-1" class="form-control" id="question-1"></textarea>
								</div>

							</div>
						<?php endif;?>

					<?php
						$question2 = get_field('vopros_2');

						if( $question2 ):

							$question_text = $question2['tekst_voprosa'];

							?>
							<div class="question">
								<label for="question-2">2. <?php echo $question_text;?></label>
								<div class="form-group">
									<textarea type="text" name="question-2" class="form-control" id="question-2"></textarea>
								</div>
							</div>
						<?php endif;?>

					<?php
						$question3 = get_field('vopros_3');

						if( $question3 ):

							$question_text = $question3['tekst_voprosa'];

							?>
							<div class="question">
								<label for="question-3">3. <?php echo $question_text;?></label>
								<div class="form-group">
									<textarea type="text" name="question-3" class="form-control" id="question-3"></textarea>
								</div>

							</div>
						<?php endif;?>

					<?php
						$question4 = get_field('vopros_4');

						if( $question4 ):

							$question_text = $question4['tekst_voprosa'];

							?>
							<div class="question">
								<label for="question-4">4. <?php echo $question_text;?></label>
								<div class="form-group">
									<textarea type="text" name="question-4" class="form-control" id="question-4"></textarea>
								</div>
							</div>
						<?php endif;?>

					<?php
						$question5 = get_field('vopros_5');

						if( $question5 ):

							$question_text = $question5['tekst_voprosa'];

							?>
							<div class="question">
								<label for="question-5">5. <?php echo $question_text;?></label>
								<div class="form-group">
									<textarea type="text" name="question-5" class="form-control" id="question-5"></textarea>
								</div>
							</div>
						<?php endif;?>

					<?php
						$question6 = get_field('vopros_6');

						if( $question6 ):

							$question_text = $question6['tekst_voprosa'];

							?>
							<div class="question">
								<label for="question-6">6. <?php echo $question_text;?></label>
								<div class="form-group">
									<textarea type="text" name="question-6" class="form-control" id="question-6"></textarea>
								</div>
							</div>
						<?php endif;?>

					<?php
						$question7 = get_field('vopros_7');

						if( $question7 ):

							$question_text = $question7['tekst_voprosa'];

							?>
							<div class="question">
								<label for="question-7">7. <?php echo $question_text;?></label>
								<div class="form-group">
									<textarea type="text" name="question-7" class="form-control" id="question-7"></textarea>
								</div>
							</div>
						<?php endif;?>

					<?php
						$question8 = get_field('vopros_8');

						if( $question8 ):

							$question_text = $question8['tekst_voprosa'];

							?>
							<div class="question">
								<label for="question-8">8. <?php echo $question_text;?></label>
								<div class="form-group">
									<textarea type="text" name="question-8" class="form-control" id="question-8"></textarea>
								</div>
							</div>
						<?php endif;?>

					<?php
						$question9 = get_field('vopros_9');

						if( $question9 ):

							$question_text = $question9['tekst_voprosa'];

							?>
							<div class="question">
								<label for="question-9">9. <?php echo $question_text;?></label>
								<div class="form-group">
									<textarea type="text" name="question-9" class="form-control" id="question-9"></textarea>
								</div>

							</div>
						<?php endif;?>

					<?php
						$question10 = get_field('vopros_10');

						if( $question10 ):

							$question_text = $question10['tekst_voprosa'];
							$answer1 = $question10['variant_otveta_1'];
							$answer2 = $question10['variant_otveta_2'];
							$answer3 = $question10['variant_otveta_3'];
							?>
							<div class="question ">
                                <h3>10. <?php echo $question_text;?></h3>

                                <div class="checbox-asw">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" name="question-10[]" class="form-check-input" value="<?php echo $answer1;?>">
                                            <p class="checkbox__text">
				                                <?php echo $answer1;?>
                                            </p>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" name="question-10[]" class="form-check-input" value="<?php echo $answer2;?>">
                                            <p class="checkbox__text">
				                                <?php echo $answer2;?>
                                            </p>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" name="question-10[]" class="form-check-input" value="<?php echo $answer3;?>">
                                            <p class="checkbox__text">
				                                <?php echo $answer3;?>
                                            </p>
                                        </label>
                                    </div>
                                </div>
							</div>
						<?php endif;?>

					<?php
						$question11 = get_field('vopros_11');

						if( $question11 ):

							$question_text = $question11['tekst_voprosa'];
							$answer1 = $question11['variant_otveta_1'];
							$answer2 = $question11['variant_otveta_2'];

							?>
							<div class="question ">
								<h3>11. <?php echo $question_text;?></h3>
                                <div class="radio-asw">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="question-11" value="1">
                                            <p class="radio__text">
				                                <?php echo $answer1;?>
                                            </p>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="question-11" value="0">
                                            <p class="radio__text">
				                                <?php echo $answer2;?>
                                            </p>
                                        </label>
                                    </div>
                                </div>

							</div>
						<?php endif;?>

					<?php
						$question12 = get_field('vopros_12');

						if( $question12 ):

							$question_text = $question12['tekst_voprosa'];

							?>
							<div class="question trigger-question">
								<label for="question-12">12. <?php echo $question_text;?></label>
								<div class="form-group">
									<textarea type="text" name="question-12" class="form-control" id="question-12"></textarea>
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
	get_footer();
