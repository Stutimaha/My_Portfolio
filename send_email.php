<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    $to = "stutimahajan15@gmail.com";  // Replace with your email address
    $headers = "From: $email\r\n";
    
    // Compose the email body
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Subject: $subject\n";
    $email_body .= "Message:\n$message";
    
    // Send the email
    if (mail($to, $subject, $email_body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Error sending email.";
    }
}
?>
