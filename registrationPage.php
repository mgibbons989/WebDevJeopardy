<?php include 'myfunctions.php';

if(isset($_POST['registerBut'])){
    $valid = false;

    if(validate($_POST) == 'empty'){
        $msg = "<span style='color:red'>Please fill out required sections(marked with a *) properly!</span>";
    }
    else if(validate($_POST) == 'number'){
        $msg = "<span style='color:red'>Please enter your number properly or leave it blank!</span>";
    }
    else if(validate($_POST) == 'email'){
        $msg = "<span style='color:red'>Please enter your email properly or leave it blank!</span>";
    }
    else if(!alreadyin($_POST)){
        $msg = "<span style='color:red'>Username unavailable. Please choose different username or log in!</span>";
    }
    else{
        $valid = true;
    }
    

    if($valid){
        $contents = "\n" . $_POST['fname'] . ',' . $_POST['lname'] . ',' . $_POST['uname'] . ',' . $_POST['pass'];
        
        if(!empty($_POST['phonenum'])){
            $contents .= ',' . $_POST['phonenum'];
        }
        
        if(!empty($_POST['email'])){
            $contents .= "," . $_POST['email'];
        }
        
        file_put_contents('usernames.txt', $contents, FILE_APPEND | LOCK_EX);
        session_start();
        $_SESSION['userdata']['Username'] = $_POST['uname'];
        header("location:homePage.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel = "stylesheet" href = "mundane.css">
</head>
<body>
    <div class = "top">
        REGISTRATION
    </div>
    <div class = "main">
        <div class = "welcome">
            <p>Please enter your information below:</p>
        </div>

        <div class = "reg"><span class = "red">*</span> indicates required field</div>

        <form action = "" method="post">
            <div class = "info">
                <div><?php if(isset($msg)){echo $msg; $msg = null;}?></div>

                <label for = "first"> First Name <span class = "red">*</span>
                <input type = "text" id = "first" name = "fname"></label><br><br>

                <label for = "last"> Last Name <span class = "red">*</span>
                <input type = "text" id = "last" name = "lname"></label><br><br>

                <label for = "uname"> Username <span class = "red">*</span>
                <input type = "text" id = "uname" name = "uname"></label><br><br>

                <label for = "pword"> Password <span class = "red">*</span>
                <input type = "text" id = "pword" name = "pass"></label><br><br>
                
                <label for = "pnum">Phone Number
                <input type = "text" id = "pnum" name = "phonenum"></label><br><br>
    
                <label for = "email"> Email
                <input type = "text" id = "email" name = "email"></label><br><br>
                
                <input type = "submit" name = "registerBut" value = "Register">
            </div>
        </form>
        <div class = "reg">Already have an account? <a href = "loginPage.php">Login.</a></div>
    </div>
</body>
</html>