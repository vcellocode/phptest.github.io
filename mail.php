<?php

$name = _REQUEST['name'];
$subject = REQUEST['subject'];
$email = _REQUEST['email'];

$to      = 'vcellocode@gmail.com';
$message = 'hello';
$headers = 'From: ' . $email . "\r\n" . phpversion();

mail($to, $subject, $message, $headers);
?>
