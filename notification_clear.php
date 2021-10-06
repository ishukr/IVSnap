<?php


session_start();
if(!isset($_SESSION['user'])) {
     header("Location:index.php"); // redirects them to homepage
     exit; // for good measure
     
     
}

include 'database.php';
$id = $_SESSION["user"];

	$sql = "UPDATE `user_activity` 
	SET `status`='1' WHERE email = '$id'";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
			
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	
	}
	mysqli_close($conn);
?>