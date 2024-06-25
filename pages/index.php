<?php
include 'data.php';
include 'session.php';
include '../database/database.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cryptedPassword = sha1($password);
    $data = [
        "email" => $email,
        "cryptedPassword" => $cryptedPassword,
    ];

    $sql = "SELECT * FROM users WHERE mail=:email AND password=:cryptedPassword";
    $result = $db->prepare($sql);
    $result->execute($data);
    $row = $result->fetch(PDO::FETCH_ASSOC);

    session_start();
    $_SESSION['id'] = $row['id'];
    $_SESSION['email'] = $row['email'];
    header("Location: home.php");
}

$theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light';
$font = isset($_COOKIE['font']) ? $_COOKIE['font'] : 'Arial';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Accesso utente</title>
</head>

<body id="body" style="font-family: <?php echo "$font"; ?>">

    <div class="container <?php echo "$theme"; ?>" id="container">
        <h2>Login</h2><br><br>
        <form action="login.php" name="form" method="post">    
            <label for="email" id="test">Email:</label>
            <input type="text" id="email" name="email">

            <label for="password">Password:</label>
            <div class="password-container">
                <input type="password" id="password" name="password" required>
                <i class="fa-solid fa-eye" id="password-toggle"></i>
            </div>

            <button type="submit" name="login" id="login" disabled>Accedi</button>
            <button onClick="javascript:window.location.href='signin.php'">Registrati</button><br><br>

            <div class="themeContainer">
                <label for="themeToggle" style="padding-right: 5px; font-size: 16px; min-width:20%">Cambia tema</label>
                <label class="switch">
                    <input type="checkbox" id="themeToggle">
                    <span class="slider round"></span>
                </label>
            </div>

            <div class="fontContainer">
                <label for="fontSelector" style="padding-right: 5px; min-width:20%">Cambia font</label>
                <select name="fontSelector" id="fontSelector" style="font-size: 16px"></select>
            </div>
        </form>
    </div>

    <script src="../scripts/dbRequest.js"></script>
    <script src="../scripts/cookie.js"></script>
    <script src="../scripts/passwordToggle.js"></script>
</body>

</html>