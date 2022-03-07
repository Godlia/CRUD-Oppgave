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

    <form action="posts/create.php" method="POST">
        <label for="name">create table with the name: </label>
            <input type="text" name="name">
        <input type="hidden" value="create">
        <input type="submit" value="Submit">
    </form>
    <form action="posts/delete.php" method="POST">
        <label for="name">delete table with the name: </label><input type="text" name="name">
        <input type="hidden" value="delete">
        <input type="submit" value="Submit">
    </form>
    <form action="posts/insert.php" method="POST">
        <label for="name">insert into table with the name: </label><input type="text" name="name">
        <label for="text">text: </label><input type="text" name="text">
        <input type="hidden" value="insert">
        <input type="submit" value="Submit">
    </form>
    <form action="posts/update.php" method="POST">
        <label for="name">update table with the name: </label><input type="text" name="name">
        <label for="id">id: </label><input type="text" name="id">
        <label for="text">text: </label><input type="text" name="text">
        <input type="hidden" value="update">
        <input type="submit" value="Submit">
    </form>
    <br><br>



    <form action=""><input type="submit" value="Show all tables"></form>



    <form action="posts/read.php" method="POST">
        <input type="text" name="table">
        <input type="submit" value="Read from table">
    </form>



    <?php

    $result = $conn->query("show tables"); // run the query and assign the result to $result
    while ($table = mysqli_fetch_array($result)) { // go through each row that was returned in $result
        echo ($table[0] . "<BR>");    // print the table that was returned on that row.
    }



    ?>


</body>

</html>