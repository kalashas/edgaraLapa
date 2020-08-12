<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['phone']))
$phone = $_POST['phone'];
if(isset( $_POST['subject']))
$subject = $_POST['subject'];
if(isset( $_POST['message']))
$message = $_POST['message'];

$content="From: $name \n Email: $email \n Phone: $phone \n Subject: $subject \n Message: $message";
$recipient = "info@sakraments.lv";
$mailheader = "From: info@sakraments.lv \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "index.html";
?>

