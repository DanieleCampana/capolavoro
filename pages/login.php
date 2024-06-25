<?php
include 'data.php';
include 'session.php';
include '../database/database.php';

if (isset($_POST['email'])) {
    session_start();
    $_SESSION['id'] = session_id();
    header("Location: home.php");
}else{
    header("Location: index.php");
}
