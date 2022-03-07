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
$sql = "INSERT INTO " . $_POST['name'] . " VALUES (id, '" . $_POST['text'] . "')";
echo $sql;
$result = $conn->query($sql);
if ($result) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
?>