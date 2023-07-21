<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $to = "mwiriginikolas@gmail.com"; // Change this to your email address
  $subject = "Contact Form Submission";
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  $headers = "From: $email";

  try {
    // Send the email
    if (mail($to, $subject, $message, $headers)) {
      // Email sent successfully, you can redirect to a success page if needed
      header("Location: contact_success.html");
      exit();
    } else {
      // Email failed to send, you can redirect to an error page if needed
      header("Location: contact_error.html");
      exit();
    }
  } catch (Exception $e) {
    // Handle the exception (optional) and redirect to an error page if needed
    header("Location: contact_error.html");
    exit();
  }
}
?>
