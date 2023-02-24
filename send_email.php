<?php
// Get the form data
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

// Set up the email parameters
$to = "221910310050@gitam.in";
$subject = "New message from website";
$body = "Name: $name\nPhone: $phone\nEmail: $email\nMessage: $message";
$headers = "From: $email";

// Send the email
mail($to, $subject, $body, $headers);

// Redirect the user to a thank-you page
header("Location: thankyou.html");
exit();
?>
