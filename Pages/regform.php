<html>

<head>
    <meta name="viewport" content="width  = device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <div class="signup-box">
            <div class="col-1">
                <img src="../Images/registration.jpg">
            </div>
            <div class="col-2">
                <h2>Regisztrálj te is!</h2>
                <span>Van már fiókod? <a href="index.php?oldal=login_field">Bejelentkezés</a></span>
                <a href="" class="google-link">
                    <img src="../Images/google.png"> Bejelentkezés Google-fiókkal
                </a>
                <h4>vagy</h4>

                <form class="registration" method="POST">

                    <label>Név:</label>

                    <input class="input-field" type="text" placeholder="Név" name="name">

                    <label>Emailcím:</label>

                    <input class="input-field" type="text" placeholder="E-mail" name="mail">


                    <label>Neptun kód:</label>

                    <input class="input-field" type="text" placeholder="Neptun kód" name="neptun">

                    <label>Jelszó:</label>

                    <input class="input-field" type="password" placeholder="Jelszó" name="psw">

                    <label>Jelszó megerősítése:</label>

                    <input class="input-field" type="password" placeholder="Jelszó megerősítése" name="pswag">



                    <div class="row">
                        <input type="checkbox" checked> <span>Elfogadom a <a href="#">Felhasználási Feltételeket és az
                                Adatkezelési Tájékoztatót.</a></span>


                    </div>
                    <button type="submit" name="reg">Regisztráció</button>
                </form>
                <?php
                include "connection.php";
                if (isset($_POST["reg"])) {
                    include_once("registration.php");
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>