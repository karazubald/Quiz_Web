<?php
// Menampilkan dan melaporkan error
error_reporting(E_ALL);
ini_set('display_errors', true);
require 'require/functions.php';
session_start();
// Set session username as 'Anonymous' if not logged in.
if(!isset($_SESSION["usrname"])){
    $_SESSION["usrname"] = "Anonymous";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <title>VANILLA QUIZ WEB APPLICATION</title>
    <script src="js/functions.js"></script>
</head>
<body>
    <holy-grail-flexbox>
        <header class="header">
            Vanilla Quiz Web Application
        </header>

        <main class="main-content">
            <card-box>
                <button class="quiz-btn" type="button" onclick='window.location = "require/quiz.php"'>
                    Test_QUIZ
                </button>
            </card-box>
        </main>

        <section class="left-sidebar">
            <greet-user>
                Greetings, <?= $_SESSION["usrname"] ?>!
            </greet-user>
            <div>
                <button class="login-btn" type="button" onclick='window.location = "require/login.php"'>
                    <?php echo setLogButtonText($_SESSION["usrname"]) ?>
                </button>
            </div>
        </section>

        <aside class="right-sidebar">Ads sidebar</aside>

        <footer class="footer">Footer</footer>
    </holy-grail-flexbox>
</body>
</html>