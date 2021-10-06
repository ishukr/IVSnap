<?php
session_start();
if(!isset($_SESSION['user'])) {
     header("Location:ivsnap.php"); // redirects them to homepage
     exit; // for good measure
     
     
}
include "config.php";
 if(isset($_POST["fname"]) && isset($_POST["lname"])){

	$first_name = $_POST['fname'];
		
	$last_name = $_POST['lname'];
	$value = $_POST['value'];


       
        $servername = "localhost";
$username = "u297412669_ivsmart_ishnan";
$password = "Bonsoir09@@0803$";
$dbname = "u297412669_ivsmart_data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM reply_comment WHERE post_id= '$value' && fam_id = '$last_name' ";

if ($conn->query($sql) === TRUE) {
    	
 echo 1;
  
  

} else {
  
	 echo 0;
  
}


$conn->close();
}
        ?>
        