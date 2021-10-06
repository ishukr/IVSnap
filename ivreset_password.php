<?php

session_start();


$con = mysqli_connect("localhost","u297412669_ivsmart_ishnan","Bonsoir09@@0803$","u297412669_ivsmart_data");
mysqli_select_db($con, 'u297412669_ivsmart_data');


$email = $_GET['authid'];



$password = mysqli_real_escape_string($con,hash("sha256",$_POST['ivreset_password']));


$query = "UPDATE snap_data SET password ='$password' WHERE token ='$email'";
  $query_run = mysqli_query($con, $query);
        if($query_run){
     header('location:ivsnap.php?success');
}else{ 
  header('location:ivsnap.php?not_success');
}


?>