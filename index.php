<?php
// Menampilkan dan melaporkan error
error_reporting(E_ALL);
ini_set('display_errors', true);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <title>KAZ-SITE</title>
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
                <button class="login-btn" type="button">
                    Log In
                </button>
            </div>
            <div>
                <button class="quiz-btn" type="button">
                    <a href="php/quiz.php">Test_QUIZ</a>
                </button>
            </div>
        </section>

        <aside class="right-sidebar">Ads sidebar</aside>

        <footer class="footer">Footer</footer>
    </holy-grail-flexbox>
</body>
</html>