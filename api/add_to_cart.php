<?php
header("Content-Type: application/json");

// Allow only POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(["error" => "Only POST method allowed"]);
    exit();
}

// Read JSON body
$data = json_decode(file_get_contents("php://input"), true);

// Validate required fields
if (!isset($data['user_id'], $data['product_id'], $data['quantity'])) {
    http_response_code(400);
    echo json_encode(["error" => "user_id, product_id and quantity are required"]);
    exit();
}

$user_id = $data['user_id'];
$product_id = $data['product_id'];
$quantity = $data['quantity'];

// Connect to DB
$conn = new mysqli("localhost", "root", "", "shop_db");

if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode(["error" => "Database connection failed"]);
    exit();
}

// Insert into cart
$stmt = $conn->prepare("INSERT INTO cart (user_id, product_id, quantity) VALUES (?, ?, ?)");
$stmt->bind_param("iii", $user_id, $product_id, $quantity);

if ($stmt->execute()) {
    echo json_encode(["success" => true, "message" => "Product added to cart"]);
} else {
    http_response_code(500);
    echo json_encode(["success" => false, "error" => "Failed to add product"]);
}

$conn->close();
?>
// Close the connection
// $conn->close();