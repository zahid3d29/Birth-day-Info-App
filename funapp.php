<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link 
    rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>PHP Apps</title>
</head>

<body class="m-5 p-5">
    

    <div class="container">
        <div class="row">
            <div class="col-md-6 p-5 border-right border-dark">
                <form action="funapp.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Favorite Player?</label>
                        <input type="text" class="form-control" name="favplayer" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Player Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Favorite Actor?</label>
                        <input type="text" class="form-control" name="favactor" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Actor Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Favorite color:</label>
                        <input type="text" class="form-control" name="favcolor" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Color Name">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

            <div class="col-md-6 p-3">
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

                   
                    $sql = "INSERT IGNORE INTO user_favorite (player, actor, color)
                        VALUES ('".$_POST["favplayer"]."','".$_POST["favactor"]."','".$_POST["favcolor"]."')";

                    if ($conn->query($sql) === TRUE) {
                        // echo "New record created successfully";
                        
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                    // $sql = "SELECT player,actor,color FROM user_favorite";
                    // $result = $conn->query($sql);

                    // if ($result->num_rows > 0) {
                    // // output data of each row
                    // while($row = $result->fetch_assoc()) {
                    //     echo "ID: " . $row["ID"] . " - Player name: " . $row["player"]. " - Favorite Actor: " . $row["actor"]. " - Color: " . $row["color"]. "<br>";
                    // }
                    // } else {
                    // echo "0 results";
                    // }

                    $conn->close();

                    // Getting Form Input 
                    $favPlayer = $_POST["favplayer"];
                    $favActor = $_POST["favactor"];
                    $favColor = $_POST["favcolor"];

                    echo "<h2><span style='color: red; text-decoration: underline; text-transform: uppercase; font-size: 40px; font-weight: bold;'>$favPlayer</span> Is Your Favourite Player.  </h2>";
                    echo "<h2>The Favorite Actor is: <span style='color: red;text-decoration: underline; text-transform: uppercase; font-size: 40px; font-weight: bold;'>$favActor </span> </h2>";


                    $red = "<span style='color:red;text-decoration: underline; text-transform: uppercase;  font-size: 40px; font-weight: bold;'>Red</span> ";
                    $green = "<span style='color:green;text-decoration: underline; text-transform: uppercase;  font-size: 40px; font-weight: bold;'>Green</span> ";

                   // Showing form input 
                    switch($favColor){
                        case "Red":
                            echo "<h2>The " . ' ' . $red . ' ' . " is your Favorite Color </h2>";
                        break;

                        case "Green":
                            echo "<h2>The " . ' ' . $green . ' ' . "is your Favorite Color</h2>";
                        break;
                    }


                ?>
            </div>
        </div>
    </div>

    
    <script type="text/javascript">
        function mess(){
            alert("Your Record is successfully  saved!");
        }
    </script>
    <script 
        src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

</body>
</html>



<?php

    
    
    
    

?>