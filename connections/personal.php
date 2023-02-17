<?php

$surename = $_POST['newsurename'];
$lastname = $_POST['newlastname'];
$email = $_POST['newemail'];
$password = $_POST['password'];
$passowrdagain = $_POST['newpasswordagain'];

if (isset($_SESSION["id"])) {

}





if ($first > 0 && $last > 0 && $vane == 0 && $kodhossz == 6 && $jelszo == $jelszo2 && $jelszohossz >= 8) {
	$sql = $conn->query("INSERT INTO registered_users VALUES('$neptun','$firstname','$lastname','$email','$titkositott', now()) ");
	if($sql)
	{
		print " <div class='not'>Sikeres regisztráció! </div>";
	}
	else{
		print " <div class='not'>Sikertelen regisztráció! </div>";
	}
	
} else if ($first == 0)
	print "<div class='not'>Kérlek add meg a vezetékneved! </div>";
else if ($last == 0)
	print "<div class='not'>Kérlek add meg a kresztneved! </div>";
else if ($kodhossz != 6)
	print "<div class='not'>A neptunkód nem megfelelő! </div>";
else if ($jelszo != $jelszo2)
	print "<div class='not'>A jelszavak nem egyeznek! </div>";
else if ($vane > 0)
	print "<div class='not'>Ez a felhasználó már létezik! </div>";
else if ($jelszohossz < 8 )
	print "<div class='not'>A jelszó legalább 8 kraktert kell hogy tartalmazzon!</div>";

?>