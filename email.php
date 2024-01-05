<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

$to = "walter@walterdev.info";
    $subject = "Record Keeping Web App Inquiry";
    $messageWithEmailFrom = "From: " . $email . $message;
    
    // Send the email
    $mailSent = mail($to, $subject, $messageWithEmailFrom);
    
    if (!$mailSent) {
        error_log("Failed to send email.\n", 3, "failed_email.log");
    }

}