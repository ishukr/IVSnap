<?php 
$upload = 'err'; 
session_start();
if(!isset($_SESSION['user'])) {
     header("Location:ivsnap.php"); // redirects them to homepage
     exit; // for good measure
     
     
}
include "config.php";


				$id = $_SESSION["user"];

					
                $connection = mysqli_connect("localhost","u297412669_ivsmart_ishnan","Bonsoir09@@0803$");
                $db = mysqli_select_db($connection, 'u297412669_ivsmart_data');

                $query = "SELECT * FROM snap_data WHERE email = '$id'";
                $query_run = mysqli_query($connection, $query);
                
            
                if($query_run)
                {
                    foreach($query_run as $row)
                    {
           
             $idiv = $row['profile_pic']; 
             $nam = $row['user_id'];
             $verify = $row['verified'];
            }
            }
             
// online code for creating alphanumeric in php 
// this will generate 6 charactor, you can create as many just change the 6 from code
$pass = substr(str_shuffle("0123456789ABCDEFGHIJKLMishunandangautamivsnapNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxwz"), 0, 18);
$submit=hash("sha256",$pass);
//upload
//output : 17w2y8

$localhost = "localhost"; #localhost
$dbusername = "u297412669_ivsmart_ishnan"; #username of phpmyadmin
$dbpassword = "Bonsoir09@@0803$";  #password of phpmyadmin
$dbname = "u297412669_ivsmart_data";  #database name
 
#connection string
$conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);

if(!empty($_FILES['file'])){ 
      #retrieve file title
        $name = $nam;
        $email = $_SESSION['user'];
  $title =  mysqli_real_escape_string($con,$_POST["title"]);
       # etrieve file title
        $link = $idiv;
     $submt = $submit;
     //file system
      $date = date('Y-m-d H:i:s');
    // File upload configuration 
    $targetDir = "snaps_images/"; 
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif'); 
     
    $fileName = rand(1000,10000)."-".$_FILES["file"]["name"];
    $targetFilePath = $targetDir.$fileName; 
     
    // Check whether file type is valid 
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
    if(in_array($fileType, $allowTypes)){ 
        // Upload file to the server 
        if(move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)){ 
            $sql = "INSERT into snap_upload(name,email,title,snaps,pf_link,iv_userid,date,verify) VALUES('$name','$email','$title','$fileName','$link','$submt','$date','$verify')";
    $query = "INSERT INTO user_activity(email,fam_id,pf_link,text,date,post_id) SELECT email_id,fam_id,friend_status,'Posted a new snap','$date','$submt' FROM iv_fam WHERE fam_id='$name'";
    if(mysqli_query($conn,$sql)){
        
    if(mysqli_query($conn,$query)){
        
            $upload = 'ok'; 
        } 
    }
        }
    } 
} 

echo $upload; 
?>