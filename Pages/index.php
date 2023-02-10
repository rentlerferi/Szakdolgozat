<html>

<head>
	<title>United Unies</title>
	<meta charset="UTF-8">
	<link href="../style/page.css" rel="stylesheet" type="text/css" />
	<link href="../style/menu.css" rel="stylesheet" type="text/css" />
	<link href="../style/registration.css" rel="stylesheet" type="text/css" />
	<link href="../style/footer.css" rel="stylesheet" type="text/css" />
	<link href="../style/buildings.css" rel="stylesheet" type="text/css" />
	<link href="../style/main.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
		integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />


	<script src="../javascript/slideshow.js"></script>
	<script src="../javascript/maps.js"></script>
	<script src="../javascript/gallery.js"></script>

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
			if (!isset($_SESSION["id"])) {
				print
					'<li><a href="index.php?oldal=regform">Regisztráció</a></li>
				<li><a href="index.php?oldal=login_field">Belépés</a></li>';
			}
			if (isset($_SESSION["id"])) {
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
	if (isset($_SESSION["id"]))
		print "<div class='not'>Üdvözlünk: " . $_SESSION["id"] . "</div>";
	?>
	<div id="lap">
		<?php
		if (isset($_GET["oldal"])) {
			$o = $_GET["oldal"];
			$o .= ".php";
			include($o);
		} else
			include("main.php");
		?>
	</div>
</body>
<footer>
	<p>Copyright &copy;
		<script>document.write(new Date().getFullYear());</script>
	</p>
	<p float="right"> My github is<a href="https://github.com/rentlerferi/Szakdolgozat.git"
			target="https://github.com/rentlerferi/Szakdolgozat.git">here.</a> </p>
	<p class="cofee"> Buy me a <a href="">coffe</a>. </p>
	<div class="social">
		<ul>
			<li>
				<a href="https://uni-pannon.hu/hu/" target="https://uni-pannon.hu/hu/" title="Egyetemi weboldal"><i
						class="fa fa-globe"></i></a>
			</li>
			<li>
				<a href="https://www.facebook.com/UniPannon/?locale=hu_HU"
					target="https://www.facebook.com/UniPannon/?locale=hu_HU" title="Hivatalos facebook"><i
						class="fa fa-facebook"></i></a>
			</li>
			<li>
				<a href="https://www.youtube.com/user/egyetemtv" target="https://www.youtube.com/user/egyetemtv"
					title="Hivatalos youtube"><i class="fa fa-youtube"></i></a>
			</li>
			<li>
				<a href="https://www.instagram.com/pannon_egyetem/?hl=hu"
					target="https://www.instagram.com/pannon_egyetem/?hl=hu" title="Instagram"><i
						class="fa fa-instagram"></i></a>
			</li>
		</ul>
	</div>

</footer>


</html>