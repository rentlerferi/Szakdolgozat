<?php
$id = $_session['id'];
$conn->query("DELETE FROM registered_users WHERE neptun LIKE $id");
?>