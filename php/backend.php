<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "1122";
$dbname = "sfben_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die(json_encode(["error" => "Connection failed: " . $conn->connect_error]));
}

// Fetch articles
$sql = "SELECT title, content FROM articles";
$result = $conn->query($sql);

$articles = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $articles[] = $row;
    }
}

echo json_encode($articles);
$conn->close();
?>
