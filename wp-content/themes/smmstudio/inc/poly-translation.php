<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	if ( defined( 'POLYLANG_VERSION' ) ) {

		add_action('init', 'smmstudio_polylang_strings' );

		function smmstudio_polylang_strings() {

			if( ! function_exists( 'pll_register_string' ) ) {
				return;
			}

			/**
			 * Переклади форм
			 */

			pll_register_string(
				'smmstudio_form_placeholder_name',
				'Імʼя',
				'Переклади у формах',
				false
			);

			pll_register_string(
				'smmstudio_form_placeholder_phone',
				'Телефон',
				'Переклади у формах',
				false
			);

			pll_register_string(
				'smmstudio_form_placeholder_massage',
				'Про проєкт',
				'Переклади у формах',
				false
			);

			pll_register_string(
				'smmstudio_form_send',
				'Відправити',
				'Переклади у формах',
				false
			);

			pll_register_string(
				'smmstudio_form_policy_text',
				'Приймаю умови користувацької угоди та',
				'Переклади у формах',
				false
			);

			pll_register_string(
				'smmstudio_form_policy_link_text',
				'політики конфіденційності',
				'Переклади у формах',
				false
			);



			pll_register_string(
				'smmstudio_form_part_1_title',
				'Вашому бізнесу необхідна',
				'Переклади у формах',
				false
			);

			pll_register_string(
				'smmstudio_form_part_2_title',
				'Заповніть форму',
				'Переклади у формах',
				false
			);

			pll_register_string(
				'smmstudio_form_service_1',
				'Таргетована реклама',
				'Переклади у формах',
				false
			);

			pll_register_string(
				'smmstudio_form_service_2',
				'Контексна реклама',
				'Переклади у формах',
				false
			);

			pll_register_string(
				'smmstudio_form_service_3',
				'SMM просування',
				'Переклади у формах',
				false
			);

			pll_register_string(
				'smmstudio_form_service_4',
				'Розробка сайтів',
				'Переклади у формах',
				false
			);




			/**
			 * Переклади у кейсах
			 */

			pll_register_string(
				'smmstudio_cases_name',
				'Текст',
				'Переклади у кейсах',
				false
			);

			/**
			 * Переклади кнопок
			 */

			pll_register_string(
				'smmstudio_btn_get_offer',
				'Отримати пропозицію',
				'Переклади кнопок',
				false
			);

			pll_register_string(
				'smmstudio_btn_send_application',
				'Надіслати заявку',
				'Переклади кнопок',
				false
			);

			pll_register_string(
				'smmstudio_btn_more_about',
				'Більше про нас',
				'Переклади кнопок',
				false
			);

			pll_register_string(
				'smmstudio_btn_all_cases',
				'всі кейси',
				'Переклади кнопок',
				false
			);

			pll_register_string(
				'smmstudio_btn_reed_more',
				'Читати більше',
				'Переклади кнопок',
				false
			);



			/**
			 * Переклади загальних елементів
			 */

			pll_register_string(
				'smmstudio_general_trust_title',
				'Вже довірили нам свої проєкти',
				'Переклади загальних елементів',
				false
			);

			pll_register_string(
				'smmstudio_general_reviews_title',
				'Відгуки про співпрацю',
				'Переклади загальних елементів',
				false
			);

			pll_register_string(
				'smmstudio_general_prav_poly',
				'Політика конфіденційності',
				'Переклади загальних елементів',
				false
			);


			pll_register_string(
				'smmstudio_general_footer_menu_contacts',
				'Контакти',
				'Переклади загальних елементів',
				false
			);

			pll_register_string(
				'smmstudio_general_footer_menu_social',
				'Слідкуйте за нами',
				'Переклади загальних елементів',
				false
			);

			pll_register_string(
				'smmstudio_general_case_info_1',
				'заявок за період',
				'Переклади загальних елементів',
				false
			);

			pll_register_string(
				'smmstudio_general_case_info_2',
				'продаж за період',
				'Переклади загальних елементів',
				false
			);

			pll_register_string(
				'smmstudio_general_case_info_3',
				'вартість заявки',
				'Переклади загальних елементів',
				false
			);

			pll_register_string(
				'smmstudio_general_case_info_4',
				'вартість продажу',
				'Переклади загальних елементів',
				false
			);

			pll_register_string(
				'smmstudio_general_case_info_5',
				'днів роботи',
				'Переклади загальних елементів',
				false
			);













		}
	}