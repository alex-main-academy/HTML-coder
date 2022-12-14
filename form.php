<?php
		$name = $_POST['name'];
		$email = $_POST['mail'];
		$phone = $_POST['phone'];

		$lead = "Имя: $name Почта: $email Телефон: $phone \r\n";

		$fp = fopen('leads.txt', 'a+');
		fwrite($fp, $lead);
		fclose($fp);

		header('Location: http://html-coder');

?>
