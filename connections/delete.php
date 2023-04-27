<?php
session_start();
ob_start();
include_once "../connections/connection.php";
$id = $_POST['id'];
if (id) {
    //$conn->query("DELETE FROM registered_users WHERE neptun LIKE '$id'");
}
mysqli_close($conn);
session_destroy();

ob_end();

//echo '<meta http-equiv="refresh" content="0;url=?page=main">';
echo "<script>window.location.href='?page=main'</script>";
die();
?>