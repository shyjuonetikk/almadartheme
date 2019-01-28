<?php
$recipient_email = "jithinvjayaprakash@gmail.com";
$from_email = "hr@almadar.com"; //from email using site domain.

if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
	die('Sorry Request must be Ajax POST'); //exit script
}

$mailId = $_POST['newslettter-mail'];

$message_body = "Newseletter request from the Mail ID:\t" . $mailId;

//send plain email otherwise
$headers = "From:" . $from_email . "\r\n" .
"Reply-To: " . $sender_email . "\n" .
"X-Mailer: PHP/" . phpversion();
$body = $message_body;

$sentMail = mail($recipient_email, "Al Madar Holding WLL - Resumes", $body, $headers);
if ($sentMail) //output success or failure messages
{
	print json_encode(array('type' => 'done', 'text' => 'Your CV has been successfully submitted'));
	exit;
} else {
	print json_encode(array('type' => 'error', 'text' => 'Could not send mail! Please check your network connections'));
	exit;
}
?>