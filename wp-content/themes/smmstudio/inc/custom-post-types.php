<?php

	/**
	 * Register a reviews post type.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/register_post_type
	 *
	 * @since smmstudio 1.0
	 */

	function reviews_post_type() {

		$labels = array(
			'name'               => _x( 'Отзывы', 'post type general name', 'smmstudio' ),
			'singular_name'      => _x( 'Отзывы', 'post type singular name', 'smmstudio' ),
			'menu_name'          => _x( 'Отзывы', 'admin menu', 'smmstudio' ),
			'name_admin_bar'     => _x( 'Отзывы', 'add new on admin bar', 'smmstudio' ),
			'add_new'            => _x( 'Добавить новый отзыв', 'actions', 'smmstudio' ),
			'add_new_item'       => __( 'Добавить новый отзыв', 'smmstudio' ),
			'new_item'           => __( 'Новый отзыв', 'smmstudio' ),
			'edit_item'          => __( 'Редактировать отзыв', 'smmstudio' ),
			'view_item'          => __( 'Посмотреть отзыв', 'smmstudio' ),
			'all_items'          => __( 'Всё отзывы', 'smmstudio' ),
			'search_items'       => __( 'Искать отзыв', 'smmstudio' ),
			'parent_item_colon'  => __( 'Родитель отзыва:', 'smmstudio' ),
			'not_found'          => __( 'Отзыв не найдено.', 'smmstudio' ),
			'not_found_in_trash' => __( 'В корзине отзывов не найдено.', 'smmstudio' )
		);

		$args = array(
			'labels'             => $labels,
			'taxonomies'         => [],
			'description'        => __( 'Описание.', 'smmstudio' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'reviews' ),
			'capability_type'    => 'post',
			'has_archive'        => false,
			'hierarchical'       => true,
			'menu_position'      => 7,
			'menu_icon'          => 'dashicons-testimonial',
			'supports'           => array( 'title', 'thumbnail' )
		);

		register_post_type( 'reviews', $args );
	}

	add_action( 'init', 'reviews_post_type' );

	/**
	 * Register a cases post type.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/register_post_type
	 *
	 * @since smmstudio 1.0
	 */

	function cases_post_type() {

		$labels = array(
			'name'               => _x( 'Кейсы', 'post type general name', 'smmstudio' ),
			'singular_name'      => _x( 'Кейсы', 'post type singular name', 'smmstudio' ),
			'menu_name'          => _x( 'Кейсы', 'admin menu', 'smmstudio' ),
			'name_admin_bar'     => _x( 'Кейсы', 'add new on admin bar', 'smmstudio' ),
			'add_new'            => _x( 'Добавить новый кейс', 'actions', 'smmstudio' ),
			'add_new_item'       => __( 'Добавить новый кейс', 'smmstudio' ),
			'new_item'           => __( 'Новый кейс', 'smmstudio' ),
			'edit_item'          => __( 'Редактировать кейс', 'smmstudio' ),
			'view_item'          => __( 'Посмотреть кейс', 'smmstudio' ),
			'all_items'          => __( 'Всё кейсы', 'smmstudio' ),
			'search_items'       => __( 'Искать кейс', 'smmstudio' ),
			'parent_item_colon'  => __( 'Родитель кейса:', 'smmstudio' ),
			'not_found'          => __( 'Кейс не найден.', 'smmstudio' ),
			'not_found_in_trash' => __( 'В корзине кейсов не найдено.', 'smmstudio' )
		);

		$args = array(
			'labels'             => $labels,
			'taxonomies'         => ['cases-cat-tax'],
			'description'        => __( 'Описание.', 'smmstudio' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'cases' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => true,
			'menu_position'      => 7,
			'menu_icon'          => 'dashicons-testimonial',
			'supports'           => array( 'title', 'thumbnail' )
		);

		register_post_type( 'cases', $args );
	}

	add_action( 'init', 'cases_post_type' );
	add_action( 'init', 'create_cases_taxonomy' );
	function create_cases_taxonomy(){

		register_taxonomy('cases-cat-tax', 'cases', array(
			'label'                 => 'cases-cat-tax', // определяется параметром $labels->name
			'labels'                => array(
				'name'              => 'Категории услуг',
				'singular_name'     => 'услуга',
				'search_items'      => 'Поиск услуги',
				'all_items'         => 'Все услуги',
				'view_item '        => 'View Genre',
				'parent_item'       => 'Parent Genre',
				'parent_item_colon' => 'Parent Genre:',
				'edit_item'         => 'Редактировать услугу',
				'update_item'       => 'Обновить услугу',
				'add_new_item'      => 'Добавить новую услугу',
				'new_item_name'     => 'New Genre Name',
				'menu_name'         => 'Категории услуг',
			),
			'description'           => 'cases-cat-tax', // описание таксономии
			'public'                => true,
			'publicly_queryable'    => true, // равен аргументу public
			'show_in_nav_menus'     => true, // равен аргументу public
			'show_ui'               => true, // равен аргументу public
			'show_in_menu'          => true, // равен аргументу show_ui
			'show_tagcloud'         => true, // равен аргументу show_ui
			'show_in_rest'          => true, // добавить в REST API
			'rest_base'             => true, // $taxonomy
			'hierarchical'          => true,

			/*'update_count_callback' => '_update_post_term_count',*/
			'rewrite'               => array('slug' => 'cases'),
			'query_var'             => $taxonomy, // название параметра запроса
			'capabilities'          => array(),
			'meta_box_cb'           => null, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
			'show_admin_column'     => true, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
			/*'_builtin'              => false,*/
			'show_in_quick_edit'    => true, // по умолчанию значение show_ui
		) );
	}

	/**
	 * Register a trust post type.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/register_post_type
	 *
	 * @since smmstudio 1.0
	 */

	function trust_post_type() {

		$labels = array(
			'name'               => _x( 'Нам доверяют', 'post type general name', 'smmstudio' ),
			'singular_name'      => _x( 'Нам доверяют', 'post type singular name', 'smmstudio' ),
			'menu_name'          => _x( 'Нам доверяют', 'admin menu', 'smmstudio' ),
			'name_admin_bar'     => _x( 'Нам доверяют', 'add new on admin bar', 'smmstudio' ),
			'add_new'            => _x( 'Добавить новый логотип', 'actions', 'smmstudio' ),
			'add_new_item'       => __( 'Добавить новый логотип', 'smmstudio' ),
			'new_item'           => __( 'Новый логотип', 'smmstudio' ),
			'edit_item'          => __( 'Редактировать логотип', 'smmstudio' ),
			'view_item'          => __( 'Посмотреть логотип', 'smmstudio' ),
			'all_items'          => __( 'Всё логотипы', 'smmstudio' ),
			'search_items'       => __( 'Искать логотип', 'smmstudio' ),
			'parent_item_colon'  => __( 'Родитель логотипа:', 'smmstudio' ),
			'not_found'          => __( 'Логотип не найдено.', 'smmstudio' ),
			'not_found_in_trash' => __( 'В корзине логотипов не найдено.', 'smmstudio' )
		);

		$args = array(
			'labels'             => $labels,
			'taxonomies'         => [],
			'description'        => __( 'Описание.', 'smmstudio' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'trust' ),
			'capability_type'    => 'post',
			'has_archive'        => false,
			'hierarchical'       => true,
			'menu_position'      => 9,
			'menu_icon'          => 'dashicons-testimonial',
			'supports'           => array( 'title', 'thumbnail' )
		);

		register_post_type( 'trust', $args );
	}

	add_action( 'init', 'trust_post_type' );