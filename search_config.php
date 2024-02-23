<?php
// Database connection parameters
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'moidatabase_online';

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $database);

// Check for database connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = $_GET['query'];

// Fetch data from the database table (replace 'your_table' with your actual table name)
$sql = "SELECT function_name, function_start_date, function_owner_name FROM functions WHERE function_name LIKE '%$query%' OR function_owner_name LIKE '%$query%' OR function_start_date LIKE '%$query%'";
$result = $conn->query($sql);

$matches = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Concatenate the two column values into a single string
        $combined = $row['function_name'] . '-' . $row['function_owner_name'] . '-' . $row['function_start_date'];
        $matches[] = $combined;
    }
}

// Close the database connection
$conn->close();

header('Content-Type: application/json');
echo json_encode($matches);
