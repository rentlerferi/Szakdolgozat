<html>
<head>
    <title>United Unies</title>
    <meta charset="UTF-8">
    <link href="../style/page.css" rel="stylesheet" type="text/css" />
    <link href="../style/menu.css" rel="stylesheet" type="text/css" />
    <link href="../style/registration.css" rel="stylesheet" type="text/css" />
    <link href="../style/footer.css" rel="stylesheet" type="text/css" />
    

</head>
<header>
<img src="../Images/log.png" width="750px" margin-bottom="1%">
    <nav>
        <ul>
            <li><a href="index.php?oldal=main">Kezdőlap</a></li>
            <li><a href="index.php?oldal=buildings">Épületek</a></li>
            <li><a href="index.php?oldal=places">Nevezetességek</a></li>
		<?php
			session_start();
			if(!isset($_SESSION["id"]))
			{	
				print
				'<li><a href="index.php?oldal=regform">Regisztráció</a></li>
				<li><a href="index.php?oldal=login_field">Belépés</a></li>';
			}
			if(isset($_SESSION["id"]))
			{
				print
				'<li><a href="index.php?oldal=callendar">Órarend</a></li>
        <li><a href="index.php?oldal=profile">Profil</a></li>
				<li><a href="index.php?oldal=kilep">Kilépés</a></li>';
			}
		?>
        </ul>
    </nav>

</header>

<body>
	<?php 
		if(isset($_SESSION["id"]))
			print "<div class='not'>Üdvözlünk: " . $_SESSION["id"]."</div>";
	?>
    <div id="lap">
    <?php
			if(isset($_GET["oldal"]))
			{
				$o = $_GET["oldal"];
				$o .= ".php";
				include($o);
			}
			else
				include("main.php");
			?>
    </div>
</body>
<footer>
  <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> Rentler Ferenc </p>
</footer>


</html>

