<?php


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "practice_php";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


    // Insert Data to Database
        $sql = "INSERT INTO user_favorite (player,actor,color) VALUES ('Akkas', 'salman','Red')";

    // Showing from database 
    // Data Show 
        $sql = "SELECT player,actor,color FROM user_favorite";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "ID: " . $row["ID"] . " - Player name: " . $row["player"]. " - Favorite Actor: " . $row["actor"]. " - Color: " . $row["color"]. "<br>";
        }
        } else {
        echo "0 results";
        }

        // if ($conn->query($sql) === TRUE) {
        //   echo (sqrt(34));
        // } else {
        //   echo "Error: " . $sql . "<br>" . $conn->error;
        // }

        $conn->close();