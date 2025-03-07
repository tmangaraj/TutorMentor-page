<?php
$name=$_POST['name'];
$vistor_email=$_POST['email'];
$subject=$_POST['subject'];
$massage=$_POST['message'];

$email_form='info@tutormentor.co.in';

$email_subject = 'new Form Submission';

$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
                "User Subject: $subject.\n".
                 "User Massage: $message.\n";

$to ='tmangaraj13@gmail.com';

$headers ="From: " $email_from\r\n";
$headers .="Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>