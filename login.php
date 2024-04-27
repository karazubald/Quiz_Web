<?php
error_reporting(E_ALL);
ini_set('display_errors', true);

    // if button submit is pressed, evaluate $_POST variable
if( isset($_POST["submit"]) ) {
    // cek username & password
    if( $_POST["usrname"] == "admin" && $_POST["passwd"] == "123" ) {
        // TODO: redirect to index php outside require folder!
        //echo '<script type="text/javascript">window.location = "index.php"</script>';
        header('Location:index.php');
        exit;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="../css/login.css" />
</head>
<body>
    <single-box>
        <form action="" method="POST">
            <input type="text" name="usrname" id="usrname" placeholder="Your Username">
            <input type="text" name="passwd" id="passwd" placeholder="Your Password">
            <button type="submit" name="submit" value="login">Login</button>
        </form>
    </single-box>
</body>
</html>