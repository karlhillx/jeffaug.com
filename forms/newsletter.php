<?php
$email = $_POST['email'];
$subject = 'Jeff Aug Newsletter Form';

//$to = 'karlhillx@gmail.com';
$to = 'info@maximumbooking.com';
$message = 'Email: ' . $_POST['email'] . "\r\n";
$headers = 'From: info@maximumbooking.com' . "\r\n";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // Checks that we have a valid email address
    mail($to, $subject, $message, $headers); // Sends mail.
    header("refresh:3; url=http://jeffaug.com");
    echo "Your submission was sent.";
} else {
    header("refresh:3; url=http://jeffaug.com");
    echo "You have entered an invalid email address.";
}
