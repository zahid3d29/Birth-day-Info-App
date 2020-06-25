<?php 
// Report simple running errors
error_reporting(E_ERROR | E_WARNING | E_PARSE); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>PHP Apps</title>
</head>

<body class="m-5 p-5">
    
    <div class="container">
            <div class="row text-center">
                <div class="col-md-12 p-5 border-right border-dark">
                <h2 class="heading-top"> This is simple fun app made by basic of php </h2>
                </div>
            </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 p-5 border-right border-dark">
            
                <form action="funapp.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Favorite Player?</label>
                        <input type="text" class="form-control" name="favplayer" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Shakib, Tamim, Gayle">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Favorite Actor?</label>
                        <input type="text" class="form-control" name="favactor" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Aamir, Salman, Writtik">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Favorite color:</label>
                        <input type="text" class="form-control" name="favcolor" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Red,Green,Blue">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

            <div class="col-md-6 p-3">

                <?php

                    // Getting Form Input 
                    $favPlayer = $_POST["favplayer"];
                    $favActor = $_POST["favactor"];
                    $favColor = $_POST["favcolor"];

                    echo "<h2><span style='color: red; text-decoration: underline; text-transform: uppercase; font-size: 40px; font-weight: bold;'>$favPlayer</span> Is Your Favourite Player.  </h2>";
                    echo "<h2>The Favorite Actor is: <span style='color: red;text-decoration: underline; text-transform: uppercase; font-size: 40px; font-weight: bold;'>$favActor </span> </h2>";


                    $red = "<span style='color:red;text-decoration: underline; text-transform: uppercase;  font-size: 40px; font-weight: bold;'>Red</span> ";
                    $green = "<span style='color:green;text-decoration: underline; text-transform: uppercase;  font-size: 40px; font-weight: bold;'>Green</span> ";
                    $blue = "<span style='color:blue;text-decoration: underline; text-transform: uppercase;  font-size: 40px; font-weight: bold;'>Blue</span> ";
                   // Showing form input 
                    switch($favColor){
                        case "Red":
                            echo "<h2>The " . ' ' . $red . ' ' . " is your Favorite Color </h2>";
                        break;

                        case "Green":
                            echo "<h2>The " . ' ' . $green . ' ' . "is your Favorite Color</h2>";
                        break;

                        case "Blue":
                            echo "<h2>The " . ' ' . $blue . ' ' . "is your Favorite Color</h2>";
                        break;
                    }


                ?>
            </div>
        </div>
    </div>

   
    <script 
        src="js/bootstrap.min.js"      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

</body>
</html>



<?php

    
    
    
    

?>