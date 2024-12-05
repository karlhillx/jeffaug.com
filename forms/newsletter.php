<?php
// Configure error reporting
error_reporting(E_ALL);
ini_set('display_errors', 0);

// Set secure headers
header("X-Content-Type-Options: nosniff");
header("X-Frame-Options: DENY");
header("X-XSS-Protection: 1; mode=block");

// At the top of your form page
session_start();
$_SESSION['csrf_token'] = bin2hex(random_bytes(32));

// Validate CSRF token
if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    http_response_code(403);
    die(json_encode(['status' => 'error', 'message' => 'Invalid request']));
}

// Sanitize and validate input
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
$name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
$interests = isset($_POST['interests']) ? $_POST['interests'] : [];

// Configuration
$config = [
    'to' => 'info@maximumbooking.com',
    'from' => 'info@maximumbooking.com',
    'subject' => 'Jeff Aug Newsletter Subscription',
    'success_redirect' => 'https://jeffaug.com/thank-you',
    'error_redirect' => 'https://jeffaug.com/error'
];

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    die(json_encode(['status' => 'error', 'message' => 'Invalid email address']));
}

// Prepare email content
$message = "New Newsletter Subscription\n\n";
$message .= "Email: {$email}\n";
if ($name) {
    $message .= "Name: {$name}\n";
}
if (!empty($interests)) {
    $message .= "Interests: " . implode(", ", $interests) . "\n";
}
$message .= "Date: " . date('Y-m-d H:i:s') . "\n";
$message .= "IP: " . $_SERVER['REMOTE_ADDR'] . "\n";

// Set headers
$headers = [
    'From: ' . $config['from'],
    'Reply-To: ' . $email,
    'X-Mailer: PHP/' . phpversion(),
    'Content-Type: text/plain; charset=UTF-8'
];

// Store in database (example)
try {
    // Add database logic here
    // saveToDatabase($email, $name, $interests);
} catch (Exception $e) {
    error_log("Newsletter subscription database error: " . $e->getMessage());
}

// Send email
if (mail($config['to'], $config['subject'], $message, implode("\r\n", $headers))) {
    // Send auto-response to subscriber
    $welcome_message = "Thank you for subscribing to Jeff Aug's newsletter!\n\n";
    $welcome_message .= "We'll keep you updated with the latest news and events.";
    mail($email, "Welcome to Jeff Aug's Newsletter", $welcome_message, implode("\r\n", $headers));

    // Return success response
    echo json_encode([
        'status' => 'success',
        'message' => 'Thank you for subscribing!',
        'redirect' => $config['success_redirect']
    ]);
} else {
    http_response_code(500);
    echo json_encode([
        'status' => 'error',
        'message' => 'Subscription failed. Please try again later.',
        'redirect' => $config['error_redirect']
    ]);
}

