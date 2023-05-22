<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Validate input data (e.g., check for empty fields, validate email format)

  // Send email
  $to = "nathanwaithaka24@gmail.com";
  $subject = "New message from website contact form";
  $body = "Name: " . $name . "\n\n";
  $body .= "Email: " . $email . "\n\n";
  $body .= "Message: " . $message;
  $headers = "From: " . $email;

  if (mail($to, $subject, $body, $headers)) {
    echo "Message sent successfully!";
  } else {
    echo "Error sending message.";
  }
}
?>
