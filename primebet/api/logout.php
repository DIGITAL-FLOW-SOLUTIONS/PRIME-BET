<?php
// api/logout.php

// CORS headers - this fixes the browser blocking issue
header("Access-Control-Allow-Origin: http://localhost:5173"); // Your Vue dev server
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
header("Access-Control-Allow-Credentials: true");
header("Content-Type: application/json");

// Handle preflight OPTIONS request
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    http_response_code(200);
    exit();
}

// Start session and destroy it
session_start();
session_destroy();

// Clear any cookies if you're using them
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-3600, '/');
}

// Return success response
echo json_encode([
    "success" => true,
    "message" => "Logged out successfully"
]);
?>