<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $group = $_POST["group"];
  $choregrapher = $_POST["choregrapher"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $address = $_POST["address"];
  $city = $_POST["city"];
  $state = $_POST["state"];
  $zip = $_POST["zip"];
  $manager = $_POST["manager"];
  $phone2 = $_POST["phone2"];
  $song = $_POST["song"];
  $movie = $_POST["movie"];
  $brief = $_POST["brief"];
  $request = $_POST["request"];
  $participant1 = $_POST["participant1"];
  $participant2 = $_POST["participant2"];
  $participant3 = $_POST["participant3"];
  $participant4 = $_POST["participant4"];
  $participant5 = $_POST["participant5"];
  $participant6 = $_POST["participant6"];
  $participant7 = $_POST["participant7"];
  $participant8 = $_POST["participant8"];
  $participant9 = $_POST["participant9"];
  $participant10 = $_POST["participant10"];
  $participant11 = $_POST["participant11"];
  $participant12 = $_POST["participant12"];
  $participant13 = $_POST["participant13"];
  $participant14 = $_POST["participant14"];
  $participant15 = $_POST["participant15"];
  $participant16 = $_POST["participant16"];
  $flexCheckChecked = $_POST["flexCheckChecked"];
  
  
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
