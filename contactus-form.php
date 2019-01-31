<?php
$recipient_email = "z.filali@a101.com";
$from_email = "contact@almadar.com"; //from email using site domain.

if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
	die('Sorry Request must be Ajax POST'); //exit script
}

if ($_POST) {

	$contactName = $_POST['inputName'];
	$contactCompany = $_POST['inputCompany'];
	$contactMail = $_POST['inputEmail'];
	$contactSubject = $_POST['inputSubject'];
	$contactMessage = $_POST['inputMessage'];

	$message_body = "You need to get in touch with " . $contactName . "\n";
	$message_body .= "Company: " . $contactCompany . "\n";
	$message_body .= "Contact Mail: " . $contactMail . "\n";
	$message_body .= "Subject: " . $contactSubject . "\n";
	$message_body .= "Message: " . $contactMessage . "\n";

	$headers = "From:" . $from_email . "\r\n" .
	"Reply-To: " . $contactMail . "\n" .
	"X-Mailer: PHP/" . phpversion();
	$body = $message_body;

	$sentMail = mail($recipient_email, "Al Madar Holding WLL - Contact Form", $body, $headers);
	if ($sentMail) //output success or failure messages
	{
		print json_encode(array('type' => 'done', 'text' => 'We will get in touch with you soon'));
		exit;
	} else {
		print json_encode(array('type' => 'error', 'text' => 'Could not send mail! Please check your network connections'));
		exit;
	}
}
?>