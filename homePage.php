<?php include 'myfunctions.php';
//check the session to see if user logged in
session_start();
if(isset($_COOKIE['score'])){
    $_COOKIE['score'] = 0;
}
if(isset($_POST['logoutBut'])){
    session_unset();
    session_destroy();
    header("location:loginPage.php");
    exit();
}
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
    <div class = "top">
        HOME
    </div>

    <div class = "instructions">

        <div class = "content">
            <div class = "hello">
                <span class = "dir">How to Play</span>
                <label><input type = "checkbox"><span class = "closebut"> &times; </span></label>
            </div>
            <p>Welcome to our Jeopardy Game!</p>
            <p>This is an online version of classic Jeopardy! To begin,
                please choose a topic after closing this window.
            </p>
            <p>Afterwards, you'll be taken to a page with a grid of categories and your choice of money value :).
                Once you click on a value, it'll take you to a question page where you'll type in your answer and
                press submit. The questions vary with simple question and answers, fill in the blanks, and true or false.
            </p>
            <p>If you got it right you'll get the amount you clicked added to your score! If not, you won't
                and you can go back to the categories pages to click another value!
            </p>
        </div>

    </div>
    
    <div class = "center">
        <div class = "welcome">
            <p>Welcome to Web Jeopardy <?= $_SESSION['userdata']['Username']?>!</p>
            <p>Please select a topic below:</p>
        </div>

        <div class = "cards">
            <div class = "topic">
                <a href = "disney.php"><span class = "words">Disney</span></a>
            </div>

            <div class = "topic">
                <a href = ""><span class = "words">Topic 2</span></a>
            </div>

            <div class = "topic">
                <a href = ""><span class = "words">Topic 3</span></a>
            </div>
        </div>

        <form action = "logOutPage.php" method = 'post'>
            <br><br><input type = "submit" name = "logoutBut" value = "Log Out">
        </form>

    </div>

</body>
</html>