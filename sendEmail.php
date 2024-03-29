<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $group = isset($_POST["group"]) ? htmlspecialchars($_POST["group"]) : "";
  $choreographer = isset($_POST["choreographer"]) ? htmlspecialchars($_POST["choreographer"]) : "";
  $phone = isset($_POST["phone"]) ? htmlspecialchars($_POST["phone"]) : "";
  $email = isset($_POST["email"]) ? htmlspecialchars($_POST["email"]) : "";
  $address = isset($_POST["address"]) ? htmlspecialchars($_POST["address"]) : "";
  $city = isset($_POST["city"]) ? htmlspecialchars($_POST["city"]) : "";
  $state = isset($_POST["state"]) ? htmlspecialchars($_POST["state"]) : "";
  $zip = isset($_POST["zip"]) ? htmlspecialchars($_POST["zip"]) : "";
  $manager = isset($_POST["manager"]) ? htmlspecialchars($_POST["manager"]) : "";
  $phone2 = isset($_POST["phone2"]) ? htmlspecialchars($_POST["phone2"]) : "";
  $song = isset($_POST["song"]) ? htmlspecialchars($_POST["song"]) : "";
  $movie = isset($_POST["movie"]) ? htmlspecialchars($_POST["movie"]) : "";
  $brief = isset($_POST["brief"]) ? htmlspecialchars($_POST["brief"]) : "";
  $request = isset($_POST["request"]) ? htmlspecialchars($_POST["request"]) : "";
  $participant1 = isset($_POST["participant1"]) ? htmlspecialchars($_POST["participant1"]) : "";
  $participant2 = isset($_POST["participant2"]) ? htmlspecialchars($_POST["participant2"]) : "";
  $participant3 = isset($_POST["participant3"]) ? htmlspecialchars($_POST["participant3"]) : "";
  $participant4 = isset($_POST["participant4"]) ? htmlspecialchars($_POST["participant4"]) : "";
  $participant5 = isset($_POST["participant5"]) ? htmlspecialchars($_POST["participant5"]) : "";
  $participant6 = isset($_POST["participant6"]) ? htmlspecialchars($_POST["participant6"]) : "";
  $participant7 = isset($_POST["participant7"]) ? htmlspecialchars($_POST["participant7"]) : "";
  $participant8 = isset($_POST["participant8"]) ? htmlspecialchars($_POST["participant8"]) : "";
  $participant9 = isset($_POST["participant9"]) ? htmlspecialchars($_POST["participant9"]) : "";
  $participant10 = isset($_POST["participant10"]) ? htmlspecialchars($_POST["participant10"]) : "Not specified";
  $participant11 = isset($_POST["participant11"]) ? htmlspecialchars($_POST["participant11"]) : "Not specified";
  $participant12 = isset($_POST["participant12"]) ? htmlspecialchars($_POST["participant12"]) : "Not specified";
  $participant13 = isset($_POST["participant13"]) ? htmlspecialchars($_POST["participant13"]) : "Not specified";
  $participant14 = isset($_POST["participant14"]) ? htmlspecialchars($_POST["participant14"]) : "Not specified";
  $participant15 = isset($_POST["participant15"]) ? htmlspecialchars($_POST["participant15"]) : "Not specified";
  $participant16 = isset($_POST["participant16"]) ? htmlspecialchars($_POST["participant16"]) : "Not specified";
  $flexCheckChecked = isset($_POST["flexCheckChecked"]) ? htmlspecialchars($_POST["flexCheckChecked"]) : "";

  
  $to = "mahesh@graciamarcom.com"; // Replace with your Gmail address
  $subject = "Cultural Performance 2024";

  // Format the message body as a table
  $body = "<h2>New Cultural Performance Form Registration</h2>";
  $body .= "<table>";
  $body .= "<tr><td><strong>Group Name:</strong></td><td>$group</td></tr>";
  $body .= "<tr><td><strong>Choregrapher Name:</strong></td><td>$choregrapher</td></tr>";
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
  $body .= "<tr><td><strong>Participant Name:</strong></td><td>$participant1</td></tr>";
  $body .= "<tr><td><strong>Participant Name:</strong></td><td>$participant2</td></tr>";
  $body .= "<tr><td><strong>Participant Name:</strong></td><td>$participant3</td></tr>";
  $body .= "<tr><td><strong>Participant Name:</strong></td><td>$participant4</td></tr>";
  $body .= "<tr><td><strong>Participant Name:</strong></td><td>$participant5</td></tr>";
  $body .= "<tr><td><strong>Participant Name:</strong></td><td>$participant6</td></tr>";
  $body .= "<tr><td><strong>Participant Name:</strong></td><td>$participant7</td></tr>";
  $body .= "<tr><td><strong>Participant Name:</strong></td><td>$participant8</td></tr>";
  $body .= "<tr><td><strong>Participant Name:</strong></td><td>$participant9</td></tr>";
  $body .= "<tr><td><strong>Participant Name:</strong></td><td>$participant10</td></tr>";
  $body .= "<tr><td><strong>Participant Name:</strong></td><td>$participant11</td></tr>";
  $body .= "<tr><td><strong>Participant Name:</strong></td><td>$participant12</td></tr>";
  $body .= "<tr><td><strong>Participant Name:</strong></td><td>$participant13</td></tr>";
  $body .= "<tr><td><strong>Participant Name:</strong></td><td>$participant14</td></tr>";
  $body .= "<tr><td><strong>Participant Name:</strong></td><td>$participant15</td></tr>";
  $body .= "<tr><td><strong>Participant Name:</strong></td><td>$participant16</td></tr>";
  $body .= "<tr><td><strong>I Agree:</strong></td><td>$flexCheckChecked</td></tr>";
  $body .= "</table>";

  // Set content type header for HTML
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  // Additional headers
  $headers .= "From: $name <$email>";

  if (mail($to, $subject, $body, $headers)) {
    http_response_code(200);
  } else {
    http_response_code(500);
  }
} else {
  http_response_code(405); // Method Not Allowed
}
?>
