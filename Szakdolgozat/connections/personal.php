<?php

$surname = $_POST['newsurename'];
$lastname = $_POST['newlastname'];
$email = $_POST['newemail'];
$passw = $_POST['password'];
$passowrdagain = $_POST['newpasswordagain'];

$id = $_SESSION["id"];

if ($password != "" && $password == $passowrdagain) {
	$titkositott = md5($passw );
}


if (isset($_SESSION["id"])) {
	if($surname!="")
	$sql = $conn->query("UPDATE registered_users set firstName = '$surname' WHERE neptun LIKE '$id'");
	if($lastname!="")
	$sql = $conn->query("UPDATE registered_users set lastName = '$lastname' WHERE neptun LIKE '$id'");
	if($email!="")
	$sql = $conn->query("UPDATE registered_users set email = '$email' WHERE neptun LIKE '$id'");
	if($passw!="")
	$sql = $conn->query("UPDATE registered_users set `password` = '$titkositott' WHERE neptun LIKE '$id'");
	if ($sql) {
		print " <div class='not'>Sikeres adatmódósítás!</div>";
	} else {
		print " <div class='not'>Sikertelen adatmódósítás </div>";
	}

}

?>