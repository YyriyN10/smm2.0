<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}

	/**
	 * Main form
	 */

	use PHPMailer\PHPMailer\PHPMailer;
	use Telegram\Bot\Api;

	add_action( 'admin_post_nopriv_main_contact_form', 'main_contact_form_callback' );
	add_action( 'admin_post_main_contact_form', 'main_contact_form_callback' );


	function main_contact_form_callback() {

		require_once get_template_directory() . '/vendor/autoload.php';
		require_once get_template_directory() . '/Mobile_Detect.php';

		function clearData($data) {
			return addslashes(strip_tags(trim($data)));
		}

		if ( isset( $_POST['name']) ){
			$name = clearData($_POST['name']);
		}else{
			$name = '';
		}

		if ( isset( $_POST['phone'] ) ){
			$phone = clearData($_POST['phone']);
		}else{
			$phone = '';
		}

		if ( isset( $_POST['name'] ) ){
			$email = clearData($_POST['email']);
		}else{
			$email = '';
		}

		if ( isset( $_POST['form-lang']) ){
			$formLang = clearData($_POST['form-lang']);
		}else{
			$formLang = '';
		}

		if ( isset( $_POST['home-url']) ){
			$homeUrl = clearData($_POST['home-url']);
		}else{
			$homeUrl = '';
		}

		if ( isset( $_POST['message']) ){
			$message = clearData($_POST['message']);
		}else{
			$message = '';
		}

		if ( isset( $_POST['moreinfo']) ){
			$spamFild = clearData($_POST['moreinfo']);
		}else{
			$spamFild = '';
		}

		if ( isset( $_POST['page-name']) ){
			$pageName = clearData($_POST['page-name']);
		}else{
			$pageName = '';
		}

		if ( isset( $_POST['utm_source']) ){
			$utmSource = clearData($_POST['utm_source']);
		}else{
			$utmSource = '';
		}

		if ( isset( $_POST['utm_medium']) ){
			$utmMedium = clearData($_POST['utm_medium']);
		}else{
			$utmMedium = '';
		}

		if ( isset( $_POST['utm_campaign']) ){
			$utmCampaign = clearData($_POST['utm_campaign']);
		}else{
			$utmCampaign = '';
		}

		if ( isset( $_POST['utm_term']) ){
			$utmTerm = clearData($_POST['utm_term']);
		}else{
			$utmTerm = '';
		}

		if ( isset( $_POST['utm_content']) ){
			$utmContent = clearData($_POST['utm_content']);
		}else{
			$utmContent = '';
		}

		if ( isset( $_POST['gclid']) ){
			$gclid = clearData($_POST['gclid']);
		}else{
			$gclid = '';
		}

		if ( isset( $_POST['ch-service']) ){
			$servicesList = clearData($_POST['ch-service']);
		}else{
			$servicesList = '';
		}

		$addedServices = '';

		if ( $servicesList ){
			foreach ( $servicesList as $key => $value ){

				if ( $value == 'target' ){
					$addedServices.= 'Таргетированная реклама ';
				}
				if ( $value == 'ved' ){
					$addedServices.= 'SMM ';
				}
				if ( $value == 'context' ){
					$addedServices.= 'Контекстная реклама ';
				}
				if ( $value == 'dev' ){
					$addedServices.= 'Разработка сайтов ';
				}
				if ( $value == 'automation' ){
					$addedServices.= 'Автоматизация ';
				}
				if ( $value == 'diz' ){
					$addedServices.= 'Дизайн ';
				}
			}
		}

		if ( !empty($gclid)){
			$utmSource = 'adwords';
		}

		$lidSource = '';

		if ( $utmSource == 'google_ads' || $utmSource == 'adwords'){
			$lidSource = '1e8519ee-1da2-4be8-8dbd-b5ea5c0d7ffa';
		}elseif  ($utmSource == 'facebook_ads' ){
			$lidSource = '2b79c51f-ccbe-45c1-ba8e-844320b74f47';
		}else{
			$lidSource = '52dbcd19-6733-4e3c-9c7f-2f64f118f51a';
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

		if ( !empty($_POST) && wp_verify_nonce( $_POST['hash'], 'main_contact_form') && $spamFild == 'nospam'){

			$messageUaNot = 'порно';
			$messageEnNot = 'porno';
			$messageRefNot = '<a href';

			$messageSpamUa = strripos($message, $messageUaNot);
			$messageSpamEn = strripos($message, $messageEnNot);
			$messageSpamRef = strripos($message, $messageRefNot);

			if ($messageSpamUa === false && $messageSpamEn === false && $messageSpamRef === false){

				creatioIntegration($name, $email, $phone, $pageName, $message, $utmSource, $utmMedium, $utmCampaign, $utmTerm, $utmContent, $gclid, $lidSource, $addedServices);

				duplicateToMail($name, $email, $phone, $pageName, $message, $utmSource, $utmMedium, $utmCampaign, $utmTerm, $utmContent, $gclid, $lidSource, $addedServices);

				sendToTelegram($name, $email, $phone, $pageName, $message, $utmSource, $utmMedium, $utmCampaign, $utmTerm, $utmContent, $gclid, $lidSource, $addedServices, '');

			}else{
				spamToMail($name, $email, $phone, $pageName, $message, $utmSource, $utmMedium, $utmCampaign, $utmTerm, $utmContent, $gclid, $lidSource,$addedServices);
				sendToTelegram($name, $email, $phone, $pageName, $message, $utmSource, $utmMedium, $utmCampaign, $utmTerm, $utmContent, $gclid, $lidSource, $addedServices, 'spam');
			}

		}else{

			spamToMail($name, $email, $phone, $pageName, $message, $utmSource, $utmMedium, $utmCampaign, $utmTerm, $utmContent, $gclid, $lidSource,$addedServices);
			sendToTelegram($name, $email, $phone, $pageName, $message, $utmSource, $utmMedium, $utmCampaign, $utmTerm, $utmContent, $gclid, $lidSource, $addedServices, 'spam');
		}

		$cookie_name = "smmsend";
		$cookie_value = "sendmail";

		setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

		header('Location:'.$homeUrl.$thxName.'');

	}

	/*add_action('wp_ajax_quiz_form', 'quiz_form_callback');
	add_action('wp_ajax_nopriv_quiz_form', 'quiz_form_callback');

	function quiz_form_callback() {

		require_once __DIR__ . '/amocrm.phar';
		require_once('vendor/autoload.php');

		function clearData($data) {
			return addslashes(strip_tags(trim($data)));
		}

		if ( isset( $_POST['name']) ){
			$name = clearData($_POST['name']);
		}else{
			$name = '';
		}

		if ( isset( $_POST['phone']) ){
			$phone = clearData($_POST['phone']);
		}else{
			$phone = '';
		}

		if ( isset( $_POST['email']) ){
			$email = clearData($_POST['email']);
		}else{
			$email = '';
		}

		if ( isset( $_POST['quiz-name']) ){
			$quizName = clearData($_POST['quiz-name']);
		}else{
			$quizName = '';
		}

		if ( isset( $_POST['utm_source']) ){
			$utmSource = clearData($_POST['utm_source']);
		}else{
			$utmSource = '';
		}

		if ( isset( $_POST['utm_medium']) ){
			$utmMedium = clearData($_POST['utm_medium']);
		}else{
			$utmMedium = '';
		}

		if ( isset( $_POST['utm_campaign']) ){
			$utmCampaign = clearData($_POST['utm_campaign']);
		}else{
			$utmCampaign = '';
		}

		if ( isset( $_POST['utm_term']) ){
			$utmTerm = clearData($_POST['utm_term']);
		}else{
			$utmTerm = '';
		}

		if ( isset( $_POST['utm_content']) ){
			$utmContent = clearData($_POST['utm_content']);
		}else{
			$utmContent = '';
		}

		if ( isset( $_POST['gclid']) ){
			$gclid = clearData($_POST['gclid']);
		}else{
			$gclid = '';
		}

		$message = '';

		if ( !empty($gclid)){
			$utmSource = 'adwords';
		}

		foreach ( $_POST as $item => $name ){

			foreach ( $name as $key => $value ){

				if( is_array($value)){
					$value = implode(", ", $value);

					$message = $message.$key .' : '.$value."\r\n";
				}else{
					$message = $message.$key .' : '.$value."\r\n";
				}

			}

		}

		if( $name != 'smmstudio.com' ) {
			if ( ! empty( $name ) && ! empty( $email ) && ! empty( $phone ) ) {

				creatioIntegration( $name, $email, $phone, '', $message, $utmSource, $utmMedium, $utmCampaign, $utmTerm, $utmContent, $gclid, '', '');

				duplicateToMail( $name, $email, $phone, '', $message, $utmSource, $utmMedium, $utmCampaign, $utmTerm, $utmContent, $gclid, '', '' );

			}
		}
	}*/


/**
 * Creatio integration
 *
 * @param $name
 * @param $email
 * @param $phone
 * @param $pageName
 * @param $message
 * @param $utmSource
 * @param $utmMedium
 * @param $utmCampaign
 * @param $utmTerm
 * @param $utmContent
 * @param $gclid
 * @param $lidSource
 * @param $addedServices
 */


function creatioIntegration($name, $email, $phone, $pageName, $message, $utmSource, $utmMedium, $utmCampaign, $utmTerm, $utmContent, $gclid, $lidSource, $addedServices){

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

	curl_close($curlAuth);

	$contactId = '';

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

	if ( $addedServices !== '' ){
		$textNotation = $addedServices.'. Контакт існує, вказані данні - телефон: '.$phone.', пошта: '.$email.'.';
	}else{
		$textNotation = 'Контакт існує, вказані данні - телефон: '.$phone.', пошта: '.$email.'.';
	}

	//Create contact

	if ( $contactId == '' ){


		$textNotation = $addedServices;

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
				'BPMCSRF: '.$bpmCsRf.'',
				'Content-Type: application/json',
				'Cookie: '.$allCookieStr.''
			),
		));

		$responseContact = curl_exec($curlContact );

		curl_close($curlContact );

		$contactJson = json_decode($responseContact, true);

		$contactId = $contactJson['Id'];

	}

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
			'BPMCSRF: '.$bpmCsRf.'',
			'Content-Type: application/json',
			'Cookie: '.$allCookieStr.''
		),
	));

	$responseLid = curl_exec($curlLid);

	curl_close($curlLid);
}

/***
 * duplicateToMail
 *
 * @param $name
 * @param $email
 * @param $phone
 * @param $pageName
 * @param $message
 * @param $utmSource
 * @param $utmMedium
 * @param $utmCampaign
 * @param $utmTerm
 * @param $utmContent
 * @param $gclid
 * @param $lidSource
 * @param $addedServices
 */

function duplicateToMail( $name, $email, $phone, $pageName, $message, $utmSource, $utmMedium, $utmCampaign, $utmTerm, $utmContent, $gclid, $lidSource, $addedServices ){
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
		$mail->Subject = 'Заявка з '.$pageName.'';
		$mail->Body = "<p>Имя: $name</p><p>Телефон: $phone</p><p>Email: $email</p><p>Задача: $message</p><p>Сфера: $addedServices</p><p>utmSource: $utmSource</p><p>utmMedium: $utmMedium</p><p>utmCampaign: $utmCampaign</p><p>utmTerm: $utmTerm</p><p>utmContent: $utmContent</p><p>gclid: $gclid</p>";

		$mail->send();

	} catch (Exception $e) {
		echo 'Message could not be sent.';

		echo 'Mailer Error: ' . $mail->ErrorInfo;
	}
}

/**
 * sendToTelegram
 *
 * @param $name
 * @param $email
 * @param $phone
 * @param $pageName
 * @param $message
 * @param $utmSource
 * @param $utmMedium
 * @param $utmCampaign
 * @param $utmTerm
 * @param $utmContent
 * @param $gclid
 * @param $lidSource
 * @param $addedServices
 * @param $spam
 */

function sendToTelegram($name, $email, $phone, $pageName, $message, $utmSource, $utmMedium, $utmCampaign, $utmTerm, $utmContent, $gclid, $lidSource, $addedServices, $spam ){

	$telegram = new Api('1744882322:AAGaC3-8vCk9Up8VqeSPz_HAPhewUIyze24');

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

	if ( $spam == '' ){
		$lidName = '🚀НОВИЙ ЛІД💸';
	}else{
		$lidName = '🚀НОВИЙ СПАМ';
	}

	$response = $telegram->sendMessage([
		'chat_id' => $telegramTargetChatId,
		'text'    => $lidName."\r\n"."\r\n".'Імʼя: '.$name."\r\n".'Телефон: '.$phone."\r\n".'Email: '.$email."\r\n".'Повідомлення: '.$message."\r\n".'Потрібні послуги: '.$addedServices."\r\n".'Сторінка заявки: '.$pageName."\r\n".'Країна: '.$country."\r\n".'Пристрій: '.$device."\r\n".'Інформація про пристрій: '.$user_agent."\r\n"."\r\n".'Аналітика'."\r\n"."\r\n".'utmSource: '.$utmSource."\r\n".'utmMedium: '.$utmMedium."\r\n".'utmCampaign: '.$utmCampaign."\r\n".'utmTerm: '. $utmTerm."\r\n".'utmContent: '.$utmContent."\r\n".'gsLid: '.$gclid.''
	]);
}

	/***
	 * spamToMail
	 *
	 * @param $name
	 * @param $email
	 * @param $phone
	 * @param $pageName
	 * @param $message
	 * @param $utmSource
	 * @param $utmMedium
	 * @param $utmCampaign
	 * @param $utmTerm
	 * @param $utmContent
	 * @param $gclid
	 * @param $lidSource
	 * @param $addedServices
	 */

	function spamToMail( $name, $email, $phone, $pageName, $message, $utmSource, $utmMedium, $utmCampaign, $utmTerm, $utmContent, $gclid, $lidSource, $addedServices ){
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
			$mail->Subject = 'Заявка з '.$pageName.'';
			$mail->Body = "<p>Имя: $name</p><p>Телефон: $phone</p><p>Email: $email</p><p>Задача: $message</p><p>Сфера: $addedServices</p><p>utmSource: $utmSource</p><p>utmMedium: $utmMedium</p><p>utmCampaign: $utmCampaign</p><p>utmTerm: $utmTerm</p><p>utmContent: $utmContent</p><p>gclid: $gclid</p>";

			$mail->send();

		} catch (Exception $e) {
			echo 'Message could not be sent.';

			echo 'Mailer Error: ' . $mail->ErrorInfo;
		}
	}