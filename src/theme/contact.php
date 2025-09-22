<?php

$to = "wilem.lavoie@gmail.com";
$minLength = 10;
$firstName = isset($_POST['firstname']) ? trim($_POST['firstname']) : '';
$lastName = isset($_POST['lastname']) ? trim($_POST['lastname']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
$comment = isset($_POST['comment']) ? trim($_POST['comment']) : '';
$honeypot = isset($_POST['honeypot']) ? trim($_POST['honeypot']) : '';

if(!empty($honeypot)){
    http_response_code(403);
}

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
}
// Check message length
if (strlen($message) < $minLength) {
    http_response_code(400);
}

// Sanitize input to prevent header injection
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

$fullName = $firstName . ' ' . $lastName;

// Compose and send the email
$headers = "From: " . $fullName . " <" . $email . ">\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8";

$fullMessage = "From: $fullName\n";
$fullMessage .= "Email: $email\n";
$fullMessage .= "Message:\n$message";


if(mail($to, "Courrier de mon portfolio", $fullMessage, $headers)){
    header("Location: contact?success=1");
} else{
    http_response_code(500);
}

?>

