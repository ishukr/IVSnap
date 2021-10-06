<?php


session_start();
if(!isset($_SESSION['user'])) {
     header("Location:ivsnap.php"); // redirects them to homepage
     exit; // for good measure
     
     
}


include "config.php";

						 	$id = $_SESSION["user"];
							 $con = mysqli_connect("localhost","u297412669_ivsmart_ishnan","Bonsoir09@@0803$","u297412669_ivsmart_data");
                            mysqli_select_db($con, 'u297412669_ivsmart_data');
							  $query = "SELECT * FROM snap_data WHERE email = '$id'";
                $result = mysqli_query($con,$query);
							 while($row = mysqli_fetch_array($result)){
                    $ishu = $row['user_id'];
                    $ivs = $row['id'];
                    $image=$row['profile_pic'];
              
           
              }  
            ?>
<?php

$conn = mysqli_connect("localhost","u297412669_ivsmart_ishnan","Bonsoir09@@0803$","u297412669_ivsmart_data");

if(isset($_POST["fname"]) && isset($_POST["lname"])){

	$first_name = $_POST['email'];
		
	$last_name = $_POST['lname'];
	$value = $_POST['value'];
		$email = $_POST['email'];
$sql = "DELETE FROM heart_fam WHERE user_id = '$last_name' && fam ='$value'";
	

	if(mysqli_query($conn, $sql)){
		echo 10;
	}else{
		echo 20;
	}

} else{
	echo "All fields are required.";
}

?>
