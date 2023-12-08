<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$contact = $_POST['contact'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com'

$email_subject = 'New Form Submission'

$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
               "Contact: $contact.\n".
               "User Message: $message.\n";



$to = 'apeec308@gmail.com'

$headers = "From: $email_form \r\n";

$headers = "Reply-Tp: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contactus.html");

?>