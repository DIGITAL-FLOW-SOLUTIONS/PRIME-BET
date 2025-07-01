<?php
// Handle preflight OPTIONS request for CORS
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type, Authorization");
    header("Access-Control-Max-Age: 86400");
    http_response_code(200);
    exit();
}

// Set CORS headers for all requests
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "primebet";

// Create connection with error handling
try {
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }
    
    // Set charset to prevent encoding issues
    $conn->set_charset("utf8");
    
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        "success" => false, 
        "message" => "Database connection error: " . $e->getMessage()
    ]);
    exit();
}

// Get request method and action
$method = $_SERVER['REQUEST_METHOD'];
$action = $_GET['action'] ?? '';

try {
    switch ($method) {
        case 'GET':
            handleGetRequest($conn, $action);
            break;
        case 'POST':
            handlePostRequest($conn, $action);
            break;
        default:
            http_response_code(405);
            echo json_encode(["success" => false, "message" => "Method not allowed"]);
            break;
    }
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        "success" => false, 
        "message" => "Server error: " . $e->getMessage()
    ]);
}

function handleGetRequest($conn, $action) {
    switch ($action) {
        case 'matches':
            getMatches($conn);
            break;
        case 'odds':
            getOdds($conn);
            break;
        case 'user_balance':
            getUserBalance($conn);
            break;
        default:
            http_response_code(400);
            echo json_encode(["success" => false, "message" => "Invalid GET action: " . $action]);
            break;
    }
}

function handlePostRequest($conn, $action) {
    switch ($action) {
        case 'place_bet':
            placeBet($conn);
            break;
        case 'update_balance':
            updateBalance($conn);
            break;
        default:
            http_response_code(400);
            echo json_encode(["success" => false, "message" => "Invalid POST action: " . $action]);
            break;
    }
}

function getMatches($conn) {
    try {
        $sql = "SELECT m.*, 
                GROUP_CONCAT(
                    CONCAT(o.bet_type, ':', o.bet_option, ':', o.odds, ':', o.id) 
                    SEPARATOR '|'
                ) as odds_data
                FROM football_matches m 
                LEFT JOIN betting_odds o ON m.id = o.match_id 
                WHERE o.is_active = 1 
                GROUP BY m.id 
                ORDER BY m.match_date ASC";
        
        $result = $conn->query($sql);
        
        if (!$result) {
            throw new Exception("Query failed: " . $conn->error);
        }
        
        if ($result->num_rows > 0) {
            $matches = [];
            while($row = $result->fetch_assoc()) {
                // Parse odds data
                $odds = [];
                if ($row['odds_data']) {
                    $odds_array = explode('|', $row['odds_data']);
                    foreach ($odds_array as $odd) {
                        $odd_parts = explode(':', $odd);
                        if (count($odd_parts) == 4) {
                            $odds[] = [
                                'id' => $odd_parts[3],
                                'bet_type' => $odd_parts[0],
                                'bet_option' => $odd_parts[1],
                                'odds' => floatval($odd_parts[2])
                            ];
                        }
                    }
                }
                $row['odds'] = $odds;
                unset($row['odds_data']);
                $matches[] = $row;
            }
            echo json_encode(["success" => true, "data" => $matches]);
        } else {
            echo json_encode(["success" => true, "data" => [], "message" => "No matches found"]);
        }
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(["success" => false, "message" => "Error fetching matches: " . $e->getMessage()]);
    }
}

function getOdds($conn) {
    try {
        $match_id = $_GET['match_id'] ?? '';
        
        if (empty($match_id)) {
            http_response_code(400);
            echo json_encode(["success" => false, "message" => "Match ID required"]);
            return;
        }
        
        $sql = "SELECT * FROM betting_odds WHERE match_id = ? AND is_active = 1";
        $stmt = $conn->prepare($sql);
        
        if (!$stmt) {
            throw new Exception("Prepare failed: " . $conn->error);
        }
        
        $stmt->bind_param("i", $match_id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        $odds = [];
        while($row = $result->fetch_assoc()) {
            $odds[] = $row;
        }
        
        echo json_encode(["success" => true, "data" => $odds]);
        $stmt->close();
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(["success" => false, "message" => "Error fetching odds: " . $e->getMessage()]);
    }
}

function getUserBalance($conn) {
    try {
        $user_id = $_GET['user_id'] ?? '';
        
        if (empty($user_id)) {
            http_response_code(400);
            echo json_encode(["success" => false, "message" => "User ID required"]);
            return;
        }
        
        // First, check if user exists, if not create a default user
        $check_sql = "SELECT id FROM users WHERE id = ?";
        $check_stmt = $conn->prepare($check_sql);
        
        if (!$check_stmt) {
            throw new Exception("Prepare failed: " . $conn->error);
        }
        
        $check_stmt->bind_param("i", $user_id);
        $check_stmt->execute();
        $check_result = $check_stmt->get_result();
        
        if ($check_result->num_rows == 0) {
            // Create default user
            $create_sql = "INSERT INTO users (id, balance) VALUES (?, 1000.00)";
            $create_stmt = $conn->prepare($create_sql);
            $create_stmt->bind_param("i", $user_id);
            $create_stmt->execute();
            $create_stmt->close();
        }
        $check_stmt->close();
        
        // Now get the balance
        $sql = "SELECT balance FROM users WHERE id = ?";
        $stmt = $conn->prepare($sql);
        
        if (!$stmt) {
            throw new Exception("Prepare failed: " . $conn->error);
        }
        
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            echo json_encode(["success" => true, "balance" => floatval($user['balance'])]);
        } else {
            echo json_encode(["success" => false, "message" => "User not found"]);
        }
        $stmt->close();
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(["success" => false, "message" => "Error fetching balance: " . $e->getMessage()]);
    }
}

function placeBet($conn) {
    try {
        $input = file_get_contents("php://input");
        $data = json_decode($input, true);
        
        if (json_last_error() !== JSON_ERROR_NONE) {
            http_response_code(400);
            echo json_encode(["success" => false, "message" => "Invalid JSON data"]);
            return;
        }
        
        $user_id = $data['user_id'] ?? '';
        $slip_type = $data['slip_type'] ?? '';
        $stake_amount = $data['stake_amount'] ?? 0;
        $bets = $data['bets'] ?? [];
        
        // Validate input
        if (empty($user_id) || empty($slip_type) || $stake_amount <= 0 || empty($bets)) {
            http_response_code(400);
            echo json_encode(["success" => false, "message" => "Invalid betting data"]);
            return;
        }
        
        // Check user balance
        $balance_sql = "SELECT balance FROM users WHERE id = ?";
        $balance_stmt = $conn->prepare($balance_sql);
        
        if (!$balance_stmt) {
            throw new Exception("Prepare failed: " . $conn->error);
        }
        
        $balance_stmt->bind_param("i", $user_id);
        $balance_stmt->execute();
        $balance_result = $balance_stmt->get_result();
        
        if ($balance_result->num_rows == 0) {
            http_response_code(404);
            echo json_encode(["success" => false, "message" => "User not found"]);
            return;
        }
        
        $user_balance = $balance_result->fetch_assoc()['balance'];
        if ($user_balance < $stake_amount) {
            http_response_code(400);
            echo json_encode(["success" => false, "message" => "Insufficient balance"]);
            return;
        }
        
        // Calculate total odds
        $total_odds = 1;
        foreach ($bets as $bet) {
            $total_odds *= $bet['odds'];
        }
        
        $potential_win = $stake_amount * $total_odds;
        
        // Start transaction
        $conn->begin_transaction();
        
        try {
            // Insert betting slip
            $slip_sql = "INSERT INTO betting_slips (user_id, slip_type, total_odds, stake_amount, potential_win) VALUES (?, ?, ?, ?, ?)";
            $slip_stmt = $conn->prepare($slip_sql);
            
            if (!$slip_stmt) {
                throw new Exception("Prepare failed: " . $conn->error);
            }
            
            $slip_stmt->bind_param("issdd", $user_id, $slip_type, $total_odds, $stake_amount, $potential_win);
            $slip_stmt->execute();
            $slip_id = $conn->insert_id;
            
            // Insert betting slip items
            $item_sql = "INSERT INTO betting_slip_items (slip_id, match_id, bet_type, bet_option, odds) VALUES (?, ?, ?, ?, ?)";
            $item_stmt = $conn->prepare($item_sql);
            
            if (!$item_stmt) {
                throw new Exception("Prepare failed: " . $conn->error);
            }
            
            foreach ($bets as $bet) {
                $item_stmt->bind_param("iissd", $slip_id, $bet['match_id'], $bet['bet_type'], $bet['bet_option'], $bet['odds']);
                $item_stmt->execute();
            }
            
            // Update user balance
            $new_balance = $user_balance - $stake_amount;
            $update_balance_sql = "UPDATE users SET balance = ? WHERE id = ?";
            $update_stmt = $conn->prepare($update_balance_sql);
            
            if (!$update_stmt) {
                throw new Exception("Prepare failed: " . $conn->error);
            }
            
            $update_stmt->bind_param("di", $new_balance, $user_id);
            $update_stmt->execute();
            
            // Commit transaction
            $conn->commit();
            
            echo json_encode([
                "success" => true, 
                "message" => "Bet placed successfully",
                "slip_id" => $slip_id,
                "new_balance" => $new_balance,
                "potential_win" => $potential_win
            ]);
            
        } catch (Exception $e) {
            // Rollback transaction on error
            $conn->rollback();
            throw $e;
        }
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(["success" => false, "message" => "Error placing bet: " . $e->getMessage()]);
    }
}

function updateBalance($conn) {
    try {
        $input = file_get_contents("php://input");
        $data = json_decode($input, true);
        
        if (json_last_error() !== JSON_ERROR_NONE) {
            http_response_code(400);
            echo json_encode(["success" => false, "message" => "Invalid JSON data"]);
            return;
        }
        
        $user_id = $data['user_id'] ?? '';
        $amount = $data['amount'] ?? 0;
        
        if (empty($user_id) || $amount <= 0) {
            http_response_code(400);
            echo json_encode(["success" => false, "message" => "Invalid data - User ID and positive amount required"]);
            return;
        }
        
        // First check if user exists, if not create them
        $check_sql = "SELECT id FROM users WHERE id = ?";
        $check_stmt = $conn->prepare($check_sql);
        
        if (!$check_stmt) {
            throw new Exception("Prepare failed: " . $conn->error);
        }
        
        $check_stmt->bind_param("i", $user_id);
        $check_stmt->execute();
        $check_result = $check_stmt->get_result();
        
        if ($check_result->num_rows == 0) {
            // Create user with initial balance
            $create_sql = "INSERT INTO users (id, balance) VALUES (?, ?)";
            $create_stmt = $conn->prepare($create_sql);
            $create_stmt->bind_param("id", $user_id, $amount);
            $create_stmt->execute();
            $create_stmt->close();
            
            echo json_encode(["success" => true, "new_balance" => floatval($amount)]);
            return;
        }
        $check_stmt->close();
        
        // Update existing user balance
        $sql = "UPDATE users SET balance = balance + ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        
        if (!$stmt) {
            throw new Exception("Prepare failed: " . $conn->error);
        }
        
        $stmt->bind_param("di", $amount, $user_id);
        
        if ($stmt->execute()) {
            // Get new balance
            $balance_sql = "SELECT balance FROM users WHERE id = ?";
            $balance_stmt = $conn->prepare($balance_sql);
            $balance_stmt->bind_param("i", $user_id);
            $balance_stmt->execute();
            $result = $balance_stmt->get_result();
            $new_balance = $result->fetch_assoc()['balance'];
            
            echo json_encode(["success" => true, "new_balance" => floatval($new_balance)]);
        } else {
            throw new Exception("Failed to update balance");
        }
        
        $stmt->close();
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(["success" => false, "message" => "Error updating balance: " . $e->getMessage()]);
    }
}

$conn->close();
?>