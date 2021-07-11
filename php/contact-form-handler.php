<?php

$errors = [];
$errorMessage = '';

if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
	$subject=$_POST['subject'];
    $message = $_POST['message'];

    if (empty($name)) {
        $errors[] = 'Name is empty';
    }
	if (empty($email)) {
			$errors[] = 'Email is empty';
		} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$errors[] = 'Email is invalid';
		}
	if (empty($subject)) {
        $errors[] = 'Subject is empty';
    }

    if (empty($message)) {
        $errors[] = 'Message is empty';
    }


    if (empty($errors)) {
        $toEmail = 'Benammar55@yahoo.com';
        $emailSubject = $subject;
		$headers =  'MIME-Version: 1.0' . "\r\n"; 
		$headers .= 'From:'.$email. "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 					
        $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "subject:{$subject}", "Message:", $message];
        $body = join(PHP_EOL, $bodyParagraphs);

        if (mail($toEmail, $emailSubject, $body, $headers)) {
            header('Location:../thank-you.html');
        } else {
            $errorMessage = 'Oops, something went wrong. Please try again later';
        }
    } else {
        $allErrors = join('<br/>', $errors);
        $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
    }
}

?>