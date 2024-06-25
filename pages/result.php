<?php
include 'data.php';
include '../database/database.php';

$theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light';
$font = isset($_COOKIE['font']) ? $_COOKIE['font'] : 'Arial';
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../styles/tables.css">
    <title>Invio al DB</title>
</head>

<body id="body" style="font-family: <?php echo "$font"; ?>">

    <style>
        html,
        body {
            text-align: center;
            background-color: white;
            background: linear-gradient(to bottom, green, rgb(16, 48, 12), black) fixed;
        }

        button {
            width: 200px;
            background-color: #4caf50;
            color: black;
            cursor: pointer;
            padding: 4px;
            padding-right: 0%;
            padding-left: 1%;
            border: 1px solid #4caf50;
            border-radius: 4px;
            font-family: inherit;
        }
    </style>

    <?php
    // Connessione al DB
    try {
        $db = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        die();
    }

    // Preparazione dei dati da inviare
    $name =  $_REQUEST['name'];
    $surname = $_REQUEST['surname'];
    $birthDate = $_REQUEST['date'];
    $email = $_REQUEST['email'];
    $password = sha1($_REQUEST['password']);

    // Inserimento dei dati nel database
    $data = [
        'id' => NULL,
        'name' => $name,
        'surname' => $surname,
        'data' => $birthDate,
        'email' => $email,
        'password' => $password,
    ];
    $sql = "INSERT INTO users (id, name, surname, date, mail, password)
        VALUES (:id, :name, :surname, :data, :email, :password)";

    if ($db->prepare($sql)->execute($data)) {
        $userId = $db->lastInsertId();
        echo "<h3>I dati sono stati registrati correttamente all'interno del database</h3>";

        $date = new DateTime($_POST['date']);
        $weekDay = $date->format('w');
        $day = $date->format('j');
        $month = $date->format('m');
        $year = $date->format('Y');
        $birthDate = $days[$weekDay]
            . " " . $day
            . " " . $months[$month]
            . " " . $year;
    } else {
        echo "Insert failed " . $db->errorInfo();
    }

    // Chiusua della connesione
    $db = null;
    ?>

    <div class="table-container">
        <table class="content-table <?php echo "$theme"; ?>">
            <thead>
                <tr>
                    <th>Campo</th>
                    <th>Valore inserito</th>
                </tr>
            </thead>
            <tbody>
                <?php
                echo
                "<tr>
                        <td>Identificativo</td>
                        <td>$userId</td>
                    </tr>";
                echo
                "<tr>
                        <td>Nome</td>
                        <td>$name</td>
                    </tr>";
                echo
                "<tr>
                        <td>Cognome</td>
                        <td>$surname</td>
                    </tr>";
                echo
                "<tr>
                        <td>Data di nascita</td>
                        <td>$birthDate</td>
                    </tr>";
                echo
                "<tr>
                        <td>Email</td>
                        <td>$email</td>
                    </tr>";
                ?>
            </tbody>
        </table>
        <br><br>
    </div><br>
    <p>Verrai reindirizzato alla pagina di registrazione tra 5 secondi</p>
    <?php
    header("refresh:5;url=signin.php");
    ?>
</body>

</html>