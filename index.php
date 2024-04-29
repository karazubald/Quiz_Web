<?php
// Menampilkan dan melaporkan error
error_reporting(E_ALL);
ini_set('display_errors', true);
require 'require/functions.php';

if(isset($_POST["submit"])){
    // TODO: Add check user mechanism
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <title>KAZ-SITE</title>
    <script src="js/functions.js"></script>
</head>
<body>
    <holy-grail-flexbox>
        <header class="header">Welcome to Kaz Website</header>

        <main class="main-content">
            <card-box>
                Content and statistics area
                <!-- Code here for cardbox view -->
            </card-box>
        </main>

        <section class="left-sidebar">
            <greet-user>
                Greetings!
            </greet-user>

            <div>
                <form action="index.php" method="POST">
                    <button class="login-btn" type="submit">
                        Log In
                    </button>
                </form>
            </div>
            <div>
                <button class="quiz-btn" type="button">
                    Test_QUIZ
                </button>
            </div>
        </section>

        <aside class="right-sidebar">Ads sidebar</aside>

        <footer class="footer">Footer</footer>
    </holy-grail-flexbox>
</body>
</html>