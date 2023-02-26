<?php
$nc = $_POST['neptuncode'];
$pw = $_POST['password'];

$titkositott = md5($pw);
$ncfel = strtoupper($nc);

$sql = $conn->query("SELECT * FROM registered_users WHERE neptun LIKE '$ncfel' && password like '$titkositott'");
$exists = $sql->num_rows;

$name = $conn->query("SELECT lastName FROM registered_users WHERE neptun LIKE '$ncfel'");
//ellenörzés

if ($exists != 1) 
	print "Hibás neptunkód vagy jelszó!";
	
	else{
		$_SESSION["id"] = $ncfel;
	header("Location:?page=main");
}
?>