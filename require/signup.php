<?php
// Menampilkan dan melaporkan error
error_reporting(E_ALL);
ini_set("display_errors", true);
require "functions.php";

if (isset($_POST["submit"])) {
    $jsonRef = "../data/dataref.json"; // json reference
    $user = $_POST["aName"];
    $uniqueID = $_POST["nik"];
    $passwd = $_POST["passwd"];
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $newUserArray = [
        $user => [
            "name" => $user,
            "uniqueID" => $uniqueID,
            "passwd" => $passwd,
            "email" => $email,
            "regisDate" => date("Y-m-d"),
        ],
    ];

    $isRegisteredUser = checkDataRef($jsonRef, $uniqueID);
    if ($isRegisteredUser) {
        echo '<script>window.alert("Nama anda sudah terdaftar sebagai user. Silakan menuju halaman login!")</script>';
        //header('Location:login.php');
        //exit();
    }
    if (!$isRegisteredUser) {
        echo '<script>window.alert("Nama anda belum terdaftar sebagai user!")</script>';
        writeDataRef($newUserArray,$jsonRef);
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <link rel="stylesheet" type="text/css" href="../css/signup.css" />
</head>
<body>
    <single-box>
        <div id="descriptive-text">
            Halaman Pendaftaran Pengguna
        </div>
        <form action="" method="POST">
            <input type="text" name="aName" id="aName" placeholder="Nama Anda">
            <input type="text" name="nik" id="nik" placeholder="16 digit nomor KTP" minlength="10" maxlength="16">
            <input type="text" name="email" id="email" placeholder="Email">
            <input type="text" name="passwd" id="passwd" placeholder="Kata Sandi" minlength="3">
            <button type="submit" name="submit" value="login">Sign Up</button>
        </form>
        <button type="button" onclick='window.location = "login.php"'>Kembali ke Halaman Masuk</button>
        <button type="button" onclick='window.location = "../index.php"'>Kembali ke Halaman Utama</button>
    </single-box>
</body>
</html>