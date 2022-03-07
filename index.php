<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>

<body>
    <?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';

    // Create connection
    $conn = new mysqli($servername, $username, $password, 'crud');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        echo "Connected successfully" . "<br>";
    }


    ?>

    <form action="$conn->query('CREATE TABLE id int, $_POST['name'] varchar(255)');"  method="POST">
        <label for="name">create table with the name: </label><input type="text" name="name">
        <input type="hidden" value="create">
        <input type="submit" value="Submit">
    </form>
    <form action="" method="get">
        <label for="name">delete table with the name: </label><input type="text" name="name">
        <input type="hidden" value="delete">
        <input type="submit" value="Submit">
    </form>
    <form action="" method="get">
        <label for="name">insert into table with the name: </label><input type="text" name="name">
        <input type="hidden" value="insert">
        <input type="submit" value="Submit">
    </form>
    <form action="" method="get">
        <label for="name">update table with the name: </label><input type="text" name="name">
        <input type="hidden" value="update">
        <input type="submit" value="Submit">
    </form>

    <?php
    $query = "SELECT * FROM `gaming`;";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"] . " name: " . $row["name"] .  "<br>";
        }
    } else {
        echo "0 results";
    }

    ?>




    <?php
    if (isset($_GET['name'])) {
        $sql = $_GET['name'];
        $result = $conn->query($sql);
        echo $result;
    }
    ?>
</body>

</html>