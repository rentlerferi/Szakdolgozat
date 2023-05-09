<?php
	include_once "../connections/connection.php";
	session_destroy();
	$_SESSION = array();
	mysqli_close($conn);
	//header("location:?page=main");
	echo "<script>window.location.href='index.php'</script>";
?>