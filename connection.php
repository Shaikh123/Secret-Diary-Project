<?php
// Connect to the DB here, so if we need to change any of this information we don't have to do it in multiple documents. 

// Create connection
	$conn = mysqli_connect("internal-db.s117290.gridserver.com", "db117290_nathan", "Friend234!", "db117290_example");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>	
	
