<?php 
//check the session to see if user logged in
session_start();
include 'myfunctions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Answer</title>
    <link rel = "stylesheet" href = "game.css">
</head>
<body>
    <div class = "everything">
        <div class = "response">
            <?php 
            if(checkAnswer($_POST['useranswer'], $_POST['correctanswer'])){
                $score = $_COOKIE['score']; //set score
                $score +=  $_POST['val']; //update score
                setcookie('score', $score, time() + 3600 * 24); //update cookie
                echo 'CORRECT! THE ANSWER WAS: <br>' . htmlspecialchars(ucwords($_POST['correctanswer'])) . "<br>LET'S KEEP IT GOING!"; //print correct message
            }
            else{
                echo 'SORRY! THE ANSWER WAS: <br>' . htmlspecialchars(ucwords($_POST['correctanswer'])) . "<br> NO MONEY FOR YOU!"; //print incorrect message
            }
            ?>
        </div>

        <div class = "back"><a href = "disney.php"> BACK TO TOPIC BOARD </a></div>
        <!-- leads back to the game board -->

        <div class = "score">
            <div class = "sc">Your Score</div>
            <div class = "scnum">$<?= htmlspecialchars($score);?></div>
            <!-- Displays the score if its set and if not, then it displays zero-->
        </div>
        
    </div>
</body>
</html>