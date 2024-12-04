<?php

$name = $_POST['first_name'].' '.$_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$msg = $_POST['message'];
$subject = $_POST['subject'];

//$to = 'karlhillx@gmail.com';
$to = 'info@maximumbooking.com';
$message = 'Name: '.$name."\r\n";
$message .= 'Email: '.$email."\r\n";
$message .= 'Phone: '.$phone."\r\n";
$message .= 'Message: '.$msg;
$headers = 'From: info@maximumbooking.com'."\r\n";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // Checks that we have a valid email address
    mail($to, $subject, $message, $headers); // Sends mail.
    header("refresh:3; url=http://jeffaug.com");
    echo "Your submission was sent.";
} else {
    header("refresh:3; url=http://jeffaug.com");
    echo "You have entered an invalid email address.";
}
