<?php 
session_start();
//check the session to see if user logged in
include 'myfunctions.php';
//this calls a function from another php page and 
//gets a question from the array based on the category and value
//that was received from the previous page
$qanda = getQA($_GET['cat'], $_GET['val']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question</title>
    <link rel = "stylesheet" href = "game.css">
</head>
<body>
    <div class = "everything">

        <div class = "quest">
            <?=$qanda[0]; ?> 
            <!--since the qnada can only have two array entries, 
            I hard coded it to the first entry which has the question and print it out-->
        </div>

        <div class = "answer">

            <form action = "answer.php" method = "post">

                <label for = "myques">
                    Type your answer below:<br>
                    <input type = "text" name = "useranswer" id = "myques">
                     <!--This is the text box for the user to type their answer-->
                    <input type = "hidden" name = "correctanswer" value = "<?= htmlspecialchars($qanda[1]);?>">
                    <!-- This is a hidden input to keep the correctanswer with us across pages -->
                    <input type = "hidden" name = "val" value = "<?= $_GET['val']; ?>">
                    <!-- This has the same use as the correctanswer, so we know how much to add to the score-->
                    
                    <br><input type = "submit">

                </label>
            
            </form>
        </div>

        <div class = "score">

            <div class = "sc">Your Score</div>
            <div class = "scnum">$<?= isset($_COOKIE['score']) ? $_COOKIE['score'] : 0;?></div>
            <!-- Displays the score if its set and if not, then it displays zero -->

        </div>

    </div>
</body>
</html>