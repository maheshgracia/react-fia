<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  
  $to = "mahesh@graciamarcom.com"; // Replace with your Gmail address
  $subject = "New Inquiry";
  $body = "Name: $name\nEmail: $email\nMessage:\n$message";
  
  $headers = "From: $name <$email>";
  
  if (mail($to, $subject, $body, $headers)) {
    http_response_code(200);
  } else {
    http_response_code(500);
  }
} else {
  http_response_code(405); // Method Not Allowed
}
?>

