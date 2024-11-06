<?php include 'myfunctions.php';
//check the session to see if user logged in

if(isset($_POST['loginBut'])){
    $users = file('usernames.txt');
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $looking = $username . ',';

    foreach($users as $user){
        if(preg_match("/\b$looking\b/",$user)){
            $allinfo = explode(',', $user);
            break;
        }
    }

    if(!isset($allinfo)){
        $failed = "<span style='color:red'>Username Not Found. Please Register First!</span>";
    }
    else if($password == trim($allinfo[3])){
        echo "madeit";
        session_start();
        $_SESSION['userdata']['Username'] = $username;
        header("location:homePage.php");
        exit();
    }
    else{
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
            <div class = "failed"><?php if(isset($failed)){echo $failed;}?></div>
        
            <form action = "" method = "post">
                <label for = "username">Username<br>
                <input type = "text" id = "username" name = "username"></label><br><br>

                <label for  ="password">Password<br>
                <input type = "password" id = "password" name = "password"></label>
                <br><br>

                <input type = "submit" name = "loginBut" value = "Login">
            </form>
        </div>
            <div class = "reg">Need to create an account? <a href = "registrationPage.php">Register.</a></div>
        
    </div>
</body>
</html>