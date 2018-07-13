<?php
	//Принимаем постовые данные
	$whatewer=$_POST['whatewer'];
	$user_name=$_POST['user_name'];
	$user_email=$_POST['user_email'];
	$user_message=$_POST['user_message'];

	//Тут указываем на какой ящик посылать письмо
	$to = "maystrenko33@gmail.com";
	//Далее идет тема и само сообщение
	// Тема письма
	$subject = "Заявка с сайта sergiymaystrenko.github.io";
	// Сообщение письма
	$message = "
	Форма, которую заполнил клиент: ".htmlspecialchars($whatewer)."
	Имя пользователя: ".htmlspecialchars($user_name)."
	Email: ".htmlspecialchars($user_email)."
	Сообщение: ".htmlspecialchars($user_message);
	// Телефон: <a href='tel:$phone'>".htmlspecialchars($phone)."</a>";

	// Отправляем письмо при помощи функции mail();
	$headers = "From: sergiymaystrenko.github.io <38985615+SergiyMaystrenko@users.noreply.github.com>\r\nContent-type: text/html; charset=UTF-8 \r\n";
	mail ($to, $subject, $message, $headers);
	// Перенаправляем человека на страницу благодарности и завершаем скрипт
	header('Location: thanks.html');
	exit();
?>
