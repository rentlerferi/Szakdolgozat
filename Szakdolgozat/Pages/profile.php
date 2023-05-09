<html>
<?php
include "../connections/connection.php";

if (isset($_POST["send"])) {
    include_once("../connections/personal.php");
}
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
            <label>Vezetéknév</label>
            <?php
            $id = $_SESSION["id"];
            print('ID :' . $id . "asd");
            $result = $conn->query("SELECT firstName, lastName, email FROM registered_users WHERE neptun LIKE '$id'");
            $row = $result->fetch_row();
            print('Vezetéknév: ' . $row[0]);
            //print('Vezetéknév' . $sure);
            ?>
            <label>Keresztnév</label>
            <?php
            print('Keresztnév' . $row[1]);
            ?>
            <label>Email</label>
            <?php
            print('Email' . $row[2]);
            ?>

        </div>

        <!-- edit form column -->
        <div class="editinfo">

            <div class="alert alert-info alert-dismissable">
                <a class="panel-close close" data-dismiss="alert">×</a>
                <i class="fa fa-coffee"></i>
                A neptunkód megváltoztatására nincsen lehetőség!<strong></strong>
            </div>
            <h3>Személyes adatok módósítása:</h3>

            <form class="form-horizontal" role="form" method="post">
                <div class="form-group">
                    <label>Vezetéknév</label>
                    <input class="input-field" type="text" value="" name="newsurename"
                        pattern="([A-Z]([a-záéúőóüö.]{1,}\s?)){1,40}">
                </div>
                <div class="form-group">
                    <label class="">Keresztnév</label>

                    <input class="input-field" type="text" value="" name="newlastname"
                        pattern="([A-Z]([a-záéúőóüö.]{1,}\s?)){1,40}">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input class="input-field" type="text" value="" name="newemail"
                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                </div>
                <h3>Jelszó megváltoztatása</h3>
                <div class="form-group">
                    <label>Jelszó</label>
                    <input class="input-field" type="password" value="11111122333" name="newpassword"
                        pattern="[A-Za-z0-9]{1,20}">
                </div>
                <div class="form-group">
                    <label>Jelszó megerősítése</label>
                    <input class="input-field" type="password" value="11111122333" name="newpasswordagain"
                        pattern="[A-Za-z0-9]{1,20}">
                </div>
                <div class="form-group" style="margin-left:15%;">

                    <input type="submit" name="send" class="btn btn-success" value="Változtatások mentése">
                    <input type="reset" class="btn btn-info" value="Mégse">
                    <input type="button" onclick="deleteAccount()" name="delete" class="btn btn-danger" value="Fiók törlése">
                </div>

            </form>
        </div>

    </div>
    <hr>
</div>

</html>