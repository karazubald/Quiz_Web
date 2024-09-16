<?php
    require 'functions.php';
    session_start();
    $userResult = "No response found!";
    if(isset($_SESSION['userResponse']) || $_SESSION['userResponse'] !== ""){
        $userResult = $_SESSION['userResponse'];
    } 
    else {
        echo '<script>alert("No data is stored in session!");</script>';
    }
    // $in = file_get_contents('php://input');
    // if ($in === "") $recorded = "Nothing is read, null value detected!"; else $recorded = json_decode($in, true);
    
    // $recorded = json_decode($_POST["userResponse"], true);
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