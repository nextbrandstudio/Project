<?php
$name = $_POST['fullname'];
$email = $_POST['email'];

$to = "rahulnightowltech@gmail.com"; // 👈 yaha tum decide karte ho
$subject = "New Form Submission";

$message = "Name: $name\nEmail: $email";

$headers = "From: $email";

mail($to, $subject, $message, $headers);

echo "Form submitted successfully!";
?>