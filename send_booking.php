<?php
// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$booking_date = $_POST['booking_date'];
$booking_time = $_POST['booking_time'];
$number_of_guests = $_POST['number_of_guests'];
$message = $_POST['message'];

// Construct the email message
$to = 'your-email@example.com';
$subject = 'New booking request';
$body = "Name: $name\nEmail: $email\nDate: $booking_date\nTime: $booking_time\nNumber of guests: $number_of_guests\nMessage: $message";
$headers = 'From: booking-form@example.com';

// Send the email
if (mail($to, $subject, $body, $headers)) {
  // Redirect the user to the confirmation page
  header('Location: booking-confirmed.html');
  exit();
} else {
  echo 'There was an error sending the email.';
}
?>

