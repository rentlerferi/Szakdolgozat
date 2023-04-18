<?php
/*
include_once "../connections/connection.php";
$id = $_POST['id'];
$conn->query("DELETE  FROM registered_users WHERE neptun LIKE '$id'");
session_destroy();
$_SESSION = array();
mysqli_close($conn);
header("Location:?page=main");*/
?>
<?php
ob_start() ;
include_once "../connections/connection.php";
$id = $_POST['id'];
//$conn->query("DELETE FROM registered_users WHERE neptun LIKE '$id'");
mysqli_close($conn);
ob_end_clean();
//echo print("léptetés előtt");
header('Location: ?page=main');
//echo print("léptetés után");
//echo "<script>window.location.href='index.php'</script>";
session_start();
session_unset();
session_destroy();
exit();
?>