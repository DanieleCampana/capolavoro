<?php
include 'data.php';
include 'session.php';
include '../database/database.php';

$theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light';
$font = isset($_COOKIE['font']) ? $_COOKIE['font'] : 'Arial';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <link rel="stylesheet" href="../styles/sidebar.css">
    <link rel="stylesheet" href="../styles/main.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/MathJax.js?config=default'></script>

</head>

<body id="body" style="font-family: <?php echo "$font"; ?>" onload="openNav()">
    <?php
	/*if (isset($_SESSION['id'])) {
	} else {
		header("Location: index.php");
	}*/
	?>

    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <li><a href="home.php" style="background-color:#555">Home</a></li>
        <li><a href="rna.php">Reti neurali artificiali</a></li>
        <li><a href="rnb.php">Reti neurali biologiche</a></li>
        <li><a href="differences.php">Differenze tra reti neurali</a></li>
        <li><a href="apps.php">Applicazioni</a></li>
    </div>

    <div id="main">
        <button class="openbtn" id="menu" onclick="openNav()">☰ Menu'</button>
        <section id="introduzione">
        <div class="container <?php echo "$theme"; ?>">
                <h2>Introduzione</h2>
                <p>Benvenuto nel sito web "La realtà delle reti neurali". Questo sito web ha come obbiettivo quello
                    di analizzare le reti neurali biologiche e artificiali. Nel menu' a destra sono presenti varie opzioni, cliccando
                    su una di esse verrete indirizzati verso un'altra pagina all'interno della quale saranno esposte informazioni
                    specifiche riguardanti l'argomento selezionato. La navigazione viene facilitata da un indice all'interno di ogni pagina
                    contenente i titoli delle sezioni presenti. La pagina "Differenze tra reti neurali" è dedicata al confronto tra i due tipi di reti
                    e ad un'analisi delle criticita'. Non ci limitamo però solo alla teoria, è possibile anche implementare delle reti neurali
                    direttamente sul vostro computer utilizzando i tutorial presenti in "Applicazioni".
                </p>
            </div>
        </section>


        <section id="chiSiamo">
        <div class="container <?php echo "$theme"; ?>">
                <h2>Chi siamo?</h2>
                <p>Siamo due studenti dell'istituto Amedeo Avogadro di Torino con una passione verso l'informatica e la matematica.
                    Il nostro obbiettivo è quello di far conoscere a più persone possibili l'affascinante mondo delle reti neurali,
                    non limitandoci solo alla teoria ma applicando anche ciò che impariamo.
                </p>
            </div>
        </section>


        <section id="contatti">
        <div class="container <?php echo "$theme"; ?>">
                <h2>Contatti</h2>
                <p>Per qualsiasi dubbio o critica riguardante il nostro progetto sentitevi liberi di contattarci:
                    <li>Email: s8145887a@studenti.itisavogadro.it</li>
                    <li>Email: s8146029l@studenti.itisavogadro.it</li>
                </p>
            </div>
        </section>

    </div>

    <script src="../scripts/main.js"></script>
</body>

</html>