<?php
session_start();
include_once "../connections/connection.php";
$id = $_POST['id'];
$conn->query("DELETE  FROM registered_users WHERE neptun LIKE '$id'");
mysqli_close($conn);

$_SESSION = array();
session_destroy();
?>