<?php


	require_once( 'vendor/autoload.php' );

	use Telegram\Bot\Api;

	$briefType = $_POST['page-name'];
	$homeUrl = $_POST['home-url'];
	$siteLang = $_POST['site-lang'];
	$thxName = 'spasibo-za-brif';
	$thxNameUa = 'ua/dyakuyu-za-brif';

	$chQuestion = array($_POST['question-10']);

	$triggerAnswer = $_POST['question-11'];

	if( $triggerAnswer == '1' ){
		$triggerAnswer = 'да';
	}else{
		$triggerAnswer = 'нет';
	}


	$chAnsw = '';

	if($chQuestion){
		foreach ( $chQuestion as $key => $value){
			if( is_array($value)){
				$value = implode(", ", $value);

				$chAnsw = $chAnsw.$value."\r\n";
			}else{
				$chAnsw = $chAnsw.$value."\r\n";
			}
		}
	}


	$mpdf = new mPDF();

	if ( $briefType == 'Бриф по контексту' ){

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
					<h3>1. Название проекта, адрес сайта.</h3>
					<p>'.strip_tags($_POST['question-1']).'</p>
				</div>
				<div class="item">
					<h3>2.  Укажите контактное лицо, телефон и e-mail.</h3>
					<p>'.strip_tags($_POST['question-2']).'</p>
				</div>
				<div class="item">
					<h3>3. Укажите список приоритетных товаров, услуг, категорий или разделов, которые вы хотите рекламировать</h3>
					<p>'.strip_tags($_POST['question-3']).'</p>
				</div>
				<div class="item">
					<h3>4. Что ожидаете в первую очередь от нашего сотрудничества: оптимизации рекламных кампаний, роста прибыли, увеличения количества звонков, заявок или покупок на сайте?</h3>
					<p>'.strip_tags($_POST['question-4']).'</p>
				</div>
				<div class="item">
					<h3>5. Укажите 3-5 своих основных конкурентов (бренды, ссылки на сайты).</h3>
					<p>'.strip_tags($_POST['question-5']).'</p>
				</div>
				<div class="item">
					<h3>6. Опишите ваши целевые аудитории (пол, возраст, должность, интересы).</h3>
					<p>'.strip_tags($_POST['question-6']).'</p>
				</div>
				<div class="item">
					<h3>7. Регион показа рекламы (страна, область, город).</h3>
					<p>'.strip_tags($_POST['question-7']).'</p>
				</div>
				<div class="item">
					<h3>8. Как происходит взаимодействие клиента с отделом продаж?
Какую долю от всех заявок занимают звонки и остальные методы, например: корзина, форма обратной связи, онлайн-чат, посещение офиса.
</h3>
					<p>'.strip_tags($_POST['question-8']).'</p>
				</div>
				<div class="item">
					<h3>9. Бюджет рекламной кампании на день, месяц или определенный период.</h3>
					<p>'.strip_tags($_POST['question-9']).'</p>
				</div>
				<div class="item">
					<h3>10. Укажите желаемый тип рекламной кампании:</h3>
					<p>'.strip_tags($chAnsw).'</p>
				</div>
				<div class="item">
					<h3>11. Запускалась ли ранее реклама?</h3>
					<p>'.strip_tags($triggerAnswer).'</p>
				</div>
				<div class="item">
					<h3>12. Как оцениваете ее эффективность? Кратко об удачах и неудачах, видение, почему так.</h3>
					<p>'.strip_tags($_POST['question-12']).'</p>
				</div>
	
			</div>
		';

		$mpdf->WriteHTML($html);
		$nameFile = 'brief_'.date(dmY_His).'.pdf';
		$mpdf->Output( $nameFile,'F');

		$telegram = new Api('1033143171:AAEsnEpX7gbIrqNB_c4ZUn0fLqOzT0JkZZ8');

		$response = $telegram->sendMessage([
			'chat_id' => '-1001489442231',
			'text'    => 'Заполнен бриф по контексту от клиента: ' . $_POST['question-2'] . '. https://smmstudio.com/brief-context/'.$nameFile
		]);

	}


	if ($siteLang == 'ru') {
		header('Location:'.$homeUrl.$thxName.'');
	}elseif ($siteLang == 'ua') {
		header('Location: https://smmstudio.com/'.$thxNameUa.'');
	}