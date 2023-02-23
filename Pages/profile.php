<html>
<?php
//$sure = $conn->query("SELECT firsttName FROM registered_users WHERE neptun LIKE ");
//$last = $conn->query("SELECT lastName FROM registered_users WHERE neptun LIKE ");
//$email = $conn->query("SELECT email FROM registered_users WHERE neptun LIKE");
?>

<head>
    <meta name="viewport" content="width  = device-width, initial-scale=1.0">
</head>

<div class="changeform">
    <h2>Saját Profil</h2>
    <div class="profile">
        <hr>
        <!-- left column -->
        <div class="informationlisting">
            <h3>Szémélyes adatok:</h3>
            <label class="">Vezetéknév</label>
            <label class="">Keresztnév</label>
            <label class="">Email</label>

        </div>

        <!-- edit form column -->
        <div class="col-md-9 personal-info">

            <div class="alert alert-info alert-dismissable">
                <a class="panel-close close" data-dismiss="alert">×</a>
                <i class="fa fa-coffee"></i>
                A neptunkód megváltoztatására nincsen lehetőség!<strong></strong>
            </div>
            <h3>Személyes adatok módósítása:</h3>

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
                <h3>Jelszó megváltoztatása</h3>
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
                    <input type="submit" name="submit" class="reg-logbttn" value="Változtatások mentése">
                    <input type="reset" class="cancelbttn" value="Mégse">
                    <input type="button" name="delete" class="cancelbttn" value="Fiók törlése">
                </div>
            </form>
        </div>

    </div>
    <hr>
</div>
<?php
include "../connections/connection.php";
if (isset($_POST["submit"])) {
    include_once("../connections/personal.php");
}
if (isset($_POST["delete"])) {
    include_once("../connections/delete.php");
}
?>

</html>