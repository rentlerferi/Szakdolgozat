<html>

<head>
	<title>United Unies</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="../style/page.css" rel="stylesheet" type="text/css" />
	<link href="../style/menu.css" rel="stylesheet" type="text/css" />
	<link href="../style/registration.css" rel="stylesheet" type="text/css" />
	<link href="../style/footer.css" rel="stylesheet" type="text/css" />
	<link href="../style/buildings.css" rel="stylesheet" type="text/css" />
	<link href="../style/main.css" rel="stylesheet" type="text/css" />
	<link href="../style/login.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
		integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		crossorigin="anonymous"></script>
	<script src="../javascript/maps.js"></script>
	<script src="../javascript/progressbar.js"></script>

	<!-- Bootstrap stylesheet -->

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- Bootstrap javascript -->

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
		integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
		crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
		crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		crossorigin="anonymous"></script>


</head>
<header>
	<img src="../Images/log.png" width="650px" margin-bottom="1%">
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
	<div class="progress position-sticky">
		<div class="progress-bar" id="myProgressBar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
			aria-valuemax="100"></div>
	</div>
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