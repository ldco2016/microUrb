<?php

session_start();

require_once 'libs/phpmailer/PHPMailerAutoload.php';

	$errors = [];

	if (isset($_POST['name'], $_POST['email'], $_POST['message'])) {
		
		$fields = [
			'name' => $_POST['name'],
			'email' => $_POST['email'],
			'message' => $_POST['message']
		];

		foreach ($fields as $field => $data) {
			if (empty($data)) {
				$errors[] = 'The ' . $field . ' field is required.';
			}
		}

		if (empty($errors)) {

			$mail = new PHPMailer;

			$mail->isSMTP();
			$mail->SMTPAuth = true;

			$mail->SMTPDebug = 1;

			$mail->Host = 'smtp.gmail.com';
			$mail->Username = 'renaissance.scholar2012@gmail.com';
			$mail->Password = 'eTqgPoFH4d8S';
			$mail->SMTPSecure = 'ssl';
			$mail->Port = 465;

			$mail->isHTML();

			$mail->Subject = 'Contact form submitted';
			$mail->Body = 'From: ' . $fields['name'] . ' ('.$fields['email'].')<p>'. $fields['message'] .'</p>';

			$mail->FromName = 'Contact';

			$mail->AddAddress('renaissance.scholar2012@gmail.com','Daniel Cortes');

			if ($mail->send()) {
				header('Location: thanks.php');
				die();
			} else {
				$errors[] = 'Sorry, could not send email. Try again later.';
			}
		}

	} else {
		$errors[] = 'Something went wrong.';
	}

	$_SESSION['errors'] = $errors;
	$_SESSION['fields'] = $fields;

	header('Location: contact.php');
