<?php


// $person = array(
//     "John" => 32,
//     "Salam" => 42,
//     "Akkas" => 54
// );

// echo $person["Akkas"];
?>

<!-- <form action="index.php" method="post">

Salam?<input type="checkbox" name="student[]" value="Salam"></br>
Kalam?<input type="checkbox" name="student[]" value="Kalam"></br>
Alam?<input type="checkbox" name="student[]" value="Alam"></br>

<input type="submit">

</form> -->


<?php

// $result = $_POST["student"];

// echo $result[1];


// $whoIsHe = "bowler   hnjmik";
// if ($whoIsHe == "batsman"){
//     echo "You are a Batsman";
// }else{
//     echo "You are a Bowler";
// }


// comparison operator 

// function getMax( $num1, $num2, $num3){
//     if( $num1 >= $num2 && $num1 >= $num3){
//         return $num1;
//     }elseif( $num2 >= $num1 && $num2 >= $num3){
//         return $num2;
//     }else{
//         return $num3;
//     }
// }

// echo getMax(60, 440, 50);



// simple Calculator using If/Else statement

?>

    <!-- <form action="index.php" method="post">
        First Number: <input type="number" step="0.0000000001" name="num1"></br>
        Operator: <input type="text" name="op">         Second Number: <input type="number" name="num2"></br>

        <input type="submit">

    </form> -->


 <?php


// $num1 = $_POST["num1"];
// $num2 = $_POST["num2"];
// $op = $_POST["op"];

// if( $op == "+" ){
//     echo $num1 + $num2;
// }elseif( $op == "-" ){
//     echo $num1 - $num2;
// }elseif( $op == "*" ){
//     echo $num1 * $num2;
// }elseif( $op == "/" ){
//     echo $num1 / $num2;
// }else{
//     echo "you put wrong operator";
// }


// PHP Switch statement 

?>
<!-- 
<form action="index.php" method="post">

    <input type="text" name="grade">

    <input type="submit">
</form> -->


<?php

// $grade = $_POST["grade"];

// switch ( $grade ){
//     case "A+":
//         echo "You Got GPA5. Weldone!!";
//     break;
//     case "A-":
//         echo "You Got GPA 3.5 to 3.99";
//     break;
//     case "B":
//         echo "You Got GPA 3 to 3.50";
//     break;
//     case "C":
//         echo "You Got GPA 2 to 2.50";
//     break;
//     case "F":
//         echo "You are Failed!!!!";
//     break;

//     default:
//     echo "Invalid grade";
// }


// PHP Loop statement 

// $number = 1;

// while ( $number <= 10 ){
//     echo "$number </br>";
//     $number++;
// }

// For loop 

// $myNumber = array(23,33,44,55,66,77);
// for($i = 0; $i <= count($myNumber); $i++){
//     print "$myNumber[$i]  <br>";
// }

// Including File 

/*
include "header.php";
hook("Hello Include");
*/

// Classes, Object and Construct 

        // Class example

/****
    class Book{

        var $title;
        var $author;
        var $pages;

        // Construct Function 
        function __construct($aTitle, $aAuthor, $aPages ){
            $this-> title = $aTitle;
            $this-> author = $aAuthor;
            $this-> pages = $aPages;
        }


        // Object Function 
        function bigBook(){
            if($this-> title >= 400){
                return "<h1>This Book Is Big!</h1>";
            }else{
                return "<h1>This Book Is Not Big</h1>";
            }
        }
    }

        // Object 
   $Book1 = new Book ("The Book Of Eli", "John Campbell", 500);

   echo $Book1->pages . "</br>";
   echo $Book1->title . "</br>";
   echo $Book1->author . "</br>";

   echo $Book1->bigBook();

***/

/*******
 
    
class Movie{
    public $title;
    private $rating;


    function __construct($title, $rating){
        $this-> title = $title;
        $this-> setRating($rating);
    }

        // Function Getter 
    function getRating(){
        return $this->rating;
    }
        // Function Setter 
    function setRating($rating){
        if( $rating == 1 || $rating == 2 || $rating == 3 || $rating == 4 || $rating == 5){

            $this->rating = $rating; 
        }else{
            $this->rating = "Not rated Yet";
        }
    }

}

$idiots = new Movie("Idiots", 34);

echo $idiots->getRating();


******/


// PHP Inheritance Function  

    class player {
        function batting(){
            echo "<h1>Tamim Can Bat!</h1>";
        }

        function bowling(){
            echo "<h1>Mustafiz can Bowl</h1>";
        }

        function keeping(){
            echo "<h1>Mahmudullah Can Keeping</h1>";
        }

        function special(){
            echo "<h1>Mushfiq can Bat and Keeping Both</h1>";
        }
    }

    $player = new player();
    $player->special(); ?></br>


    <?php
    
    // New class named allrounder Extending/Getting all functions from Player class 
    class allrounder extends player{
        // adding new class
        function anallrounder(){
            echo "<h1>Shakib can Bowl and Bat</h1>";
        }

        // Replacing special named function of player calss 
        function special(){
            echo "<h1>Shakib can Bat and Bowl both</h1>";
        }
    }

    $allrounder = new allrounder();
    $allrounder->special();

    ?>
<form action="index.php" method="get">
<input type="text" name="vool">
<input type="submit">
</form>
    <?
    class newplayer{
        function newPlayer(){
            $wordnumber = $_GET["vool"];
            $this->newplayer = $wordnumber;
        }
    }

    $newPlayer = new newplayer();
    echo $newPlayer->newplayer;

    ?>
    
    </br>
    
    <?php
    // Read File by PHP 
   echo readfile("read.txt");

// mysql_connect('localhost', 'root', '');
// mysql_select_db('practice_php');

// //indexed 
// $people = array('John', 'Don', 'Sony');
// $ids = array(33,44,55);
// $cars = ["BMW", "Ferari", "Toyota"];

// // var_dump($cars);


// //Associated array

// $student = array(
//     'Rohan' => 33,
//     'Rajon' => 44,
//     'Akas' => 55,

// );

// // var_dump($student);

// //Multidimensional array

// $cars = array(
//     array('Honda', 44,55),
//     array('Ford', 424,435),
//     array('Toyota', 4224,5225),
// );

// echo $cars[1][2];