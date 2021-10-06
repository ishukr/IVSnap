<?php

session_start();
if(!isset($_SESSION['user'])) {
     header("Location:ivsnap.php"); // redirects them to homepage
     exit; // for good measure
     
     
}




                         

$localhost = "localhost"; #localhost
$dbusername = "u297412669_ivsmart_ishnan"; #username of phpmyadmin
$dbpassword = "Bonsoir09@@0803$";  #password of phpmyadmin
$dbname = "u297412669_ivsmart_data";  #database name
 
#connection string
$conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);

if (isset($_POST["submit"]))
 {
    
      $email = $_SESSION['user'];
    $query = "SELECT * FROM snap_data WHERE email = '$id'";
                $query_run = mysqli_query($conn, $query);
                
            
                if($query_run)
                {
                    foreach($query_run as $row)
                    {
           
             
             $nam = $row['user_id']; 
            }
            }
 $lname = mysqli_real_escape_string($conn,$_POST['comment']);

 
      $query = "UPDATE snap_data SET user_bio ='$lname' WHERE email='$email'";
        
  if(mysqli_query($conn,$query)){
    
       
 
    header('location:snapprofile.php?id='.$nam);
    }
    else{

     header('location:snapprofile.php?id='.$nam);
    }
   
}
 
 
?>