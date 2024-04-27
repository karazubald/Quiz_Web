<?php
error_reporting(E_ALL);
ini_set('display_errors', true);

// if button submit is pressed, evaluate $_POST variable
if( isset($_POST["login"]) ) {
    // cek username & password
    if( $_POST["usrname"] == "admin" && $_POST["passwd"] == "123" ) {
        // TODO: redirect to index php outside require folder!
        //echo '<script>console.log("isSet");</script>';
        //echo "<script type='text/javascript'>window.location.replace = '../index.php'</script>";
        header('Location:../index.php');
        exit;
    } else {
        // Jika salah, tampilkan pesan kesalahan
        //echo 'Terjadi kesalahan!';
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
        <form action="" method="post">
            <input type="text" name="usrname" id="usrname" placeholder="Your Username">
            <input type="password" name="passwd" id="passwd" placeholder="Your Password">
            <button type="submit" name="login">Login</button>
        </form>
    </single-box>
</body>
</html>