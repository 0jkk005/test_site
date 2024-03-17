<?php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set recipient email address
    $to = "0jkk003@gmail.com"; // Replace with your recipient's email address

    // Set subject
    $subject = "New Contact Form Submission";

    // Compose message
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message";

    // Set headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

    // Attempt to send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully";
    } else {
        echo "Error: Unable to send message";
    }
}
?>
