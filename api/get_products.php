<?php
// Set response header to JSON
header("Content-Type: application/json");

// Database config
$host = "localhost";
$user = "root";
$password = "";
$database = "shop_db";

// Connect to MySQL
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode(["error" => "Database connection failed"]);
    exit();
}

// Fetch products from your `products` table (change table name if needed)
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

$products = [];

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
}

// Output the products as JSON
echo json_encode($products);

// Close connection
$conn->close();
?>
