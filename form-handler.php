<?php
$name = $_POST['Name'];
$email = $_POST['Email'];
$subject = $_POST['Subject'];
$message = $_POST['Message'];

$email_from = '';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n"."Email: $email.\n"."Subject: $subject.\n"."Message:$message";

$to = 'abdullahshakir226@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $email \r\n";

mail($to,$subject,$email_body,$headers);

header("Location: contact.html");
?>