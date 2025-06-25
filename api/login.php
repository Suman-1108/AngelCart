<?php
header("Content-Type: application/json");

// Allow only POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405); // Method Not Allowed
    echo json_encode(["error" => "Only POST method allowed"]);
    exit();
}

// Read raw POST data
$data = json_decode(file_get_contents("php://input"), true);

// Check if email and password exist
if (!isset($data['email']) || !isset($data['password'])) {
    http_response_code(400); // Bad Request
    echo json_encode(["error" => "Email and password required"]);
    exit();
}

$email = $data['email'];
$password = $data['password'];

// DB connection
$host = "localhost";
$user = "root";
$pass = "";
$db = "shop_db";

$conn = new mysqli($host, $user, $pass, $db);

// Check DB connection
if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode(["error" => "Database connection failed"]);
    exit();
}

// Prepare and check user
$stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    echo json_encode([
        "success" => true,
        "message" => "Login successful",
        "user" => [
            "id" => $user['id'],
            "name" => $user['name'],
            "email" => $user['email']
        ]
    ]);
} else {
    http_response_code(401); // Unauthorized
    echo json_encode(["success" => false, "message" => "Invalid credentials"]);
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<input type="text" id="email" placeholder="Email">
<input type="password" id="password" placeholder="Password">
<button onclick="loginUser()">Login</button>

<script src="../js/login.js"></script>
</body>
</html>
