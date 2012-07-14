<?php
if (isset($_POST['submit'])) {
	$name = filter_var($_POST['contact_form_name'], FILTER_SANITIZE_STRING);
	$email = filter_var($_POST['contact_form_email'], FILTER_SANITIZE_EMAIL);
	$message = filter_var($_POST['contact_form_body'], FILTER_SANITIZE_STRING);

	$to      = 'krimo@krimohafsaoui.com';
	$subject = 'A new message from '.$name;
	$headers = 'From: '. $email . "\r\n";

	mail($to, $subject, $message, $headers);
}
?>