if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Retrieve form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Validate form data (you can add your own validation logic here)

  // Send email
  $to = "your-email@example.com"; // Replace with your own email address
  $subject = "Contact Form Submission";
  $body = "Name: " . $name . "\n";
  $body .= "Email: " . $email . "\n";
  $body .= "Message: " . $message;

  // You can use the mail() function to send the email
  // mail($to, $subject, $body);

  // Alternatively, you can use a library like PHPMailer or SwiftMailer for more advanced email handling

  // Redirect back to the form page
  header("Location: index.php?success=true"); // Replace "index.php" with the actual path of your form page
  exit();
}
?>
