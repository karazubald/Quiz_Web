<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
require 'functions.php';
session_start();
// if button submit is pressed, evaluate $_POST variable
if( isset($_POST["submit"]) ) {
    $jsonRef = "../data/dataref.json"; // json reference
    $user = checkDataRef($jsonRef, $_POST["usrname"]);
    $passwd = checkDataRef($jsonRef, $_POST["passwd"]);

    if($user && $passwd) {
        $_SESSION["usrname"] = $_POST["usrname"];
        header('Location: ../index.php');
        exit;
    } else {
        echo '<script>console.log("Data not found!")</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN</title>
    <link rel="stylesheet" type="text/css" href="../css/login.css" />
</head>
<body>
    <single-box>
        <div id="descriptive-text">
            Halaman Masuk
        </div>
        <form action="" method="POST">
            <input type="text" name="usrname" id="usrname" placeholder="Your Username">
            <input type="text" name="passwd" id="passwd" placeholder="Your Password">
            <button type="submit" name="submit" value="login">Login</button>
        </form>
        <button type="button" onclick='window.location = "signup.php"'>Pengguna Baru? Daftar Sekarang!</button>
        <button type="button" onclick='window.location = "../index.php"'>Kembali ke Halaman Utama</button>
    </single-box>
</body>
</html>