<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package smmstudio
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function smmstudio_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'smmstudio_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function smmstudio_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'smmstudio_pingback_header' );

// Add Option Page

	if( function_exists('acf_add_options_page') ) {

		/*acf_add_options_page();*/

		acf_add_options_page(array(
			'page_title' 	=> 'Главные опции',
			'menu_title'	=> 'Главные опции',
			'menu_slug' 	=> 'theme-general-settings',
		));

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Контакты',
			'menu_title'	=> 'Контакты',
			'parent_slug'	=> 'theme-general-settings',
		));

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Статические переводы',
			'menu_title'	=> 'Статические переводы',
			'parent_slug'	=> 'theme-general-settings',
		));


	}

/**
 * Get browser
 */

	function get_browser_name($user_agent)
	{
		if ( strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR/') ){
			return 'Opera';
		} elseif ( strpos($user_agent, 'Edge') ){
			return 'Edge';
		} elseif ( strpos($user_agent, 'Chrome') ){
			return 'Chrome';
		} elseif ( strpos($user_agent, 'Safari') ){
			return 'Safari';
		} elseif ( strpos($user_agent, 'Firefox') ){
			return 'Firefox';
		} elseif ( strpos($user_agent, 'MSIE') || strpos($user_agent, 'Trident/7') ){
			return 'Internet Explorer';
		} else{
			return 'Other';
		}

	}

	/**
	 * custom login
	 */