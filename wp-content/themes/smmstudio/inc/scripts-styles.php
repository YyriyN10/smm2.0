<?php

	function smmstudio_scripts() {
		wp_enqueue_style( 'smmstudio-style', get_stylesheet_uri(), array(), _S_VERSION );

		/*wp_enqueue_style( 'smmstudio-style-main', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION );*/

		wp_enqueue_style( 'smmstudio-style-main', get_template_directory_uri() . '/assets/css/style.min.css', array(), _S_VERSION );



		/*wp_enqueue_script( 'smmstudio-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );*/

		/*if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
*/
		/*wp_enqueue_script( 'smmstudio-all', get_template_directory_uri() . '/assets/js/all-js.js', array('jquery'), 2.3, true );
*/
		/*wp_enqueue_script( 'smmstudio-slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), 1.6, true );

		wp_enqueue_script( 'smmstudio-youtube', get_template_directory_uri() . '/assets/js/youtube.js', array('jquery'), 1.0, true );

		wp_enqueue_script( 'smmstudio-fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array('jquery'), 3.2, true );*/

		/*wp_enqueue_script( 'smmstudio-viewportchecker', get_template_directory_uri() . '/assets/js/jquery.viewportchecker.js', array('jquery'), 2.0, true );

		wp_enqueue_script( 'smmstudio-typed', get_template_directory_uri() . '/assets/js/typed.js', array('jquery'), 2.0, true );

		wp_enqueue_script( 'intlTelInput', get_template_directory_uri() . '/assets/js/intlTelInput.min.js', array('jquery'), 4.1, true );
*/

		/*

		wp_enqueue_script( 'smmstudio-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), 4.1, true );

		wp_enqueue_script( 'smmstudio-phone-masc', get_template_directory_uri() . '/assets/js/jquery.maskedinput.min.js', array('jquery'), 1.4, true );

		wp_enqueue_script( 'smmstudio-validator', get_template_directory_uri() . '/assets/js/validator.min.js', array('jquery'), 0.11, true );

		wp_enqueue_script( 'lazy', get_template_directory_uri() . '/assets/js/jquery.lazy.min.js', array('jquery'), 0.14 , true );

		wp_enqueue_script( 'custom-scrollbar', get_template_directory_uri() . '/assets/js/customScroll.js', array('jquery'), 3.1 , true );
*/
		/*wp_enqueue_script( 'smmstudio-mr', "https://cdn.jsdelivr.net/jquery.marquee/1.4.0/jquery.marquee.min.js", array('jquery'), 0.11, true );*/
		/*wp_enqueue_script( 'smmstudio-mr', get_template_directory_uri() . '/assets/js/marq.js', array('jquery'), 1.4 , true );*/

		/*wp_enqueue_script( 'smmstudio-main-js', get_template_directory_uri() . '/assets/js/js.min.js', array('jquery'), 1.0, true );*/

		wp_enqueue_script( 'smmstudio-main-js', get_template_directory_uri() . '/assets/js/main.min.js', array('jquery'), 1.0, true );
	}
	add_action( 'wp_enqueue_scripts', 'smmstudio_scripts' );