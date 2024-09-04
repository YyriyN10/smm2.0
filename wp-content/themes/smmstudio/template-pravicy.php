<?php
	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Шаблон страницы "Политика конфиденциальности"
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

	}

?>

	<!-- Контент политики --->

	<section class="privacy-page-wrapper">
		<div class="container">
			<div class="row">
				<div class="content col-12">
					<h1><?php the_title();?></h1>
					<?php the_content();?>
				</div>
			</div>
		</div>
	</section>




<?php
	get_footer();
