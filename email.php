<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$json_data = file_get_contents("php://input");
$data = json_decode($json_data, true);

$email = $data['email'];
$subject = $data['subject'];
$message = "From: " . $email . "\n\n" . $data['message'];

$to = "walter@walterdev.info";



    $headers = 'From: WalterDev.Info'; // Replace with your actual email address

    if (mail($to, $subject, $message, $headers)) {
        $response = ['message' => 'Email sent successfully'];
    } else {
        $response = ['message' => 'Failed to send email, please try again later.'];
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}   else {
        header('HTTP/1.1 405 Method Not Allowed');
        echo 'Method Not Allowed';
    }
?>
