<?php
// Menampilkan dan melaporkan error
error_reporting(E_ALL);
ini_set("display_errors", true);
require "functions.php";

if (isset($_POST["submit"])) {
    $jsonRef = "../data/dataref.json"; // json reference
    $user = $_POST["aName"];
    $uniqueID = md5($_POST["nik"], false);
    $isExist = checkDataRef($jsonRef, $user);
    $passwd = md5(trim($_POST["passwd"]), false);
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

    if ($isExist) {
        $isDuplicateID = checkDataRef($jsonRef, $uniqueID);
        if ($isDuplicateID) {
            echo '<script>alert("Nama anda sudah terdaftar sebagai user. Silakan menuju halaman login!")</script>';
            exit();
        }
        writeDataRef($newUserArray,$jsonRef);
    }
    if (!$isExist) {
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
        <form action="" method="POST">
            <input type="text" name="aName" id="aName" placeholder="Nama Anda">
            <input type="text" name="nik" id="nik" placeholder="Nomor KTP">
            <input type="text" name="email" id="email" placeholder="Email">
            <input type="text" name="passwd" id="passwd" placeholder="Kata Sandi">
            <button type="submit" name="submit" value="login">Sign Up</button>
        </form>
    </single-box>
</body>
</html>