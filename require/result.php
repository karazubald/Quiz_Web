<?php
    require 'functions.php';
    session_start();

    $_POST["userResponse"] = "Not set or not successfully loaded!";

    $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';
    if ($contentType === "application/json") {
        $content = trim(file_get_contents("php://input"));
        $decoded = json_decode($content, true);
        $_POST["userResponse"] = $decoded;

        echo '<script>console.log(JSON.stringify('.json_encode($_POST['userResponse']).'))</script>';
    }

    $userResult = serialize($_POST['userResponse']);
    // echo '<script>console.log(JSON.stringify('.json_encode($_SESSION['userResponse']).'))</script>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESULT</title>
</head>
<body>
    <script type="text/javascript" src="../js/functions.js"></script>
    <div class="user">
        <?php echo $_SESSION["usrname"] ?>
    </div>
    <div class="result">
        <?php echo $userResult; ?>
    </div>
</body>
</html>