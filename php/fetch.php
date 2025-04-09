<?php
// Database connection setup
$servername = "localhost";
$username = "root";
$password = "admin";
$database = "grocerystore";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    echo "Connected successfully<br>";
}

// Fetch items from the database
$sql = "SELECT ItemName, Category FROM items";
$result = $conn->query($sql);

// Display the items
if ($result->num_rows > 0) {
    echo "<h1>Grocery Store Items</h1>";
    echo "<ul>";
    while($row = $result->fetch_assoc()) {
        echo "<li>" . $row["ItemName"] . " - " . $row["Category"] . "</li>";
    }
    echo "</ul>";
} else {
    echo "No items found.";
}

$conn->close();
?>
