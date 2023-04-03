<html>

<head>
    <meta name="viewport" content="width  = device-width, initial-scale=1.0">
</head>

<body onload="document.registartionform.reset();">

    <div class="regform">
        <div class="signup-box">
            <div class="col-2 col-lg-6 radius-2">
                <h2>Regisztrálj te is!</h2>
                <span>Van már fiókod? <a href="index.php?page=login_field">Bejelentkezés</a></span>
                <a href="" class="google-link">
                    <img src="../Images/google.png"> Bejelentkezés Google-fiókkal
                </a>
                <h4>vagy</h4>


                <form name="registartionform" class="registration" method="POST">

                    <label>Vezetéknév</label>

                    <input class="input-field" type="text" placeholder="Vezetéknév" name="firstname"
                        pattern="([A-Z]([a-záéúőóüö.]{1,}\s?)){1,40}" required
                        oninvalid="this.setCustomValidity('Vezétéknéknév megadása kötelező')">

                    <label>Keresztnév</label>

                    <input class="input-field" type="text" placeholder="Kersztnév" name="lastname"
                        pattern="([A-Z]([a-záéúőóüö.]{1,}\s?)){1,40}" required
                        oninvalid="this.setCustomValidity('Keresztnév megadása kötelező')">

                    <label>Emailcím:</label>

                    <input class="input-field" type="text" placeholder="janesmail@gmail.com" name="mail"
                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required
                        oninvalid="this.setCustomValidity('E-mail megadása kötelező Pl, Valami@example.com')">

                    <label>Neptun kód:</label>

                    <input class="input-field" type="text" placeholder="Neptun kód" name="neptun"
                        pattern="[A-Za-z0-9]{,6}" required oninvalid="this.setCustomValidity('Invalid neptunkód')">

                    <label>Jelszó:</label>

                    <input class="input-field" type="password" placeholder="Jelszó"
                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="psw" pattern="[A-Za-z0-9]{1,20}" required
                        oninvalid="this.setCustomValidity('Tartalmazina kell legalább 1 számot kis és nagybetüt és legalább 8 krakternek kell lennie')">

                    <label>Jelszó megerősítése:</label>

                    <input class="input-field" type="password" placeholder="Jelszó megerősítése"
                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="pswag" pattern="[A-Za-z0-9]{1,20}" required
                        oninvalid="this.setCustomValidity('Jelszó megerősítés megadása kötelező')">



                    <div class="row2">
                        <input type="checkbox" required
                            oninvalid="this.setCustomValidity('Felhasználói és adatkezelési tájékoztató elfogadása kötelező')">
                        <span>Elfogadom a <a href="#">Felhasználási Feltételeket és az
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
<script>
    $('.input-field').on('input', function () { this.setCustomValidity(''); });
</script>

</html>