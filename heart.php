<?php

$conn = mysqli_connect("localhost","u297412669_ivsmart_ishnan","Bonsoir09@@0803$","u297412669_ivsmart_data");

if(isset($_POST["fname"]) && isset($_POST["lname"])){

	$first_name = $_POST['value'];
		
	$last_name = $_POST['lname'];
	$value = $_POST['email'];

	$sql = "INSERT into heart_fam(user_id,snapper_id,fam) VALUES('$last_name','$value','$first_name')"; 

	if(mysqli_query($conn, $sql)){
		echo 11;
	}else{
		echo 0;
	}

} else{
	echo "All fields are required.";
}

?>
