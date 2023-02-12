<html>

<body>
    <div class="regform">
        <div class="login-box">
            <div class="row1">
                <h2>Belépés</h2>
                <span>Nincs még fiókod? Regisztrálj <a href="index.php?oldal=regform">itt!</a></span>
                <form class="login" method="POST">
                    <label class="loglabel">Neptunkód:</label>

                    <input class="input-field" type="text" placeholder="Neptunkód" name="neptuncode">
                    <label class="loglabel">Jelszó:</label>
                    <input class="input-field" type="password" placeholder="Jelszó" name="password">
                    <button type="submit" class="reg-logbttn" name='be'>Login</button>
                </form>

                <?php
                include "../connections/connection.php";
                if (isset($_POST["be"])) {
                    include_once("../connections/login.php");
                }
                ?>
            </div>
            <div class="row2">
                <div class="description">
                    <h2>Belépés</h2>
                    <p>Laoreet non curabitur gravida arcu. Pretium viverra suspendisse potenti nullam. Semper quis
                        lectus nulla at
                        volutpat
                        diam ut. Ullamcorper sit amet risus nullam. Sit amet consectetur adipiscing elit duis tristique
                        sollicitudin
                        nibh.
                        Arcu odio ut sem nulla pharetra diam sit amet. Sapien faucibus et molestie ac feugiat sed. Id
                        faucibus nisl
                        tincidunt eget nullam non. Blandit cursus risus at ultrices mi. Neque sodales ut etiam sit.
                        Consectetur
                        adipiscing
                        elit duis tristique sollicitudin nibh sit amet. Nibh tortor id aliquet lectus. Ut eu sem integer
                        vitae justo
                        eget
                        magna fermentum.</p>
                </div>
            </div>

        </div>
    </div>

</body>

</html>