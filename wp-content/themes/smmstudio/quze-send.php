<?php

	require_once __DIR__ . '/amocrm.phar';
	require_once('vendor/autoload.php');
	require_once ('Mobile_Detect.php');

	use PHPMailer\PHPMailer\PHPMailer;
	use Telegram\Bot\Api;


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

	$phone = preg_replace( '/[^0-9]/', '', $phone);

	$voronka = 15516604;

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
						$mail->Subject = 'Квиз с сайта smmstudio.com';
						$mail->Body = "<p>Имя: $name1</p><p>Телефон: $phone</p><p>Email: $email</p><p>Результаты опроса: $mess</p><p>utmSource: $utmSource</p><p>utmMedium: $utmMedium</p><p>utmCampaign: $utmCampaign</p><p>utmTerm: $utmTerm</p><p>utmContent: $utmContent</p><p>gclid: $gclid</p>";

						$mail->send();

					} catch (Exception $e) {
						/*echo 'Message could not be sent.';

						echo 'Mailer Error: ' . $mail->ErrorInfo;*/
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
				'text'    => '🚀НОВИЙ КВІЗ💸'."\r\n"."\r\n".'Імʼя: '.$name1."\r\n".'Телефон: '.$phone."\r\n".'Email: '.$email."\r\n".'Результат опитування: '.$mess."\r\n".'Країна: '.$country."\r\n".'Пристрій: '.$device."\r\n".'Інформація про пристрій: '.$user_agent."\r\n"."\r\n".'Аналітика'."\r\n"."\r\n".'utmSource: '.$utmSource."\r\n".'utmMedium: '.$utmMedium."\r\n".'utmCampaign: '.$utmCampaign."\r\n".'utmTerm: '. $utmTerm."\r\n".'utmContent: '.$utmContent."\r\n".'gsLid: '.$gclid.''
			]);

		}
	}else{

	}