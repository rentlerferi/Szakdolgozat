<?php
		$nc = $_POST['neptuncode'];
		$pw = $_POST['password'];

		$titkositott = md5($pw);
		$ncfel = strtoupper($nc);
		
		$sql = $conn->query("SELECT * FROM registered_users WHERE neptun LIKE '$nc' && password like '$ncfel'"); 
		$vane = $sql->num_rows;
		
		//ellenörzés
	
		if($vane == 1)
		{
			$_SESSION["id"] = $nc;
			header("Location:?oldal=main");
		}
		else
			print "Hibás neptunkód vagy jelszó!";
?>