<?php
    require 'functions.php';
    session_start();
    $_SESSION['userResponse'] = "";

    $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';
    if ($contentType === "application/json") {
        $content = trim(file_get_contents("php://input"));
        $decoded = json_decode($content, true);
        echo '<script>console.log('.$decoded.')</script>';
        $_SESSION["usrname"] = $decoded;
    }

    if( isset($_POST["submit"]) ){

        $_SESSION['userResponse'] = json_decode(json_encode($items, JSON_FORCE_OBJECT), true);
        
        header('Location:result.php');
        exit();
    }

    echo '<script>console.log("'.$_SESSION["usrname"].'");</script>';
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
    <!-- <script type="text/javascript" src="../js/functions.js"></script> -->
    <?php
        $directoryRef = __DIR__ ;
        $script = file_get_contents($directoryRef."/../js/functions.js");
        echo '<script>'.$script.'</script>';
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
        <form action="" method="post">
            <button type="submit" name="submit">SEND DATA</button>
        </form>
            
    </submission-area>
</body>
</html>