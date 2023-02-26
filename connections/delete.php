<?php
include_once "../connections/connection.php";

$id = $_POST['id'];
$conn->query("DELETE  FROM registered_users WHERE neptun LIKE '$id'");

session_destroy();
$_SESSION = array();
mysqli_close($conn);
header("Location:?page=main");
?>