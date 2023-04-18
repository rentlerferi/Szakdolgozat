<?php
include "../connections/connection.php";
if (isset($_POST["save_callendar"])) {
    include_once("../connections/callendarupload.php");
}
?>
<html>
<h2> Órarend </h2>
<div class="description">
    <p>Az alábbi oldlon lehetőséged lesz feltölteni a mág meglévő neptunból leszedett órarendet, amit aztán a
        későbbiekben
        belépés után akármikor megtekinthetsz, persze míg ki nem törlöd.</p>
</div>
<h3>Töltsd fel az órarended itt</h3>
<?php
if (isset($_SESSION['message'])) {
    echo "<h4>" . $_SESSION['message'] . "</h4>";
    unset($_SESSION['message']);
}
?>

<div class="col-md-12 mt4">
    <div class="card">
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">

                <input class="upload" type="file" name="import_file" id="import_file">Exel file (xlsx)
                <button type="submit" name="save_callendar" class="btn btn-primary mt-3">Feltöltés</button>
                <input type="button" onclick="deleteAccount()" name="delete" class="btn btn-danger"
                    value="Órarend törlése">
            </form>
        </div>
    </div>
</div>

