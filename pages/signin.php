<?php
include 'data.php';
include '../database/database.php';

$theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light';
$font = isset($_COOKIE['font']) ? $_COOKIE['font'] : 'Arial';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/signin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Registrazione Utente</title>
</head>

<body id="body" style="font-family: <?php echo "$font"; ?>">
    <div class="container <?php echo "$theme"; ?>" id="container">
        <h2>Signin</h2><br><br>
        <form action="result.php" method="post">
            <div id="name-surname">
                <div id="name-div">
                    <label for="name">Nome:</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div id="surname-div">
                    <label for="surname">Cognome:</label>
                    <input type="text" id="surname" name="surname" required>
                </div>
            </div>

            <div id="email-div">
                <label for="email" id="email-label">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="password-container">
                <label for="password" id="password-label">Password:</label>
                <input type="password" id="password" name="password" required>
                <i class="fa-solid fa-eye" id="password-toggle"></i>
            </div>

            <div id="date-region">
                <div id="date-div">
                    <label for="date">Data di Nascita:</label>
                    <input type="date" id="date" name="date" required>
                </div>
            </div>

            <?php


            ?>

            <button type="submit">Registrati</button>
            <button onClick="javascript:window.location.href='index.php'">Vai alla pagina di accesso</button>
        </form>
    </div>

    <script src="../scripts/passwordToggle.js"></script>
</body>

</html>