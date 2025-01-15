<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Set the response content type to JSON
header('Content-Type: application/json');

// Database credentials
$servername = "localhost";
$username = "root";
$password = "1122";
$dbname = "sfben_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    http_response_code(500); // Internal Server Error
    echo json_encode(["error" => "Database connection failed: " . $conn->connect_error]);
    exit();
}

// Fetch articles
$sql = "SELECT title, content FROM articles";
$result = $conn->query($sql);

if (!$result) {
    // Handle SQL query error
    http_response_code(500);
    echo json_encode(["error" => "Error executing query: " . $conn->error]);
    $conn->close();
    exit();
}

// Process and return the articles
$articles = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $articles[] = $row;
    }
} else {
    $articles = ["message" => "No articles found."];
}

// Return the articles as JSON
echo json_encode($articles);

// Close the database connection
$conn->close();
?>
