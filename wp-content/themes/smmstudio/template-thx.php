<?php
	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Шаблон страницы "Спасибо"
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package smmstudio
	 */
	get_header();

	/*$siteLang = get_bloginfo('language');

	$allCasesText = get_field('tekst_knopki_vse_kejsy', 'options');

	$moreCasesText = get_field('tekst_knopki_bolshe_kejsov', 'options');

	$lidForText = get_field('podpis_polya_zayavok_za_period', 'options');

	$lidCostText = get_field('podpis_polya_stoimost_zayavki', 'options');

	$workDayText = get_field('podpis_polya_dnej_raboty', 'options');

	$lidNameText = get_field('podpis_nazvanie_sdelki', 'options');

	$budgetText = get_field('podpis_byudzhet', 'options');



	if ( $siteLang == 'ua'){

		$caseCatId = 20;
		$allCasesText = $allCasesText['ua'];
		$moreCasesText = $moreCasesText['ua'];
		$lidForText = $lidForText['ua'];
		$lidCostText = $lidCostText['ua'];
		$workDayText = $workDayText['ua'];
		$lidNameText = $lidNameText['ua'];
		$budgetText = $budgetText['ua'];


	}elseif ( $siteLang == 'ru'){

		$caseCatId = 10;
		$allCasesText = $allCasesText['ru'];
		$moreCasesText = $moreCasesText['ru'];
		$lidForText = $lidForText['ru'];
		$lidCostText = $lidCostText['ru'];
		$workDayText = $workDayText['ru'];
		$lidNameText = $lidNameText['ru'];
		$budgetText = $budgetText['ru'];

	}*/

?>

	<!-- Главный экран --->

	<section class="main-thx-screen">
		<div class="container">
			<div class="row">
				<div class="content col-12">
					<div class="animation-pic-wrapper">
						<?php include ('template-parts/thx-animation.php')?>
					</div>
					<div class="text-content">
						<?php the_content();?>
                        <?php
                            $btn_link = get_field('tekst_knopki_perehoda_na_sajt');

                            if ( $btn_link ):
                        ?>
						<a href="<?php echo get_field('ssylka_straniczu_perehoda');?>" class="button">
							<?php echo get_field('tekst_knopki_perehoda_na_sajt');?>
						</a>
                                <?php endif;?>
					</div>

				</div>
			</div>
		</div>
	</section>

	<!-- Другие услуги --->

<?php
	$moreServices = get_field('blok_drugie_uslugi');

	if ( !empty($moreServices )):

		$block_title = $moreServices['zagolovok_bloka'];
		$services = $moreServices['uslugi'];
		?>
        <?php if(!empty($block_title )):?>
		<section class="more-services">
			<div class="container">
				<div class="row">
					<h2 class="block-title col-12"><?php echo $block_title;?></h2>
				</div>
				<div class="row">
					<?php foreach ( $services as $item ):?>
						<a href="<?php echo $item['ssylka_na_straniczu'];?>" class="item col-lg-3 col-sm-6 col-12">
							<div class="inner">
								<div class="pic-wrapper">
									<img src="<?php echo $item['kartinka_uslugi'];?>" alt="">
								</div>
								<p><?php echo $item['nazvanie_uslugi'];?></p>
							</div>
						</a>
					<?php endforeach;?>
				</div>
			</div>
		</section>
        <?php endif;?>
	<?php endif;?>

<?php
	get_footer();
