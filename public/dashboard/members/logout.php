<?php
	require('../../php/db-connect.php');
	session_start();
	$userSession = $_SESSION['email'];

	if ($userSession == true) {
		$updateStatus =  "UPDATE user SET active_status='offline' WHERE  email = '$userSession'";
		$query = mysqli_query($conn, $updateStatus);
		if ($query) {
			session_destroy();
			header("location: ../../index.html");
			exit();
		}
		
	}
	
	
?>