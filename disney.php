<?php 
//check the session to see if user logged in
session_start();
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
    <title>Disney</title>
    <link rel = "stylesheet" href = "disney.css"> 
</head>
<body>
    <div class = "topics">
        <a href = "homePage.php">BACK TO TOPICS<br>(Resets your score)</a>
    </div>
    <div class = "mygrid">
        <div class = "category">MARVEL MOVIES</div>
        <div class = "category">ANIMATED FILMS</div>
        <div class = "category">20TH CENTURY</div>
        <div class = "category">STAR WARS</div>
        <div class = "category">GENERAL<br> KNOWLEDGE</div>

        <!-- Each of these is a link sent to the question.php page with a different
         category and value according to which row and column the user clicks on -->
         
        <div class = "money"><a href = "question.php?cat=1&val=200">$200</a></div>
        <div class = "money"><a href = "question.php?cat=2&val=200">$200</a></div>
        <div class = "money"><a href = "question.php?cat=3&val=200">$200</a></div>
        <div class = "money"><a href = "question.php?cat=4&val=200">$200</a></div>
        <div class = "money"><a href = "question.php?cat=5&val=200">$200</a></div>

        <div class = "money"><a href = "question.php?cat=1&val=400">$400</a></div>
        <div class = "money"><a href = "question.php?cat=2&val=400">$400</a></div>
        <div class = "money"><a href = "question.php?cat=3&val=400">$400</a></div>
        <div class = "money"><a href = "question.php?cat=4&val=400">$400</a></div>
        <div class = "money"><a href = "question.php?cat=5&val=400">$400</a></div>
        
        <div class = "money"><a href = "question.php?cat=1&val=600">$600</a></div>
        <div class = "money"><a href = "question.php?cat=2&val=600">$600</a></div>
        <div class = "money"><a href = "question.php?cat=3&val=600">$600</a></div>
        <div class = "money"><a href = "question.php?cat=4&val=600">$600</a></div>
        <div class = "money"><a href = "question.php?cat=5&val=600">$600</a></div>

        <div class = "money"><a href = "question.php?cat=1&val=800">$800</a></div>
        <div class = "money"><a href = "question.php?cat=2&val=800">$800</a></div>
        <div class = "money"><a href = "question.php?cat=3&val=800">$800</a></div>
        <div class = "money"><a href = "question.php?cat=4&val=800">$800</a></div>
        <div class = "money"><a href = "question.php?cat=5&val=800">$800</a></div>
        
    </div>
</body>
</html>