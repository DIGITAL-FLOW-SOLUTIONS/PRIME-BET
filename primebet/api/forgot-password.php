<?php
// Start output buffering to capture any unwanted output
ob_start();

// Turn off all error output to prevent HTML in response
error_reporting(0);
ini_set('display_errors', 0);
ini_set('log_errors', 0);

// Clean any previous output
if (ob_get_length()) ob_clean();

// Set proper headers first
header("Content-Type: application/json; charset=utf-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

// Handle preflight requests
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// Function to send JSON response and exit
function sendResponse($data, $statusCode = 200) {
    // Clear any buffered output
    if (ob_get_length()) ob_clean();
    
    http_response_code($statusCode);
    echo json_encode($data);
    exit();
}

// Load PHPMailer
try {
    require 'vendor/autoload.php';
} catch (Exception $e) {
    sendResponse(["success" => false, "message" => "System error occurred"], 500);
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "primebet";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection - return JSON only
if ($conn->connect_error) {
    sendResponse(["success" => false, "message" => "Database connection failed"], 500);
}

// Main try-catch block
try {
    // Get POST data
    $input = file_get_contents('php://input');
    
    if ($input === false || empty($input)) {
        sendResponse(["success" => false, "message" => "No data received"], 400);
    }
    
    $data = json_decode($input, true);
    
    if (json_last_error() !== JSON_ERROR_NONE) {
        sendResponse(["success" => false, "message" => "Invalid JSON input"], 400);
    }

    $email = isset($data['email']) ? trim($data['email']) : '';

    // Validate email
    if (empty($email)) {
        sendResponse(["success" => false, "message" => "Email is required"], 400);
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        sendResponse(["success" => false, "message" => "Invalid email format"], 400);
    }

    // Check if email exists
    $stmt = $conn->prepare("SELECT id, full_name FROM users WHERE email = ?");
    if (!$stmt) {
        sendResponse(["success" => false, "message" => "Database error occurred"], 500);
    }
    
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        // Don't reveal if email exists or not for security
        sendResponse([
            "success" => true,
            "message" => "If this email exists in our system, a password reset link has been sent"
        ]);
    }

    $user = $result->fetch_assoc();
    $token = bin2hex(random_bytes(32));
    $expires = date('Y-m-d H:i:s', strtotime('+1 hour'));

    // Clean up old tokens for this user
    $cleanupStmt = $conn->prepare("DELETE FROM password_resets WHERE user_id = ?");
    if ($cleanupStmt) {
        $cleanupStmt->bind_param("i", $user['id']);
        $cleanupStmt->execute();
        $cleanupStmt->close();
    }

    // Store token
    $stmt = $conn->prepare("INSERT INTO password_resets (user_id, token, expires_at) VALUES (?, ?, ?)");
    if (!$stmt) {
        sendResponse(["success" => false, "message" => "Database error occurred"], 500);
    }
    
    $stmt->bind_param("iss", $user['id'], $token, $expires);
    if (!$stmt->execute()) {
        sendResponse(["success" => false, "message" => "Failed to generate reset token"], 500);
    }

    // Send email
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = ''; //here
        $mail->Password = ''; // Your App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        
        // Disable verbose debug output
        $mail->SMTPDebug = 0;

        $mail->setFrom('', 'PRIMEBET Support'); //here
        $mail->addAddress($email, $user['full_name']);
        $mail->isHTML(true);
        $mail->Subject = 'Password Reset Request - PRIMEBET';
        
        $resetLink = "http://localhost:5173/reset-password?token=" . urlencode($token);
        $mail->Body = "
        <h2>Password Reset Request</h2>
        <p>Hello " . htmlspecialchars($user['full_name']) . ",</p>
        <p>You requested a password reset for your PRIMEBET account.</p>
        <p><a href='" . htmlspecialchars($resetLink) . "' style='background: #28a745; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;'>Reset Password</a></p>
        <p>Or copy and paste this link: " . htmlspecialchars($resetLink) . "</p>
        <p>This link will expire in 1 hour.</p>
        <p>If you didn't request this, please ignore this email.</p>
        ";
        
        $mail->AltBody = "Password reset link: $resetLink (expires in 1 hour)";

        $mail->send();
        
        sendResponse([
            "success" => true,
            "message" => "Password reset link sent to your email"
        ]);
        
    } catch (Exception $e) {
        // Log the actual error but don't expose it to user
        error_log("PHPMailer Error: " . $e->getMessage());
        sendResponse(["success" => false, "message" => "Failed to send email. Please try again later."], 500);
    }

} catch (Exception $e) {
    // Log the error but send generic message
    error_log("Forgot Password Error: " . $e->getMessage());
    sendResponse([
        "success" => false,
        "message" => "An error occurred. Please try again later."
    ], 500);
} finally {
    if (isset($stmt)) $stmt->close();
    if (isset($conn)) $conn->close();
}
?>