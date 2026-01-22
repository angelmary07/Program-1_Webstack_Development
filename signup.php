<?php
header('Content-Type: text/plain; charset=utf-8');

$name     = $_POST['name']     ?? '';
$email    = $_POST['email']    ?? '';
$password = $_POST['password'] ?? '';

if (empty($name) || empty($email) || empty($password)) {
    http_response_code(400);
    echo "All fields required.";
    exit;
}

echo "Account created successfully for $name ($email)!";
?>
<?php
header('Content-Type: text/plain; charset=utf-8');

$email    = $_POST['email']    ?? '';
$password = $_POST['password'] ?? '';

if (empty($email) || empty($password)) {
    http_response_code(400);
    echo "Email and password required.";
    exit;
}

echo "Login successful! Welcome back.";
?>
