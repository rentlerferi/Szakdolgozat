<html>
<?php
include "../connections/connection.php";
if (isset($_POST["login"])) {
    include_once("../connections/login.php");
}
?>

<body onload="document.loginform.reset();">
    <div class="logform">
        <div class="login-box">
            <div class="row1">
                <h2>Belépés</h2>
                <span>Nincs még fiókod? Regisztrálj <a href="index.php?page=regform">itt!</a></span>
                <form name="loginform" class="login" method="POST">
                    <label class="loglabel">Neptunkód:</label>
                    <input class="input-field" type="text" placeholder="Neptunkód" name="neptuncode"
                        pattern="[A-Za-z]{,6}" required oninvalid="this.setCustomValidity('Helytelen neptunkód')">
                    <label class="loglabel">Jelszó:</label>
                    <input class="input-field" type="password" placeholder="Jelszó" name="password" pattern="{8,}"
                        required oninvalid="this.setCustomValidity('Jelszó megadása kötelező')">

                    <span>Elfelejetett <a href="#">jelszó?</a></span>
                    <button type="submit" class="reg-logbttn" name='login'>Login</button>
                </form>
            </div>
            <div class="row2">
                <div class="description">
                    <h2>Lépj be!</h2>
                    <p>Lépj be te is hogy új funkciókat érhess el! A belépéshez csupán csak a neptunkódra és a megadott
                        jelszavadra van szükség ha van már fiókod. Felöltheted órarendedet illetve módódsíthatod a
                        regisztrációkor megadott adataidat.</p>
                </div>
            </div>

        </div>
    </div>

</body>

<script>
    $('.input-field').on('input', function () { this.setCustomValidity(''); });
</script>

</html>