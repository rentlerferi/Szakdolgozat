<html>

<head>
    <title>United Unies</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="../style/page.css" rel="stylesheet" type="text/css" />
    <link href="../style/menu.css" rel="stylesheet" type="text/css" />
    <link href="../style/registration.css" rel="stylesheet" type="text/css" />
    <link href="../style/buildings.css" rel="stylesheet" type="text/css" />
    <link href="../style/main.css" rel="stylesheet" type="text/css" />
    <link href="../style/login.css" rel="stylesheet" type="text/css" />
    <link href="../style/profile.css" rel="stylesheet" type="text/css" />



    <script src="../javascript/maps.js"></script>
    <script src="../javascript/progressbar.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <!-- Bootstrap stylesheet -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font awesome stylesheet -->

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
        integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap javascript -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    

</head>
<header>
    <img src="../Images/log.png" width="650px" margin-bottom="1%">
    <nav>
        <ul>
            <li><a href="index.php?page=main">Kezdőlap</a></li>
            <li><a href="index.php?page=buildings">Épületek</a></li>
            <li><a href="index.php?page=places">Nevezetességek</a></li>
            <?php
			session_start();
			if (!isset($_SESSION["id"])) {
				print
					'<li><a href="index.php?page=regform">Regisztráció</a></li>
				<li><a href="index.php?page=login_field">Belépés</a></li>';
			}
			if (isset($_SESSION["id"])) {
				$id = session_id();
				
				print
					'<li><a href="index.php?page=callendar">Órarend</a></li>
        		<li><a href="index.php?page=profile">Profil</a></li>
				<li><a href="index.php?page=logout">Kilépés</a></li>';

				print ('<div class="session">Üdvözlünk:</div>'. $_SESSION["id"]);
			}
			?>
        </ul>
    </nav>
</header>

<body>
    <div id="content">
        <?php
		if (isset($_GET["page"])) {
			$o = $_GET["page"];
			$o .= ".php";
			include($o);
		} else
			include("main.php");
		?>
    </div>
</body>
<footer class="bg-dark text-center text-white fixed-bottom">
    <!-- Grid container -->
    <div class="container p-2 pb-1">
        <!-- Section: Social media -->
        <section class="mb-1 ">

            <!-- weboldal -->
            <a class="btn text-white roundeed-circle " style="background-color: #ffac44;" title="Eredeti weboldal"
                href="https://uni-pannon.hu/hu/" target="https://uni-pannon.hu/hu/" role="button"><i
                    class="fab fa-fly"></i></a>
            <!-- Facebook -->
            <a class="btn text-white " style="background-color: #3b5998;" title="Facebook"
                href="https://www.facebook.com/UniPannon/?locale=hu_HU"
                target="https://www.facebook.com/UniPannon/?locale=hu_HU" role="button"><i
                    class="fab fa-facebook-f"></i></a>
            <!-- youtube -->
            <a class="btn text-white " style="background-color: #ed302f;" title="Youtube"
                href="https://www.youtube.com/user/egyetemtv" target="https://www.youtube.com/user/egyetemtv"
                role="button"><i class="fab fa-youtube"></i></a>
            <!-- Instagram -->
            <a class="btn text-white " style="background-color: #ac2bac;" title="Instagram"
                href="https://www.instagram.com/pannon_egyetem/?hl=hu"
                target="https://www.instagram.com/pannon_egyetem/?hl=hu" role="button"><i
                    class="fab fa-instagram"></i></a>
            <!-- Github -->
            <a class="btn  text-white " style="background-color: #008737;" title="Github oldalam"
                href="https://github.com/rentlerferi/Szakdolgozat.git"
                target="https://github.com/rentlerferi/Szakdolgozat.git" role="button"><i class="fab fa-github"></i></a>
            <!-- coffee -->
            <a class="btn  text-white" style="background-color: #481449;" title="Buy me a cofee" href="#!" target=""
                role="button"><i class="fas fa-mug-hot"></i></a>

        </section>

        <!-- Section: Social media -->

    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3 " style="background-color: rgba(0, 0, 0, 1); height: auto;">
        Copyright &copy;:
        <script>
        document.write(new Date().getFullYear());
        </script>
    </div>
    <!-- Copyright -->
</footer>

<script>
    function deleteAccount() {
		$id = "<?php $_SESSION['id'] ?>";
        if (confirm("biztos")) {
            jQuery.ajax({
                type: "POST",
                url: "../connections/delete.php",
                data: {id:$id},
                success: function() {
                    console.log($id);
                }
            });
        }
    }
    </script>

</html>