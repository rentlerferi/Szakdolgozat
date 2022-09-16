<html>
<head>
    <title>United Unies</title>
    <meta charset="UTF-8">
    <link href="design.css" rel="stylesheet" type="text/css">
    <script src="menu.js"></script>
    <img src="Images/log.png" width="750">
    <nav>
        <div class="dot"></div>
        <ul>
            <li><a href="index.php?oldal=main">Kezdőlap</a></li>
            <li><a href="index.php?oldal=Epuletek">Épületek</a></li>
            <li><a href="index.php?oldal=Nev">Nevezetességek</a></li>
		<?php
			session_start();
			if(!isset($_SESSION["id"]))
			{	
				print
				'<li><a href="index.php?oldal=reg">Regisztráció</a></li>
				<li><a href="index.php?oldal=belep">Belépés</a></li>';
			}
			if(isset($_SESSION["id"]))
			{
				print
				'<li><a href="index.php?oldal=Orarend">Órarend</a></li>
				<li><a href="index.php?oldal=kilep">Kilépés</a></li>';
			}
		?>
        </ul>
    </nav>
</head>

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
<!-- Remove the container if you want to extend the Footer to full width. -->
<!--<div class="container my-5"> -->
  <footer class="bg-light text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #3b5998;"
        href="#!"
        role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #55acee;"
        href="#!"
        role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #dd4b39;"
        href="#!"
        role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #ac2bac;"
        href="#!"
        role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #0082ca;"
        href="#!"
        role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>
      <!-- Github -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #333333;"
        href="#!"
        role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="http://unitedunies.nhely.hu">unintedunies.hu</a>
  </div>
  <!-- Copyright -->
</footer>
  
</div>
<!-- End of .container -->
</html>

