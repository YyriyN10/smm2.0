<?php


	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action( 'carbon_fields_register_fields', 'smmstudio_main_page_fields' );

	function smmstudio_main_page_fields() {
		Container::make( 'post_meta', 'Головна сторінка' )
		         ->where( function ( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         } )
		         ->add_tab( 'Головний екран', [
			         Field::make_text( 'smmstudio_main_page_main_screen_title'.carbon_lang_prefix(), 'Головний заголовок' ),
			         Field::make_complex('smmstudio_main_page_main_screen_dynamic_text_list'.carbon_lang_prefix(), 'Анімований текст')
								->add_fields(array(
									Field::make_text('text', 'Текст')
								)),
			         Field::make_complex('smmstudio_main_page_main_screen_partners_list'.carbon_lang_prefix(), 'Логотипи партнерів')
			              ->add_fields(array(
				              Field::make_image('partner_logo', 'Логотип партнеру')
				                ->set_type('image')
				                ->set_value_type('url')
			              )),
			         Field::make_image('smmstudio_main_page_main_screen_video'.carbon_lang_prefix(), 'Анімоване відео')
								->set_type('video')
								->set_value_type('url'),
			         Field::make_image('smmstudio_main_page_main_screen_video_poster'.carbon_lang_prefix(), 'Постер відео')
			              ->set_type('image')
			              ->set_value_type('url'),
		         ] )
		         ->add_tab( 'Наші цифри', [
			          Field::make_complex('smmstudio_main_page_our_numbers_list'.carbon_lang_prefix(), 'Перелік цифр')
			               ->add_fields(array(
			                Field::make_text('number', 'Цифра'),
				               Field::make_text('number_more', 'Додаток до цифри'),
				               Field::make_text('description', 'Пояснення цифри'),
			               )),
		         ] )
		         ->add_tab( 'Про нас', [
			          Field::make_complex('smmstudio_main_page_about_us_title_list'.carbon_lang_prefix(), 'Бaгато рядковий заголовок')
			               ->add_fields(array(
			                  Field::make_text('title', 'Рядок заголовку'),
			               )),
			         Field::make_complex('smmstudio_main_page_about_us_assertion_list'.carbon_lang_prefix(), 'Перелік тверджень')
			              ->add_fields(array(
				              Field::make_rich_text('assertion', 'Текст твердження'),
				              Field::make_text('link', 'Посилання')
				                ->set_attribute('type', 'url')
			              )),
		         ] )
		         ->add_tab( 'Наші послуги', [
		         	 Field::make_text('smmstudio_main_page_our_services_title'.carbon_lang_prefix(), 'Заголовок блоку'),
			         Field::make_complex('smmstudio_main_page_our_services_list'.carbon_lang_prefix(), 'Перелік послуг')
			              ->add_fields(array(
			              	Field::make_text('name', 'Назва послуги'),
				              Field::make_text('description', 'Опис послуги'),
				              Field::make_image('image', 'Зображення')
				                  ->set_value('image'),

											Field::make_complex('icons_list', 'Перелік іконок для послуги')
												->set_max(3)
				                ->add_fields(array(
				                	Field::make_image('icon', 'Іконка')
					                  ->set_type('image')
					                  ->set_value_type('url')

				                ))
			              )),
		         ] )
						->add_tab( 'Чому обирають нас', [
							Field::make_text('smmstudio_main_page_why_rob_us_title'.carbon_lang_prefix(), 'Заголовок блоку'),
							Field::make_complex('smmstudio_main_page_why_rob_us_list'.carbon_lang_prefix(), 'Перелік переваг')
							     ->add_fields(array(
								     Field::make_text('name', 'Назва переваги'),
								     Field::make_rich_text('description', 'Опис переваги'),
							     )),
						] )
						->add_tab( 'Наша ефективність', [
							Field::make_text('smmstudio_main_page_our_effectiveness_title'.carbon_lang_prefix(), 'Заголовок блоку'),
							Field::make_text('smmstudio_main_page_our_effectiveness_link'.carbon_lang_prefix(), 'Посилання на сторінку всіх кейсів')
								->set_attribute('type', 'url')
						] )
						->add_tab( 'F.A.Q.', [
							Field::make_text('smmstudio_main_page_faq_title'.carbon_lang_prefix(), 'Заголовок блоку'),
							Field::make_complex('smmstudio_main_page_faq_list'.carbon_lang_prefix(), 'Перелік питань')
								->add_fields(array(
									Field::make_text('question', 'Питання'),
									Field::make_rich_text('answer', 'Відповідь')
								))

						] )
						->add_tab( 'Кониактна форма', [
							Field::make_text('smmstudio_main_page_contact_form_title'.carbon_lang_prefix(), 'Заголовок блоку'),
							Field::make_select('smmstudio_main_page_contact_form_default_service'.carbon_lang_prefix(), 'Відмічений сервіс за замлвченням')
								->add_options( array(
									'target' => 'Таргетована реклама',
									'context' => 'Контексна реклама' ,
									'smm' => 'SMM просування',
									'web_dev' => 'Розробка сайтів',
								) )

						] )
						->add_tab( 'Давай дружити', [
							Field::make_text('smmstudio_main_page_be_friends_title'.carbon_lang_prefix(), 'Заголовок блоку'),
							Field::make_complex('smmstudio_main_page_be_friends_image_list'.carbon_lang_prefix(), 'Перелік зображень')
								->add_fields(array(
									Field::make_image('image', 'Зображення')
										->set_value('image')

								))

						] )
						->add_tab( 'SEO блок', [
							Field::make_text('smmstudio_main_page_seo_title'.carbon_lang_prefix(), 'Заголовок блоку'),
							Field::make_rich_text('smmstudio_main_page_seo_text'.carbon_lang_prefix(), 'Текст')

						] );


	}