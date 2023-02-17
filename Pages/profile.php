<html>

<head>
    <meta name="viewport" content="width  = device-width, initial-scale=1.0">
</head>

<div class="changeform">
    <h2>Saját Profil</h2>
    <div class="profile">


        <?php
        if (isset($_SESSION["id"])) {

            $_SESSION["id"] = array();
            $_SESSION["id"]["message"] = "Üdvözlünk: ";
            echo $_SESSION["id"]["message"];
        }
        ?>

        <hr>
        <!-- left column -->

        <!-- edit form column -->
        <div class="col-md-9 personal-info">
            <div class="alert alert-info alert-dismissable">
                <a class="panel-close close" data-dismiss="alert">×</a>
                <i class="fa fa-coffee"></i>
                A neptunkód megváltoztatására nincsen lehetőség!<strong></strong>
            </div>
            <h3>Saját információ</h3>

            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <label class="">Vezetéknév</label>
                    <input class="input-field" type="text" value="" name="newsurename">
                </div>
                <div class="form-group">
                    <label class="">Keresztnév</label>

                    <input class="input-field" type="text" value="" name="newlastname">
                </div>
                <div class="form-group">
                    <label class="">Email</label>
                    <input class="input-field" type="text" value="" name="newemail">
                </div>
                <div class="form-group">
                    <label class="">Jelszó</label>
                    <input class="input-field" type="password" value="11111122333" name="newpassword">
                </div>
                <div class="form-group">
                    <label class="">Jelszó megerősítése</label>
                    <input class="input-field" type="password" value="11111122333" name="newpasswordagain">
                </div>
                <div class="form-group">
                    <label class=""></label>
                    <div class="col-md-8" style="display:inline-flex;">
                        <input type="submit" class="reg-logbttn" value="Változtatások mentése">
                        <input type="reset" class="btn btn-primary" value="Mégse">
                    </div>

                </div>
            </form>
        </div>

    </div>
    <hr>
</div>
<?php
include "../connections/connection.php";
if (isset($_POST["reg"])) {
    include_once("../connections/registration.php");
}
?>



</html>