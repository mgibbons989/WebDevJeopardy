<?php
//check the session to see if user logged in

function getQAdisney($cat,$val){
    //this is an array of the questions and matching answer based on the category and value
    $questions = [
        //marvel movies
        '1_200' =>['question' => 'I love you _____ <br> --Morgan Stark', 'answer' => '3000'],
        '1_400' =>['question' => "With Tom Holland's Spideman, MJ is short for Mary Jane. (True or False)", 'answer' => 'false'],
        '1_600' =>['question' => "What is Black Widow's sister's first name?", 'answer' => 'yelena'],
        '1_800' =>['question' => "What is the Winter Soldier's first and last name?", 'answer' => 'james barnes'], 
        //animated films
        '2_200' =>['question' => 'What is the name of the demigod that accompanies Moana on her journey?', 'answer' => 'maui'], 
        '2_400' =>['question' => 'myquestion', 'answer' => 'myanswer'], 
        '2_600' =>['question' => 'myquestion', 'answer' => 'myanswer'],
        '2_800' =>['question' => 'myquestion', 'answer' => 'myanswer'], 
        //20th century
        '3_200' =>['question' => 'What fruit did Snow White eat to send her into a coma?', 'answer' => 'apple'], 
        '3_400' =>['question' => "In Lady and the Tramp, the two dogs romantically shared a plate of _______(one word).", 'answer' => 'spaghetti'], 
        '3_600' =>['question' => "What is the name of the evil fairy who cursed Aurora in Sleeping Beauty?", 'answer' => 'maleficent'], 
        '3_800' =>['question' => "Ariel's (The Little Mermaid) daughter's first name is Aria.(True or False)", 'answer' => 'false'], 
        //star wars
        '4_200' =>['question' => 'myquestion', 'answer' => 'myanswer'], 
        '4_400' =>['question' => 'myquestion', 'answer' => 'myanswer'], 
        '4_600' =>['question' => "What is Darth Vader's name?", 'answer' => 'anakin skywalker'], 
        '4_800' =>['question' => 'myquestion', 'answer' => 'myanswer'], 
        //general knowledge
        '5_200' =>['question' => 'myquestion', 'answer' => 'myanswer'], 
        '5_400' =>['question' => 'myquestion', 'answer' => 'myanswer'], 
        '5_600' =>['question' => 'myquestion', 'answer' => 'myanswer'], 
        '5_800' =>['question' => 'myquestion', 'answer' => 'myanswer'], 
    ];

    $qua = $cat . '_' . $val; //this creates cat_val to find the entry in the questions array

    $question = $questions[$qua]['question'];
    $answer = $questions[$qua]['answer'];

    return [$question, $answer]; //return the match
}
function getQAcoding($cat,$val){
    $questions = [
        //marvel movies
        '1_200' =>['question' => 'myquestion', 'answer' => 'myanswer'],
        '1_400' =>['question' => "myquestion", 'answer' => 'myanswer'],
        '1_600' =>['question' => "myquestion", 'answer' => 'myanswer'],
        '1_800' =>['question' => "myquestion", 'answer' => 'myanswer'], 
        //animated films
        '2_200' =>['question' => 'myquestion', 'answer' => 'myanswer'], 
        '2_400' =>['question' => 'myquestion', 'answer' => 'myanswer'], 
        '2_600' =>['question' => 'myquestion', 'answer' => 'myanswer'],
        '2_800' =>['question' => 'myquestion', 'answer' => 'myanswer'], 
        //20th century
        '3_200' =>['question' => 'myquestion', 'answer' => 'myanswer'], 
        '3_400' =>['question' => "myquestion", 'answer' => 'myanswer'], 
        '3_600' =>['question' => "myquestion", 'answer' => 'myanswer'], 
        '3_800' =>['question' => "myquestion", 'answer' => 'myanswer'], 
        //star wars
        '4_200' =>['question' => 'myquestion', 'answer' => 'myanswer'], 
        '4_400' =>['question' => 'myquestion', 'answer' => 'myanswer'], 
        '4_600' =>['question' => "myquestion", 'answer' => 'myanswer'], 
        '4_800' =>['question' => 'myquestion', 'answer' => 'myanswer'], 
        //general knowledge
        '5_200' =>['question' => 'myquestion', 'answer' => 'myanswer'], 
        '5_400' =>['question' => 'myquestion', 'answer' => 'myanswer'], 
        '5_600' =>['question' => 'myquestion', 'answer' => 'myanswer'], 
        '5_800' =>['question' => 'myquestion', 'answer' => 'myanswer'], 
    ];

    $qua = $cat . '_' . $val; //this creates cat_val to find the entry in the questions array

    $question = $questions[$qua]['question'];
    $answer = $questions[$qua]['answer'];

    return [$question, $answer]; //return the match
}

function getQAushist($cat,$val){
    $questions = [
        //marvel movies
        '1_200' =>['question' => 'myquestion', 'answer' => 'myanswer'],
        '1_400' =>['question' => "myquestion", 'answer' => 'myanswer'],
        '1_600' =>['question' => "myquestion", 'answer' => 'myanswer'],
        '1_800' =>['question' => "myquestion", 'answer' => 'myanswer'], 
        //animated films
        '2_200' =>['question' => 'myquestion', 'answer' => 'myanswer'], 
        '2_400' =>['question' => 'myquestion', 'answer' => 'myanswer'], 
        '2_600' =>['question' => 'myquestion', 'answer' => 'myanswer'],
        '2_800' =>['question' => 'myquestion', 'answer' => 'myanswer'], 
        //20th century
        '3_200' =>['question' => 'myquestion', 'answer' => 'myanswer'], 
        '3_400' =>['question' => "myquestion", 'answer' => 'myanswer'], 
        '3_600' =>['question' => "myquestion", 'answer' => 'myanswer'], 
        '3_800' =>['question' => "myquestion", 'answer' => 'myanswer'], 
        //star wars
        '4_200' =>['question' => 'myquestion', 'answer' => 'myanswer'], 
        '4_400' =>['question' => 'myquestion', 'answer' => 'myanswer'], 
        '4_600' =>['question' => "myquestion", 'answer' => 'myanswer'], 
        '4_800' =>['question' => 'myquestion', 'answer' => 'myanswer'], 
        //general knowledge
        '5_200' =>['question' => 'myquestion', 'answer' => 'myanswer'], 
        '5_400' =>['question' => 'myquestion', 'answer' => 'myanswer'], 
        '5_600' =>['question' => 'myquestion', 'answer' => 'myanswer'], 
        '5_800' =>['question' => 'myquestion', 'answer' => 'myanswer'], 
    ];

    $qua = $cat . '_' . $val; //this creates cat_val to find the entry in the questions array

    $question = $questions[$qua]['question'];
    $answer = $questions[$qua]['answer'];

    return [$question, $answer]; //return the match
}
function checkAnswer($user, $correct){
    //this checks if the user answer is the correct answer
    if(trim(strtolower($user)) == $correct){
        return true;
    }
    else{
        return false;
    }
}

function validate($post){
    if(empty($post['fname']) || empty($post['lname']) 
        || empty($post['uname']) || empty('pass')){
            return 'empty';
        }

    if(!empty($post['phonenum'])){
        if(!preg_match('/^[1-9]\d{9}$/', $post['phonenum'])){
            return "number";
        }
    }

    if(!empty($post['email'])){
        if(!preg_match('/^\S+@\S+\.\S+$/', $post['email'])){
            return 'email';
        }
    }
    
}

function alreadyin($post){
    $users = file('usernames.txt');
    $username = isset($post['uname']) ? $post['uname'] : '' . ',';

    foreach($users as $user){
        if(preg_match("/\b$username\b/",$user)){
            echo($user . " " . $username);
            return false;
        }
    }
    return true;
}

function alreadyanswered($session, $qanda){
    if(isset($session['answered'][htmlspecialchars($qanda[0])])){
        return true;
    }
    return false;
}

function myscore(){
    echo "<div class = 'score'>

            <div class = 'sc'>Your Score</div>
            <div class = 'scnum'>$ " . isset($_COOKIE['score']) ? $_COOKIE['score'] : 0 . "</div>
            <!-- Displays the score if its set and if not, then it displays zero -->

        </div>";
}
?>