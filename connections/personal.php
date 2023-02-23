<?php

$surename = $_POST['newsurename'];
$lastname = $_POST['newlastname'];
$email = $_POST['newemail'];
$password = $_POST['password'];
$passowrdagain = $_POST['newpasswordagain'];

if (isset($_SESSION["id"])) {
	if ($jelszo == $jelszo2 && $jelszohossz >= 8  ) {
		$sql = $conn->query("");
	}
	else if ($password != $passowrdagain)
		print "<div class='not'>A jelszavak nem egyeznek! </div>";
	
	else if ($password < 8 )
		print "<div class='not'>A jelszó legalább 8 kraktert kell hogy tartalmazzon!</div>";

}

?>