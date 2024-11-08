<?php 
session_start();

//check the session to see if user logged in
if(!isset($_SESSION['loggedin']) || ($_SESSION['loggedin']) != true){
    $passplease = "<div class = 'mymess'>This is a password protected page. Please <a href = 'loginPage.php'>Login</a> or 
    <a href = 'registrationPage.php'>Register</a> first.</div>";
}

//if the user has already played a bit, the score doesn't change
//if they are new to the game, the score is set to 0 and the cookie is set to 
//keep track across pages
if(!isset($_COOKIE['score'])){
    $score = 0;
    setcookie('score', 0, time() + 3600 * 24);
}
else{
    $score = $_COOKIE['score'];
}
if(isset($_SESSION['answered'])){
    if(count($_SESSION['answered']) == 25)
    {
        if($score < 7000){
            header("location: end.php?won=no");
        }
        else{
            header("location: end.php?won=yes");
        }
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coding</title>
    <link rel = "stylesheet" href = "gameboard.css"> 
</head>
<body>
    <div class = "passwordplease">
            <?php if(isset($passplease)){echo $passplease; session_destroy(); exit();}?>
    </div>

    <div class = "topics">
        <a href = "homePage.php">BACK TO TOPICS<br>(Resets your score)</a>
    </div>
    <div class = "mygrid">
        <div class = "category">FUNDAMENTALS</div>
        <div class = "category">PYTHON</div>
        <div class = "category">HTML</div>
        <div class = "category">CSS</div>
        <div class = "category">DATA STRUCTURES</div>

        <!-- Each of these is a link sent to the question.php page with a different
         category and value according to which row and column the user clicks on -->
         
        <div class = "money"><a href = "question.php?topic=coding&cat=1&val=200">$200</a></div>
        <div class = "money"><a href = "question.php?topic=coding&cat=2&val=200">$200</a></div>
        <div class = "money"><a href = "question.php?topic=coding&cat=3&val=200">$200</a></div>
        <div class = "money"><a href = "question.php?topic=coding&cat=4&val=200">$200</a></div>
        <div class = "money"><a href = "question.php?topic=coding&cat=5&val=200">$200</a></div>

        <div class = "money"><a href = "question.php?topic=coding&cat=1&val=400">$400</a></div>
        <div class = "money"><a href = "question.php?topic=coding&cat=2&val=400">$400</a></div>
        <div class = "money"><a href = "question.php?topic=coding&cat=3&val=400">$400</a></div>
        <div class = "money"><a href = "question.php?topic=coding&cat=4&val=400">$400</a></div>
        <div class = "money"><a href = "question.php?topic=coding&cat=5&val=400">$400</a></div>
        
        <div class = "money"><a href = "question.php?topic=coding&cat=1&val=600">$600</a></div>
        <div class = "money"><a href = "question.php?topic=coding&cat=2&val=600">$600</a></div>
        <div class = "money"><a href = "question.php?topic=coding&cat=3&val=600">$600</a></div>
        <div class = "money"><a href = "question.php?topic=coding&cat=4&val=600">$600</a></div>
        <div class = "money"><a href = "question.php?topic=coding&cat=5&val=600">$600</a></div>

        <div class = "money"><a href = "question.php?topic=coding&cat=1&val=800">$800</a></div>
        <div class = "money"><a href = "question.php?topic=coding&cat=2&val=800">$800</a></div>
        <div class = "money"><a href = "question.php?topic=coding&cat=3&val=800">$800</a></div>
        <div class = "money"><a href = "question.php?topic=coding&cat=4&val=800">$800</a></div>
        <div class = "money"><a href = "question.php?topic=coding&cat=5&val=800">$800</a></div>
        
    </div>
</body>
</html>