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
$pass = substr(str_shuffle("0123456789ABCDEFGHIJKLMishunandangautamivsnapNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxwz"), 0, 18);
$submit=hash("sha256",$pass);
	$first_name = $_POST['lname'];
		
	$last_name = $_POST['email'];
	$value = $_POST['fname'];
	 $state= $_POST['fam'];
	$email = $_POST['email'];
	
     $pfid= $_POST['idpf'];
     $pfi = $_POST['pf'];
    
	$sql = "INSERT INTO iv_fam(snaper_id,fam_id,email_id,state_id,pf_id,friend_status,snaper_status) VALUES ('{$first_name}','{$last_name}','{$value}','{$state}','{$ivs}','{$pfid}','{$pfi}')"; 
	$sql1 = "INSERT INTO user_activity(snaper_id,email,fam_text,pf_link) VALUES('{$first_name}','{$state}','made you Fam','{$pfi}')"; 

	if(mysqli_query($conn, $sql)){
	    if(mysqli_query($conn, $sql1)){
	    
		echo 1;
	}
	}else{
		echo 0;
	}

} else{
	echo "All fields are required.";
}

?>
