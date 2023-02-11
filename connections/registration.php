<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['mail'];
$neptun = $_POST['neptun'];
$jelszo = $_POST['psw'];
$jelszo2 = $_POST['pswag'];

$sql = $conn->query("SELECT * FROM registered_users WHERE neptun LIKE '$neptun'"); 
$first = strlen($firstname);
$vane = $sql->num_rows;
$last = strlen($lastname);
$kodhossz = strlen($neptun);
$jelszohossz = strlen($jelszo);

//jelszó titkosítás
$titkositott = md5($jelszo);
$neptunfel = strtoupper($neptun);
/*$hossz2 = strlen($titkositott);
print "$hossz2";*/

if ($first > 0 && $last > 0 && $vane == 0 && $kodhossz == 6 && $jelszo == $jelszo2 && $jelszohossz >= 8 && $jelszohossz <= 16) {
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
else if ($jelszohossz < 8 || $jelszohossz > 16)
	print "<div class='not'>A jelszó 8 és 16 karakter között legyen!</div>";

?>