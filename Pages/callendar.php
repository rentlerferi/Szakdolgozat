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
        <iframe
            src="https://calendar.google.com/calendar/embed?src=hu.hungarian%23holiday%40group.v.calendar.google.com&ctz=Europe%2FBudapest"
            style="border: 0" width="300px" height="300px" frameborder="0" scrolling="no"></iframe>
    </div>
</div>
</html>
<?php


// SQL lekérdezés az események lekérdezésére
$sql = "SELECT start, end, name, summary, place FROM classes";

$result = $conn->query($sql);

// HTML táblázat létrehozása
echo "<table>";
echo "<tr><th>Név</th><th>Dátum</th><th>Időpont</th><th>Helyszín</th><th>Rövid összefoglaló</th></tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        // Dátumok és időpontok formázása
        $start = date("Y-m-d H:i", strtotime($row["start"]));
        $end = date("Y-m-d H:i", strtotime($row["end"]));

        // HTML táblázat sor létrehozása
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $start . " - " . $end . "</td>";
        echo "<td>" . date("H:i", strtotime($row["start"])) . " - " . date("H:i", strtotime($row["end"])) . "</td>";
        echo "<td>" . $row["place"] . "</td>";
        echo "<td>" . $row["summary"] . "</td>";
        echo "</tr>";
    }
}

echo "</table>";

// MySQL adatbázis lecsatlakozás
$conn->close();
?>