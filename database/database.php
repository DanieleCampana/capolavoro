<?php
$hostname = "localhost";
$dbname = "ai";
$username = "root";
$password = "";
try {
    $db = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}
