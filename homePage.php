<?php session_start();
include 'myfunctions.php';
//check the session to see if user logged in

//if the user isnt logged in, we display a message and ask them to 
if(!isset($_SESSION['loggedin']) || ($_SESSION['loggedin']) != true){
    $passplease = "<div class = 'mymess'>This is a password protected page. Please <a href = 'loginPage.php'>Login</a> or 
    <a href = 'registrationPage.php'>Register</a> first.</div>";
}

unset($_SESSION['answered']); //if user has played before, we reset the array that keeps track of the answered questions

if(isset($_COOKIE['score'])){
    setcookie('score', 0, time() + 3600 * 24);
    $_COOKIE['score'] = 0;
}
//if the user played before, we reset the score cookie

if(isset($_POST['logoutBut'])){
    session_unset();
    session_destroy();
    header("location:loginPage.php");
    exit();
}
//if the user clicks log out, we reset everything and go back to the log in page
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeopardy</title>
    <link rel = "stylesheet" href = "mundane.css">
</head>
<body>
    
    <div class = "passwordplease">
        <?php if(isset($passplease)){echo $passplease; session_destroy(); exit();} // this displays the password page and stops everything else from printing?>
    </div>

    <div class = "top">
        HOME
    </div>

    <div class = "instructions">

        <div class = "content">
            <div class = "hello">
                <span class = "dir">How to Play</span>
                <label><input type = "checkbox"><span class = "closebut"> &times; </span></label>
            </div>
            
            <div class = "directions">
                <div>
                    <p>Welcome to our Jeopardy Game!</p>
                    <p>This is an online version of classic Jeopardy! To begin,
                        please choose a topic after closing this window.
                    </p>
                    <p>Afterwards, you'll be taken to a page with a grid of categories and your choice of money value :).
                        Once you click on a value, it'll take you to a question page where you'll type in your answer and
                        press submit. The type of question vares with QnA, fill in the blank, or true or false.
                    </p>
                    <p>If you get it right, the amount you clicked is added to your score! If not, you won't
                        and you can go back to the gameboard to click another value!
                    </p>
                    <p>Once you answer all the questions, we'll check your score to see if you win and let you know!</p>
                </div>
            </div>
        </div>

    </div>
    
    <div class = "center">
        <div class = "welcome">
            <p>Welcome to Web Jeopardy <?= $_SESSION['username'] //we stored the user name from the log in page?>!</p>
            <p>Please select a topic below:</p>
        </div>

        <div class = "cards">
            <div class = "topic">
                <a href = "disney.php"><span class = "words">Disney</span></a>
            </div>

            <div class = "topic">
                <a href = "coding.php"><span class = "words">Coding</span></a>
            </div>

            <div class = "topic">
                <a href = "ushist.php"><span class = "words">U.S. History</span></a>
            </div>
        </div>

        <div>
            <form action = "" method = 'post'>
                <br><br><input type = "submit" name = "logoutBut" value = "Log Out">
            </form>
        </div>

    </div>

</body>
</html>