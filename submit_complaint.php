<?php
header('Content-Type: text/plain; charset=utf-8');

$name      = $_POST['name']      ?? 'Unknown';
$apartment = $_POST['apartment'] ?? 'N/A';
$category  = $_POST['category']  ?? 'Others';
$desc      = $_POST['desc']      ?? '';

if (empty($name) || empty($desc)) {
    http_response_code(400);
    echo "Missing required fields.";
    exit;
}

echo "Complaint received from $name (Apt $apartment) - Category: $category\nDetails: $desc\nWe will look into it soon.";
?>
