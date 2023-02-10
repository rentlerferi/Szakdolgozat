<html>

<body>

    <div class="login-box">
        <h2>Belépés</h2>
        <form class="registration" method="POST">
            <label class="loglabel">Neptunkód:</label>

            <input class="input-field" type="text" placeholder="Neptunkód" name="neptuncode">
            <label class="loglabel">Jelszó:</label>
            <input class="input-field" type="password" placeholder="Jelszó" name="password">
            <button type="submit" class="reg-logbttn" name='be'>Login</button>
        </form>

        <?php
        include "connection.php";
        if (isset($_POST["be"])) {
            include_once("login.php");
        }
        ?>
    </div>


</body>

</html>