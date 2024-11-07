<?php 
session_start();
include 'myfunctions.php';

// $youwon = $_GET['won'];
$youwon = 'no';
if($youwon == 'yes'){
    $reward = "Congratulations! You answered all the questions and got enought points! 
    You Win! Here's your prize: 🍪";
}
else{
    $reward = "Awwww! You answered all the questions but you didn't get enough points!
    Better luck next time :(";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>End</title>
    <link rel = "stylesheet" href = "game.css">
</head>
<body>
    <div class = "everything">

    <div class = "message">
        <?=$reward;?>
    </div>

    <div class = "back"><a href = "homePage.php"> BACK TO TOPICS </a></div>

    <div class = "score">

            <div class = "sc">Your Score</div>
            <div class = "scnum">$<?= isset($_COOKIE['score']) ? $_COOKIE['score'] : 0;?></div>
            <!-- Displays the score if its set and if not, then it displays zero -->

        </div>

    </div>
</body>
</html>