<?php
	/**
	 * The header for our theme
	 *
	 * This is the template that displays all of the <head> section and everything up until <div id="content">
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
	 *
	 * @package smmstudio
	 */


?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo THEME_PATH;?>/assets/img/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo THEME_PATH;?>/assets/img/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo THEME_PATH;?>/assets/img/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo THEME_PATH;?>/assets/img/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo THEME_PATH;?>/assets/img/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo THEME_PATH;?>/assets/img/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo THEME_PATH;?>/assets/img/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo THEME_PATH;?>/assets/img/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo THEME_PATH;?>/assets/img/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo THEME_PATH;?>/assets/img/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo THEME_PATH;?>/assets/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo THEME_PATH;?>/assets/img/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo THEME_PATH;?>/assets/img/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo THEME_PATH;?>/assets/img/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#221EC4">
	<meta name="msapplication-TileImage" content="<?php echo THEME_PATH;?>/assets/img/ms-icon-144x144.png">
	<meta name="theme-color" content="#221EC4">

	<?php wp_head(); ?>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PKXWWJD');</script>
	<!-- End Google Tag Manager -->

	<style>
		.contact-form .messengers-wrapper .messengers{
			justify-content: space-around !important;
		}
	</style>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PKXWWJD"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div  class="wrapper">
	<header class="site-header">
		<div class="container-fluid">
			<div class="row">
				<div class="content col-12">
					<?php if( is_front_page() ):?>
						<div class="logo">
							<svg width="200" height="41" viewBox="0 0 200 41" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g clip-path="url(#clipHeaderLogo)">
									<path d="M67.2818 19.2413C64.2707 18.5226 63.5583 17.9672 63.5583 16.7585C63.5583 15.6804 64.4973 14.831 66.1162 14.831C67.5409 14.831 68.9655 15.3864 70.3578 16.4644L71.8471 14.3736C70.2606 13.0995 68.4474 12.3808 66.1486 12.3808C63.0403 12.3808 60.8062 14.2429 60.8062 16.9545C60.8062 19.8947 62.6841 20.9075 66.0191 21.6915C68.9331 22.4103 69.5483 22.9983 69.5483 24.1417C69.5483 25.3832 68.4798 26.1672 66.7638 26.1672C64.8211 26.1672 63.3317 25.4158 61.8099 24.1091L60.1586 26.1019C62.0366 27.8007 64.303 28.6174 66.699 28.6174C70.0016 28.6174 72.2681 26.8533 72.2681 23.9131C72.3004 21.2342 70.5844 20.0581 67.2818 19.2413Z" fill="white"/>
									<path d="M88.0039 12.6103L83.2443 20.0589L78.4847 12.6103H75.5706V28.3896H78.258V17.1187L83.1471 24.5019H83.2443L88.1981 17.0533V28.3896H90.9503V12.6103H88.0039Z" fill="white"/>
									<path d="M107.431 12.6103L102.671 20.0589L97.9116 12.6103H94.9651V28.3896H97.6849V17.1187L102.574 24.5019H102.671L107.593 17.0533V28.3896H110.345V12.6103H107.431Z" fill="white"/>
									<path d="M120.414 19.2421C117.403 18.5234 116.691 17.968 116.691 16.7593C116.691 15.6812 117.63 14.8318 119.249 14.8318C120.673 14.8318 122.066 15.3872 123.49 16.4652L124.98 14.3744C123.393 13.1003 121.58 12.3816 119.281 12.3816C116.173 12.3816 113.939 14.2437 113.939 16.9553C113.939 19.8955 115.817 20.9083 119.152 21.6923C122.033 22.4111 122.681 22.9991 122.681 24.1425C122.681 25.384 121.612 26.168 119.896 26.168C117.954 26.168 116.464 25.4166 114.975 24.1099L113.324 26.1027C115.202 27.8015 117.468 28.6182 119.864 28.6182C123.167 28.6182 125.465 26.8541 125.465 23.9138C125.433 21.235 123.717 20.0589 120.414 19.2421Z" fill="white"/>
									<path d="M127.214 12.6103V15.1912H132.168V28.4222H134.952V15.1912H139.906V12.6103H127.214Z" fill="white"/>
									<path d="M153.214 12.6103V21.6924C153.214 24.5999 151.724 26.1027 149.263 26.1027C146.803 26.1027 145.313 24.5346 145.313 21.5944V12.6103H142.561V21.6924C142.561 26.2661 145.151 28.6509 149.231 28.6509C153.343 28.6509 155.966 26.2661 155.966 21.5617V12.6103H153.214Z" fill="white"/>
									<path d="M165.582 12.6103H159.754V28.3896H165.582C170.504 28.3896 173.903 24.9266 173.903 20.4836C173.903 16.0079 170.504 12.6103 165.582 12.6103ZM165.582 25.874H162.506V15.1258H165.582C168.885 15.1258 171.022 17.38 171.022 20.4836C171.022 23.6199 168.885 25.874 165.582 25.874Z" fill="white"/>
									<path d="M177.4 12.6103V28.3896H180.152V12.6103H177.4Z" fill="white"/>
									<path d="M191.841 12.349C187.016 12.349 183.649 16.0733 183.649 20.5163C183.649 24.992 187.016 28.6836 191.808 28.6836C196.633 28.6836 200.032 24.9593 200.032 20.5163C200 16.0079 196.633 12.349 191.841 12.349ZM191.841 26.1028C188.732 26.1028 186.498 23.5546 186.498 20.4836C186.498 17.38 188.668 14.8645 191.776 14.8645C194.884 14.8645 197.086 17.4127 197.086 20.4836C197.086 23.6199 194.917 26.1028 191.841 26.1028Z" fill="white"/>
									<path d="M44.6171 20.4835C44.6171 22.3457 44.4876 24.2078 44.261 26.0046L0 21.5616V19.4054L44.2933 14.9624C44.52 16.7919 44.6171 18.6214 44.6171 20.4835Z" fill="white"/>
									<path d="M43.4839 10.1928L43.3544 10.2255L0 17.3474V15.1259L39.1776 0.228685L39.7604 0C41.3793 3.20159 42.6421 6.63187 43.4839 10.1928Z" fill="white"/>
									<path d="M43.4515 30.8726C42.6097 34.4335 41.3469 37.8311 39.7604 41.0001L39.1776 40.7714L0 25.8742V23.6527L43.322 30.7746V30.8399L43.4515 30.8726Z" fill="white"/>
								</g>
								<defs>
									<clipPath id="clipHeaderLogo">
										<rect width="200" height="41" fill="white"/>
									</clipPath>
								</defs>
							</svg>
						</div>
					<?php else:?>
						<a href="<?php echo get_site_url('/');?>" class="logo">
							<svg width="200" height="41" viewBox="0 0 200 41" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g clip-path="url(#clipHeaderLogo)">
									<path d="M67.2818 19.2413C64.2707 18.5226 63.5583 17.9672 63.5583 16.7585C63.5583 15.6804 64.4973 14.831 66.1162 14.831C67.5409 14.831 68.9655 15.3864 70.3578 16.4644L71.8471 14.3736C70.2606 13.0995 68.4474 12.3808 66.1486 12.3808C63.0403 12.3808 60.8062 14.2429 60.8062 16.9545C60.8062 19.8947 62.6841 20.9075 66.0191 21.6915C68.9331 22.4103 69.5483 22.9983 69.5483 24.1417C69.5483 25.3832 68.4798 26.1672 66.7638 26.1672C64.8211 26.1672 63.3317 25.4158 61.8099 24.1091L60.1586 26.1019C62.0366 27.8007 64.303 28.6174 66.699 28.6174C70.0016 28.6174 72.2681 26.8533 72.2681 23.9131C72.3004 21.2342 70.5844 20.0581 67.2818 19.2413Z" fill="white"/>
									<path d="M88.0039 12.6103L83.2443 20.0589L78.4847 12.6103H75.5706V28.3896H78.258V17.1187L83.1471 24.5019H83.2443L88.1981 17.0533V28.3896H90.9503V12.6103H88.0039Z" fill="white"/>
									<path d="M107.431 12.6103L102.671 20.0589L97.9116 12.6103H94.9651V28.3896H97.6849V17.1187L102.574 24.5019H102.671L107.593 17.0533V28.3896H110.345V12.6103H107.431Z" fill="white"/>
									<path d="M120.414 19.2421C117.403 18.5234 116.691 17.968 116.691 16.7593C116.691 15.6812 117.63 14.8318 119.249 14.8318C120.673 14.8318 122.066 15.3872 123.49 16.4652L124.98 14.3744C123.393 13.1003 121.58 12.3816 119.281 12.3816C116.173 12.3816 113.939 14.2437 113.939 16.9553C113.939 19.8955 115.817 20.9083 119.152 21.6923C122.033 22.4111 122.681 22.9991 122.681 24.1425C122.681 25.384 121.612 26.168 119.896 26.168C117.954 26.168 116.464 25.4166 114.975 24.1099L113.324 26.1027C115.202 27.8015 117.468 28.6182 119.864 28.6182C123.167 28.6182 125.465 26.8541 125.465 23.9138C125.433 21.235 123.717 20.0589 120.414 19.2421Z" fill="white"/>
									<path d="M127.214 12.6103V15.1912H132.168V28.4222H134.952V15.1912H139.906V12.6103H127.214Z" fill="white"/>
									<path d="M153.214 12.6103V21.6924C153.214 24.5999 151.724 26.1027 149.263 26.1027C146.803 26.1027 145.313 24.5346 145.313 21.5944V12.6103H142.561V21.6924C142.561 26.2661 145.151 28.6509 149.231 28.6509C153.343 28.6509 155.966 26.2661 155.966 21.5617V12.6103H153.214Z" fill="white"/>
									<path d="M165.582 12.6103H159.754V28.3896H165.582C170.504 28.3896 173.903 24.9266 173.903 20.4836C173.903 16.0079 170.504 12.6103 165.582 12.6103ZM165.582 25.874H162.506V15.1258H165.582C168.885 15.1258 171.022 17.38 171.022 20.4836C171.022 23.6199 168.885 25.874 165.582 25.874Z" fill="white"/>
									<path d="M177.4 12.6103V28.3896H180.152V12.6103H177.4Z" fill="white"/>
									<path d="M191.841 12.349C187.016 12.349 183.649 16.0733 183.649 20.5163C183.649 24.992 187.016 28.6836 191.808 28.6836C196.633 28.6836 200.032 24.9593 200.032 20.5163C200 16.0079 196.633 12.349 191.841 12.349ZM191.841 26.1028C188.732 26.1028 186.498 23.5546 186.498 20.4836C186.498 17.38 188.668 14.8645 191.776 14.8645C194.884 14.8645 197.086 17.4127 197.086 20.4836C197.086 23.6199 194.917 26.1028 191.841 26.1028Z" fill="white"/>
									<path d="M44.6171 20.4835C44.6171 22.3457 44.4876 24.2078 44.261 26.0046L0 21.5616V19.4054L44.2933 14.9624C44.52 16.7919 44.6171 18.6214 44.6171 20.4835Z" fill="white"/>
									<path d="M43.4839 10.1928L43.3544 10.2255L0 17.3474V15.1259L39.1776 0.228685L39.7604 0C41.3793 3.20159 42.6421 6.63187 43.4839 10.1928Z" fill="white"/>
									<path d="M43.4515 30.8726C42.6097 34.4335 41.3469 37.8311 39.7604 41.0001L39.1776 40.7714L0 25.8742V23.6527L43.322 30.7746V30.8399L43.4515 30.8726Z" fill="white"/>
								</g>
								<defs>
									<clipPath id="clipHeaderLogo">
										<rect width="200" height="41" fill="white"/>
									</clipPath>
								</defs>
							</svg>
						</a>
					<?php endif;?>
          <nav class="header-menu-container">
	          <?php
		          wp_nav_menu(
			          array(
				          'theme_location' => 'menu-1',
				          'menu_id'        => 'primary-menu',
				          'container' => false,
				          'menu_class' => 'main-menu',
			          )
		          );
	          ?>
            <a href="#" rel="nofollow" class="button accent-btn">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M0.0114107 1L0 9.55554L17.1429 12L0 14.4445L0.0114107 23L24 12L0.0114107 1Z" fill="#181818"/>
              </svg>
		          <?php echo esc_html( pll__( 'Надіслати заявку' ) ); ?>
            </a>
            <div class="lang-wrapper" id="lang-wrapper">
              <p class="active-lang"></p>
              <ul class="lang-wrapper">
			          <?php

				          $langArgs = array(
					          'show_names' => 1,
					          'display_names_as' => 'slug',
					          'show_flags' => 0,
					          'hide_current' => 0,
					          'hide_if_no_translation' => 1
				          );

				          pll_the_languages($langArgs);

			          ?>
              </ul>
            </div>
          </nav>

          <a href="#" class="mob-menu-btn" id="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
          </a>
				</div>
			</div>
		</div>

	</header
  <main>
