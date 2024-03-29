<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Function to sanitize input
  function sanitize_input($data) {
    return htmlspecialchars(trim($data));
  }

  // Sanitize each input field
  $group = isset($_POST["group"]) ? sanitize_input($_POST["group"]) : "";
  $choreographer = isset($_POST["choreographer"]) ? sanitize_input($_POST["choreographer"]) : "";
  $phone = isset($_POST["phone"]) ? sanitize_input($_POST["phone"]) : "";
  $email = isset($_POST["email"]) ? sanitize_input($_POST["email"]) : "";
  $address = isset($_POST["address"]) ? sanitize_input($_POST["address"]) : "";
  $city = isset($_POST["city"]) ? sanitize_input($_POST["city"]) : "";
  $state = isset($_POST["state"]) ? sanitize_input($_POST["state"]) : "";
  $zip = isset($_POST["zip"]) ? sanitize_input($_POST["zip"]) : "";
  $manager = isset($_POST["manager"]) ? sanitize_input($_POST["manager"]) : "";
  $phone2 = isset($_POST["phone2"]) ? sanitize_input($_POST["phone2"]) : "";
  $song = isset($_POST["song"]) ? sanitize_input($_POST["song"]) : "";
  $movie = isset($_POST["movie"]) ? sanitize_input($_POST["movie"]) : "";
  $brief = isset($_POST["brief"]) ? sanitize_input($_POST["brief"]) : "";
  $request = isset($_POST["request"]) ? sanitize_input($_POST["request"]) : "";
  
  // Dynamic handling of participant names
  $participants = [];
  for ($i = 1; $i <= 16; $i++) {
    $participants[] = isset($_POST["participant$i"]) ? sanitize_input($_POST["participant$i"]) : "Not specified";
  }
  
  $flexCheckChecked = isset($_POST["flexCheckChecked"]) ? sanitize_input($_POST["flexCheckChecked"]) : "";

  $to = "mahesh@graciamarcom.com"; // Replace with your Gmail address
  $subject = "Cultural Performance 2024";

  // Format the message body as a table
  $body = "<h2>New Cultural Performance Form Registration</h2>";
  $body .= "<table>";
  $body .= "<tr><td><strong>Group Name:</strong></td><td>$group</td></tr>";
  $body .= "<tr><td><strong>Choreographer Name:</strong></td><td>$choreographer</td></tr>";
  $body .= "<tr><td><strong>Phone:</strong></td><td>$phone</td></tr>";
  $body .= "<tr><td><strong>Email:</strong></td><td>$email</td></tr>";
  $body .= "<tr><td><strong>Address:</strong></td><td>$address</td></tr>";
  $body .= "<tr><td><strong>City:</strong></td><td>$city</td></tr>";
  $body .= "<tr><td><strong>State:</strong></td><td>$state</td></tr>";
  $body .= "<tr><td><strong>Zip:</strong></td><td>$zip</td></tr>";
  $body .= "<tr><td><strong>Manager:</strong></td><td>$manager</td></tr>";
  $body .= "<tr><td><strong>Manager Phone:</strong></td><td>$phone2</td></tr>";
  $body .= "<tr><td><strong>Song:</strong></td><td>$song</td></tr>";
  $body .= "<tr><td><strong>Movie:</strong></td><td>$movie</td></tr>";
  $body .= "<tr><td><strong>Brief Description of the Item:</strong></td><td>$brief</td></tr>";
  $body .= "<tr><td><strong>Special Request:</strong></td><td>$request</td></tr>";
  foreach ($participants as $index => $participant) {
    $body .= "<tr><td><strong>Participant " . ($index + 1) . " Name:</strong></td><td>$participant</td></tr>";
  }
  $body .= "<tr><td><strong>I Agree:</strong></td><td>$flexCheckChecked</td></tr>";
  $body .= "</table>";

  // Set content type header for HTML
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  // Additional headers
  $headers .= "From: $group <$email>";

  if (mail($to, $subject, $body, $headers)) {
    http_response_code(200);
  } else {
    http_response_code(500);
  }
} else {
  http_response_code(405); // Method Not Allowed
}
?>
