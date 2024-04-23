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
    <?php
        $questionsTotal = count($items);
        $currentQuestionNumber = 0;

        echo '<script type="text/javascript" src="../js/qz.js"></script>';
        echo '<script>initItemObject('.json_encode($items, JSON_FORCE_OBJECT).')</script>';
    ?>
    <timer-area>
    </timer-area>
    <quiz-area>
        <questions-idx id="question-idx">
            <script>
                generateQuestionIndex();
            </script>
        </questions-idx>

        <question-area id="question-area">
            Please click any number above. The question will appear here. 
        </question-area>

        <answer-area id="answer-area">
            Options will be provided here.
        </answer-area>
    </quiz-area>

    <submission-area id="submission-area">
    </submission-area>
</body>
</html>