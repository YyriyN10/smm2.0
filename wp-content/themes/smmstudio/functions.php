<?php
/**
 * smmstudio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package smmstudio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'smmstudio_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function smmstudio_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on smmstudio, use a find and replace
		 * to change 'smmstudio' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'smmstudio', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'smmstudio' ),
				'menu-2' => esc_html__( 'Footer', 'smmstudio' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'smmstudio_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'smmstudio_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function smmstudio_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'smmstudio_content_width', 640 );
}
add_action( 'after_setup_theme', 'smmstudio_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function smmstudio_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'smmstudio' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'smmstudio' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'smmstudio_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/scripts-styles.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Custom Post Types.
 */
require get_template_directory() . '/inc/custom-post-types.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


	/**
	 * Custom login
	 */

	require get_template_directory() . '/inc/custom-login-page.php';

	/**
	 * Polytranslations
	 */

	require get_template_directory() . '/inc/poly-translation.php';

	define( 'SITE_URL', get_site_url() );
	define( 'SITE_LOCALE', get_locale() );
	define( 'THEME_PATH', get_template_directory_uri() );

//Init Ajax

	add_action( 'wp_enqueue_scripts', 'myajax_data', 99 );
	function myajax_data(){

		wp_localize_script('smmstudio-main-js', 'myajax',
			array(
				'url' => admin_url('admin-ajax.php')
			)
		);

	}


/**
 * Ajax functions
 */

require get_template_directory() . '/inc/ajax-functions.php';


//Site Send Mail To Amo
	use PHPMailer\PHPMailer\PHPMailer;
	use Telegram\Bot\Api;

	function contact_form_send_email_to_admin() {

		require_once __DIR__ . '/amocrm.phar';
		require_once('vendor/autoload.php');
		require_once ('Mobile_Detect.php');

		/*echo '<pre>';
		print_r($_POST);
		echo '</pre>';*/

		function clearData($data) {
			return addslashes(strip_tags(trim($data)));
		}

		$name = clearData($_POST['name']);
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$formLang = $_POST['form-lang'];
		$homeUrl = $_POST['home-url'];
        $message = $_POST['mess'];
        $spamFild = $_POST['moreinfo'];
        $pageName = clearData($_POST['page-name']);
        

		$utmSource = $_POST['utm_source'];
		$utmMedium = $_POST['utm_medium'];
		$utmCampaign = $_POST['utm_campaign'];
		$utmTerm = $_POST['utm_term'];
		$utmContent = $_POST['utm_content'];
		$gclid = $_POST['gclid'];

		$servicesList = $_POST['ch-service'];
		$serviceFormData = array();
		$target = '';
		$ved = '';
		$context = '';
		$dev = '';
		$automation = '';
		$diz = '';
	
		$testData = '';

        if ( $servicesList ){
        	foreach ( $servicesList as $key => $value ){

        		if ( $value == 'target' ){
			        $target = '4626965';
			        $target2 = 'Таргетированная реклама';
		        }
		        if ( $value == 'ved' ){ 
			        $ved = '4626967';
			        $ved2 = 'SMM';
		        }
		        if ( $value == 'context' ){
			        $context = '4626969';
			        $context2 = 'Контекстная реклама';
		        }
		        if ( $value == 'dev' ){
			        $dev = '4626971';
			        $dev2 = 'Разработка сайтов';
		        }
		        if ( $value == 'automation' ){
			        $automation = '4626973';
			        $automation2 = 'Автоматизация';
			        
		        }
		        if ( $value == 'diz' ){
			        $diz = '4626975';
			        $diz2 = 'Дизайн';
		        }

	        }

	        $serviceFormData = array($target, $ved, $context, $dev, $automation, $diz);
	        $testData = $target2.' '.$ved2.' '.$contex2.' '.$dev2.' '.$automation2.' '.$diz2;
        }

		if ( !empty($gclid)){
			$utmSource = 'adwords';
		}

		$phone = preg_replace( '/[^0-9]/', '', $phone);

		$thxName = '';

		if( $formLang == 'ua' ){
			$thxName = '/ua/dyakuiemo';
        }elseif ( $formLang == 'ru' ){
			$thxName = 'spasibo';
        }elseif ( $formLang == 'en' ){
			$thxName = '/en/thanks';
        }elseif ( $formLang == 'pl' ){
			$thxName = '/pl/dzieki';
        }
		
		if( $spamFild == 'nospam' ){

			if( $name != 'smmstudio.com' && ($pageName != 'Thanks' || $pageName != 'Дякуємо' || $pageName != 'Спасибо' || $pageName != 'Dzięki')){
				if(!empty($name) && !empty($email) && !empty($phone)) {

					$messageUaNot = 'порно';
				    $messageEnNot = 'porno';
				    $messageRefNot = '<a href';

			    	$messageSpamUa = strripos($message, $messageUaNot);
				    $messageSpamEn = strripos($message, $messageEnNot);
				    $messageSpamRef = strripos($message, $messageRefNot);


			    	if ($messageSpamUa === false && $messageSpamEn === false && $messageSpamRef === false){

						$post_data = array (
							'fields[name_2]' => 'Заявка c '.$pageName.'',
							'fields[name_1]' => $name,
							'fields[1851983_1][4351093]'  => $phone,
							'fields[1851985_1][4351105]'  => $email,
							'fields[note_2]' => $testData,
							'fields[2100383_2]' => $target, $ved, $context, $dev, $automation, $diz,
							/*'fields[2100383_2][4626967]' => $ved,
							'fields[2100383_2][4626969]' => $context,
							'fields[2100383_2][4626971]' => $dev,
							'fields[2100383_2][4626973]' => $automation,
							'fields[2100383_2][4626975]' => $diz,*/
							'fields[1974757_2]' => $message,
							
							'fields[1958329_2]' => $utmSource,
							'fields[1958331_2]' => $utmMedium,
							'fields[1958335_2]' => $utmTerm,
							'fields[1958337_2]' => $utmContent,
							'form_id' => '937103',
							'hash' => 'ad574ec37462bed32b1897dade500fb8'

						);

						$chanelAmo = curl_init();

						curl_setopt($chanelAmo, CURLOPT_URL, 'https://forms.amocrm.com/queue/add');
						curl_setopt($chanelAmo, CURLOPT_RETURNTRANSFER, 1);
						curl_setopt($chanelAmo, CURLOPT_POST, 1);
						curl_setopt($chanelAmo, CURLOPT_POSTFIELDS, $post_data);

						$output = curl_exec($chanelAmo);

						curl_close($chanelAmo);

						//Auth Creatio

						$curlAuth = curl_init();

						curl_setopt($curlAuth, CURLOPT_URL, 'https://smmstudio.creatio.com/ServiceModel/AuthService.svc/Login');
						curl_setopt($curlAuth, CURLOPT_RETURNTRANSFER, true);
						curl_setopt($curlAuth, CURLOPT_ENCODING , '');
						curl_setopt($curlAuth, CURLOPT_MAXREDIRS, 10);
						curl_setopt($curlAuth, CURLOPT_TIMEOUT , 0);
						curl_setopt($curlAuth, CURLOPT_HEADER , true);
						curl_setopt($curlAuth, CURLOPT_FOLLOWLOCATION, true);
						curl_setopt($curlAuth, CURLOPT_HTTP_VERSION , CURL_HTTP_VERSION_1_1);
						curl_setopt($curlAuth, CURLOPT_CUSTOMREQUEST, 'POST');
						curl_setopt($curlAuth, CURLOPT_POSTFIELDS, '{  
							  "UserName":"Supervisor",
				        "UserPassword":"Smmstudio2.0"
							}');
						curl_setopt($curlAuth, CURLOPT_HTTPHEADER, array(
							'Accept: application/json',
							'Content-Type: application/json; charset=utf-8',
							'ForceUseSession: true'
						));

						//Get Auth Keys

						$response = curl_exec($curlAuth);

						$header_size = curl_getinfo($curlAuth, CURLINFO_HEADER_SIZE);
						$header = substr($response, 0, $header_size);

						$headersArray = explode(":", $header);

						$bpmLoader = '';
						$asp = '';
						$bpmCsRf = '';
						$usName = '';

						foreach ( $headersArray as $item ){

							if ( stristr($item, 'BPMLOADER')) {
							  $bpmLoader = $item;
								$bpmLoader = explode(';', $bpmLoader);
								$bpmLoader = $bpmLoader[0];
								$bpmLoader = explode('=', $bpmLoader);
								$bpmLoader = $bpmLoader[1];
							}

							if ( stristr($item, '.ASPXAUTH')) {
								$asp = $item;
								$asp = explode(';', $asp);
								$asp = $asp[0];
								$asp = explode('=', $asp);
								$asp = $asp[1];
							}

							if ( stristr($item, 'BPMCSRF')) {
								$bpmCsRf = $item;
								$bpmCsRf = explode(';', $bpmCsRf);
								$bpmCsRf = $bpmCsRf[0];
								$bpmCsRf = explode('=', $bpmCsRf);
								$bpmCsRf = $bpmCsRf[1];
							}

							if ( stristr($item, 'UserType')) {
								$usName = $item;
								$usName = explode(';', $usName);
								$usName = $usName[0];
								$usName = explode('=', $usName);
								$usName = $usName[1];
							}
			      		}


			      		$allCookieStr = '.ASPXAUTH='.$asp.'; BPMCSRF='.$bpmCsRf.'; BPMLOADER='.$bpmLoader.'; UserType='.$usName.'';

			      		$authCookie = 'BPMCSRF: '.$bpmCsRf.'';
						$aspLid = '.ASPXAUTH='.$asp.';';
						$userLid = 'UserName='.$usName.';';
						$bpmLoaderLid = 'BPMLOADER='.$bpmLoader.';';

						setcookie('BPMLOADER', $bpmLoader);
						setcookie('.ASPXAUTH', $asp);
						setcookie('BPMCSRF', $bpmCsRf);
						setcookie('UserName', $usName);


						/*$manage = explode(":", $response);

						$bpmLoader = explode(';', $manage[36]);
						$asp = explode(';', $manage[37]);
						$bpmCsRf = explode(';',$manage[38]);
						$usName = explode(';',$manage[39]);

						$bpmLoaderStr = $bpmLoader[0];
						$aspStr = $asp[0];
						$bpmCsRfStr = $bpmCsRf[0];
						$usNameStr = $usName[0];

						$allCookieStr = $aspStr.'; '.$bpmCsRfStr.'; '.$bpmLoaderStr.'; '.$usNameStr.'';

						$bpmLoader = explode('=', $bpmLoader[0]);
						$asp = explode('=', $asp[0]);
						$bpmCsRf = explode('=', $bpmCsRf[0]);
						$usName = explode('=', $usName[0]);

						$authCookie = 'BPMCSRF: '.$bpmCsRf[1].'';
						$aspLid = '.ASPXAUTH='.$asp[1].';';
						$userLid = 'UserName='.$usName[1].';';
						$bpmLoaderLid = 'BPMLOADER='.$bpmLoader[1].';';

						setcookie('BPMLOADER', $bpmLoader[1]);
						setcookie('.ASPXAUTH', $asp[1]);
						setcookie('BPMCSRF', $bpmCsRf[1]);
						setcookie('UserName', $usName[1]);*/

						curl_close($curlAuth);

						//Source Logic

						$lidSource = '';

						if ( $utmSource == 'google_ads' || $utmSource == 'adwords'){
							$lidSource = '1e8519ee-1da2-4be8-8dbd-b5ea5c0d7ffa';
						}elseif  ($utmSource == 'facebook_ads' ){
							$lidSource = '2b79c51f-ccbe-45c1-ba8e-844320b74f47';
						}else{
							$lidSource = '52dbcd19-6733-4e3c-9c7f-2f64f118f51a';
						}

						//Create Contact ID

						$contactId = '';

						//Find Contact

						$curlFindContact = curl_init();

						curl_setopt_array($curlFindContact, array(
							CURLOPT_URL => 'https://smmstudio.creatio.com/0/odata/ContactCommunication?$filter=contains(Number,\''.$phone.'\')%20or%20contains(Number,\''.$email.'\')',
							CURLOPT_RETURNTRANSFER => true,
							CURLOPT_ENCODING => '',
							CURLOPT_MAXREDIRS => 10,
							CURLOPT_TIMEOUT => 0,
							CURLOPT_FOLLOWLOCATION => true,
							CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
							CURLOPT_CUSTOMREQUEST => 'GET',
							CURLOPT_HTTPHEADER => array(
								'Accept: application/json',
								'Content-Type: application/json; charset=utf-8',
								'ForceUseSession: true',
								/*'BPMCSRF: '.$bpmCsRf[1].'',*/
								'BPMCSRF: '.$bpmCsRf.'',
								'Cookie: '.$allCookieStr.''

							),
						));

						$responseFindContact = curl_exec($curlFindContact);

						$findContactJson = json_decode($responseFindContact, true);

						curl_close($curlFindContact);

						//Get Contact ID

						$contactId = $findContactJson['value'][0]['ContactId'];

						//Create Note To Find Contact

						$textNotation = $testData.'. Контакт существует, указанные данные - телефон: '.$phone.', почта: '.$email.'.';

						//Create contact

						if ( $contactId == '' ){

							//Create Note To New Contact

							$textNotation = $testData;

							$curlContact = curl_init();

							curl_setopt_array($curlContact , array(
								CURLOPT_URL => 'https://smmstudio.creatio.com/0/odata/Contact',
								CURLOPT_RETURNTRANSFER => true,
								CURLOPT_ENCODING => '',
								CURLOPT_MAXREDIRS => 10,
								CURLOPT_TIMEOUT => 0,
								CURLOPT_FOLLOWLOCATION => true,
								CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
								CURLOPT_CUSTOMREQUEST => 'POST',
								CURLOPT_POSTFIELDS =>'{
							    "Name": "'.$name.'",
							    "Phone": "'.$phone.'",
							    "Email": "'.$email.'"
							    
							}',
								CURLOPT_HTTPHEADER => array(
									/*'BPMCSRF: '.$bpmCsRf[1].'',*/
									'BPMCSRF: '.$bpmCsRf.'',
									'Content-Type: application/json',
									'Cookie: '.$allCookieStr.''
								),
							));

							$responseContact = curl_exec($curlContact );

							curl_close($curlContact );

							$contactJson = json_decode($responseContact, true);

							//Get Contact ID

							$contactId = $contactJson['Id'];

						}

						//Create Lid

						$curlLid = curl_init();

						/*"UsrString18" : "gaClientId",*/

						curl_setopt_array($curlLid, array(
							CURLOPT_URL => 'https://smmstudio.creatio.com/0/odata/UsrDeals',
							CURLOPT_RETURNTRANSFER => true,
							CURLOPT_ENCODING => '',
							CURLOPT_MAXREDIRS => 10,
							CURLOPT_TIMEOUT => 0,
							CURLOPT_FOLLOWLOCATION => true,
							CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
							CURLOPT_CUSTOMREQUEST => 'POST',
							CURLOPT_POSTFIELDS =>'{
							    "UsrName": "Заявка c '.$pageName.'",
							    "UsrClientId": "'.$contactId.'",
							    "UsrString5" : "'.$message.'",
							    "UsrString20" : "'.$utmSource.'",
							    "UsrString21" : "'.$utmMedium.'",
							    "UsrString22" : "'.$utmCampaign.'",
							    "UsrString23" : "'.$utmTerm.'",
							    "UsrString24" : "'.$utmContent.'",
							    "UsrString26" : "'.$gclid.'",
							    "UsrString33" : "'.$pageName.'",
							    "UsrSourceId":"'.$lidSource.'",
							    "UsrNotes": "'.$textNotation.'"
							    
							}',
							CURLOPT_HTTPHEADER => array(
								/*'BPMCSRF: '.$bpmCsRf[1].'',*/
								'BPMCSRF: '.$bpmCsRf.'',
								'Content-Type: application/json',
								'Cookie: '.$allCookieStr.''
							),
						));

						$responseLid = curl_exec($curlLid);

						curl_close($curlLid);

						/*$liedJson = json_decode($responseLid, true);*/

						$mail = new PHPMailer();

						try {

							//Server settings
							$mail->isSMTP();
							$mail->Host = 'mail.adm.tools';
							$mail->SMTPAuth = true;
							$mail->Username = 'amo@smmstudio.com.ua';
							$mail->Password = 'D27rTBaF4p4o';
							$mail->SMTPSecure = 'tls';
							$mail->Port = 25;
							$mail->CharSet = 'UTF-8';

							//Recipients
							$mail->setFrom('amo@smmstudio.com.ua', 'info');
							$mail->addAddress('amo@smmstudio.com.ua', 'info');

							//Content
							$mail->isHTML(true);
							$mail->Subject = 'Заявка c '.$pageName.'';
							$mail->Body = "<p>Имя: $name</p><p>Телефон: $phone</p><p>Email: $email</p><p>Задача: $message</p><p>Сфера: $sfera</p><p>utmSource: $utmSource</p><p>utmMedium: $utmMedium</p><p>utmCampaign: $utmCampaign</p><p>utmTerm: $utmTerm</p><p>utmContent: $utmContent</p><p>gclid: $gclid</p>";

							$mail->send();

						} catch (Exception $e) {
							echo 'Message could not be sent.';

							echo 'Mailer Error: ' . $mail->ErrorInfo;
						}

						//Telegram Bot
						$telegram = new Api('1744882322:AAGaC3-8vCk9Up8VqeSPz_HAPhewUIyze24');

						/*$telegramTargetChatId = '-837763396';*/
						$telegramTargetChatId = '-4036530269';
					
						$detect = new Mobile_Detect;
						$device = 'Десктоп';
						function getVisIpAddr() {
				      
						    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
						        return $_SERVER['HTTP_CLIENT_IP'];
						    }
						    else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
						        return $_SERVER['HTTP_X_FORWARDED_FOR'];
						    }
						    else {
						        return $_SERVER['REMOTE_ADDR'];
						    }
						}

						$ip = getVisIPAddr();

						$ipdat = json_decode(file_get_contents('http://www.geoplugin.net/json.gp?ip=' . $ip));

						$country = $ipdat->geoplugin_countryCode;

						
						if( $detect->isiOS() ){
							$device = 'iOS';
						}

						if( $detect->isAndroidOS() ){
							$device = 'Android';
						}

						$user_agent = $_SERVER['HTTP_USER_AGENT'];

						$response = $telegram->sendMessage([
							'chat_id' => $telegramTargetChatId,
							'text'    => '🚀НОВИЙ ЛІД💸'."\r\n"."\r\n".'Імʼя: '.$name."\r\n".'Телефон: '.$phone."\r\n".'Email: '.$email."\r\n".'Повідомлення: '.$message."\r\n".'Потрібні послуги: '.$serviceFormData."\r\n".'Сторінка заявки: '.$pageName."\r\n".'Країна: '.$country."\r\n".'Пристрій: '.$device."\r\n".'Інформація про пристрій: '.$user_agent."\r\n"."\r\n".'Аналітика'."\r\n"."\r\n".'utmSource: '.$utmSource."\r\n".'utmMedium: '.$utmMedium."\r\n".'utmCampaign: '.$utmCampaign."\r\n".'utmTerm: '. $utmTerm."\r\n".'utmContent: '.$utmContent."\r\n".'gsLid: '.$gclid.''
						]);
					}


				header('Location:'.$homeUrl.$thxName.'');


			}
		}else{
			header('Location:'.$homeUrl.$thxName.'');
		}

		}else{
			$mail = new PHPMailer();

			try {

				//Server settings
				$mail->isSMTP();
				$mail->Host = 'mail.adm.tools';
				$mail->SMTPAuth = true;
				$mail->Username = 'spam@smmstudio.com.ua';
				$mail->Password = 'newSmmSpam1PostPass!';
				$mail->SMTPSecure = 'tls';
				$mail->Port = 25;
				$mail->CharSet = 'UTF-8';

				//Recipients
				$mail->setFrom('spam@smmstudio.com.ua', 'info');
				$mail->addAddress('spam@smmstudio.com.ua', 'info');

				//Content
				$mail->isHTML(true);
				$mail->Subject = 'Заявка c '.$pageName.'';
				$mail->Body = "<p>Имя: $name</p><p>Телефон: $phone</p><p>Email: $email</p><p>Задача: $message</p><p>Сфера: $sfera</p><p>utmSource: $utmSource</p><p>utmMedium: $utmMedium</p><p>utmCampaign: $utmCampaign</p><p>utmTerm: $utmTerm</p><p>utmContent: $utmContent</p><p>gclid: $gclid</p>";

				$mail->send();

			} catch (Exception $e) {
				echo 'Message could not be sent.';

				echo 'Mailer Error: ' . $mail->ErrorInfo;
			}

			header('Location:'.$homeUrl.$thxName.'');
        }

		$cookie_name = "smmsend";
		$cookie_value = "sendmail";

		setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

	}

	add_action( 'admin_post_nopriv_contact_form', 'contact_form_send_email_to_admin' );
	add_action( 'admin_post_contact_form', 'contact_form_send_email_to_admin' );

	//Site QuizTo Amo

	function quiz_form_callback() {

		require_once __DIR__ . '/amocrm.phar';
		require_once('vendor/autoload.php');

		/*echo '<pre>';
		print_r($_POST);
		echo '</pre>';*/

		$name1 = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$quizName = $_POST['quiz-name'];

		$mess;

		$utmSource = $_POST['utm_source'];
		$utmMedium = $_POST['utm_medium'];
		$utmCampaign = $_POST['utm_campaign'];
		$utmTerm = $_POST['utm_term'];
		$utmContent = $_POST['utm_content'];
		$gclid = $_POST['gclid'];

		if ( !empty($gclid)){
			$utmSource = 'adwords';
		}

		/*$voronka = 15516604;*/

		foreach ( $_POST as $item => $name ){
			/*echo '<pre>';
			print_r($item);
			echo '</pre>';*/

			foreach ( $name as $key => $value ){

				/*echo '<pre>';
				print_r($itemCh)
				echo '</pre>';*/

				if( is_array($value)){
					$value = implode(", ", $value);

					$mess = $mess.$key .' : '.$value."\r\n";
				}else{
					$mess = $mess.$key .' : '.$value."\r\n";
				}

			}

		}

		if( $name1 != 'smmstudio.com' ){
			if(!empty($name1) && !empty($email) && !empty($phone)) {

				/*$post_data = array (
					'fields[name_2]' => 'Квиз',
					'fields[name_1]' => $name1,
					'fields[1851983_1][4351093]'  => $phone,
					'fields[1851985_1][4351105]'  => $email,
					'fields[note_2]' => $mess,
					'fields[2095595_2][4617751]' => $serviceFormData,
					'fields[1958329_2]' => $utmSource,
					'fields[1958331_2]' => $utmMedium,
					'fields[1958335_2]' => $utmTerm,
					'fields[1958337_2]' => $utmContent,
					'form_id' => '937103',
					'hash' => 'ad574ec37462bed32b1897dade500fb8'
				);

				$chanelAmoQuiz = curl_init();

				curl_setopt($chanelAmoQuiz, CURLOPT_URL, 'https://forms.amocrm.com/queue/add');
				curl_setopt($chanelAmoQuiz, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($chanelAmoQuiz, CURLOPT_POST, 1);
				curl_setopt($chanelAmoQuiz, CURLOPT_POSTFIELDS, $post_data);

				$output = curl_exec($chanelAmoQuiz);

				curl_close($chanelAmoQuiz);*/

			}

			//Auth Creatio

					$curlAuth = curl_init();

					curl_setopt($curlAuth, CURLOPT_URL, 'https://smmstudio.creatio.com/ServiceModel/AuthService.svc/Login');
					curl_setopt($curlAuth, CURLOPT_RETURNTRANSFER, true);
					curl_setopt($curlAuth, CURLOPT_ENCODING , '');
					curl_setopt($curlAuth, CURLOPT_MAXREDIRS, 10);
					curl_setopt($curlAuth, CURLOPT_TIMEOUT , 0);
					curl_setopt($curlAuth, CURLOPT_HEADER , true);
					curl_setopt($curlAuth, CURLOPT_FOLLOWLOCATION, true);
					curl_setopt($curlAuth, CURLOPT_HTTP_VERSION , CURL_HTTP_VERSION_1_1);
					curl_setopt($curlAuth, CURLOPT_CUSTOMREQUEST, 'POST');
					curl_setopt($curlAuth, CURLOPT_POSTFIELDS, '{  
						  "UserName":"Supervisor",
			        "UserPassword":"Smmstudio2.0"
						}');
					curl_setopt($curlAuth, CURLOPT_HTTPHEADER, array(
						'Accept: application/json',
						'Content-Type: application/json; charset=utf-8',
						'ForceUseSession: true'
					));

					//Get Auth Keys

					$response = curl_exec($curlAuth);

					$header_size = curl_getinfo($curlAuth, CURLINFO_HEADER_SIZE);
						$header = substr($response, 0, $header_size);

						$headersArray = explode(":", $header);

						$bpmLoader = '';
						$asp = '';
						$bpmCsRf = '';
						$usName = '';

						foreach ( $headersArray as $item ){

							if ( stristr($item, 'BPMLOADER')) {
							  $bpmLoader = $item;
								$bpmLoader = explode(';', $bpmLoader);
								$bpmLoader = $bpmLoader[0];
								$bpmLoader = explode('=', $bpmLoader);
								$bpmLoader = $bpmLoader[1];
							}

							if ( stristr($item, '.ASPXAUTH')) {
								$asp = $item;
								$asp = explode(';', $asp);
								$asp = $asp[0];
								$asp = explode('=', $asp);
								$asp = $asp[1];
							}

							if ( stristr($item, 'BPMCSRF')) {
								$bpmCsRf = $item;
								$bpmCsRf = explode(';', $bpmCsRf);
								$bpmCsRf = $bpmCsRf[0];
								$bpmCsRf = explode('=', $bpmCsRf);
								$bpmCsRf = $bpmCsRf[1];
							}

							if ( stristr($item, 'UserType')) {
								$usName = $item;
								$usName = explode(';', $usName);
								$usName = $usName[0];
								$usName = explode('=', $usName);
								$usName = $usName[1];
							}
			      		}


			      		$allCookieStr = '.ASPXAUTH='.$asp.'; BPMCSRF='.$bpmCsRf.'; BPMLOADER='.$bpmLoader.'; UserType='.$usName.'';

			      		$authCookie = 'BPMCSRF: '.$bpmCsRf.'';
						$aspLid = '.ASPXAUTH='.$asp.';';
						$userLid = 'UserName='.$usName.';';
						$bpmLoaderLid = 'BPMLOADER='.$bpmLoader.';';

						setcookie('BPMLOADER', $bpmLoader);
						setcookie('.ASPXAUTH', $asp);
						setcookie('BPMCSRF', $bpmCsRf);
						setcookie('UserName', $usName);

					/*$manage = explode(":", $response);

					$bpmLoader = explode(';', $manage[36]);
					$asp = explode(';', $manage[37]);
					$bpmCsRf = explode(';',$manage[38]);
					$usName = explode(';',$manage[39]);

					$bpmLoaderStr = $bpmLoader[0];
					$aspStr = $asp[0];
					$bpmCsRfStr = $bpmCsRf[0];
					$usNameStr = $usName[0];

					$allCookieStr = $aspStr.'; '.$bpmCsRfStr.'; '.$bpmLoaderStr.'; '.$usNameStr.'';

					$bpmLoader = explode('=', $bpmLoader[0]);
					$asp = explode('=', $asp[0]);
					$bpmCsRf = explode('=', $bpmCsRf[0]);
					$usName = explode('=', $usName[0]);

					$authCookie = 'BPMCSRF: '.$bpmCsRf[1].'';
					$aspLid = '.ASPXAUTH='.$asp[1].';';
					$userLid = 'UserName='.$usName[1].';';
					$bpmLoaderLid = 'BPMLOADER='.$bpmLoader[1].';';

					setcookie('BPMLOADER', $bpmLoader[1]);
					setcookie('.ASPXAUTH', $asp[1]);
					setcookie('BPMCSRF', $bpmCsRf[1]);
					setcookie('UserName', $usName[1]);*/

					curl_close($curlAuth);

					//Source Logic

					$lidSource = '';

					if ( $utmSource == 'google_ads' || $utmSource == 'adwords'){
						$lidSource = '1e8519ee-1da2-4be8-8dbd-b5ea5c0d7ffa';
					}elseif  ($utmSource == 'facebook_ads' ){
						$lidSource = '2b79c51f-ccbe-45c1-ba8e-844320b74f47';
					}else{
						$lidSource = '52dbcd19-6733-4e3c-9c7f-2f64f118f51a';
					}

					//Create Contact ID

					$contactId = '';

					//Find Contact

					$curlFindContact = curl_init();

					curl_setopt_array($curlFindContact, array(
						CURLOPT_URL => 'https://smmstudio.creatio.com/0/odata/ContactCommunication?$filter=contains(Number,\''.$phone.'\')%20or%20contains(Number,\''.$email.'\')',
						CURLOPT_RETURNTRANSFER => true,
						CURLOPT_ENCODING => '',
						CURLOPT_MAXREDIRS => 10,
						CURLOPT_TIMEOUT => 0,
						CURLOPT_FOLLOWLOCATION => true,
						CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
						CURLOPT_CUSTOMREQUEST => 'GET',
						CURLOPT_HTTPHEADER => array(
							'Accept: application/json',
							'Content-Type: application/json; charset=utf-8',
							'ForceUseSession: true',
							/*'BPMCSRF: '.$bpmCsRf[1].'',*/
							'BPMCSRF: '.$bpmCsRf.'',
							'Cookie: '.$allCookieStr.''

						),
					));

					$responseFindContact = curl_exec($curlFindContact);

					$findContactJson = json_decode($responseFindContact, true);

					curl_close($curlFindContact);

					//Get Contact ID

					$contactId = $findContactJson['value'][0]['ContactId'];

					//Create Note To Find Contact

					$textNotation = $mess.'. Контакт существует, указанные данные - телефон: '.$phone.', почта: '.$email.'.';

					//Create contact

					if ( $contactId == '' ){

						//Create Note To New Contact

						$textNotation = $mess;

						$curlContact = curl_init();

						curl_setopt_array($curlContact , array(
							CURLOPT_URL => 'https://smmstudio.creatio.com/0/odata/Contact',
							CURLOPT_RETURNTRANSFER => true,
							CURLOPT_ENCODING => '',
							CURLOPT_MAXREDIRS => 10,
							CURLOPT_TIMEOUT => 0,
							CURLOPT_FOLLOWLOCATION => true,
							CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
							CURLOPT_CUSTOMREQUEST => 'POST',
							CURLOPT_POSTFIELDS =>'{
						    "Name": "'.$name1.'",
						    "Phone": "'.$phone.'",
						    "Email": "'.$email.'"
						    
						}',
							CURLOPT_HTTPHEADER => array(
								/*'BPMCSRF: '.$bpmCsRf[1].'',*/
								'BPMCSRF: '.$bpmCsRf.'',
								'Content-Type: application/json',
								'Cookie: '.$allCookieStr.''
							),
						));

						$responseContact = curl_exec($curlContact );

						curl_close($curlContact );

						$contactJson = json_decode($responseContact, true);

						//Get Contact ID

						$contactId = $contactJson['Id'];

					}

					//Create Lid

					$curlLid = curl_init();

					curl_setopt_array($curlLid, array(
						CURLOPT_URL => 'https://smmstudio.creatio.com/0/odata/UsrDeals',
						CURLOPT_RETURNTRANSFER => true,
						CURLOPT_ENCODING => '',
						CURLOPT_MAXREDIRS => 10,
						CURLOPT_TIMEOUT => 0,
						CURLOPT_FOLLOWLOCATION => true,
						CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
						CURLOPT_CUSTOMREQUEST => 'POST',
						CURLOPT_POSTFIELDS =>'{
						    "UsrName": "'.$quizName.'",
						    "UsrClientId": "'.$contactId.'",
						    "UsrString5" : "'.$message.'",
						    "UsrString18" : "gaClientId",
						    "UsrString20" : "'.$utmSource.'",
						    "UsrString21" : "'.$utmMedium.'",
						    "UsrString22" : "'.$utmCampaign.'",
						    "UsrString23" : "'.$utmTerm.'",
						    "UsrString24" : "'.$utmContent.'",
						    "UsrString26" : "'.$gclid.'",
						    "UsrSourceId":"'.$lidSource.'",
						    "UsrNotes": "'.$textNotation.'"
						    
						}',
						CURLOPT_HTTPHEADER => array(
							/*'BPMCSRF: '.$bpmCsRf[1].'',*/
							'BPMCSRF: '.$bpmCsRf.'',
							'Content-Type: application/json',
							'Cookie: '.$allCookieStr.''
						),
					));

					$responseLid = curl_exec($curlLid);

					curl_close($curlLid);

					$liedJson = json_decode($responseLid, true);
		}else{

		}

	}

	add_action('wp_ajax_quiz_form', 'quiz_form_callback');
	add_action('wp_ajax_nopriv_quiz_form', 'quiz_form_callback');


//

	function add_async_attribute($tag, $handle) {

		$scripts_to_async = array('smmstudio-main-js', 'smmstudio-owl-caruse', 'smmstudio-fancybox', 'smmstudio-typed', 'bootstrap-4-scripts', 'smmstudio-slick', 'smmstudio-phone-masc', 'smmstudio-youtube', 'smmstudio-viewportchecker', 'smmstudio-validator', 'custom-scrollbar', 'lazy', );

		foreach($scripts_to_async as $async_script) {
			if ($async_script === $handle) {
				return str_replace(' src', ' defer src', $tag);
			}
		}
		return $tag;

	}

	add_filter('script_loader_tag', 'add_async_attribute', 10, 2);


