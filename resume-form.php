<?php
$recipient_email = "jithinvjayaprakash@gmail.com";

// $recipient_email = the_field('hr_email');
$from_email = "hr@almadar.com"; //from email using site domain.

if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
	die('Sorry Request must be Ajax POST'); //exit script
}

if ($_POST) {

	$attachments = $_FILES['file_attach'];

	$allowedExtensions = array("pdf", "doc", "docx", "gif", "jpeg", "jpg", "png", "txt");

	$files = array();
	foreach ($_FILES as $name => $file) {
		$file_name = $file['name'];
		$temp_name = $file['tmp_name'];
		$file_type = $file['type'];
		$path_parts = pathinfo($file_name);
		$ext = $path_parts['extension'];
		if (!in_array($ext, $allowedExtensions)) {
			die("File $file_name has the extensions $ext which is not allowed");
		}
		array_push($files, $file);
	}

	$applicantFirstName = $_POST['career-first-name'];
	$applicantLastName = $_POST['career-last-name'];
	$appMail = $_POST['career-email'];
	$appRole = $_POST['career-role'];
	$appPhone = $_POST['career-phone'];
	if ($appPhone == "") {
		$appPhone = "Phone number is not available";
	}
	$appLocation = $_POST['career-location'];
	$appNation = $_POST['career-nationality'];
	$appFunction = $_POST['career-function'];
	if ($appFunction == "") {
		$appFunction = $appRole;
	}

// //construct a message body to be sent to recipient
	$message_body = "Resume from " . $applicantFirstName . " " . $applicantLastName . "\n";
	$message_body .= "Applicant Mail ID: " . $appMail . "\n";
	$message_body .= "Applicant Contact Number: " . $appPhone . "\n";
	$message_body .= "Applicant Location: " . $appLocation . "\n";
	$message_body .= "Applicant Nation: " . $appNation . "\n";
	$message_body .= "Applicant Function: " . $appFunction . "\n";

	// if ($file_count > 0) {
	//if attachment exists
	//header
	// $headers = "MIME-Version: 1.0\r\n";
	// $headers .= "From:" . $from_email . "\r\n";
	// $headers .= "Reply-To: " . $sender_email . "" . "\r\n";
	// $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n";

	// //message text
	// $body = "--$boundary\r\n";
	// $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
	// $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
	// $body .= chunk_split(base64_encode($message_body));

	// $x = "0";
	// //attachments
	// if (!empty($attachments['name'][$x])) {

	// 	if ($attachments['error'][$x] > 0) //exit script and output error if we encounter any
	// 	{
	// 		$mymsg = array(
	// 			1 => "The uploaded file exceeds the upload_max_filesize directive in php.ini",
	// 			2 => "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form",
	// 			3 => "The uploaded file was only partially uploaded",
	// 			4 => "No file was uploaded",
	// 			6 => "Missing a temporary folder");
	// 		print json_encode(array('type' => 'error', $mymsg[$attachments['error'][$x]]));
	// 		exit;
	// 	}

	// 	//get file info
	// 	$file_name = $attachments['name'][$x];
	// 	$file_size = $attachments['size'][$x];
	// 	$file_type = $attachments['type'][$x];

	// 	//read file
	// 	$handle = fopen($attachments['tmp_name'][$x], "r");
	// 	$content = fread($handle, $file_size);
	// 	fclose($handle);
	// 	$encoded_content = chunk_split(base64_encode($content)); //split into smaller chunks (RFC 2045)

	// 	$body .= "--$boundary\r\n";
	// 	$body .= "Content-Type: $file_type; name=" . $file_name . "\r\n";
	// 	$body .= "Content-Disposition: attachment; filename=" . $file_name . "\r\n";
	// 	$body .= "Content-Transfer-Encoding: base64\r\n";
	// 	$body .= "X-Attachment-Id: " . rand(1000, 99999) . "\r\n\r\n";
	// 	$body .= $encoded_content;
	// }

	// }
	//  else {
	// 	//send plain email otherwise
	// 	$headers = "From:" . $from_email . "\r\n" .
	// 	"Reply-To: " . $sender_email . "\n" .
	// 	"X-Mailer: PHP/" . phpversion();
	// 	$body = $message_body;
	// }

	$to = "jithin@onetikk.com";
	$from = "admin@onetikk.com"; //your website email type here
	$subject = "Email attachment tutorial";
	$message = $_POST['msg'];
	$headers = "From: $from";

	$semi_rand = md5(time());
	$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

	$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";
	$message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n";
	$message .= "--{$mime_boundary}\n";

	// preparing attachments
	for ($x = 0; $x < count($files); $x++) {
		$file = fopen($files[$x]['tmp_name'], "rb");
		$data = fread($file, filesize($files[$x]['tmp_name']));
		fclose($file);
		$data = chunk_split(base64_encode($data));
		$name = $files[$x]['name'];
		$message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$name\"\n" .
			"Content-Disposition: attachment;\n" . " filename=\"$name\"\n" .
			"Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
		$message .= "--{$mime_boundary}\n";
		$message .= $message_body;
	}
	// send

	$ok = mail($to, $subject, $message, $headers);
	if ($ok) {
		// echo "<p style='text-align:center'>mail sent to $to!</p>";
		print json_encode(array('type' => 'done', 'text' => 'Your CV has been successfully submitted'));
		exit;
	} else {
		// echo "<p>mail could not be sent!</p>";
		print json_encode(array('type' => 'error', 'text' => 'Could not send mail! Please check your network connections'));
		exit;
	}

	// $sentMail = mail($recipient_email, "Al Madar Holding WLL - Resume", $body, $headers);
	// if ($sentMail) //output success or failure messages
	// {
	// 	print json_encode(array('type' => 'done', 'text' => 'Your CV has been successfully submitted'));
	// 	exit;
	// } else {
	// 	print json_encode(array('type' => 'error', 'text' => 'Could not send mail! Please check your network connections'));
	// 	exit;
	// }
}
?>