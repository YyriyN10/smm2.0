<?php

	//Ajax Target Cases Navigation

	add_action('wp_ajax_change_cases_category', 'change_cases_category_callback');
	add_action('wp_ajax_nopriv_change_cases_category', 'change_cases_category_callback');
	function change_cases_category_callback() {

		//Вывод категорий
		$catId = $_POST['catId'];
		$subCatId = $_POST['subCatId'];
		$allCat = $_POST['allCat'];
		$pageNumber = $_POST['pageNumber'];
		$currentLang = $_POST['currentLang'];

		$lidForText = get_field('podpis_polya_zayavok_za_period', 'options');
		$salesForText = get_field('podpis_polya_prodazh_za_period', 'options');
		$lidCostText = get_field('podpis_polya_stoimost_zayavki', 'options');
		$workDayText = get_field('podpis_polya_dnej_raboty', 'options');
		$textMoreCases = get_field('podpis_podrobnee_pri_navedenii_na_kejs', 'options');
		$saleCostText = get_field('podpis_polya_stoimost_prodazhi', 'options');


		$lidForText = $lidForText[$currentLang];
		$salesForText = $salesForText[$currentLang];
		$lidCostText = $lidCostText[$currentLang];
		$workDayText = $workDayText[$currentLang];
		$textMoreCases = $textMoreCases[$currentLang];
		$saleCostText = $saleCostText[$currentLang];

		if ( $allCat == 1 ){

			$argsCases = array(
				'tax_query' => array(
					array(
						'taxonomy' => 'cases-cat-tax',
						'field' => 'id',
						'lang' => $currentLang,
						'suppress_filters' => false,
						'terms' => $catId

					)
				),
				'post_type' => 'cases',
				'orderby' 	 => 'date',
				'post_status' => 'publish',
				'suppress_filters' => false,
				'post__not_in' => array(3636, 3555, 3828, 3828, 3873, 3870),
				'lang' => $currentLang,
				'posts_per_page' => 6
			);

			$ourTargetCases = new WP_Query( $argsCases );


			if ( $ourTargetCases->have_posts() ) :

				while ( $ourTargetCases->have_posts() ) : $ourTargetCases->the_post();

					?>
					<a href="<?php the_permalink();?>" class="case-item col-lg-4 col-sm-6 col-12">
						<div class="inner">
							<div class="pic-wrapper">
								<img src="<?php the_post_thumbnail_url();?>" alt="">
								<p class="more">
									<?php echo $textMoreCases;?>
									<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M4.79999 12.4478L9.79999 8.44778L4.79999 4.44778L5.79999 2.84778L12.8 8.44778L5.79999 14.0478L4.79999 12.4478Z" fill="white"/>
									</svg>
								</p>
							</div>
							<?php
								$caseNumbers = get_field('czifry_kejsa');
							?>
							<div class="info">
								<h3><?php the_title();?></h3>
								<p class="work-type"><?php echo get_field('sfera_deyatelnosti_-_kratko');?></p>
								<div class="numbers-wrapper">
									<div class="number">
										<p><?php echo $caseNumbers['kol-vo_zayavok_za_periud'];?></p>
										<?php if ( $caseNumbers['tip_stoimosti']['value'] == 'application' ):?>
                                                    <h4><?php echo $lidForText;?></h4>
                                                <?php elseif ( $caseNumbers['tip_stoimosti']['value'] == 'sale' ):?>
                                                    <h4><?php echo $salesForText;?></h4>
                                                <?php endif;?>
									</div>
									<div class="number">
										<?php if ( $caseNumbers['tip_stoimosti']['value'] == 'application' ):?>
                                                 <p><?php echo $caseNumbers['srednyaya_stoimost_zayavki'];?></p>
                                                 <h4><?php echo $lidCostText;?></h4>
                                               <?php elseif ( $caseNumbers['tip_stoimosti']['value'] == 'sale' ):?>
                                                 <p><?php echo $caseNumbers['srednyaya_stoimost_prodazhi'];?></p>
                                                 <h4><?php echo $saleCostText;?></h4>
                                               <?php endif;?>
									</div>
									<div class="number">
										<p><?php echo $caseNumbers['kol-vo_dnej_raboty'];?></p>
										<h4><?php echo $workDayText;?></h4>
									</div>
								</div>
							</div>
						</div>
					</a>
				<?php endwhile;?>

			<?php endif; ?>
			<?php wp_reset_postdata();

		}else{

			$argsCases = array(
				'tax_query' => array(
					array(
						'taxonomy' => 'cases-cat-tax',
						'field' => 'id',
						'suppress_filters' => false,
						'lang' => $currentLang,
						'terms' => $subCatId,
					)
				),
				'post_type' => 'cases',
				'orderby' 	 => 'date',
				'post_status' => 'publish',
				'suppress_filters' => false,
				'post__not_in' => array(3636, 3555, 3828, 3828, 3873, 3870),
				'lang' => $currentLang,
				'posts_per_page' => 6
			);

			$ourTargetCases = new WP_Query( $argsCases );

			if ( $ourTargetCases->have_posts() ) :

				while ( $ourTargetCases->have_posts() ) : $ourTargetCases->the_post();

					?>

					<a href="<?php the_permalink();?>" class="case-item col-lg-4 col-sm-6 col-12">
						<div class="inner">
							<div class="pic-wrapper">
								<img src="<?php the_post_thumbnail_url();?>" alt="">
								<p class="more">
									<?php echo $textMoreCases;?>
									<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M4.79999 12.4478L9.79999 8.44778L4.79999 4.44778L5.79999 2.84778L12.8 8.44778L5.79999 14.0478L4.79999 12.4478Z" fill="white"/>
									</svg>
								</p>
							</div>
							<?php
								$caseNumbers = get_field('czifry_kejsa');
							?>
							<div class="info">
								<h3><?php the_title();?></h3>
								<p class="work-type"><?php echo get_field('sfera_deyatelnosti_-_kratko');?></p>
								<div class="numbers-wrapper">
									<div class="number">
										<p><?php echo $caseNumbers['kol-vo_zayavok_za_periud'];?></p>
										<?php if ( $caseNumbers['tip_stoimosti']['value'] == 'application' ):?>
                                                    <h4><?php echo $lidForText;?></h4>
                                                <?php elseif ( $caseNumbers['tip_stoimosti']['value'] == 'sale' ):?>
                                                    <h4><?php echo $salesForText;?></h4>
                                                <?php endif;?>
									</div>
									<div class="number">
										<?php if ( $caseNumbers['tip_stoimosti']['value'] == 'application' ):?>
                                                 <p><?php echo $caseNumbers['srednyaya_stoimost_zayavki'];?></p>
                                                 <h4><?php echo $lidCostText;?></h4>
                                               <?php elseif ( $caseNumbers['tip_stoimosti']['value'] == 'sale' ):?>
                                                 <p><?php echo $caseNumbers['srednyaya_stoimost_prodazhi'];?></p>
                                                 <h4><?php echo $saleCostText;?></h4>
                                               <?php endif;?>
									</div>
									<div class="number">
										<p><?php echo $caseNumbers['kol-vo_dnej_raboty'];?></p>
										<h4><?php echo $workDayText;?></h4>
									</div>
								</div>
							</div>
						</div>
					</a>
				<?php endwhile;?>

			<?php endif; ?>
			<?php wp_reset_postdata();
		}

		wp_die();
	}

	//Ajax Dev Cases Navigation

	add_action('wp_ajax_change_dev_cases_category', 'change_dev_cases_category_callback');
	add_action('wp_ajax_nopriv_change_dev_cases_category', 'change_dev_cases_category_callback');
	function change_dev_cases_category_callback() {

		//Вывод категорий
		$catId = $_POST['catId'];
		$subCatId = $_POST['subCatId'];
		$allCat = $_POST['allCat'];
		$pageNumber = $_POST['pageNumber'];
		$currentLang = $_POST['currentLang'];

		$lidForText = get_field('podpis_polya_zayavok_za_period', 'options');
		$lidCostText = get_field('podpis_polya_stoimost_zayavki', 'options');
		$workDayText = get_field('podpis_polya_dnej_raboty', 'options');
		$textMoreCases = get_field('podpis_podrobnee_pri_navedenii_na_kejs', 'options');


		$lidForText = $lidForText[$currentLang];
		$lidCostText = $lidCostText[$currentLang];
		$workDayText = $workDayText[$currentLang];
		$textMoreCases = $textMoreCases[$currentLang];


		/*if ( $currentLang == 'ua'){

			$lidForText = $lidForText['ua'];
			$lidCostText = $lidCostText['ua'];
			$workDayText = $workDayText['ua'];
			$textMoreCases = $textMoreCases['ua'];

		}elseif ( $currentLang == 'ru'){

			$lidForText = $lidForText['ru'];
			$lidCostText = $lidCostText['ru'];
			$workDayText = $workDayText['ru'];
			$textMoreCases = $textMoreCases['ru'];

		}*/

		?>
		<div class="portfolio-slider-wrapper col-12">
		<div class="portfolio-slider" id="portfolio-slider">
		<?php

		$argsCases = array(
			'tax_query' => array(
				array(
					'taxonomy' => 'cases-cat-tax',
					'field' => 'id',
					'suppress_filters' => false,
					'lang' => $currentLang,
					'terms' => $subCatId,
				)
			),
			'post_type' => 'cases',
			'orderby' 	 => 'date',
			'post_status' => 'publish',
			'suppress_filters' => false,
			'post__not_in' => array(3636, 3555, 3828, 3828, 3873, 3870),
			'lang' => $currentLang,
			'posts_per_page' => 5
		);

		$ourDevCases = new WP_Query( $argsCases );

		if ( $ourDevCases->have_posts() ) :

			while ( $ourDevCases->have_posts() ) : $ourDevCases->the_post();

				?>

				<a href="<?php the_permalink();?>" class="case-item col-12">
					<h3><?php the_title();?></h3>
					<img src="<?php the_post_thumbnail_url();?>" alt="">
				</a>
			<?php endwhile;?>

		<?php endif; ?>
			<?php wp_reset_postdata(); ?>
		</div>
			<div class="desk-prev">
				<!--<img src="" alt="">-->
			</div>
		<?php
		wp_die();
	}

	//Ajax All Cases Page Btn

	add_action('wp_ajax_all_cases_page', 'all_cases_page_callback');
	add_action('wp_ajax_nopriv_all_cases_page', 'all_cases_page_callback');
	function all_cases_page_callback() {

		//Вывод категорий
		$catId = $_POST['catId'];
		$allCat = $_POST['allCat'];
		$postPerPage = $_POST['postIn'];
		$pageNumber = $_POST['pageNumber'];
		$offset = $_POST['offset'];
		$currentLang = $_POST['currentLang'];

		$lidForText = get_field('podpis_polya_zayavok_za_period', 'options');
		$lidCostText = get_field('podpis_polya_stoimost_zayavki', 'options');
		$workDayText = get_field('podpis_polya_dnej_raboty', 'options');
		$textMoreCases = get_field('podpis_podrobnee_pri_navedenii_na_kejs', 'options');

		$lidForText = $lidForText[$currentLang];
		$lidCostText = $lidCostText[$currentLang];
		$workDayText = $workDayText[$currentLang];
		$textMoreCases = $textMoreCases[$currentLang];



		/*if ( $currentLang == 'ua'){

			$lidForText = $lidForText['ua'];
			$lidCostText = $lidCostText['ua'];
			$workDayText = $workDayText['ua'];
			$textMoreCases = $textMoreCases['ua'];

		}elseif ( $currentLang == 'ru'){

			$lidForText = $lidForText['ru'];
			$lidCostText = $lidCostText['ru'];
			$workDayText = $workDayText['ru'];
			$textMoreCases = $textMoreCases['ru'];

		}*/

		if( $allCat == 1 ){

			$argsCases = array(
				'posts_per_page' => $postPerPage,
				'orderby' 	     => 'date',
				'post_status'    => 'publish',
				'offset'         => $offset,
				'suppress_filters' => false,
				'post__not_in' => array(3636, 3555, 3828, 3828, 3873, 3870),
				'lang' => $currentLang,
				'post_type'      => 'cases'
			);

			$ourTargetCases = new WP_Query( $argsCases );

			if ( $ourTargetCases->have_posts() ) :

				while ( $ourTargetCases->have_posts() ) : $ourTargetCases->the_post();

					?>
                        <a href="<?php the_permalink();?>" class="case-item">
                            <img class="case-pic" src="<?php the_post_thumbnail_url();?>" alt="">

                            <div class="hover-preview-content">
                                <div class="inner-content">
                                    <div class="case-logo-wrapper">
                                        <img src="<?php echo get_field('logotip_kejsa');?>" alt="">
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
				                    global $post; // Получаем данные о текущем посте

				                    // Получение информации о категории текущего поста
				                    $category = get_the_terms($post->ID, 'cases-cat-tax');
				                    $current_cat_id = $category[0]->term_id;
				                    $cat_posts_count = $category[0]->count;

				                    $catLeng = count($category);

				                    for ( $i = 0 ; $i < $catLeng; $i = $i + 1):?>

		                                <?php if ( $category[$i]->parent == '0'):?>
		                               
		                                <p>#<?php echo $category[$i]->name;?></p>
	                                <?php endif;?>
			                    <?php endfor;?>

                            </div>
                            <div class="preview-content">
                                <h3><?php the_title();?></h3>
                                <p><?php echo get_field('sfera_deyatelnosti_-_kratko');?></p>
                            </div>
                        </a>
					<?php endwhile;?>

				<?php endif;
			wp_reset_postdata();

        }else{
            $argsCases = array(
                'tax_query' => array(
                array(
                    'taxonomy' => 'cases-cat-tax',
                    'field' => 'id',
                    'suppress_filters' => false,
					'lang' => $currentLang,
                    'terms' => $catId ,

                )
            ),
				'posts_per_page' => $postPerPage,
				'orderby' 	     => 'date',
				'post_status'    => 'publish',
				'offset'         => $offset,
				'suppress_filters' => false,
				'post__not_in' => array(3636, 3555, 3828, 3828, 3873, 3870),
				'lang' => $currentLang,
				'post_type'      => 'cases'
			);

			$ourTargetCases = new WP_Query( $argsCases );

			if ( $ourTargetCases->have_posts() ) :

				while ( $ourTargetCases->have_posts() ) : $ourTargetCases->the_post();

					?>
                        <a href="<?php the_permalink();?>" class="case-item">
                            <img class="case-pic" src="<?php the_post_thumbnail_url();?>" alt="">

                            <div class="hover-preview-content">
                                <div class="inner-content">
                                    <div class="case-logo-wrapper">
                                        <img src="<?php echo get_field('logotip_kejsa');?>" alt="">
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
				                    global $post; // Получаем данные о текущем посте

				                    // Получение информации о категории текущего поста
				                    $category = get_the_terms($post->ID, 'cases-cat-tax');
				                    $current_cat_id = $category[0]->term_id;
				                    $cat_posts_count = $category[0]->count;

				                    $catLeng = count($category);

				                    for ( $i = 0 ; $i < $catLeng; $i = $i + 1):?>

		                                <?php if ( $category[$i]->parent == '0'):?>
		                               
		                                <p>#<?php echo $category[$i]->name;?></p>
	                                <?php endif;?>
			                    <?php endfor;?>

                            </div>
                            <div class="preview-content">
                                <h3><?php the_title();?></h3>
                                <p><?php echo get_field('sfera_deyatelnosti_-_kratko');?></p>
                            </div>
                        </a>
					<?php endwhile;?>

				<?php endif;
			wp_reset_postdata();
        }

		wp_die();
	}

	//Ajax All Cases Category Change

	add_action('wp_ajax_change_all_cases_category', 'change_all_cases_category_callback');
	add_action('wp_ajax_nopriv_change_all_cases_category', 'change_all_cases_category_callback');
	function change_all_cases_category_callback() {

		//Вывод категорий
		$catId = $_POST['catId'];
		$allCat = $_POST['allCat'];
		$postPerPage = $_POST['postIn'];
		$pageNumber = $_POST['pageNumber'];
		$currentLang = $_POST['currentLang'];

		$lidForText = get_field('podpis_polya_zayavok_za_period', 'options');
		$lidCostText = get_field('podpis_polya_stoimost_zayavki', 'options');
		$workDayText = get_field('podpis_polya_dnej_raboty', 'options');
		$textMoreCases = get_field('podpis_podrobnee_pri_navedenii_na_kejs', 'options');

		$lidForText = $lidForText[$currentLang];
		$lidCostText = $lidCostText[$currentLang];
		$workDayText = $workDayText[$currentLang];
		$textMoreCases = $textMoreCases[$currentLang];


		/*if ( $currentLang == 'ua'){

			$lidForText = $lidForText['ua'];
			$lidCostText = $lidCostText['ua'];
			$workDayText = $workDayText['ua'];
			$textMoreCases = $textMoreCases['ua'];

		}elseif ( $currentLang == 'ru'){

			$lidForText = $lidForText['ru'];
			$lidCostText = $lidCostText['ru'];
			$workDayText = $workDayText['ru'];
			$textMoreCases = $textMoreCases['ru'];

		}*/

		if( $allCat == 1 ){

			$argsCases = array(
				'posts_per_page' => $postPerPage,
				'orderby' 	     => 'date',
				'post_status'    => 'publish',
				'suppress_filters' => false,
				'post__not_in' => array(3636, 3555, 3828, 3828, 3873, 3870),
				'lang' => $currentLang,
				'post_type'      => 'cases'
			);

			$ourTargetCases = new WP_Query( $argsCases );

			if ( $ourTargetCases->have_posts() ) :

				while ( $ourTargetCases->have_posts() ) : $ourTargetCases->the_post();

					?>
                        <a href="<?php the_permalink();?>" class="case-item">
                            <img class="case-pic" src="<?php the_post_thumbnail_url();?>" alt="">

                            <div class="hover-preview-content">
                                <div class="inner-content">
                                    <div class="case-logo-wrapper">
                                        <img src="<?php echo get_field('logotip_kejsa');?>" alt="">
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
				                    global $post; // Получаем данные о текущем посте

				                    // Получение информации о категории текущего поста
				                    $category = get_the_terms($post->ID, 'cases-cat-tax');
				                    $current_cat_id = $category[0]->term_id;
				                    $cat_posts_count = $category[0]->count;

				                    $catLeng = count($category);

				                    for ( $i = 0 ; $i < $catLeng; $i = $i + 1):?>

		                                <?php if ( $category[$i]->parent == '0'):?>
		                               
		                                <p>#<?php echo $category[$i]->name;?></p>
	                                <?php endif;?>
			                    <?php endfor;?>

                            </div>
                            <div class="preview-content">
                                <h3><?php the_title();?></h3>
                                <p><?php echo get_field('sfera_deyatelnosti_-_kratko');?></p>
                            </div>
                        </a>
					<?php endwhile;?>

				<?php endif;
			wp_reset_postdata();

        }else{
            $argsCases = array(
                'tax_query' => array(
                array(
                    'taxonomy' => 'cases-cat-tax',
                    'field' => 'id',
                    'suppress_filters' => false,
					'lang' => $currentLang,
                    'terms' => $catId ,

                )
            ),
				'posts_per_page' => $postPerPage,
				'orderby' 	     => 'date',
				'post_status'    => 'publish',
				'suppress_filters' => false,
				'post__not_in' => array(3636, 3555, 3828, 3828, 3873, 3870),
				'lang' => $currentLang,
				'post_type'      => 'cases'
			);

			$ourTargetCases = new WP_Query( $argsCases );

			if ( $ourTargetCases->have_posts() ) :

				while ( $ourTargetCases->have_posts() ) : $ourTargetCases->the_post();

					?>
                        <a href="<?php the_permalink();?>" class="case-item">
                            <img class="case-pic" src="<?php the_post_thumbnail_url();?>" alt="">

                            <div class="hover-preview-content">
                                <div class="inner-content">
                                    <div class="case-logo-wrapper">
                                        <img src="<?php echo get_field('logotip_kejsa');?>" alt="">
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
				                    global $post; // Получаем данные о текущем посте

				                    // Получение информации о категории текущего поста
				                    $category = get_the_terms($post->ID, 'cases-cat-tax');
				                    $current_cat_id = $category[0]->term_id;
				                    $cat_posts_count = $category[0]->count;

				                    $catLeng = count($category);

				                    for ( $i = 0 ; $i < $catLeng; $i = $i + 1):?>

		                                <?php if ( $category[$i]->parent == '0'):?>
		                               
		                                <p>#<?php echo $category[$i]->name;?></p>
	                                <?php endif;?>
			                    <?php endfor;?>

                            </div>
                            <div class="preview-content">
                                <h3><?php the_title();?></h3>
                                <p><?php echo get_field('sfera_deyatelnosti_-_kratko');?></p>
                            </div>
                        </a>
					<?php endwhile;?>

				<?php endif;
			wp_reset_postdata();
        }

		wp_die();
	}

	//Ajax All Cases Category Adaptive

	add_action('wp_ajax_adaptive_all_cases', 'adaptive_all_cases_callback');
	add_action('wp_ajax_nopriv_adaptive_all_cases', 'adaptive_all_cases_callback');
	function adaptive_all_cases_callback() {

		$postPerPage = $_POST['postIn'];
		$currentLang = $_POST['currentLang'];

		$lidForText = get_field('podpis_polya_zayavok_za_period', 'options');
		$lidCostText = get_field('podpis_polya_stoimost_zayavki', 'options');
		$workDayText = get_field('podpis_polya_dnej_raboty', 'options');
		$textMoreCases = get_field('podpis_podrobnee_pri_navedenii_na_kejs', 'options');


		$lidForText = $lidForText[$currentLang];
		$lidCostText = $lidCostText[$currentLang];
		$workDayText = $workDayText[$currentLang];
		$textMoreCases = $textMoreCases[$currentLang];

		/*if ( $currentLang == 'ua'){

			$lidForText = $lidForText['ua'];
			$lidCostText = $lidCostText['ua'];
			$workDayText = $workDayText['ua'];
			$textMoreCases = $textMoreCases['ua'];

		}elseif ( $currentLang == 'ru'){

			$lidForText = $lidForText['ru'];
			$lidCostText = $lidCostText['ru'];
			$workDayText = $workDayText['ru'];
			$textMoreCases = $textMoreCases['ru'];

		}*/

		$argsCases = array(
				'posts_per_page' => $postPerPage,
				'orderby' 	     => 'date',
				'post_status'    => 'publish',
				'suppress_filters' => false,
				'post__not_in' => array(3636, 3555, 3828, 3828, 3873, 3870),
				'lang' => $currentLang,
				'post_type'      => 'cases'
			);

			$ourTargetCases = new WP_Query( $argsCases );

			if ( $ourTargetCases->have_posts() ) :

				while ( $ourTargetCases->have_posts() ) : $ourTargetCases->the_post();

					?>
                        <a href="<?php the_permalink();?>" class="case-item">
                            <img class="case-pic" src="<?php the_post_thumbnail_url();?>" alt="">

                            <div class="hover-preview-content">
                                <div class="inner-content">
                                    <div class="case-logo-wrapper">
                                        <img src="<?php echo get_field('logotip_kejsa');?>" alt="">
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
				                    global $post; // Получаем данные о текущем посте

				                    // Получение информации о категории текущего поста
				                    $category = get_the_terms($post->ID, 'cases-cat-tax');
				                    $current_cat_id = $category[0]->term_id;
				                    $cat_posts_count = $category[0]->count;

				                    $catLeng = count($category);

				                    for ( $i = 0 ; $i < $catLeng; $i = $i + 1):?>

		                                <?php if ( $category[$i]->parent == '0'):?>
		                               
		                                <p>#<?php echo $category[$i]->name;?></p>
	                                <?php endif;?>
			                    <?php endfor;?>

                            </div>
                            <div class="preview-content">
                                <h3><?php the_title();?></h3>
                                <p><?php echo get_field('sfera_deyatelnosti_-_kratko');?></p>
                            </div>
                        </a>
					<?php endwhile;?>

				<?php endif;
			wp_reset_postdata();

		wp_die();
	}

	//Ajax Target More Cases

	add_action('wp_ajax_more_cases_target', 'more_cases_target_callback');
	add_action('wp_ajax_nopriv_more_cases_target', 'more_cases_target_callback');
	function more_cases_target_callback() {

        $currentLang = $_POST['currentLang'];
        $postIn =  $_POST['postIn'];
        $allCases = $_POST['allCat'];
        $pageNumber = $_POST['offsetPosts'];
        $catId = $_POST['mainCat'];
		$subCatId = $_POST['currentCat'];
		$offset = $postIn * $pageNumber;

		$lidForText = get_field('podpis_polya_zayavok_za_period', 'options');
		$salesForText = get_field('podpis_polya_prodazh_za_period', 'options');
		$lidCostText = get_field('podpis_polya_stoimost_zayavki', 'options');
		$workDayText = get_field('podpis_polya_dnej_raboty', 'options');
		$textMoreCases = get_field('podpis_podrobnee_pri_navedenii_na_kejs', 'options');
		$saleCostText = get_field('podpis_polya_stoimost_prodazhi', 'options');

		$lidForText = $lidForText[$currentLang];
		$salesForText = $salesForText[$currentLang];
		$lidCostText = $lidCostText[$currentLang];
		$workDayText = $workDayText[$currentLang];
		$textMoreCases = $textMoreCases[$currentLang];
		$saleCostText = $saleCostText[$currentLang];


		if ( $allCases == 1 ){

			$argsCases = array(
				'tax_query' => array(
					array(
						'taxonomy' => 'cases-cat-tax',
						'field' => 'id',
						'lang' => $currentLang,
						'suppress_filters' => false,
						'terms' => $catId

					)
				),
				'post_type' => 'cases',
				'orderby' 	 => 'date',
				'post_status' => 'publish',
				'offset' => $offset,
				'suppress_filters' => false,
				'post__not_in' => array(3636, 3555, 3828, 3828, 3873, 3870),
				'lang' => $currentLang,
				'posts_per_page' => $postIn
			);

			$ourTargetCases = new WP_Query( $argsCases );


			if ( $ourTargetCases->have_posts() ) :

				while ( $ourTargetCases->have_posts() ) : $ourTargetCases->the_post();

					?>
					<a href="<?php the_permalink();?>" class="case-item col-lg-4 col-sm-6 col-12">
						<div class="inner">
							<div class="pic-wrapper">
								<img src="<?php the_post_thumbnail_url();?>" alt="">
								<p class="more">
									<?php echo $textMoreCases;?>
									<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M4.79999 12.4478L9.79999 8.44778L4.79999 4.44778L5.79999 2.84778L12.8 8.44778L5.79999 14.0478L4.79999 12.4478Z" fill="white"/>
									</svg>
								</p>
							</div>
							<?php
								$caseNumbers = get_field('czifry_kejsa');
							?>
							<div class="info">
								<h3><?php the_title();?></h3>
								<p class="work-type"><?php echo get_field('sfera_deyatelnosti_-_kratko');?></p>
								<div class="numbers-wrapper">
									<div class="number">
										<p><?php echo $caseNumbers['kol-vo_zayavok_za_periud'];?></p>
										<?php if ( $caseNumbers['tip_stoimosti']['value'] == 'application' ):?>
                                                    <h4><?php echo $lidForText;?></h4>
                                                <?php elseif ( $caseNumbers['tip_stoimosti']['value'] == 'sale' ):?>
                                                    <h4><?php echo $salesForText;?></h4>
                                                <?php endif;?>
									</div>
									<div class="number">
										<?php if ( $caseNumbers['tip_stoimosti']['value'] == 'application' ):?>
                                                 <p><?php echo $caseNumbers['srednyaya_stoimost_zayavki'];?></p>
                                                 <h4><?php echo $lidCostText;?></h4>
                                               <?php elseif ( $caseNumbers['tip_stoimosti']['value'] == 'sale' ):?>
                                                 <p><?php echo $caseNumbers['srednyaya_stoimost_prodazhi'];?></p>
                                                 <h4><?php echo $saleCostText;?></h4>
                                               <?php endif;?>
									</div>
									<div class="number">
										<p><?php echo $caseNumbers['kol-vo_dnej_raboty'];?></p>
										<h4><?php echo $workDayText;?></h4>
									</div>
								</div>
							</div>
						</div>
					</a>
				<?php endwhile;?>

			<?php endif; ?>
			<?php wp_reset_postdata();

		}else{

			$argsCases = array(
				'tax_query' => array(
					array(
						'taxonomy' => 'cases-cat-tax',
						'field' => 'id',
						'suppress_filters' => false,
						'lang' => $currentLang,
						'terms' => $subCatId,
					)
				),
				'post_type' => 'cases',
				'offset' => $offset,
				'orderby' 	 => 'date',
				'post_status' => 'publish',
				'suppress_filters' => false,
				'post__not_in' => array(3636, 3555, 3828, 3828, 3873, 3870),
				'lang' => $currentLang,
				'posts_per_page' => $postIn
			);

			$ourTargetCases = new WP_Query( $argsCases );

			if ( $ourTargetCases->have_posts() ) :

				while ( $ourTargetCases->have_posts() ) : $ourTargetCases->the_post();

					?>

					<a href="<?php the_permalink();?>" class="case-item col-lg-4 col-sm-6 col-12">
						<div class="inner">
							<div class="pic-wrapper">
								<img src="<?php the_post_thumbnail_url();?>" alt="">
								<p class="more">
									<?php echo $textMoreCases;?>
									<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M4.79999 12.4478L9.79999 8.44778L4.79999 4.44778L5.79999 2.84778L12.8 8.44778L5.79999 14.0478L4.79999 12.4478Z" fill="white"/>
									</svg>
								</p>
							</div>
							<?php
								$caseNumbers = get_field('czifry_kejsa');
							?>
							<div class="info">
								<h3><?php the_title();?></h3>
								<p class="work-type"><?php echo get_field('sfera_deyatelnosti_-_kratko');?></p>
								<div class="numbers-wrapper">
									<div class="number">
										<p><?php echo $caseNumbers['kol-vo_zayavok_za_periud'];?></p>
										<?php if ( $caseNumbers['tip_stoimosti']['value'] == 'application' ):?>
                                                    <h4><?php echo $lidForText;?></h4>
                                                <?php elseif ( $caseNumbers['tip_stoimosti']['value'] == 'sale' ):?>
                                                    <h4><?php echo $salesForText;?></h4>
                                                <?php endif;?>
									</div>
									<div class="number">
										<?php if ( $caseNumbers['tip_stoimosti']['value'] == 'application' ):?>
                                                 <p><?php echo $caseNumbers['srednyaya_stoimost_zayavki'];?></p>
                                                 <h4><?php echo $lidCostText;?></h4>
                                               <?php elseif ( $caseNumbers['tip_stoimosti']['value'] == 'sale' ):?>
                                                 <p><?php echo $caseNumbers['srednyaya_stoimost_prodazhi'];?></p>
                                                 <h4><?php echo $saleCostText;?></h4>
                                               <?php endif;?>
									</div>
									<div class="number">
										<p><?php echo $caseNumbers['kol-vo_dnej_raboty'];?></p>
										<h4><?php echo $workDayText;?></h4>
									</div>
								</div>
							</div>
						</div>
					</a>
				<?php endwhile;?>

			<?php endif; ?>
			<?php wp_reset_postdata();
		}

		wp_die();
	}

	//Ajax Dev More Cases

	add_action('wp_ajax_more_cases_dev', 'more_cases_dev_callback');
	add_action('wp_ajax_nopriv_more_cases_dev', 'more_cases_dev_callback');
	function more_cases_dev_callback() {

    $currentLang = $_POST['currentLang'];
    $postIn =  $_POST['postIn'];
    $pageNumber = $_POST['offsetPosts'];
		$subCatId = $_POST['currentCat'];
		$offset = $postIn * $pageNumber;

		$argsCases = array(
				'tax_query' => array(
					array(
						'taxonomy' => 'cases-cat-tax',
						'field' => 'id',
						'suppress_filters' => false,
						'lang' => $currentLang,
						'terms' => $subCatId,
					)
				),
				'post_type' => 'cases',
				'offset' => $offset,
				'orderby' 	 => 'date',
				'suppress_filters' => false,
				'lang' => $currentLang,
				'post__not_in' => array(3636, 3555, 3828, 3828, 3873, 3870),
				'post_status' => 'publish',
				'posts_per_page' => $postIn
			);

			$ourDevCases = new WP_Query( $argsCases );

			if ( $ourDevCases->have_posts() ) :

				while ( $ourDevCases->have_posts() ) : $ourDevCases->the_post();

					?>

					<a href="<?php the_permalink();?>" class="case-item col-lg-4 col-sm-6 col-12">
            <span class="prev-pic-wrapper">
              <img src="<?php the_post_thumbnail_url();?>" alt="">
            </span>
            <span class="case-info">
              <h3><?php the_title();?></h3>
              <p class="description"><?php echo get_field('chem_zanimaetsya_kompaeiya');?></p>
            </span>
          </a>
				<?php endwhile;?>

			<?php endif; ?>
			<?php wp_reset_postdata();

		wp_die();
	}

	//Ajax Smm More Cases

	add_action('wp_ajax_more_cases_smm', 'more_cases_smm_callback');
	add_action('wp_ajax_nopriv_more_cases_smm', 'more_cases_smm_callback');
	function more_cases_smm_callback() {

    $currentLang = $_POST['currentLang'];
    $postIn =  $_POST['postIn'];
    $pageNumber = $_POST['offsetPosts'];
		$subCatId = $_POST['currentCat'];
		$offset = $postIn * $pageNumber;

		$argsCases = array(
				'tax_query' => array(
					array(
						'taxonomy' => 'cases-cat-tax',
						'field' => 'id',
						'suppress_filters' => false,
						'lang' => $currentLang,
						'terms' => $subCatId,
					)
				),
				'post_type' => 'cases',
				'offset' => $offset,
				'orderby' 	 => 'date',
				'post_status' => 'publish',
				'suppress_filters' => false,
				'post__not_in' => array(3636, 3555, 3828, 3828, 3873, 3870),
				'lang' => $currentLang,
				'posts_per_page' => $postIn
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



					<!-- <a href="<?php the_permalink();?>" class="case-item col-lg-4 col-sm-6 col-12">
            <span class="prev-pic-wrapper">
              <img src="<?php the_post_thumbnail_url();?>" alt="">
            </span>
            <span class="case-info">
              <h3><?php the_title();?></h3>
              <p class="description"><?php echo get_field('chem_zanimaetsya_kompaeiya');?></p>
            </span>
          </a> -->
				<?php endwhile;?>

			<?php endif; ?>
			<?php wp_reset_postdata();

		wp_die();
	}

	/**
   * Home cases
   */

	add_action('wp_ajax_home_cases_change', 'home_cases_change_callback');
	add_action('wp_ajax_nopriv_home_cases_change', 'home_cases_change_callback');

	function home_cases_change_callback(){

	  $catId = $_POST['currentCaseCat'];

	  $casesInList = array();

	  if ( $catId == '176' ){
	    $casesInList = array(4117, 4013, 4009, 4321);
	  }

	  if ( $catId == '20' ){
	     $casesInList = array(865, 2617, 842, 2171);
	  }

	  if ( $catId == '27' ){
	    $casesInList = array(2047);
	  }

	  $i = 0;

			$argsHomeCases = array(
				'tax_query' => array(
					array(
						'taxonomy' => 'cases-cat-tax',
						'field' => 'id',
						'suppress_filters' => false,
						'terms' => $catId,
					)
				),
				'post_type' => 'cases',
				'orderby' 	 => 'date',
				'post_status' => 'publish',
				'suppress_filters' => false,
				'post__in' => $casesInList,
				'posts_per_page' => 4
			);

			$homeCases = new WP_Query( $argsHomeCases );

			if ( $homeCases->have_posts() ) :

			while ( $homeCases->have_posts() ) : $homeCases->the_post();
			$i++;

		?>
        <a href="<?php the_permalink();?>" target="_blank" class="home-case-item">
          <span class="inner">
            <span class="case-logo">
              <img src="<?php echo get_field('logotip_kejsa');?>" alt="">

            </span>
            <span class="info">
              <span class="info-container">
                <span class="scope"><?php echo get_field('sfera_deyatelnosti_-_kratko');?></span>
                <?php
                   $caseNumbers = get_field('czifry_kejsa');

                   if ( $caseNumbers ):?>
                <span class="numbers-wrapper">
                  <span class="number-item">
                     <span class="number"><?php echo $caseNumbers['kol-vo_zayavok_za_periud'];?></span>
                     <?php if ( $caseNumbers['tip_stoimosti']['value'] == 'application' ):?>
                        <span class="description"><?php echo esc_html( pll__( 'заявок за період' ) ); ?></span>
                     <?php elseif ( $caseNumbers['tip_stoimosti']['value'] == 'sale' ):?>
                        <span class="description"><?php echo esc_html( pll__( 'продаж за період' ) ); ?></span>
                     <?php endif;?>
                  </span>
                  <span class="number-item">
                    <?php if ( $caseNumbers['tip_stoimosti']['value'] == 'application' ):?>
                      <span class="number"><?php echo $caseNumbers['srednyaya_stoimost_zayavki'];?></span>
                      <span class="description"><?php echo esc_html( pll__( 'вартість заявки' ) ); ?></span>
                    <?php elseif ( $caseNumbers['tip_stoimosti']['value'] == 'sale' ):?>
                      <span class="number"><?php echo $caseNumbers['srednyaya_stoimost_prodazhi'];?></span>
                      <span class="description"><?php echo esc_html( pll__( 'вартість продажу' ) ); ?></span>
                    <?php endif;?>
                  </span>
                  <span class="number-item">
                     <span class="number"><?php echo $caseNumbers['kol-vo_dnej_raboty'];?></span>
                     <span class="description"><?php echo esc_html( pll__( 'днів роботи' ) ); ?></span>
                  </span>
                </span>

                <?php endif;?>
              </span>
            </span>
          </span>
          <span class="shape-container">
            <span class="shape"></span>
            <svg class="svg-shape" xmlns="http://www.w3.org/2000/svg">
              <defs>
                <filter id="svg-case-shape-<?php echo $i;?>">
                  <feGaussianBlur in="SourceGraphic" stdDeviation="8" result="blur" />
                  <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="svg-case-shape-<?php echo $i;?>" />
                  <feComposite in="SourceGraphic" in2="svg-case-shape-<?php echo $i;?>" operator="atop"/>
                </filter>
              </defs>
            </svg>
          </span>

        </a>

			<?php endwhile;?>

			<?php endif; ?>
		<?php wp_reset_postdata();

		wp_die();


	}