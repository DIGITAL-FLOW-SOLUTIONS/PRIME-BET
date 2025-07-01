<?php
// Enable CORS and set headers
header("Content-Type: application/json; charset=utf-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

// Handle preflight requests
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "primebet";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode(["success" => false, "message" => "Database connection failed"]);
    exit();
}

// Get and validate input
$input = json_decode(file_get_contents('php://input'), true);

if (json_last_error() !== JSON_ERROR_NONE) {
    http_response_code(400);
    echo json_encode(["success" => false, "message" => "Invalid JSON input"]);
    exit();
}

// Validate required fields
$required = ['token', 'password', 'confirmPassword'];
foreach ($required as $field) {
    if (empty($input[$field])) {
        http_response_code(400);
        echo json_encode(["success" => false, "message" => "Missing required field: $field"]);
        exit();
    }
}

$token = $input['token'];
$password = $input['password'];
$confirmPassword = $input['confirmPassword'];

// Password validation
if ($password !== $confirmPassword) {
    http_response_code(400);
    echo json_encode(["success" => false, "message" => "Passwords do not match"]);
    exit();
}

if (strlen($password) < 8) {
    http_response_code(400);
    echo json_encode(["success" => false, "message" => "Password must be at least 8 characters"]);
    exit();
}

// Check if token exists first
$checkStmt = $conn->prepare("SELECT user_id, expires_at FROM password_resets WHERE token = ?");
$checkStmt->bind_param("s", $token);
$checkStmt->execute();
$checkResult = $checkStmt->get_result();

if ($checkResult->num_rows === 0) {
    http_response_code(400);
    echo json_encode(["success" => false, "message" => "Invalid reset token. Please request a new password reset link."]);
    exit();
}

$tokenData = $checkResult->fetch_assoc();
$userId = $tokenData['user_id'];
$expiresAt = $tokenData['expires_at'];

// Check if token is expired
if (strtotime($expiresAt) <= time()) {
    // Delete expired token
    $deleteExpiredStmt = $conn->prepare("DELETE FROM password_resets WHERE token = ?");
    $deleteExpiredStmt->bind_param("s", $token);
    $deleteExpiredStmt->execute();
    
    http_response_code(400);
    echo json_encode(["success" => false, "message" => "This reset link has expired. Please request a new password reset link."]);
    exit();
}

// Update password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
$updateStmt = $conn->prepare("UPDATE users SET password = ? WHERE id = ?");
$updateStmt->bind_param("si", $hashedPassword, $userId);

if (!$updateStmt->execute()) {
    http_response_code(500);
    echo json_encode(["success" => false, "message" => "Failed to update password"]);
    exit();
}

// Delete used token
$deleteStmt = $conn->prepare("DELETE FROM password_resets WHERE token = ?");
$deleteStmt->bind_param("s", $token);
$deleteStmt->execute();

http_response_code(200);
echo json_encode(["success" => true, "message" => "Password has been reset successfully"]);

$checkStmt->close();
$updateStmt->close();
$deleteStmt->close();
$conn->close();
?>