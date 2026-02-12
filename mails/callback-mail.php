<?php
session_start();
$win = "true";

// Если существует переменная POST, то
if ($_POST) {
	// Отправляем данные в Google
	function getCaptcha($SecretKey)
	{
		$Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdV1IcUAAAAABnQ0mXIp5Yh7tLEcAXzdqG6rx9Y&response={$SecretKey}");
		$Return = json_decode($Response);
		return $Return;
	}

	/* Принимаем данные обратно */
	$Return = getCaptcha($_POST['g-recaptcha-response']);
	// Если вероятность робота более 0.5, то считаем отправителя человеком и выполняем отправку почты
	if ($Return->success == true && $Return->score > .125) {

		$name = $_POST['name'];
		$tel = $_POST['tel'];
		
		$to = "vasilyev-r@mail.ru, vasilyev-r@yandex.ru";
		$subject = "Заявка с сайта site100.ru";
		$message = "Имя: " . $name . "\n";
		$message .= "Телефон: " . $tel;
		$headers  = "MIME-Version: 1.0\r\n";
		$headers .= "From: site100.ru\r\n";
		$headers .= "Content-type: text/html; charset=utf-8\r\n";
		
		mail( $to, $subject, $message, $headers );

		$_SESSION['win'] = 1;
		$_SESSION['recaptcha'] = '<p class="text-light">Спасибо за обращение! Я отвечу Вам в&#160;ближайшее время.</p>';
		header("Location: " . $_SERVER['HTTP_REFERER']);

	} else {
		// Иначе считаем отправителя роботом и выводим сообщение с просьбой повторить попытку
		$_SESSION['win'] = 1;
		$_SESSION['recaptcha'] = '<p class="text-light"><strong>Извините!</strong><br>Ваши действия похожи на робота. Пожалуйста повторите попытку!</p>';
		header("Location: " . $_SERVER['HTTP_REFERER']);
	}

	header("Location: " . $_SERVER['HTTP_REFERER']);
	exit();
}