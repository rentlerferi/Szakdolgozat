<?php
include_once "../connections/connection.php";

$id = $_POST['id'];

try {
    // simple query - out of transaction block - to query the IDs
	$resultSet = $conn->query("SELECT classes_id FROM taken_classes WHERE neptun LIKE '$id';");
	
	// if there is at least one ID returned
	if ($resultSet->num_rows > 0) {
        
		// start the transaction avoiding automatic commitment
		$conn->autocommit(FALSE);
		
		// gather every delete query to the connection object without commiting automatically
		while ($row = ($resultSet->fetch_assoc())) {
            if ($row) { // or something similar to chech if there is a data in that object currently
                $conn->query("DELETE FROM classes WHERE id like '$row';"); 
            }
        }
		
		// first, delete the taken_classes where the classes_id is a foreign key referencing the classes.id field
		$sql = $conn->query("DELETE FROM taken_classes WHERE neptun LIKE '$id';");
		
		// apply the changes - several delete queries at once
		$conn->commit();
		
		// if no exception was thrown, set the status message to success
		$_SESSION['message'] = "Sikeres órarend törlés!";
		
		// reset the automatic commitment
		$conn->autocommit(TRUE);
	
    } else {
        throw new Exception($conn->error);
    }

} catch (Exception $ex) {
    $conn->rollback();
    $conn->autocommit(TRUE);
	$_SESSION['message'] = "Sikertelen órarend törlés!" . $ex.message; // or something different to show the correct sql message in the exception
}
?>