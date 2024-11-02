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
            </div>
            <p>Welcome to our Jeopardy Game!</p>
            <p>This is an online version of the classic Jeopardy game. To begin,
                please choose a topic after closing this window.
            </p>
            <p>Afterwards, you'll be taken to a page </p>
        </div>

    </div>
    
    <div class = "center">
        <div class = "welcome">
            <p>Welcome to Web Jeopardy {NAME HERE}<!--<php $_POST['username'] -->!</p>
            <p>Please select a topic below:</p>
        </div>

        <div class = "cards">
            <div class = "topic">
                <a href = "disney.html"><span class = "words">Disney</span></a>
            </div>

            <div class = "topic">
                <a href = ""><span class = "words">Topic 2</span></a>
            </div>

            <div class = "topic">
                <a href = ""><span class = "words">Topic 3</span></a>
            </div>
        </div>

        <form action = "loginOutPageSubmit.php" method = 'get'>
            <br><br><input type = "submit" name = "loginBut" value = "Log Out">
        </form>

    </div>

</body>
</html>