<?php include 'myfunctions.php';
//check the session to see if user logged in
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel = "stylesheet" href = "mundane.css">
</head>
<body>
    <div class = "top">
        <span class = "heading">JEOPARDY</span>
    </div>

    <div class = "main">
        <div class = "welcome">
            <p>Welcome to Web Jeopardy!</p>
            <p>Please login below:</p>
        </div>

        <div class = "info">
            <form action = "loginOutPageSubmit.php" method = "post">
                <label for = "username">Username<br>
                <input type = "text" id = "username" name = "username"></label><br><br>

                <label for  ="password">Password<br>
                <input type = "password" id = "password" name = "password"></label>
                <br><br>

                <input type = "submit" name = "loginBut" value = "Login">
            </form>
        </div>
            <div class = "reg">Need to create an account? <a href = "registrationPage.html">Register.</a></div>
        
    </div>
</body>
</html>