<?php
$servername = 'localhost';
$username = 'root';
$password = '4507';
$database = 'review';

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// $sql = "create database review";

// if ($conn->query($sql) === TRUE) {
//     echo "Database 'review' created successfully";
// } else {
//     echo "Error creating database: " . $conn->error;
// }



// $sql = "CREATE TABLE IF NOT EXISTS feedback (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     first_name VARCHAR(30),
//     last_name VARCHAR(30),
//     email VARCHAR(50),
//     visit_date DATE,
//     rating INT,
//     feedback TEXT,
//     how_did_you_hear VARCHAR(20),
//     recommendation VARCHAR(10)
// )";

// if ($conn->query($sql) === TRUE) {
//     echo "Table 'feedback' created successfully";
// } else {
//     echo "Error creating table: " . $conn->error;
// }

?>
