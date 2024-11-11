<?php
//check the session to see if user logged in

function getQAdisney($cat,$val){
    //this is an array of the questions and matching answer based on the category and value
    $questions = [
        //marvel movies
        '1_200' =>['question' => '"I love you _____"<br> -Morgan Stark', 'answer' => '3000'],
        '1_400' =>['question' => "With Tom Holland's Spiderman, MJ is short for Mary Jane. (True or False)", 'answer' => 'false'],
        '1_600' =>['question' => "What is Black Widow's sister's first name?", 'answer' => 'yelena'],
        '1_800' =>['question' => "What is the Winter Soldier's first and last name?", 'answer' => 'james barnes'], 
        //animated films
        '2_200' =>['question' => 'What is the name of the demigod that accompanies Moana on her journey?', 'answer' => 'maui'], 
        '2_400' =>['question' => 'What animal is Mushu from Mulan?(one word)', 'answer' => 'dragon'], 
        '2_600' =>['question' => '"Some people are worth ______ for."<br> -Olaf', 'answer' => 'melting'],
        '2_800' =>['question' => 'What is the holiday that the movie Coco takes place on?(in spanish)', 'answer' => 'dia de los muertos'], 
        //20th century
        '3_200' =>['question' => 'What fruit did Snow White eat to send her into a coma?', 'answer' => 'apple'], 
        '3_400' =>['question' => '"All you need is a little faith, trust, and _____"<br>-Peter Pan', 'answer' => 'pixie dust'], 
        '3_600' =>['question' => "What is the name of the evil fairy who cursed Aurora in Sleeping Beauty?", 'answer' => 'maleficent'], 
        '3_800' =>['question' => "Ariel's (The Little Mermaid) daughter's first name is Aria.(True or False)", 'answer' => 'false'], 
        //star wars
        '4_200' =>['question' => "What is Darth Vader's first and last name?", 'answer' => 'anakin skywalker'], 
        '4_400' =>['question' => "____ ___ killed Han Solo.", 'answer' => 'kylo ren'], 
        '4_600' =>['question' => "What is the name of Han Solo's ship? (two words)", 'answer' => 'millennium falcon'], 
        '4_800' =>['question' => "In 'The Empire Strikes Back', on which planet did Luke train with Yoda?", 'answer' => 'dagobah'], 
        //general knowledge
        '5_200' =>['question' => 'What was the first Pixar Movie?', 'answer' => 'toy story'], 
        '5_400' =>['question' => 'Who voiced Mufasa in the original Lion King? (full name, including middle)', 'answer' => 'james earl jones'], 
        '5_600' =>['question' => 'Cars released in 2008. (True or False)', 'answer' => 'false'], 
        '5_800' =>['question' => '____ was the first Disney character to get a star on the Hollywood Walk of Fame.', 'answer' => 'mickey mouse'], 
    ];

    $qua = $cat . '_' . $val; //this creates cat_val to find the entry in the questions array

    $question = $questions[$qua]['question'];
    $answer = $questions[$qua]['answer'];

    return [$question, $answer]; //return the match
}

function getQAcoding($cat,$val){
    $questions = [
        //fundamentals
        '1_200' =>['question' => 'What type of variable is a whole number?', 'answer' => 'int'],
        '1_400' =>['question' => "______ is the process of calling a function within itself.", 'answer' => 'recursion'],
        '1_600' =>['question' => "What decimal number is binary code 10101 for?", 'answer' => '21'],
        '1_800' =>['question' => "What is the name of the algorithm that uses O(log n) time complexity to find an element in an array?", 'answer' => 'binary search'], 
        //python
        '2_200' =>['question' => 'I can use input(print("Your name?")) to ask a user for their name.(True or False)', 'answer' => 'false'], 
        '2_400' =>['question' => 'What keyword is used to define a function?', 'answer' => 'def'], 
        '2_600' =>['question' => "To handle errors in Python, we use try and _____ blocks", 'answer' => 'except'],
        '2_800' =>['question' => 'Which built-in function is used to create one-line functions?', 'answer' => 'lambda'], 
        //html
        '3_200' =>['question' => 'What does HTML stand for? (three words)', 'answer' => 'hypertext markup language'], 
        '3_400' =>['question' => "When you want to use an external image in your HTML code, the ___ attribute is used to find the image in files.", 'answer' => 'src'], 
        '3_600' =>['question' => "The 'title' HTML attribute is used to define the text that appears when you hover over an image.(True or False)", 'answer' => 'false'], 
        '3_800' =>['question' => "Which attribute uniquely identifies an HTML element so you can use it with JavaScript DOM", 'answer' => 'id'], 
        //css
        '4_200' =>['question' => 'To make an object horizontally centered, you could change the display to block and do margin: _____.', 'answer' => 'auto'], 
        '4_400' =>['question' => "What are >, +, and ~ in CSS  files?", 'answer' => 'combinators'], 
        '4_600' =>['question' => "To use an external image for the background of an element, I would use 'background-image: ___();'", 'answer' => 'url'], 
        '4_800' =>['question' => 'The order of boxes in the CSS Box Model from inside to out is content, padding, margin, then border.(True or False)', 'answer' => 'false'], 
        //data structures
        '5_200' =>['question' => 'Which beginner data structure consists of nodes leading into one another?', 'answer' => 'linked list'], 
        '5_400' =>['question' => 'In Python, this data structure allows for mapping keys to values.', 'answer' => 'dictionary'], 
        '5_600' =>['question' => 'A _____ is FIFO (first-in, first-out).', 'answer' => 'queue'], 
        '5_800' =>['question' => 'In a binary search tree, the left side of the tree is greater than the root. (True or False)', 'answer' => 'false'], 
    ];

    $qua = $cat . '_' . $val; //this creates cat_val to find the entry in the questions array

    $question = $questions[$qua]['question'];
    $answer = $questions[$qua]['answer'];

    return [$question, $answer]; //return the match
}

function getQAushist($cat,$val){
    $questions = [
        //civil war
        '1_200' =>['question' => 'Who was the President during the Civil War?', 'answer' => 'abraham lincoln'],
        '1_400' =>['question' => "What was the name of the famous speech given by Abraham Lincoln in 1863?", 'answer' => 'gettysburg address'],
        '1_600' =>['question' => '_______ _______ ______ was the Union general who led the "March to the Sea".', 'answer' => 'william tecumseh sherman'],
        '1_800' =>['question' => "What was the name of the first major battle of the Civil War?(four words)", 'answer' => 'battle of bull run'], 
        //us pres
        '2_200' =>['question' => 'Who was the first President of the United States?', 'answer' => 'george washington'], 
        '2_400' =>['question' => 'Franklin D. Roosevelt served three term in office.(True or False)', 'answer' => 'false'], 
        '2_600' =>['question' => 'Who was the 44th President?(First and last name)', 'answer' => 'barack obama'],
        '2_800' =>['question' => '______ ________ was the first President to serve two nonconsecutive terms?', 'answer' => 'grover cleveland'], 
        //Civil rights
        '3_200' =>['question' => "Martin Luther King delivered the famous 'I Have a Dream' speech.(True or False)", 'answer' => 'false'], 
        '3_400' =>['question' => "What year was the Civil Rights Act passed?", 'answer' => '1964'], 
        '3_600' =>['question' => "Brown v. _____ __ ________ is the Supreme Court case that ruled that racial segregation in public schools was unconstitutional.", 'answer' => 'board of education'], 
        '3_800' =>['question' => "What is the name of the first African American to attend a white school?", 'answer' => 'ruby bridges'], 
        //american revolution
        '4_200' =>['question' => 'What year did the American Revolution officially end?', 'answer' => '1783'], 
        '4_400' =>['question' => 'The Treaty of ______ is the name of the treaty that ended the American Revolution.', 'answer' => 'paris'], 
        '4_600' =>['question' => "William Dawes said the famous phrase 'The British are coming!'(True or False)", 'answer' => 'false'], 
        '4_800' =>['question' => 'Which battle is considered the turning point of the American Revolution?(three words)', 'answer' => 'battle of saratoga'], 
        //modern his
        '5_200' =>['question' => 'What year was Barack Obama elected as President?', 'answer' => '2008'], 
        '5_400' =>['question' => 'George Bush Senior was the President during the 9/11 attack.(True or False)', 'answer' => 'false'], 
        '5_600' =>['question' => 'What country was the US involved in a prolonged conflict with from 2001 to 2021?', 'answer' => 'afghanistan'], 
        '5_800' =>['question' => 'Which US state became the last to join the union in 1959?', 'answer' => 'hawaii'], 
    ];

    $qua = $cat . '_' . $val; //this creates cat_val to find the entry in the questions array

    $question = $questions[$qua]['question'];
    $answer = $questions[$qua]['answer'];

    return [$question, $answer]; //return the match
}

function checkAnswer($user, $correct){
    //this checks if the user answer is the correct answer
    return trim(strtolower($user)) == strtolower($correct);
}

function validate($post){
    //this makes sure that the entries in the registration post are valid
    if(empty($post['fname']) || empty($post['lname']) || empty($post['uname']) || empty($post['pass'])){
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

    return true;
    
}

function alreadyin($post){
    //checks if the username is already in the file when the user tries to register
    $users = file('usernames.txt');
    $username = isset($post['uname']) ? $post['uname'] : '';
    $username .= ',';

    foreach($users as $user){
        if(preg_match("/\b$username\b/",$user)){
            return false;
        }
    }
    return true;
}

function alreadyanswered($session, $qanda){
    //checked if the question is in the session variable
    if(isset($session['answered'][htmlspecialchars($qanda[0])])){
        return true;
    }
    return false;
}

function myscore(){

    //displays the score
    echo "<div class = 'score'>

            <div class = 'sc'>Your Score</div>
            <div class = 'scnum'>$ " . isset($_COOKIE['score']) ? $_COOKIE['score'] : 0 . "</div>
            <!-- Displays the score if its set and if not, then it displays zero -->

        </div>";
}
?>