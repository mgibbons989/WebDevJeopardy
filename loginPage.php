<?php session_start();

include 'myfunctions.php';
//check the session to see if user logged in
if(isset($_SESSION['loggedin']) && ($_SESSION['loggedin']) == true){
    header("location:homePage.php");
}

if(isset($_POST['loginBut'])){ //if login button is clicmked
    $users = file('usernames.txt'); //import file
    $username = htmlspecialchars(isset($_POST['username']) ? $_POST['username'] : '');
    $password = htmlspecialchars(isset($_POST['password']) ? $_POST['password'] : '');
    //assign the username and password the user inputted
    $looking = $username . ',';
     //this is to prevent the file from reading a similar name as the user name
    //the comma indicates the end,
    //for example: mark and mark1 vs mark, and mark1

    //reads each line in the file and if the username is found, we get the information from the line
    foreach($users as $user){
        if(preg_match("/\b$looking\b/",$user)){
            $allinfo = explode(',', $user);
            break;
        }
    }
    
    //if we never find the username, inform the current user
    if(!isset($allinfo)){
        $failed = "<span style='color:red'>Username Not Found. Please Register First!</span>";
    }
    else if($password == trim($allinfo[3])){ 
        //if the username is found and the password matches we go to the next page and declare the session
        //variable to say we logged in
        
        $_SESSION['username'] = $username;
        $_SESSION['loggedin'] = true;
        header("location:homePage.php");
        exit();
    }
    else{ //if we found the username but the passowrd doesnt match then we tell the user
        $failed = "<span style='color:red'>Invalid login details. Please Register!</span>";
    }
}
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
            <div class = "failed"><?php if(isset($failed)){echo $failed;}?></div> <!--if the failed message is filled, we display the error message-->
        
            <form action = "" method = "post"> <!--form for user entry-->
                <label for = "username">Username<br>
                <input type = "text" id = "username" name = "username"></label><br><br>

                <label for  ="password">Password<br>
                <input type = "password" id = "password" name = "password"></label>
                <br><br>

                <input type = "submit" name = "loginBut" value = "Login">
            </form>
        </div>
            <div class = "reg">Need to create an account? <a href = "registrationPage.php">Register.</a></div> <!--Link to the registration page-->
        
    </div>
</body>
</html>