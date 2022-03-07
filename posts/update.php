<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'crud';

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "UPDATE TABLE id int,". $_POST['name'] . "varchar(255)";
$result = $conn->query($sql);
if ($result) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
?>