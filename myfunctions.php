<?php
//check the session to see if user logged in

function getQA($cat,$val){
    //this is an array of the questions and matching answer based on the category and value
    $questions = [
        '1_200' =>['question' => 'I love you _____ <br> --Morgan Stark', 'answer' => '3000'],
        '1_400' =>['question' => 'myquestion', 'answer' => 'myanswer'],
        '1_600' =>['question' => 'myquestion', 'answer' => 'myanswer'],
        '1_800' =>['question' => 'myquestion', 'answer' => 'myanswer'], 
    
        '2_200' =>['question' => 'myquestion', 'answer' => 'myanswer'], 
        '2_400' =>['question' => 'myquestion', 'answer' => 'myanswer'], 
        '2_600' =>['question' => 'myquestion', 'answer' => 'myanswer'],
        '2_800' =>['question' => 'myquestion', 'answer' => 'myanswer'], 
    
        '3_200' =>['question' => 'myquestion', 'answer' => 'myanswer'], 
        '3_400' =>['question' => 'myquestion', 'answer' => 'myanswer'], 
        '3_600' =>['question' => 'myquestion', 'answer' => 'myanswer'], 
        '3_800' =>['question' => 'myquestion', 'answer' => 'myanswer'], 
    
        '4_200' =>['question' => 'myquestion', 'answer' => 'myanswer'], 
        '4_400' =>['question' => 'myquestion', 'answer' => 'myanswer'], 
        '4_600' =>['question' => 'myquestion', 'answer' => 'myanswer'], 
        '4_800' =>['question' => 'myquestion', 'answer' => 'myanswer'], 
        
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

?>