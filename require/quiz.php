<?php
    require 'functions.php';
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/quiz.css" />
    <title>QUIZ</title>
</head>
<body>
    <script type="text/javascript" src="../js/functions.js"></script>
    <?php
        echo '<script>initItemObject('.json_encode($items, JSON_FORCE_OBJECT).')</script>';
    ?>
    <quiz-area>
        <div id="timer-area">
            Timer is set in here!
        </div>
        <script>
            timer(60,document.getElementById("timer-area"));
        </script>
        <questions-idx id="question-idx">
            <script>
                generateQuestionIndex("questionIndexGroup");
            </script>
        </questions-idx>

        <question-area id="question-area">
            The question will be displayed here.
        </question-area>

        <answer-area id="answer-area">
            Options will be provided here.
        </answer-area>
    </quiz-area>

    <submission-area id="submission-area">
        <button type="button" onclick='
            console.clear();
            let str_out = "";
            for(let index = 0; index < Object.keys(userResponseJSON).length; index++) {
                if(userResponseJSON[index].checkedOption){
                    str_out += Number(index+1)+" => "+JSON.stringify(userResponseJSON[index])+"\n";
                    console.log(userResponseJSON[index]);
                }
            };
            window.alert(str_out);
        '>OUTPUT USER JSON</button>
        <button type="button" onclick='
            console.log(userResponseJSON);
            saveUserResponse(userResponseJSON, "result.php");
            window.location.href = "result.php";
        '>
            SEND DATA
        </button>
    </submission-area>
</body>
</html>