<?php


	require_once( 'vendor/autoload.php' );

	use Telegram\Bot\Api;

	$briefType = $_POST['page-name'];
	$homeUrl = $_POST['home-url'];
	$siteLang = $_POST['site-lang'];
	$thxName = 'spasibo-za-brif';
	$thxNameUa = 'ua/dyakuyu-za-brif';
	$thxNameEn = 'en/thanks-for-the-brief';


	$mpdf = new mPDF();

	if ( $briefType == 'Бриф по таргетированной рекламе' || $briefType == 'Бриф по таргетованій рекламі' || $briefType == 'Targeted advertising brief'){

		$html = '
			<style>
				body {font-weight: 300;}
				h1,h2,h3,h4,h5,h6 {color: #333;}
				.content {margin-top: 25px;}
				.header {font-weight: bold; font-size: 20px; border: solid 5px #ededed; padding: 15px; text-align: center;}
			</style>
			<div class="header">Бриф</div>
			<div class="content">
				<div class="item">
					<h3>1. Название проекта, адрес сайта, контактное лицо, телефон и email.</h3>
					<p>'.strip_tags($_POST['question-1']).'</p>
				</div>
				<div class="item">
					<h3>2. Какие продукты будем рекламировать. Средний чек по данному продукту.</h3>
					<p>'.strip_tags($_POST['question-2']).'</p>
				</div>
				<div class="item">
					<h3>3. Целевая аудитория Вашего проекта. Основные сегменты. География, возраст, пол, платежеспособность.</h3>
					<p>'.strip_tags($_POST['question-3']).'</p>
				</div>
				<div class="item">
					<h3>4. Основные конкуренты (2-3) внутри вашего рынка.</h3>
					<p>'.strip_tags($_POST['question-4']).'</p>
				</div>
				<div class="item">
					<h3>5. Ваши основные, реальные преимущества над конкурентами.</h3>
					<p>'.strip_tags($_POST['question-5']).'</p>
				</div>
				<div class="item">
					<h3>6. Если у Вас есть сайт и стоит Google Analytics, предоставьте доступ на почту analytics@smmstudio.com</h3>
					<p>'.strip_tags($_POST['question-6']).'</p>
				</div>
				<div class="item">
					<h3>7. Предоставьте доступ к Facebook Business Manager (куда интегрирована бизнес-страница и рекламный аккаунт, карта). Доступ на уровне администратора. ID компании-партнёра SMMSTUDIO для предоставления доступа — 1389865884503337</h3>
					<p>'.strip_tags($_POST['question-7']).'</p>
				</div>
				<div class="item">
					<h3>8. Опишите вашу маркетинговую воронку (как происходит знакомство с компанией и покупка).</h3>
					<p>'.strip_tags($_POST['question-8']).'</p>
				</div>
				<div class="item">
					<h3>9. Финансовые вопросы запуска:<br>
							&mdash; сколько заявок (обращений) в месяц получаете сейчас по всем каналам;<br>
							&mdash; стоимость заявки сейчас;<br>
							&mdash; сколько заявок Вы хотели бы получать в месяц;<br>
							&mdash; по какой цене Вы хотели бы получать заявки;<br>
							&mdash; рекламный бюджет на день (не менее $10 на одно направление).</h3>
					<p>'.strip_tags($_POST['question-9']).'</p>
				</div>
				<div class="item">
					<h3>10. Вставьте ссылку на облако, где загружен ваш логотип/брендбук/фотографии/видео для запуска проекта (то, что по Вашему мнению нам может понадобиться).</h3>
					<p>'.strip_tags($_POST['question-10']).'</p>
				</div>
				<div class="item">
					<h3>11. Дополнительная информация.</h3>
					<p>'.strip_tags($_POST['question-11']).'</p>
				</div>
	
			</div>
		';

		$mpdf->WriteHTML($html);
		$nameFile = 'brief_'.date(dmY_His).'.pdf';
		$mpdf->Output( $nameFile,'F');

		$telegram = new Api('313013684:AAEDuV_zLoraHN7TRgz31EVDzlUi2Zm6HsQ');

		$response = $telegram->sendMessage([
			'chat_id' => '-1001262770951',
			'text'    => 'Заполнен бриф от клиента: ' . $_POST['question-1'] . '. https://smmstudio.com/briefs/'.$nameFile
		]);

	}

	if ($siteLang == 'ru') {
		header('Location:'.$homeUrl.$thxName.'');
	}elseif ($siteLang == 'ua') {
		header('Location: https://smmstudio.com/'.$thxNameUa.'');
	}elseif ($siteLang == 'en'){
		header('Location: https://smmstudio.com/'.$thxNameEn.'');
	}

	