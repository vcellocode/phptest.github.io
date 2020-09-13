<?php
$to      = 'robertopiodisano@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: vcellocode@gmail.com' . "\r\n" . phpversion();

mail($to, $subject, $message, $headers);
?>
