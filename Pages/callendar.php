<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "../connections/connection.php";
if (isset($_POST["save_callendar"])) {
    include_once("../connections/callendarupload.php");
}
?>
<html>

<body onload="document.callendar.reset();">
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

    // SQL lekérdezés az események lekérdezésére
    $id = $_SESSION['id'];
    $sql = "SELECT start, end, name, summary, place from classes where `id` in ( SELECT classes_id from  taken_classes where neptun like '$id')";
    $result = $conn->query($sql);
    if (!empty($result->fetch_assoc())) {
        $disabled = "disabled";
    } else {
        $disabled = "";
    }
    if (!empty($result->fetch_assoc())) {
        $disabled2 = "";
    } else {
        $disabled2 = "disabled";
    }
    ?>

    <div class="col-md-12 mt4">
        <form class="form-inline" action="" method="POST" name="callendar" enctype="multipart/form-data"
            action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group mb-2">
                <input class="upload" type="file" name="import_file" id="import_file">Exel file (xlsx)
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <button type="submit" name="save_callendar" class="btn btn-primary mt-3" <?php echo $disabled; ?>>Feltöltés</button>
            </div>
            <button type="submit" onclick="deleteCallendar()" name="delete" class="btn btn-danger" <?php echo $disabled2 ?>>órarend törlése</button>
        </form>

    </div>

</html>
<?php

$result = $conn->query($sql);
echo $conn->error;
// HTML táblázat létrehozása
echo "<table class='table table-dark'>";
echo "<tr><th scope='col'>Név</th><th scope='col'>Dátum</th scope='col'><th>Időpont</th><th scope='col'>Helyszín</th><th scope='col'>Rövid összefoglaló</th></tr>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Dátumok és időpontok formázása
        $start = date("Y-m-d H:i", strtotime($row["start"]));
        $end = date("Y-m-d H:i", strtotime($row["end"]));

        // HTML táblázat sor létrehozása
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $start . " - " . $end . " </td>";
        echo "<td>" . date("H:i", strtotime($row["start"])) . " - " . date("H:i", strtotime($row["end"])) . " </td>";
        echo "<td>" . $row["place"] . " </td>";
        echo "<td>" . $row["summary"] . " </td>";
        echo "</tr>";
    }
}

echo "</table>";

// MySQL adatbázis lecsatlakozás
$conn->close();
?>
</body>

<script>
    $('.input-field').on('input', function () { this.setCustomValidity(''); });
</script>