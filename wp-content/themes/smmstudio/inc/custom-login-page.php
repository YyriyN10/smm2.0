<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Редирект на головну із site.com/wp-admin
	 */
	add_action( 'init', function () {
		if ( is_admin() && ! current_user_can( 'administrator' ) &&
		     ! ( defined( 'DOING_AJAX' ) && DOING_AJAX ) ) {
			wp_redirect( home_url() );
			exit;
		}
	});

	/**
	 * Редирект на головну із site.com/wp-login.php
	 */
	add_action( 'init', function () {
		$page_viewed = basename( $_SERVER['REQUEST_URI'] );
		if ( $page_viewed == "wp-login.php" ) {
			wp_redirect( home_url() );
			exit;
		}
	});

	/**
	 * Редирект на головну після виходу із системи
	 */
	add_action( 'wp_logout', function () {
		$login_page  = home_url( 'wp-admin' );
		wp_redirect( $login_page . "?loggedout=true" );
		exit;
	});

	add_filter( 'login_headertext', 'yuna_change_login_logo_text' );

	function yuna_change_login_logo_text( $text ) {
		return 'GREEN SYSTEM';
	}

	add_action( 'login_head', 'yuna_no_login_logo' );

	function yuna_no_login_logo() {
		echo '<style>
		#login h1 a {
	    background-image: none;
	    text-indent: 0;
	    height: auto;
	    color: #fafafc;
	    font-size: 34px;
	    width: 290px;
		}
		
		#login h1 a svg{
	    width: 100%;
	    height: auto;
		}
		
		#login form{
			border-radius: 4px;
			border: 2px solid #181a22;
			background-color: #fafafc;
			color: #181a22;
		}
		
		#login form input{
			background-color: #fafafc;
			border: 1px solid #384438;
			color: #181a22;
			font-size: 14px;
			padding-left: 20px;
		}
		
		#login form input::-webkit-input-placeholder {
        color: #181a22;
      }
      #login form input:-moz-placeholder {
        color: #181a22;
      }
      #login form input::-moz-placeholder {
        color: #181a22;
      }
      #login form input:-ms-input-placeholder {
        color: #181a22;
      }
		
		#login form input:focus{
			border: 1px solid #221EC4;
			box-shadow: none !important;
			outline: none;
		}
		
		#login form p.submit{
			width: 100%;
			display: flex;
			padding-top: 20px;
			justify-content: center;
		}
		
		#login form p.submit .button{
			display: inline-block;
			padding: 	5px 30px;
			background-color: #221EC4;
			font-size: 18px;
			border: 1px solid #221EC4;
			width: 100%;
			color: #fafafc;
			transition: all 0.5s;
		}
		
		#login #nav,
		#login #nav a,
		#backtoblog a{
			color: #fafafc;
		}
		
		.login #backtoblog a{
			color: #fafafc !important;
		}
		
		.login{
			background-color: #221EC4;
		}
		
		.login .privacy-policy-page-link a{
				color: #fafafc !important;
		}
		
		.language-switcher{
			display: none;
		}
		</style>';
	}

	add_filter( 'login_headerurl', 'yuna_login_link_to_website' );

	function yuna_login_link_to_website( $url ) {
		return site_url();
	}