<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Email address to send the message to
    $to = "lkimran2016@gmail.com";
    
    // Subject of the email
    $subject = "New Contact Form Submission";
    
    // Construct the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message\n";
    
    // Send the email
    mail($to, $subject, $email_message);
    
    // Redirect to a thank you page or show a thank you message
    // Header("Location: thank-you.html");
    echo "Thank you! Your message has been sent.";
}
?>
