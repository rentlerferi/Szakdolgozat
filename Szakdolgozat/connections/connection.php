<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uniteduniversities";
// Kapcsolat létrehozása
$conn = new mysqli($servername, $username, $password, $dbname);
// Kapcsolat ellenőrzése
if ($conn->connect_error)
    die("Sikertelen kapcsolódás: " . $conn->connect_error);
?>