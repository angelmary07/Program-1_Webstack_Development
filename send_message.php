<?php
header('Content-Type: text/plain; charset=utf-8');

$name    = $_POST['name']    ?? '';
$email   = $_POST['email']   ?? '';
$message = $_POST['message'] ?? '';

if (empty($name) || empty($email) || empty($message)) {
    http_response_code(400);
    echo "Please fill all fields.";
    exit;
}

echo "Thank you, $name! Your message has been received. We'll reply to $email soon.";
?>
