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
    <script type="text/javascript" src="../js/qz.js"></script>
    <?php
        echo '<script>initItemObject('.json_encode($items, JSON_FORCE_OBJECT).')</script>';
    ?>
    <script>initUserResponse()</script>
    <timer-area>
    </timer-area>
    <quiz-area>
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
        <button type="button" onclick="
            console.clear();
            for(let index = 0; index < Object.keys(userResponseJSON).length; index++) {
                if(userResponseJSON[index].checkedOption){
                    console.log(userResponseJSON[index]);
                }
            }
        ">OUTPUT USER JSON</button>
    </submission-area>
</body>
</html>