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
				'smmstudio_button_name',
				'Текст',
				'Переклади кнопок',
				false
			);

			/**
			 * Переклади загальних елементів
			 */

			pll_register_string(
				'smmstudio_general_name',
				'Текст',
				'Переклади загальних елементів',
				false
			);









		}
	}