<?php 
session_start();

//check the session to see if user logged in
if(!isset($_SESSION['loggedin']) || ($_SESSION['loggedin']) != true){
    $passplease = "<div class = 'mymess'>This is a password protected page. Please <a href = 'loginPage.php'>Login</a> or 
    <a href = 'registrationPage.php'>Register</a> first.</div>";
}

include 'myfunctions.php';
$score = isset($_COOKIE['score']) ? $_COOKIE['score'] : 0; //set score and if it hasnt been set then its 0
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

    <div class = "passwordplease">
        <?php if(isset($passplease)){echo $passplease; session_destroy(); exit();}?>
    </div>

    <div class = "everything">
        <div class = "response">
            <?php 
            if(checkAnswer($_POST['useranswer'], $_POST['correctanswer'])){
                $score +=  $_POST['val']; //update score
                setcookie('score', $score, time() + 3600 * 24); //update cookie
                echo 'CORRECT! THE ANSWER WAS: <br>' . htmlspecialchars(ucwords($_POST['correctanswer'])) . "<br>LET'S KEEP IT GOING!"; //print correct message
            }
            else{
                echo 'SORRY! THE ANSWER WAS: <br>' . htmlspecialchars(ucwords($_POST['correctanswer'])) . "<br> NO MONEY FOR YOU!"; //print incorrect message
            }
            $_SESSION['answered'][htmlspecialchars($_POST['ques'])] = true;
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