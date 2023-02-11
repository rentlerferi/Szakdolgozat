<html>

<head>
    <meta name="viewport" content="width  = device-width, initial-scale=1.0">
</head>

<body>
   
    <div class="container">
        <div class="signup-box row">
            <div class="col-lg-6">
                <img src="../Images/registration.jpg">
            </div>
            <div class="col-2 col-lg-6 radius-2">
                <h2>Regisztrálj te is!</h2>
                <span>Van már fiókod? <a href="index.php?oldal=login_field">Bejelentkezés</a></span>
                <a href="" class="google-link">
                    <img src="../Images/google.png"> Bejelentkezés Google-fiókkal
                </a>
                <h4>vagy</h4>

                <form class="registration" method="POST">

                    <label>Vezetéknév</label>

                    <input class="input-field" type="text" placeholder="Vezetéknév" name="firstname" required oninvalid="this.setCustomValidity('Kurva anyád')"  >

                    <label>Keresztnév</label>

                    <input class="input-field" type="text" placeholder="Kersztnév" name="lastname" required>

                    <label>Emailcím:</label>

                    <input class="input-field" type="text" placeholder="E-mail" name="mail" required>

                    <label>Neptun kód:</label>

                    <input class="input-field" type="text" placeholder="Neptun kód" name="neptun">

                    <label>Jelszó:</label>

                    <input class="input-field" type="password" placeholder="Jelszó" name="psw">

                    <label>Jelszó megerősítése:</label>

                    <input class="input-field" type="password" placeholder="Jelszó megerősítése" name="pswag">



                    <div class="row2">
                        <input type="checkbox" checked> <span>Elfogadom a <a href="#">Felhasználási Feltételeket és az
                                Adatkezelési Tájékoztatót.</a></span>


                    </div>
                    <button type="submit" name="reg">Regisztráció</button>
                </form>
                <?php
                include "../connections/connection.php";
                if (isset($_POST["reg"])) {
                    include_once("../connections/registration.php");
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>