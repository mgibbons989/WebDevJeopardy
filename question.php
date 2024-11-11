<?php 
session_start();

if(!isset($_SESSION['loggedin']) || ($_SESSION['loggedin']) != true){
    $passplease = "<div class = 'mymess'>This is a password protected page. Please <a href = 'loginPage.php'>Login</a> or 
    <a href = 'registrationPage.php'>Register</a> first.</div>";
}

else{
    //check the session to see if user logged in
    include 'myfunctions.php';

    //this calls a function from another php page and 
    //gets a question from the array based on the category and value
    //that was received from the previous page
    if($_GET['topic'] == 'disney'){
        $qanda = getQAdisney($_GET['cat'], $_GET['val']);
    }
    else if($_GET['topic'] == 'coding'){
        $qanda = getQAcoding($_GET['cat'], $_GET['val']);
    }
    else if($_GET['topic'] == 'ushist'){
        $qanda = getQAushist($_GET['cat'], $_GET['val']);
    }
    //if the user has already answered a question, we display these words instead of the question
    if(alreadyanswered($_SESSION, $qanda)){
        $msg = "<div>You've already answered this question! Click a different one!</div>";
        $back = "<div class = 'back'><a href = '" . $_GET['topic'] . ".php '> BACK TO TOPIC BOARD </a></div>";
    }
}
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
    <div class = "passwordplease">
        <?php if(isset($passplease)){echo $passplease; session_destroy(); exit();}?> <!--This is where we pirnt out our password page-->
    </div>

    <div class = "everything">
         <!-- The next two divs are separate for styling purposes 
          
         This is where our already answered displays-->
        <div class = "message">
            <?php if(isset($msg)){
                echo $msg;
            } ?>
        </div>

        <div>
        <?php if(isset($back)){
                echo $back;
                exit();
            } ?>
        </div>
        
        <div class = "quest">
            <?=$qanda[0]; ?> 
            <!--since the qnada can only have two array entries, 
            I hard coded it to the first entry which has the question and print it out-->
        </div>

        <div class = "answer">

            <form action = "answer.php" method = "post">

                <label for = "myques">
                    Type your answer below:<br>
                    <input type = "hidden" name ="ques" value = "<?=htmlspecialchars($qanda[0])?>">
                    <input type = "hidden" name = "topic" value = "<?=htmlspecialchars($_GET["topic"]);?>">
                    <input type = "text" name = "useranswer" id = "myques" required>
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