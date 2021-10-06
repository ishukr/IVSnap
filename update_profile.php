<?php 
$upload = 'err'; 
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


//upload.php

if(isset($_POST['image']))
{
 $email= $_SESSION['user'];
 $res =mysqli_query($conn,"select * from snap_data where email = '$email'");
while($row=mysqli_fetch_array($res))
{
    $img =$row["profile_pic"];
    $name=$row["user_id"];
    
}
unlink("pf_images/".$img);
$string = "ivsnap";
$shuff=str_shuffle($string);
	 $targetDir = "pf_images/";
    $image_parts = explode(";base64,", $_POST['image']);
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
    $image_base64 = base64_decode($image_parts[1]);

    $file_name = rand(1000,10000)."-".$shuff.'.jpg';
    $targetFilePath = $targetDir.$file_name;
    if(file_put_contents($targetFilePath, $image_base64)){
        
    $query = "UPDATE snap_data SET profile_pic ='$file_name' WHERE email='$email'";
      $query_change = "UPDATE snap_upload SET pf_link ='$file_name' WHERE email='$email'";
       $query_change2 = "UPDATE table_comment SET pf_link ='$file_name' WHERE user_comment='$name'";
        $query_change3 = "UPDATE iv_fam SET snaper_status ='$file_name' WHERE snaper_id='$name'";
		 if(mysqli_query($conn,$query)){
       if(mysqli_query($conn,$query_change)){
            if(mysqli_query($conn,$query_change2)){
                 if(mysqli_query($conn,$query_change3)){
  header("Location:snapprofile.php");
   
       }
       }
       }
		 
    }
}

	echo $image_name;
}

?>