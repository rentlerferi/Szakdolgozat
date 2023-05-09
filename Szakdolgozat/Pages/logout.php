<?php
	include_once "../connections/connection.php";
	session_destroy();
	$_SESSION = array();
	mysqli_close($conn);
	header("Location:?page=main");
?>