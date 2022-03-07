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

$sql = "SELECT * FROM `" . $_POST['table'] . "`;";


//read result
$query = "SELECT * FROM `gaming`;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " name: " . $row["name"] .  "<br>";
    }
} else {
    echo "0 results";
}

?>