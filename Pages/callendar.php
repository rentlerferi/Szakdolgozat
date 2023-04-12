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


<div class="crad-body">
    <form action="../connections/callendarupload.php" method="POST" enctype="multipart/from-data">

        <input class="upload" type="file" name="classes">
        Exel file (xlsx)
        <button type="submit" name="save_callendar" class="btn btn-primary mt-3">Feltöltés</button>

    </form>
</div>

<iframe
    src="https://calendar.google.com/calendar/embed?src=hu.hungarian%23holiday%40group.v.calendar.google.com&ctz=Europe%2FBudapest"
    style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>


<iframe
    src="https://calendar.google.com/calendar/embed?height=600&wkst=2&bgcolor=%23C0CA33&ctz=Europe%2FBudapest&mode=WEEK"
    style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>

</html>

<?php

?>