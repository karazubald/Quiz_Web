<?php
    require 'functions.php';
    session_start();
    $userResult = serialize($_SESSION['userResponse']);
    echo '<script>console.log(JSON.stringify('.json_encode($_SESSION['userResponse']).'))</script>';
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