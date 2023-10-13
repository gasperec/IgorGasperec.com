<?php
// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Set the recipient email address
$to = 'iggasperec@gmail.com';

// Set the email subject
$subject = 'New message from ' . $name;

// Build the email message
$body = "Name: $name\n";
$body .= "Email: $email\n";
$body .= "Phone: $phone\n\n";
$body .= "Message:\n$message";

// Send the email
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
mail($to, $subject, $body, $headers);

// Redirect the user to a thank-you page
header('Location: thank-you.php');